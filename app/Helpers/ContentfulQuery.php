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

    public function getEntry($contentType, $slug)
    {
        $query = new \Contentful\Delivery\Query();
        $query->setContentType($contentType)
            ->where('fields.slug', $slug);

        try {
            $results = $this->client->getEntries($query);

            if (count($results) <= 0) {
                return null;
            } else {
                return $results[0];
            }
        } catch (\Contentful\Core\Exception\NotFoundException $exception) {
            return null;
        } catch (\Contentful\Core\Exception\BadRequestException $exception) {
            return null;
        }
    }
}
