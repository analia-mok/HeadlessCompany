<?php

namespace App\Helpers;

use Contentful\Delivery\Client as DeliveryClient;

class ContentfulQuery
{
    /**
     * @var DeliveryClient
     */
    private $client;

    public function __construct(DeliveryClient $client)
    {
        $this->client = $client;
    }

    public function getEntriesByContentType($contentType)
    {
        $query = new \Contentful\Delivery\Query();
        $query->setContentType($contentType)
            ->orderBy('sys.updatedAt');

        return $this->client->getEntries($query);
    }
}
