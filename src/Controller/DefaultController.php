<?php

declare(strict_types=1);


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;



/**
 * @Route("/blog", name="blog_list")
 */
class DefaultController extends AbstractController
{
    public function __invoke(): Response
    {


        return new Response(json_encode(['test' => '1']), Response::HTTP_OK, [
            'Content-Type' => 'application/json',
        ]);
    }
}
