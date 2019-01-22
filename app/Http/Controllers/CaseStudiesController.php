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

    public function __construct(CQuery $query)
    {
        $this->CQUERY = $query;
    }

    public function index()
    {
        // TODO: Display all case studies (Might be paginated)
    }

    public function show($slug)
    {
        $entry = $this->CQUERY->getEntry('caseStudy', $slug);

        if ($entry === null) {
            abort(404);
        }

        return view('resources.single-case-study', [
            'entry'     => $entry,
            'renderer'  => new \Contentful\RichText\Renderer(),
        ]);
    }
}
