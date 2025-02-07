<?php

return [
    'header' => [
        '/' => [
            [
                'title' => 'How it works…',
                'href' => '#how-it-works',
            ],
            [
                'title' => 'Testimonials',
                'href' => '#testimonials',
            ],
            [
                'title' => 'Pricing',
                'href' => '#pricing',
            ],
            [
                'title' => 'FAQ',
                'href' => '#faq',
            ],
        ],
//        'affiliate-program' => [
//            …
//        ]
    ],
    'footer' => [
        [
            'title' => 'Product',
            'links' => [
                [
                    'title' => 'Pricing',
                    'href' => '#pricing',
                    'gate' => 'logged_out',
                ],
                [
                    'title' => 'Pricing',
                    'href' => '/billing',
                    'gate' => 'logged_in',
                ],
                [
                    'title' => 'Support',
                    'href' => null, // 'mailto:support@domain.com'
                ],
            ],
        ],
        [
            'title' => 'Resources',
            'links' => [
                [
                    'title' => 'Blog',
                    'href' => '/blog',
                ],
                [
                    'title' => 'Terms',
                    'href' => '/terms-of-service',
                ],
                [
                    'title' => 'Privacy',
                    'href' => '/privacy-policy',
                ],
                [
                    'title' => 'Affiliate program',
                    'href' => '/affiliate',
                    'gate' => 'logged_in',
                ],
            ],
        ],
        [
            'title' => 'Platform',
            'links' => [
                [
                    'title' => 'Items',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" /></svg>',
                    'route' => 'items.index',
                ],
                [
                    'title' => 'Favorites',
                    'hidden-title' => true,
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" /></svg>',
                    'route' => 'favorites',
                    'alignment' => 'right',
                    'ping' => 'isFavoritesPingDisplayed',
                ],
                [
                    'title' => 'Notifications',
                    'hidden-title' => true,
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" /></svg>',
                    'route' => 'notifications',
                    'alignment' => 'right',
                    'total' => 'getTotalFavorites',
                ],
            ],
        ],
        [
            'title' => 'Social',
            'links' => [
                [
                    'title' => 'Facebook',
                    'href' => null,
                    'target' => '_blank',
                ],
                [
                    'title' => 'Instagram',
                    'href' => null,
                    'target' => '_blank',
                ],
                [
                    'title' => 'Youtube',
                    'href' => null,
                    'target' => '_blank',
                ],

            ],
        ],
    ],
    'navigation-menu' => [
        'navigation-links' => [
            [
                'title' => 'Dashboard',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" /></svg>',
                'route' => 'dashboard',
//                'target' => '_blank',
            ],
        ],
        'dropdown' => [
            'sections' => [
                [
                    'title' => 'Admin Panel',
                    'can' => 'admin_area',
                    'links' => [
                        [
                            'title' => 'Nova',
                            'href' => '/nova',
                            'target' => '_blank',
                        ],
                        [
                            'title' => 'Vapor UI',
                            'href' => '/vapor-ui',
                            'target' => '_blank',
                        ],
                    ],
                ],
                [
                    'title' => 'Manage Account',
                    'links' => [
                        [
                            'title' => 'Settings',
                            'cannot' => 'pro_area',
                            'route' => 'profile.show',
                        ],
                        [
                            'title' => 'Buy Premium',
                            'cannot' => 'pro_area',
                            'href' => '/billing',
                        ],
                    ],
                ],
            ],
        ],
    ],
];