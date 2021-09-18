<?php

namespace App\Controller;

use App\Entity\Theme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemoryController extends AbstractController
{
    /**
     * @Route("/memory", name="memoryIndex")
     */
    public function index(): Response
    {
        return $this->render('memory/index.html.twig', [
            'controller_name' => 'MemoryController',
        ]);
    }

    /**
     * @Route("/memory/{id}", name="memory")
     */
    public function memory(Theme $theme): Response
    {
        // dd($theme);
        return $this->render('memory/index.html.twig', [
            'theme' => $theme,
        ]);
    }

}
