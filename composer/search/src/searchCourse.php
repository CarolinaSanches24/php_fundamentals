#!/usr/bin/env php

<?php 

require '../vendor/autoload.php'; 

use Carolinasanches24\Search;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

// Instance clientHttp with base_url
$client = new Client(['base_uri' => 'https://www.alura.com.br',
'verify' => false, // Disable SSL verification
]);
$crawler = new Crawler();

$search = new Search($client, $crawler);
$courses = $search->search('/cursos-online-programacao/php');

foreach ($courses as $course) {
    echo $course . PHP_EOL; // Show course with line break
}
