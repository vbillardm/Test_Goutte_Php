<?php

namespace AppBundle\Crawler;

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

class Crawler
{
    /**
     * @param $url
     * @return array
     */
    public function CrawlAction($url)
    {
        $client = new Client();
        $crawler = $client->request('GET', $url);

        $cr2 = $crawler->filter('body')->each(function ($node)
        {
            return $node->text();
        });

        return $cr2;
    }

}