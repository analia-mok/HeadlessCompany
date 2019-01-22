<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class WhitePapersController extends Controller
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
        $entries = $this->CQUERY->getEntriesByContentType('whitePaper');

        // TODO: Figure out pagination
        return view('resources.white-papers.index', [
            'entries'   => $entries,
            'renderer'  => $this->renderer,
        ]);
    }

    public function show($slug)
    {
        $entry = $this->CQUERY->getEntry('whitePaper', $slug);

        if ($entry === null) {
            abort(404);
        }

        return view('resources.white-papers.show', [
            'entry'     => $entry,
            'renderer'  => $this->renderer,
        ]);
    }
}
