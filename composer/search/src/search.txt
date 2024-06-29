<?php

require '../vendor/autoload.php'; 

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([
  
        "verify"=>false

]);

$result = $client ->request(method:'GET', uri:'https://alura.com.br/cursos-online-programacao/php');

$html = $result -> getBody();


//instance Crawler 

$crawler = new Crawler();
$crawler ->addHtmlContent($html);

$courses = $crawler -> filter(selector:'span.card-curso__nome');

foreach($courses as $course){
    echo $course -> textContent .PHP_EOL;
}
