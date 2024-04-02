<?php

namespace Alura\BuscadorDeCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador {
  private ClientInterface $httpClient;
  private Crawler $crawler;

  public function __construct(ClientInterface $httpClient, Crawler $crawler) {
    $this->httpClient = $httpClient;
    $this->crawler = $crawler;
  }

  public function buscar(string $url): array {
    
  }
}