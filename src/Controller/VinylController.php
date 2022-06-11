<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class VinylController 
{
    #[Route('/')]
    public function homepage() 
    {
        dd('Hite here');
    }
}