<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('blog/home.html.twig', [
            'personal' => [
                'name' => 'Lucas Delcerro',
                'title' => 'Student in Networks & Telecommunications',
                'description' => 'Passionate about cybersecurity and cloud technologies',
                'highlights' => [
                    'Cybersecurity enthusiast',
                    'Network specialist',
                    'Cloud computing'
                ],
                'social' => [
                    'github' => 'https://github.com/lucasdelcerro',
                    'linkedin' => 'https://linkedin.com/in/lucas-delcerro'
                ]
            ]
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('blog/about.html.twig');
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('blog/cv.html.twig');
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('blog/portfolio.html.twig');
    }

    #[Route('/cv/download', name: 'app_cv_download')]
    public function downloadCV(): Response
    {
        $cvPath = $this->getParameter('kernel.project_dir') . '/public/cv/mon-cv.pdf';
        
        return $this->file($cvPath);
    }
}