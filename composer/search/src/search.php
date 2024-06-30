<?php

namespace Carolinasanches24;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Search
{
    private $client;
    private $crawler;

    public function __construct(ClientInterface $client, Crawler $crawler)
    {
        $this->client = $client;
        $this->crawler = $crawler;
    }

    public function search(string $url): array
    {
        $response = $this->client->request('GET', $url);
        $html = (string) $response->getBody();
        $this->crawler->addHtmlContent($html);

        $courses = [];
        $this->crawler->filter('.card-curso__nome')->each(function ($node) use (&$courses) {
            $courses[] = $node->text();
        });

        return $courses;
    }
}
