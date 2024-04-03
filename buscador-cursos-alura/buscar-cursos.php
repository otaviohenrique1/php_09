<?php

require_once 'vendor/autoload.php';
// require_once 'src/Buscador.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

// Teste::metodo();
// exit();

$client = new Client([
  'verify' => false,
  'base_uri' => 'https://www.alura.com.br/'
]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
  exibeMensagem($curso);
}

// require_once 'vendor/autoload.php';

// use GuzzleHttp\Client;
// use Symfony\Component\DomCrawler\Crawler;

// $client = new Client(['verify' => false]);
// $resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');
// $html = $resposta->getBody();

// $crawler = new Crawler();
// $crawler->addHtmlContent($html);
// $cursos = $crawler->filter('span.card-curso__nome');

// foreach ($cursos as $curso) {
//   echo $curso->textContent . PHP_EOL;
// }