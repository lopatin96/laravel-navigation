<?php

return [
    'header' => [
        'links' => [
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
                    'href' => '/affiliate-program',
                    'gate' => 'logged_in',
                ],
            ],
        ],
        [
            'title' => 'Platform',
            'links' => [
                [
                    'title' => 'Log in',
                    'href' => '/login',
                    'gate' => 'logged_out',
                ],
                [
                    'title' => 'Start a free trial',
                    'href' => '/register',
                    'gate' => 'logged_out',
                ],
                [
                    'title' => 'My account',
                    'href' => '/user/profile',
                    'gate' => 'logged_in',
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