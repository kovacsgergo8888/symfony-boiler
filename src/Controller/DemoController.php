<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class DemoController
{
    public function index(): JsonResponse
    {
        return new JsonResponse([
            'message' => 'hello world',
        ]);
    }
}
