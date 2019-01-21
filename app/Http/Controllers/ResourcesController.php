<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Contentful\Delivery\Client as DeliveryClient; // TODO: Will be moved to own Helper Method
use App\Helpers\ContentfulQuery as CQuery;

class ResourcesController extends Controller
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
        $white_paper_entries = $this->CQUERY->getEntriesByContentType('whitePaper');
        $white_papers = $this->limitResourceArray($white_paper_entries);

        return view('resources.index', [
            'white_papers' => $white_papers,
            'renderer'     => $renderer = new \Contentful\RichText\Renderer(),
        ]);
    }

    public function limitResourceArray($entries)
    {
        $short_entries = [];
        foreach ($entries as $entry) {
            if (count($short_entries) >= 3) {
                break;
            }

            $short_entries[] = $entry;
        }

        return $short_entries;
    }
}
