<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class CareersController extends Controller
{
    /**
     * @var CQuery
     */
    private $CQUERY;

    /**
     * @var Contentful\RichText\Renderer
     */
    private $renderer;

    public function __construct(CQuery $query)
    {
        $this->CQUERY = $query;
        $this->renderer = new \Contentful\RichText\Renderer();
    }

    public function index()
    {
        $entries = $this->CQUERY->getEntriesByContentType('jobListing');

        // TODO: Organize by department
        $departments = [];

        foreach ($entries as $entry) {
            $curr_dept = $entry->getDepartment();

            if (!isset($departments[strtolower($curr_dept)])) {
                $departments[strtolower($curr_dept)] = [
                    'title'     => $curr_dept,
                    'listings' => [],
                ];
            }

            $departments[strtolower($curr_dept)]['listings'][] = $entry;
        }

        // TODO: Figure out pagination
        return view('careers.index', [
            'entries'       => $entries,
            'departments'    => $departments,
            'renderer'      => $this->renderer,
        ]);
    }

    public function show($slug)
    {
        $entry = $this->CQUERY->getEntry('jobListing', $slug);

        if ($entry === null) {
            abort(404);
        }

        return view('careers.show', [
            'entry'     => $entry,
            'renderer'  => new \Contentful\RichText\Renderer(),
        ]);
    }
}
