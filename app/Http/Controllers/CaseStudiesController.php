<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class CaseStudiesController extends Controller
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
        $entries = $this->CQUERY->getEntriesByContentType('caseStudy');

        // TODO: Figure out pagination
        return view('resources.case-studies.index', [
            'entries'   => $entries,
            'renderer'  => $this->renderer,
        ]);
    }

    public function show($slug)
    {
        $entry = $this->CQUERY->getEntry('caseStudy', $slug);

        if ($entry === null) {
            abort(404);
        }

        return view('resources.case-studies.show', [
            'entry'     => $entry,
            'renderer'  => new \Contentful\RichText\Renderer(),
        ]);
    }
}
