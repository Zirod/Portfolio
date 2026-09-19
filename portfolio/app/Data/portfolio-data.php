<?php

return new Portfolio(

    'Zirod Judi',

    'Développeur Full Stack',

    'Je conçois des applications web performantes en combinant expertise technique et intelligence artificielle.',

    'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=face',

    [
        [
            'number' => '3+',
            'label' => "Ans d'expérience"
        ],
        [
            'number' => '15+',
            'label' => 'Projets livrés'
        ],
        [
            'number' => '95%',
            'label' => 'Satisfaction'
        ]
    ],

    [

        new Service(
            'Développement Front-End',
            "Interfaces modernes, réactives et accessibles. Du design à l'intégration, je crée des expériences utilisateur fluides.",
            'fas fa-code',
            [
                'HTML5',
                'CSS3',
                'JavaScript',
                'SCSS',
                'Bootstrap',
                'Next.js'
            ]
        ),

        new Service(
            'Développement Back-End',
            "APIs robustes et architectures scalables avec une approche orientée objet et des bonnes pratiques solides.",
            'fas fa-server',
            [
                'PHP POO',
                'Node.js',
                'Fastify',
                'Prisma ORM',
                'REST API'
            ]
        ),

        new Service(
            'Base de Données',
            'Conception et optimisation de bases de données relationnelles. Modélisation, migrations et requêtes performantes.',
            'fas fa-database',
            [
                'MySQL',
                'PostgreSQL',
                'Prisma',
                'Modélisation'
            ]
        ),

        new Service(
            'Applications Full Stack',
            'De la conception à la mise en production, des applications complètes avec une stack moderne et performante.',
            'fas fa-rocket',
            [
                'Next.js',
                'Node.js',
                'Fastify',
                'PHP POO',
                'Déploiement'
            ]
        ),

        new Service(
            'Design & Intégration',
            'Intégration pixel-perfect, responsive design et animations. Chaque détail compte pour une expérience mémorable.',
            'fas fa-paint-brush',
            [
                'Responsive',
                'Animations',
                'UI/UX',
                'Accessibilité'
            ]
        ),

        new Service(
            'IA & Productivité',
            "Utilisation stratégique de l'IA pour accélérer le développement tout en maintenant la cohérence et la qualité.",
            'fas fa-robot',
            [
                'Productivité',
                'Automatisation',
                'Code Quality',
                'Optimisation'
            ]
        )

    ],

    [

        new Experience(
            '2023 — Présent',
            'Développeur Full-Stack PHP / Node.js / Nextjs / TypeScript',
            'Free-lance',
            'Développement d\'APIs REST avec PHP POO et Node.js/Fastify. Architecture de bases de données MySQL et PostgreSQL avec Prisma ORM.'
        ),

        new Experience(
            '2022 — 2023',
            'Développeur PHP',
            'Angel Dov',
            "Création d'interfaces utilisateur modernes avec HTML, CSS, JavaScript et SCSS et réalisation du traiment avec du PHP. Intégration responsive et animations interactives avec Bootstrap."
        ),

        new Experience(
            '2020 — 2022',
            'Formation Développement Web',
            'Autodidacte & Formations',
            'Apprentissage intensif des fondamentaux du web : HTML, CSS, JavaScript, PHP. Réalisation de projets personnels et montée en compétences progressive.'
        )

    ],

    [

        new Project(
            'Dashboard Analytics',
            "Application de suivi et d'analyse de données en temps réel avec visualisations interactives et rapports automatisés.",
            'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop',
            [
                'Next.js',
                'Node.js',
                'Fastify',
                'PostgreSQL',
                'Prisma'
            ],
            '#',
            '#'
        ),

        new Project(
            'Plateforme E-Commerce',
            'Solution e-commerce complète avec gestion des produits, panier, paiement sécurisé et tableau de bord administrateur.',
            'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop',
            [
                'PHP POO',
                'MySQL',
                'JavaScript',
                'Bootstrap'
            ],
            '#',
            '#'
        ),

        new Project(
            'API REST Scalable',
            'Architecture API haute performance avec authentification JWT, rate limiting et documentation automatique.',
            'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop',
            [
                'Node.js',
                'Fastify',
                'PostgreSQL',
                'Prisma'
            ],
            '#',
            '#'
        ),

        new Project(
            'Site Vitrine Premium',
            'Site vitrine avec animations avancées, mode sombre/clair et optimisation des performances pour un score Lighthouse parfait.',
            'https://images.unsplash.com/photo-1517694712207-8c37a8af6e34?w=600&h=400&fit=crop',
            [
                'HTML5',
                'SCSS',
                'JavaScript',
                'Next.js'
            ],
            '#',
            '#'
        )

    ],

    [
        'HTML5',
        'CSS3',
        'JavaScript',
        'PHP POO',
        'Node.js',
        'Fastify',
        'MySQL',
        'PostgreSQL',
        'Prisma',
        'Git'
    ],

    [
        'email' => 'judizirod0@gmail.com',
        'location' => 'Bénin — Remote',
        'availability' => 'Sous 24-48h'
    ],

    [
        'github' => 'https://github.com/Zirod',
        'linkedin' => 'www.linkedin.com/in/rodolpho-zinsou-zirod-196077249',
    ]
);
