<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class EbooksController extends Controller
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
        $entries = $this->CQUERY->getEntriesByContentType('ebook');

        // TODO: Figure out pagination
        return view('resources.ebooks.index', [
            'entries'   => $entries,
            'renderer'  => $this->renderer,
        ]);
    }

    public function show($slug)
    {
        $entry = $this->CQUERY->getEntry('ebook', $slug);

        if ($entry === null) {
            abort(404);
        }

        return view('resources.ebooks.show', [
            'entry'     => $entry,
            'renderer'  => new \Contentful\RichText\Renderer(),
        ]);
    }
}
