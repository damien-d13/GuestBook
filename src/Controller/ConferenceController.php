<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {


        return new Response(
            <<<EOF
                <html>
                    <body>
                <img src="/images/under-construction.gif" />
                    </body>
                </html>
                EOF
        );
    }
}
