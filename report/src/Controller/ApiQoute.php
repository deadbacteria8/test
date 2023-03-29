<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiQoute
{
    #[Route("/api/qoute")]
    public function jsonNumber(): Response
    {
        $quotes = [
            'Citat 1',
            'Citat 2',
            'Citat 3'
        ];

        $randomIndex = rand(0, 2);
        $randomQuote = $quotes[$randomIndex];

        $data = [
            'quote' => $randomQuote,
            'datum' => date('Y-m-d'),
            'tid' => time()
        ];

        return new JsonResponse($data);
    }
    
}

