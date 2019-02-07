<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ContentfulQuery as CQuery;

class ContactController extends Controller
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
        $entry = $this->CQUERY->getEntriesByContentType('contactPage', 1);

        if (count($entry) <= 0) {
            abort(404);
        }

        return view('contact.index', [
            'entry'     => $entry[0],
            'renderer'  => $this->renderer,
        ]);
    }
}
