<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthcheckController
{
    /**
     * @Route("/ping", name="healthcheck")
     * @return Response
     */
    public function ping()
    {
        return new Response(
            'pong'
        );
    }
}