<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Contentful\Delivery\Client as DeliveryClient; // TODO: Will be moved to own Helper Method

class ResourcesController extends Controller
{

    /**
     * @var DeliveryClient
     */
    private $client;

    public function __construct(DeliveryClient $client)
    {
        $this->client = $client;
    }

    public function index()
    {
        // TODO: Encapsulate into helper class.
        $query = new \Contentful\Delivery\Query();
        $query->setContentType('whitePaper')
            ->orderBy('sys.updatedAt')
            ->setInclude(3);
        $white_paper_entries = $this->client->getEntries($query);
        $white_papers = [];

        // foreach ($white_paper_entries as $entry) {
        //     $white_papers[] = [
        //         'title'         => $entry['title'],
        //         'slug'          => $entry->getSlug(),
        //         'header'        => $entry->getContentHeader(),
        //         'summary'       => $entry->getSummary(),
        //         'pdf'           => $entry->getPdf(),
        //         'featuredImg'   => $entry->getFeaturedImage(),
        //     ];
        // }

        return view('resources.index', [
            'white_papers' => $white_paper_entries,
            'renderer'     => $renderer = new \Contentful\RichText\Renderer(),
        ]);
    }
}
