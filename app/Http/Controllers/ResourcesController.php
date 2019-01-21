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
            ->orderBy('sys.updatedAt');
        $white_paper_entries = $this->client->getEntries($query);

        $white_papers = [];

        foreach ($white_paper_entries as $wp) {
            if (count($white_papers) >= 3) {
                break;
            }

            $white_papers[] = $wp;
        }

        // TODO: Manually limit Contentful Resource Array

        return view('resources.index', [
            'white_papers' => $white_papers,
            'renderer'     => $renderer = new \Contentful\RichText\Renderer(),
        ]);
    }
}
