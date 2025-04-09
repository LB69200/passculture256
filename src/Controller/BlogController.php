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
                    'Network ',
                ],
                'social' => [
                    'github' => 'https://github.com/LB69200',
                ]
            ]
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('blog/about.html.twig', [
            'interests' => [
                [
                    'category' => 'Technical',
                    'items' => [
                        [
                            'name' => 'Développement Python',
                            'icon' => 'fab fa-python',
                            'description' => 'Passion pour le développement Python, particulièrement dans l\'automatisation et les scripts réseau.'
                        ],
                        [
                            'name' => 'Sécurité Réseau',
                            'icon' => 'fas fa-shield-alt',
                            'description' => 'Intérêt marqué pour la cybersécurité et la protection des infrastructures réseau.'
                        ],
                    ]
                ],
                [
                    'category' => 'Personal',
                    'items' => [
                        [
                            'name' => 'Apprentissage Continu',
                            'icon' => 'fas fa-book',
                            'description' => 'Toujours en quête de nouvelles connaissances et de perfectionnement technique.'
                        ],
                        [
                            'name' => 'Résolution de Problèmes',
                            'icon' => 'fas fa-puzzle-piece',
                            'description' => 'Passion pour la résolution de défis techniques complexes.'
                        ]
                    ]
                ]
            ]
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('blog/cv.html.twig');
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('blog/portfolio.html.twig', [
            'portfolio' => [
                'iframes' => [
                    'https://docs.google.com/document/d/1vuanJZPD9m4ziaPxDfs_zI6k9vFyIJTLStWX9RTKnJk/edit?usp=sharing', // Infrastructure Réseau
                    'https://docs.google.com/document/d/1pvNA1R1BIGL5sulIPTvcvqYpZIKO6sORVS5ZyKHLQGA/edit?usp=sharing', // Architecture Web
                    'https://docs.google.com/document/d/1nmI6PXr_xS6UY_UiPip3NLSnHkCtNqxoJAxCiQD8PeY/edit?usp=sharing', // Développement Pytho
                    'https://docs.google.com/document/d/XXXXX4/preview', // A ajouter plus tard
                    'https://docs.google.com/document/d/XXXXX5/preview'  // A ajouter plus tard
                ]
            ]
        ]);
    }

    #[Route('/poursuite', name: 'app_poursuite')]
    public function poursuite(): Response
    {
        return $this->render('blog/poursuite.html.twig', [
            'cybersecurity' => [
                'title' => 'Spécialisation en Cybersécurité',
                'description' => 'Mon projet de poursuite d\'études dans le domaine de la cybersécurité',
                'motivations' => [
                    [
                        'title' => 'Passion pour la sécurité informatique',
                        'icon' => 'fas fa-shield-alt',
                        'description' => 'Depuis mes débuts en réseaux et télécommunications, la sécurité des systèmes d\'information est devenue une véritable passion.'
                    ],
                    [
                        'title' => 'Un secteur en pleine expansion',
                        'icon' => 'fas fa-chart-line',
                        'description' => 'Face à l\'évolution constante des menaces, les experts en cybersécurité sont de plus en plus recherchés sur le marché du travail.'
                    ],
                    [
                        'title' => 'Compétences techniques adaptées',
                        'icon' => 'fas fa-laptop-code',
                        'description' => 'Mon parcours en R&T m\'a permis d\'acquérir des bases solides en réseaux, systèmes et programmation, essentielles pour me spécialiser en sécurité.'
                    ]
                ],
                'skills' => [
                    [
                        'name' => 'Analyse de vulnérabilités',
                        'percentage' => 75
                    ],
                    [
                        'name' => 'Pentesting',
                        'percentage' => 65
                    ],
                    [
                        'name' => 'Sécurité réseau',
                        'percentage' => 80
                    ],
                    [
                        'name' => 'Cryptographie',
                        'percentage' => 60
                    ],
                    [
                        'name' => 'Sécurité Cloud',
                        'percentage' => 70
                    ]
                ],
                'projects' => [
                    [
                        'title' => 'Projet CTF universitaire',
                        'description' => 'Participation à des compétitions Capture The Flag, renforçant mes compétences en identification de vulnérabilités.'
                    ],
                    [
                        'title' => 'Laboratoire de sécurité virtuel',
                        'description' => 'Mise en place d\'un environnement virtualisé pour pratiquer des techniques de détection et de prévention d\'intrusion.'
                    ],
                    [
                        'title' => 'Script d\'analyse de logs',
                        'description' => 'Développement d\'un outil Python pour l\'analyse automatisée de journaux de sécurité et la détection d\'anomalies.'
                    ]
                ],
                'formation' => [
                    'title' => 'Master Cybersécurité',
                    'description' => 'Mon objectif est d\'intégrer un Master spécialisé en Cybersécurité pour approfondir mes connaissances et me préparer aux défis de demain dans ce domaine en constante évolution.'
                ]
            ]
        ]);
    }

    #[Route('/cv/download', name: 'app_cv_download')]
    public function downloadCV(): Response
    {
        $cvPath = $this->getParameter('kernel.project_dir') . '/public/cv/mon-cv.pdf';

        return $this->file($cvPath);
    }
}