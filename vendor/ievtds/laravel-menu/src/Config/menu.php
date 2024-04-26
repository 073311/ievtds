<?php

return [

    'styles' => [
        // Boostrap 3
        'bs3-navbar' => \ievtds\Menu\Presenters\Bootstrap3\Navbar::class,
        'bs3-navbar-right' => \ievtds\Menu\Presenters\Bootstrap3\NavbarRight::class,
        'bs3-nav-pills' => \ievtds\Menu\Presenters\Bootstrap3\NavPills::class,
        'bs3-nav-tab' => \ievtds\Menu\Presenters\Bootstrap3\NavTab::class,
        'bs3-sidebar' => \ievtds\Menu\Presenters\Bootstrap3\Sidebar::class,
        'bs3-navmenu' => \ievtds\Menu\Presenters\Bootstrap3\Nav::class,

        // Zurb
        'zurb' => \ievtds\Menu\Presenters\Foundation\Zurb::class,

        // Admin
        'adminlte' => \ievtds\Menu\Presenters\Admin\Adminlte::class,
        'argon' => \ievtds\Menu\Presenters\Admin\Argon::class,
        'metronic-horizontal' => \ievtds\Menu\Presenters\Admin\MetronicHorizontal::class,
        'tailwind' => \ievtds\Menu\Presenters\Admin\Tailwind::class,
    ],

    'home_urls' => [
        '/',
    ],

    'ordering' => false,

];
