<?php

return [
    //cache
    ['name' => 'cache.report_minutes', 'value' => 60],

    // homepage
    ['name' => 'homepage.type', 'value' => 'landingPage'],

    //menus
    [
        'name' => 'menus',
        'value' => json_encode([
            [
                'name' => 'Drive Sidebar',
                'positions' => ['drive-sidebar'],
                'id' => 'v01akw',
                'items' => [
                    [
                        'id' => 'wkd771',
                        'type' => 'route',
                        'order' => 1,
                        'label' => 'Shared with me',
                        'action' => '/drive/shares',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M9 13.75c-2.34 0-7 1.17-7 3.5V19h14v-1.75c0-2.33-4.66-3.5-7-3.5zM4.34 17c.84-.58 2.87-1.25 4.66-1.25s3.82.67 4.66 1.25H4.34zM9 12c1.93 0 3.5-1.57 3.5-3.5S10.93 5 9 5 5.5 6.57 5.5 8.5 7.07 12 9 12zm0-5c.83 0 1.5.67 1.5 1.5S9.83 10 9 10s-1.5-.67-1.5-1.5S8.17 7 9 7zm7.04 6.81c1.16.84 1.96 1.96 1.96 3.44V19h4v-1.75c0-2.02-3.5-3.17-5.96-3.44zM15 12c1.93 0 3.5-1.57 3.5-3.5S16.93 5 15 5c-.54 0-1.04.13-1.5.35.63.89 1 1.98 1 3.15s-.37 2.26-1 3.15c.46.22.96.35 1.5.35z',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id' => 'jo2m1s',
                        'type' => 'route',
                        'order' => 2,
                        'label' => 'Recent',
                        'action' => '/drive/recent',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.25 2.52.77-1.28-3.52-2.09V8z',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id' => '4e6cie',
                        'type' => 'route',
                        'order' => 3,
                        'label' => 'Starred',
                        'action' => '/drive/starred',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z',
                                ],
                            ],
                        ],
                    ],
                    [
                        'id' => 'h5p54n',
                        'type' => 'route',
                        'order' => 4,
                        'label' => 'Trash',
                        'action' => '/drive/trash',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'footer',
                'id' => '4tbwog',
                'positions' => ['footer'],
                'items' => [
                    [
                        'type' => 'route',
                        'id' => 'c1sf2g',
                        'position' => 1,
                        'label' => 'Developers',
                        'action' => '/api-docs',
                        'condition' => 'auth',
                    ],
                    [
                        'type' => 'route',
                        'id' => 'rlz27v',
                        'position' => 2,
                        'label' => 'Privacy Policy',
                        'action' => '/pages/privacy-policy',
                    ],
                    [
                        'type' => 'route',
                        'id' => 'p80pvk',
                        'position' => 3,
                        'label' => 'Terms of Service',
                        'action' => '/pages/terms-of-service',
                    ],
                    [
                        'type' => 'route',
                        'id' => 'q8dtht',
                        'position' => 4,
                        'label' => 'Contact Us',
                        'action' => '/contact',
                    ],
                ],
            ],
            [
                'name' => 'Footer Social',
                'id' => 'odw4ah',
                'positions' => ['footer-secondary'],
                'items' => [
                ],
            ],
            [
                'name' => 'Auth Dropdown',
                'id' => 'h8r6vg',
                'items' => [
                    [
                        'label' => 'Admin Area',
                        'id' => 'upm1rv',
                        'action' => '/admin',
                        'type' => 'route',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z',
                                ],
                            ],
                        ],
                        'permissions' => ['admin.access'],
                    ],
                    [
                        'label' => 'My Files',
                        'id' => 'ehj0uk',
                        'action' => '/drive',
                        'type' => 'route',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M20 6h-8l-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V6h5.17l1.41 1.41.59.59H20v10zm-7.84-6H8v2h4.16l-1.59 1.59L11.99 17 16 13.01 11.99 9l-1.41 1.41L12.16 12z',
                                ],
                            ],
                        ],
                    ],
                    [
                        'label' => 'Account Settings',
                        'id' => '6a89z5',
                        'action' => '/account-settings',
                        'type' => 'route',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z',
                                ],
                            ],
                        ],
                    ],
                ],
                'positions' => ['auth-dropdown'],
            ],
            [
                'name' => 'Admin Sidebar',
                'id' => '2d43u1',
                'items' => [
                    [
                        'label' => 'Analytics',
                        'id' => '886nz4',
                        'action' => '/admin',
                        'type' => 'route',
                        'condition' => 'admin',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z',
                                ],
                            ],

                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M7 12h2v5H7zm8-5h2v10h-2zm-4 7h2v3h-2zm0-4h2v2h-2z',
                                ],
                            ],
                        ],
                        'role' => 1,
                        'permissions' => ['admin.access'],
                        'roles' => [],
                    ],
                    [
                        'label' => 'Appearance',
                        'id' => 'slcqm0',
                        'action' => '/admin/appearance',
                        'type' => 'route',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'm2.53 19.65 1.34.56v-9.03l-2.43 5.86c-.41 1.02.08 2.19 1.09 2.61zm19.5-3.7L17.07 3.98c-.31-.75-1.04-1.21-1.81-1.23-.26 0-.53.04-.79.15L7.1 5.95c-.75.31-1.21 1.03-1.23 1.8-.01.27.04.54.15.8l4.96 11.97c.31.76 1.05 1.22 1.83 1.23.26 0 .52-.05.77-.15l7.36-3.05c1.02-.42 1.51-1.59 1.09-2.6zm-9.2 3.8L7.87 7.79l7.35-3.04h.01l4.95 11.95-7.35 3.05z',
                                ],
                            ],
                            [
                                'tag' => 'circle',
                                'attr' => [
                                    'cx' => '11',
                                    'cy' => '9',
                                    'r' => '1',
                                ],
                            ],
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M5.88 19.75c0 1.1.9 2 2 2h1.45l-3.45-8.34v6.34z',
                                ],
                            ],
                        ],
                        'permissions' => ['appearance.update'],
                    ],
                    [
                        'label' => 'Settings',
                        'id' => 'x5k484',
                        'action' => '/admin/settings',
                        'type' => 'route',

                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z',
                                ],
                            ],
                        ],
                        'permissions' => ['settings.update'],
                    ],
                    [
                        'label' => 'Plans',
                        'id' => '7o42rt',
                        'action' => '/admin/plans',
                        'type' => 'route',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M7 15h7v2H7zm0-4h10v2H7zm0-4h10v2H7zm12-4h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-.14 0-.27.01-.4.04-.39.08-.74.28-1.01.55-.18.18-.33.4-.43.64-.1.23-.16.49-.16.77v14c0 .27.06.54.16.78s.25.45.43.64c.27.27.62.47 1.01.55.13.02.26.03.4.03h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7-.25c.41 0 .75.34.75.75s-.34.75-.75.75-.75-.34-.75-.75.34-.75.75-.75zM19 19H5V5h14v14z',
                                ],
                            ],
                        ],
                        'permissions' => ['plans.update'],
                    ],
                    [
                        'label' => 'Subscriptions',
                        'action' => '/admin/subscriptions',
                        'type' => 'route',
                        'id' => 'sdcb5a',
                        'condition' => 'admin',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M4 6h16v2H4zm2-4h12v2H6zm14 8H4c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-8c0-1.1-.9-2-2-2zm0 10H4v-8h16v8zm-10-7.27v6.53L16 16z',
                                ],
                            ],
                        ],
                        'permissions' => ['subscriptions.update'],
                    ],
                    [
                        'label' => 'Users',
                        'action' => '/admin/users',
                        'type' => 'route',
                        'id' => 'fzfb45',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z',
                                ],
                            ],
                        ],
                        'permissions' => ['users.update'],
                    ],

                    [
                        'label' => 'Roles',
                        'action' => '/admin/roles',
                        'type' => 'route',
                        'id' => 'mwdkf0',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M9 13.75c-2.34 0-7 1.17-7 3.5V19h14v-1.75c0-2.33-4.66-3.5-7-3.5zM4.34 17c.84-.58 2.87-1.25 4.66-1.25s3.82.67 4.66 1.25H4.34zM9 12c1.93 0 3.5-1.57 3.5-3.5S10.93 5 9 5 5.5 6.57 5.5 8.5 7.07 12 9 12zm0-5c.83 0 1.5.67 1.5 1.5S9.83 10 9 10s-1.5-.67-1.5-1.5S8.17 7 9 7zm7.04 6.81c1.16.84 1.96 1.96 1.96 3.44V19h4v-1.75c0-2.02-3.5-3.17-5.96-3.44zM15 12c1.93 0 3.5-1.57 3.5-3.5S16.93 5 15 5c-.54 0-1.04.13-1.5.35.63.89 1 1.98 1 3.15s-.37 2.26-1 3.15c.46.22.96.35 1.5.35z',
                                ],
                            ],
                        ],
                        'permissions' => ['roles.update'],
                    ],
                    [
                        'label' => 'Pages',
                        'action' => '/admin/custom-pages',
                        'type' => 'route',
                        'id' => '63bwv9',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z',
                                ],
                            ],

                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M14 17H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z',
                                ],
                            ],
                        ],
                        'permissions' => ['custom_pages.update'],
                    ],
                    [
                        'label' => 'Tags',
                        'action' => '/admin/tags',
                        'type' => 'route',
                        'id' => '2x0pzq',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M17.63 5.84C17.27 5.33 16.67 5 16 5L5 5.01C3.9 5.01 3 5.9 3 7v10c0 1.1.9 1.99 2 1.99L16 19c.67 0 1.27-.33 1.63-.84L22 12l-4.37-6.16zM16 17H5V7h11l3.55 5L16 17z',
                                ],
                            ],
                        ],
                        'permissions' => ['tags.update'],
                    ],
                    [
                        'label' => 'Files',
                        'action' => '/admin/files',
                        'type' => 'route',
                        'id' => 'vguvti',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm-1 4H8c-1.1 0-1.99.9-1.99 2L6 21c0 1.1.89 2 1.99 2H19c1.1 0 2-.9 2-2V11l-6-6zM8 21V7h6v5h5v9H8z',
                                ],
                            ],
                        ],
                        'permissions' => ['files.update'],
                    ],

                    [
                        'label' => 'Localizations',
                        'action' => '/admin/localizations',
                        'type' => 'route',
                        'id' => 'w91yql',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'm12.87 15.07-2.54-2.51.03-.03c1.74-1.94 2.98-4.17 3.71-6.53H17V4h-7V2H8v2H1v1.99h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04zM18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12zm-2.62 7 1.62-4.33L19.12 17h-3.24z',
                                ],
                            ],
                        ],
                        'permissions' => ['localizations.update'],
                    ],

                    [
                        'label' => 'Ads',
                        'action' => '/admin/ads',
                        'type' => 'route',
                        'id' => 'ohj4qk',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M17 1H7c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zM7 4V3h10v1H7zm0 14V6h10v12H7zm0 3v-1h10v1H7z',
                                ],
                            ],
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' => 'M16 7H8v2h8V7z',
                                ],
                            ],
                        ],
                        'permissions' => ['settings.update'],
                    ],
                    [
                        'label' => 'Logs',
                        'action' => '/admin/logs',
                        'type' => 'route',
                        'id' => '8j435f',
                        'icon' => [
                            [
                                'tag' => 'path',
                                'attr' => [
                                    'd' =>
                                        'M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 14H6v-2h12v2zm0-4H6v-2h12v2zm-3-4H6V7h9v2z',
                                ],
                            ],
                        ],
                    ],
                ],
                'positions' => ['admin-sidebar'],
            ],
        ]),
    ],

    //uploads
    ['name' => 'uploads.max_size', 'value' => 52428800],
    ['name' => 'uploads.chunk_size', 'value' => 15728640],
    ['name' => 'uploads.available_space', 'value' => 104857600],
    ['name' => 's3_direct_upload', 'value' => true],
    [
        'name' => 'uploads.blocked_extensions',
        'value' => json_encode([
            'exe',
            'application/x-msdownload',
            'x-dosexec',
        ]),
    ],

    //landing page
    [
        'name' => 'homepage.appearance',
        'value' => json_encode([
            'headerTitle' => 'Blitzlocker. A new home for your files.',
            'headerSubtitle' =>
                'Register or Login now to upload, backup, manage and access your files on any device, from anywhere, free.',
            'headerImage' => 'images/homepage/homepage-header-bg.jpg',
            'headerImageOpacity' => 1,
            'headerOverlayColor1' => null,
            'headerOverlayColor2' => null,
            'footerTitle' => 'Get started with Blitzlocker',
            'footerSubtitle' => null,
            'footerImage' => 'images/homepage/homepage-footer-bg.svg',
            'actions' => [
                'cta1' => [
                    'label' => 'Register Now',
                    'type' => 'route',
                    'action' => '/register',
                ],
                'cta2' => null,
                'cta3' => [
                    'label' => 'Sign up for free',
                    'type' => 'route',
                    'action' => '/register',
                ],
            ],
            'primaryFeatures' => [
                [
                    'title' => 'Store any file',
                    'subtitle' =>
                        'Keep photos, stories, designs, drawings, recordings, videos, and more. Your first 15 GB of storage are free.',
                    'image' => 'images/homepage/upload.svg',
                ],
                [
                    'title' => 'See your stuff anywhere',
                    'subtitle' =>
                        'Your files in Blitzlocker can be reached from any smartphone, tablet, or computer.',
                    'image' => 'images/homepage/web-devices.svg',
                ],
                [
                    'title' => 'Share files and folders',
                    'subtitle' =>
                        'You can quickly invite others to view, download, and collaborate on all the files you want.',
                    'image' => 'images/homepage/share.svg',
                ],
            ],
            'secondaryFeatures' => [
                [
                    'title' => 'Keep your files safe',
                    'image' => 'images/homepage/homepage-feature-1.jpg',
                    'description' =>
                        'If something happens to your device, you don\'t have to worry about losing your files or photos – they\'re in your Blitzlocker. And Blitzlocker is encrypted using SSL.',
                ],
                [
                    'title' => 'Reliable storage and fast transfers',
                    'image' => 'images/homepage/homepage-feature-2.jpg',
                    'description' =>
                        'We make secure cloud storage simple and convenient. Create a free Blitzlocker account today!',
                ],
            ],
        ]),
    ],

    // drive
    ['name' => 'drive.default_view', 'value' => 'grid'],
    ['name' => 'drive.send_share_notification', 'value' => false],
    ['name' => 'share.suggest_emails', 'value' => false],
];
