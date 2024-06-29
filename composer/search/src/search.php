<?php

namespace Carolinasanches24;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Search {
    private ClientInterface $httpClient;
    private Crawler $crawler;

    // Constructor method
    public function __construct(ClientInterface $httpClient, Crawler $crawler) {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function search(string $url): array {
        $result = $this->httpClient->request('GET', $url);
        $html = $result->getBody()->getContents();
        $this->crawler->addHtmlContent($html);

        $courses = [];
        $this->crawler->filter('span.card-curso__nome')->each(function ($node) use (&$courses) {
            $courses[] = $node->text();
        });

        return $courses;
    }
}
