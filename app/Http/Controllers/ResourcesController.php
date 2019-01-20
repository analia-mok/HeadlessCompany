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
        $query = new \Contentful\Delivery\Query();
        $query->setContentType('whitePaper')
            ->orderBy('sys.updatedAt');
        $white_papers = $this->client->getEntries();

        return view('resources.index', ['entries' => $white_papers]);
    }
}
