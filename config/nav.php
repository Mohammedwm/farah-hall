<?php

return [
    'dashboard' => [
        'title' => 'Dashboard',
        'icon' => 'fas fa-tachometer-alt',
        'route.active' => 'dashboard.index',
        'route' => fn() => route('dashboard.index'),
    ],
    'categories' => [
        'title' => 'Categories',
        'icon' => 'fas fa-tags nav-icon',
        'route.active' => 'dashboard.categories.*',
        'route' => ''
    ],
    'products' => [
        'title' => 'Products',
        'icon' => 'fas fa-box nav-icon',
        'route.active' => 'dashboard.products.*',
     //   'route' => fn() => route('dashboard.products.index'),
        'route' => ''
    ],
    'orders' => [
        'title' => 'Orders',
        'icon' => 'fas fa-shopping-bag nav-icon',
        'route.active' => 'dashboard.orders.*',
        'route' => '/dashboard/orders',
        'badge' => [
            'class' => 'primary',
            'label' => 'New'
        ]
    ],
    'settings' => [
        'title' => 'Settings',
        'icon' => 'fas fa-cogs nav-icon',
        'route.active' => 'dashboard.settings',
        'route' => '/dashboard/settings',
        'badge' => null,
    ]
];
