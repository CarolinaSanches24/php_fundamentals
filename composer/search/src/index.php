<?php 

require '../vendor/autoload.php'; 

use Carolinasanches24\Search;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

// Função showMessage para exibir o curso com uma quebra de linha
function showMessage($course) {
    return $course . "<br>";
}

// Instância do clientHttp com base_url
$client = new Client(['base_uri' => 'https://www.alura.com.br',
'verify' => false, // Desativar a verificação SSL
]);
$crawler = new Crawler();

$search = new Search($client, $crawler);
$courses = $search->search('/cursos-online-programacao/php');

foreach ($courses as $course) {
    echo showMessage($course); // Exibir curso com quebra de linha
}
