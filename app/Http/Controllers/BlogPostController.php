<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class BlogPostController extends Controller
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
        $entries = $this->CQUERY->getEntriesByContentType('blogPost');

        return view('blog.index', [
            'entries'       => $entries,
            'featured_post' => $entries[0] ?? null,
            'renderer'      => $this->renderer,
        ]);
    }

    public function show($slug)
    {
        // TODO
    }
}
