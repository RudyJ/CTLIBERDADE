<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Clube de Tiro Liberdade',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => 'Clube de Tiro <b>Liberdade</b>',

    'logo_mini' => 'CT<b>L</b>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'yellow',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'conectar',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'NAVEGAÇÃO',
        [
            'text'        => 'Principal',
            'url'         => 'admin',
            'icon'        => 'home',
            'can' => 'admin' 
        ],
        [
            'text'        => 'Principal',
            'url'         => 'consultor',
            'icon'        => 'home',
            'can' => 'consultor' 
        ],
        [
            'text'        => 'Principal',
            'url'         => 'filiado',
            'icon'        => 'home',
            'can' => 'filiado' 
        ],
        [
            'text'        => 'Filiados',
            'icon'        => 'users',
            'can'         => 'admin',
            'submenu'     => [
                [
                    'text' => 'Listar Filiados',
                    'url'  => 'admin/filiados',
                ],
                [
                    'text' => 'Cadastrar Filiado',
                    'url'  => 'admin/filiados/novo',
                ],
            ],
        ],
        [
            'text'        => 'Tickets',
            'icon'        => 'ticket',
            'can'         => 'admin',
            'submenu'     => [
                [
                    'text' => 'Listar Tickets',
                    'url'  => 'admin/tickets',
                ],
                [
                    'text' => 'Relatório',
                    'url'  => 'admin/tickets/relatorio',
                ],
            ], 
        ],
        [
            'text'        => 'Tickets',
            'icon'        => 'ticket',
            'can'         => 'consultor',
            'url'  => 'consultor/tickets',            
        ],
        [
            'text'        => 'Tickets',
            'icon'        => 'ticket',
            'can'         => 'filiado',
            'submenu'     => [
                [
                    'text' => 'Listar Tickets',
                    'url'  => 'filiado/tickets',
                ],
                [
                    'text' => 'Criar Ticket',
                    'url'  => 'filiado/tickets/criar',
                ],
            ], 
        ],
        [
            'text'        => 'Financeiro',
            'icon'        => 'money',
            'can' => 'admin',
            'submenu'     => [
                [
                    'text' => 'Listar Faturas',
                    'url'  => 'admin/financeiro',
                ],
                [
                    'text' => 'Relatório',
                    'url'  => 'admin/financeiro/relatorio',
                ],
            ],  
        ],
        [
            'text'        => 'Financeiro',
            'icon'        => 'money',
            'can' => 'filiado',
            'url'  => 'filiado/financeiro',
        ],
        [
            'text'        => 'Usuários',
            'icon'        => 'user-secret',
            'can' => 'admin',
            'submenu'     => [
                [
                    'text' => 'Listar Usuários',
                    'url'  => 'admin/users',
                ],
                [
                    'text' => 'Cadastrar Usuários',
                    'url'  => 'admin/users/cadastrar',
                ],
                [
                    'text' => 'Logs administrativos',
                    'url'  => 'admin/users/logs',
                ],
            ],   
        ],
        [
            'text'        => 'Configurações',
            'url'         => 'admin/configuration',
            'icon'        => 'wrench',
            'can' => 'admin' 
        ],
        'MINHA CONTA',
        [
            'text' => 'Perfil',
            'url'  => 'admin/profile',
            'icon' => 'user',
            'can'  => 'admin' 
        ],
        [
            'text' => 'Trocar Senha',
            'url'  => 'admin/resetPassword',
            'icon' => 'lock',
            'can' => 'admin' 
        ],
        [
            'text' => 'Perfil',
            'url'  => 'consultor/profile',
            'icon' => 'user',
            'can'  => 'consultor' 
        ],
        [
            'text' => 'Trocar Senha',
            'url'  => 'consultor/resetPassword',
            'icon' => 'lock',
            'can' => 'consultor' 
        ],
        [
            'text' => 'Perfil',
            'url'  => 'filiado/profile',
            'icon' => 'user',
            'can'  => 'filiado' 
        ],
        [
            'text' => 'Trocar Senha',
            'url'  => 'filiado/resetPassword',
            'icon' => 'lock',
            'can' => 'filiado' 
        ],
        'AJUDA',
        [
            'text'       => 'Tutorial',
            'icon_color' => 'red',
            'url'         => 'admin/tutorial',
            'can' => 'admin', 
        ],
        [
            'text'       => 'Dúvidas ?',
            'icon_color' => 'yellow',
            'url'         => 'admin/duvidas',
            'can' => 'admin',
        ],
        [
            'text'       => 'Bugs ?',
            'icon_color' => 'aqua',
            'url'         => 'admin/bugs',
            'can' => 'admin',
        ],
        [
            'text'       => 'Tutorial',
            'icon_color' => 'red',
            'url'         => 'consultor/tutorial',
            'can' => 'consultor', 
        ],
        [
            'text'       => 'Dúvidas ?',
            'icon_color' => 'yellow',
            'url'         => 'consultor/duvidas',
            'can' => 'consultor',
        ],
        [
            'text'       => 'Bugs ?',
            'icon_color' => 'aqua',
            'url'         => 'consultor/bugs',
            'can' => 'consultor',
        ],
        [
            'text'       => 'Termos e Condições',
            'icon_color' => 'blue',
            'url'         => 'filiado/contrato',
            'can' => 'filiado',
        ],
        [
            'text'       => 'Bugs ?',
            'icon_color' => 'red',
            'url'         => 'filiado/bugs',
            'can' => 'filiado',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
