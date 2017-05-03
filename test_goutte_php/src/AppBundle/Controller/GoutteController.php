<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class GoutteController extends Controller
{
    /**
     * @Route("/goutte", name="goutte")
     */
    public function indexAction()
    {
        $form = $this->createForm(\AppBundle\Form\Type\CrawlSearchType::class);

        return $this->render('Goutte/index.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/crawl", name="crawl", options={"expose"=true})
     * @param Request $request
     */
    public function Crawl(Request $request )
    {
        $crawler = $this->get('app.crawler.crawler');
        $result = $crawler->CrawlAction($request->request->get('url'));
        dump($result);
    }
}
