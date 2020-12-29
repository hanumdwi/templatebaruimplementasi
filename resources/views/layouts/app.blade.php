<!doctype html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Baston - Responsive Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/media/image/favicon.png') }}"/>

    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('vendors/bundle.css') }}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600&display=swap" rel="stylesheet">

@yield('head')

<!-- App css -->
    <link rel="stylesheet" href="{{ url('assets/css/app.min.css') }}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
@if(trim($__env->yieldContent('bodyClass')))
<body class="@yield('bodyClass')">
@else
<body class="light small-navigation">
@endif
<!-- Preloader -->
<div class="preloader">
    <img class="logo" src="{{ url('assets/media/image/logo/logo.png') }}" alt="logo">
    <img class="dark-logo" src="{{ url('assets/media/image/logo/dark-logo.png') }}" alt="logo dark">
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->

<!-- Sidebar group -->
<div class="sidebar-group">
    <!-- Sidebar >>> Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Settings</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Settings -->

    <!-- Sidebar >>> Chat list -->
    <div class="sidebar" id="chat-list">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h6 class="card-title mb-0">Chats</h6>
                    <a href="{{ route('chat') }}" class="btn btn-primary btn-sm">New Chat</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Cass Queyeiro</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Evered Asquith</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-danger">
                                <span class="avatar-title bg-success rounded-circle">F</span>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Francisco Ubsdale</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-success">
                                <img src="{{ url('assets/media/image/user/women_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Natale Janu</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="badge badge-primary badge-pill ml-auto mb-2">3</span>
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/women_avatar2.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Orelie Rockhall</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Barbette Bolf</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-warning rounded-circle">D</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Dudley Laborde</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-success">
                                <img src="{{ url('assets/media/image/user/man_avatar2.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Barbaraanne Riby</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="{{ url('assets/media/image/user/women_avatar3.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Mariana Ondrousek</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="{{ url('assets/media/image/user/man_avatar4.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Ruprecht Lait</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="{{ url('assets/media/image/user/man_avatar1.jpg') }}"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Cosme Hubbold</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="{{ route('chat') }}" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-secondary rounded-circle">M</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Mallory Darch</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Chat list -->
</div>
<!-- ./ Sidebar group -->

<!-- Layout wrapper -->
<div class="layout-wrapper">
    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <ul class="navbar-nav">
                    <li class="nav-item navigation-toggler">
                        <a href="#" class="nav-link">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="header-search-form">
                            <form class="d-flex">
                                <button class="btn">
                                    <i class="ti-search"></i>
                                </button>
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="header-right">
                <ul class="navbar-nav">
                    <li class="nav-item btn-mobile-search">
                        <a href="#" title="Search" class="nav-link">
                            <i data-feather="search"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Notifications" data-toggle="dropdown">
                            <span class="badge badge-danger nav-link-notify">1</span>
                            <i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div
                                class="bg-primary px-3 py-3 text-center d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Notifications</h6>
                                <small class="opacity-7">1 unread notifications</small>
                            </div>
                            <div class="dropdown-scroll">
                                <ul class="list-group list-group-flush">
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <span
                                                        class="avatar-title bg-success-bright text-success rounded-circle">
                                                        <i class="ti-file"></i>
                                                    </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Your report is prepared
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item bg-primary-bright px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New customer registered
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New Order Recieved
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">45 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Server Limit Reached!
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">55 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Apps are ready for update
                                                    <i title="" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"
                                                       data-original-title="Mark as unread"></i>
                                                </p>
                                                <span class="text-muted small">Yesterday</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="px-3 py-2 text-right border-top">
                                <ul class="list-inline small">
                                    <li class="list-inline-item mb-0">
                                        <a href="#">Mark All Read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('chat') }}" title="Chat" class="nav-link">
                            <span class="badge badge-danger nav-link-notify">4</span>
                            <i data-feather="message-circle"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" title="Cart" class="nav-link" data-toggle="dropdown">
                            <i data-feather="shopping-bag"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div
                                class="bg-primary px-3 py-3 text-center d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Cart</h6>
                                <small class="opacity-7">4 products</small>
                            </div>
                            <div class="dropdown-scroll">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/products/product6.png') }}" class="rounded"
                                                     alt="Flowerpot">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Flowerpot
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $1,200</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/products/product3.png') }}" class="rounded"
                                                     alt="Plate">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Plate
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $250</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/products/product7.png') }}"
                                                     class="rounded" alt="Wall Clock">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Wall Clock
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $100</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/products/product1.png') }}" class="rounded"
                                                     alt="Vase">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Vase
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $1,200</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="{{ url('assets/media/image/products/product2.png') }}" class="rounded"
                                                     alt="Glasses">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Glasses
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $200</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="px-3 py-2 border-top text-right">
                                <p class="d-flex justify-content-between align-items-center mb-1 small">
                                    <span>Sub Total</span>
                                    <span>$1,650</span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-1 small">
                                    <span>Taxes</span>
                                    <span>$15</span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-1 small font-weight-bold">
                                    <span>Total</span>
                                    <span>$1,675</span>
                                </p>
                                <button class="btn btn-primary btn-block mt-2">
                                    Order and Payment <i class="ti-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                            <span class="mr-2 d-sm-inline d-none">
                                Hi! <strong>{{Session::get('nama')}}</strong>
                            </span>
                            <figure class="avatar avatar-sm">
                                <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                     class="rounded-circle"
                                     alt="avatar">
                            </figure>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="text-center py-4"
                                 data-background-image="{{ url('assets/media/image/image1.jpg') }}">
                                <figure class="avatar avatar-lg mb-3 border-0">
                                    <img src="{{ url('assets/media/image/user/man_avatar3.jpg') }}"
                                         class="rounded-circle" alt="image">
                                </figure>
                                <h5 class="mb-0">{{Session::get('nama')}}</h5>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="{{ route('profile') }}" class="list-group-item">Profile</a>
                                <a href="#" class="list-group-item" data-sidebar-target="#settings">Settings</a>
                                <a href="{{ route('login') }}" class="list-group-item text-danger">Sign Out!</a>
                            </div>
                            <div class="pb-0 p-4">
                                <div class="mb-4">
                                    <h6 class="d-flex justify-content-between">
                                        Completed Tasks
                                        <span class="float-right">%68</span>
                                    </h6>
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar bg-secondary" role="progressbar"
                                             style="width: 68%;" aria-valuenow="68" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="d-flex justify-content-between">
                                        Storage
                                        <span>%25</span>
                                    </h6>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%;"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i class="ti-arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Navigation -->
        <div class="navigation">
            <!-- Logo -->
            <div class="navigation-header">
                <a class="navigation-logo" href="{{ url('/') }}">
                    <img class="logo" src="{{ url('assets/media/image/logo/logo.png') }}" alt="logo">
                    <img class="dark-logo" src="{{ url('assets/media/image/logo/dark-logo.png') }}" alt="dark logo">
                    <img class="small-logo" src="{{ url('assets/media/image/logo/small-logo.png') }}" alt="small logo">
                    <img class="small-dark-logo" src="{{ url('assets/media/image/logo/small-dark-logo.png') }}" alt="small dark logo">
                </a>
                <a href="#" class="small-navigation-toggler"></a>
                <a href="#" class="btn btn-danger mobile-navigation-toggler">
                    <i class="ti-close"></i>
                </a>
            </div>
            <!-- ./ Logo -->

            <!-- Menu wrapper -->
            <div class="navigation-menu-wrapper">
                <!-- Menu tab -->
                <div class="navigation-menu-tab">
                    <ul>
                        <li>
                            <a href="#" data-menu-target="#dashboards">
                                <span class="menu-tab-icon">
                                    <i data-feather="pie-chart"></i>
                                </span>
                                <span>Dashboards</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#apps">
                                <span class="menu-tab-icon">
                                    <i data-feather="users"></i>
                                </span>
                                <span>Customers</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#components">
                                <span class="menu-tab-icon">
                                    <i data-feather="image"></i>
                                </span>
                                <span>Barcode</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#maps">
                                <span class="menu-tab-icon">
                                    <i data-feather="map-pin"></i>
                                </span>
                                <span>Geolocation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#scoreboard">
                                <span class="menu-tab-icon">
                                    <i data-feather="list"></i>
                                </span>
                                <span>Scoreboard</span>
                            </a>
                        </li>
                  
                    </ul>
                </div>
                <!-- ./ Menu tab -->

                <!-- Menu body -->
                <div class="navigation-menu-body">
                    <ul id="dashboards">
                        <li class="navigation-divider">Dashboards</li>
                        <li>
                            <a @if(!request()->segment(1) || request()->segment(1) == 'ecommerce-dashboard') class="active"
                               @endif href="{{ route('ecommerce-dashboard') }}">
                                <span class="nav-link-icon" data-feather="shopping-cart"></span>
                                <span>E-commerce</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'analytics-dashboard') class="active"
                               @endif href="{{ route('analytics-dashboard') }}">
                                <span class="nav-link-icon" data-feather="bar-chart-2"></span>
                                <span>Analytics</span>
                                <span class="badge badge-success">New</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'helpdesk-dashboard') class="active"
                               @endif href="{{ route('helpdesk-dashboard') }}">
                                <span class="nav-link-icon" data-feather="life-buoy"></span>
                                <span>Helpdesk</span>
                            </a>
                        </li>
                        <li class="navigation-divider">E-commerce Pages</li>
                        <li>
                            <a @if(request()->segment(1) == 'orders') class="active"
                               @endif href="{{ route('orders') }}">
                                <span class="nav-link-icon" data-feather="box"></span>
                                <span>Orders</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'product-list') class="active"
                               @endif href="{{ route('product-list') }}">
                                <span class="nav-link-icon" data-feather="list"></span>
                                <span>Product List</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'product-grid') class="active"
                               @endif href="{{ route('product-grid') }}">
                                <span class="nav-link-icon" data-feather="grid"></span>
                                <span>Product Grid</span>
                            </a>
                        </li>
                        <li>
                            <a @if(request()->segment(1) == 'product-detail') class="active"
                               @endif href="{{ route('product-detail') }}">
                                <span class="nav-link-icon" data-feather="file-text"></span>
                                <span>Product Detail</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="apps">
                        <li class="navigation-divider">Customers</li>
                        <li>
                            <a  class="active" href="dropdownlist">
                                <span class="nav-link-icon" data-feather="plus"></span>
                                <span>Tambah Customer 1</span>
                            </a>
                        </li>
                        <li>
                            <a  class="active" href="dropdownlist1">
                                <span class="nav-link-icon" data-feather="plus"></span>
                                <span>Tambah Customer 2</span>
                            </a>
                        </li>
                    
                    </ul>
                    <ul id="components">
                        <li class="navigation-divider">Barcode</li>
                        <li>
                            <a class="active" href="barcode">
                                <span class="nav-link-icon">
                                    <i class="fa fa-upload"></i>
                                </span>
                                <span>Cetak Tabel TnJ 108</span>
                            </a>
                        </li>
                        <li>
                            <a class="active" href="test-barcode">
                                <span class="nav-link-icon">
                                    <i class="fa fa-video-camera"></i>
                                </span>
                                <span>Scan Barcode</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="maps">
                        <li class="navigation-divider">Geolocation</li>
                        <li>
                            <a class="active" href="barcodetoko">
                            <span class="nav-link-icon">
                                    <i class="fa fa-upload"></i>
                                </span>
                                <span>Cetak Barcode Toko</span>
                            </a>
                        </li>
                        <li>
                            <a class="active" href="geolocation">
                            <span class="nav-link-icon">
                                    <i class="fa fa-chevron-down"></i>
                                </span>
                                <span>Geolocation</span>
                            </a>
                        </li>
                        <li>
                            <a class="active" href="scanbarcodetoko">
                            <span class="nav-link-icon">
                                    <i class="fa fa-video-camera"></i>
                                </span>
                                <span>Scan Barcode Geolocation</span>
                            </a>
                        </li>
                        
                    </ul>
                    <ul id="scoreboard">
                        <li class="navigation-divider">Scoreboard Futsal</li>
                        <li>
                            <a class="active" href="scoreboard">
                            <span class="nav-link-icon">
                                    <i class="fa fa-info-circle"></i>
                                </span>
                                <span>Futsal Scoreboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="active" href="controller">
                            <span class="nav-link-icon">
                                    <i class="fa fa-home"></i>
                                </span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        
                    </ul>
                    
                    
                        </li>
                    </ul>
                </div>
                <!-- ./ Menu body -->
            </div>
            <!-- ./ Menu wrapper -->
        </div>
        <!-- ./ Navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content">
                @yield('content')
            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer">
                <div>© {{ date('Y') }} Baston - <a href="http://laborasyon.com" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- session PHP -->
            <footer>
            <div class="modal fade" id="logout_popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div style="width:100%;height:100%;margin: 0px; padding:0px">
                                <div style="width:25%;margin: 0px; padding:0px;float:left;">
                                    <i class="fa fa-warning" style="font-size: 140px;color:#da4f49"></i>
                                </div>
                                <div style="width:70%;margin: 0px; padding:0px;float:right;padding-top: 10px;padding-left: 3%;">
                                    <h4>Your session is about to expire!</h4>
                                    <p style="font-size: 15px;">You will be logged out in <span id="timer" style="display: inline;font-size: 30px;font-style: bold">10</span> seconds.</p>              
                                    <p style="font-size: 15px;">Do you want to stay signed in?</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div style="margin-left: 30%;margin-bottom: 20px;margin-top: 20px;">
                            <a href="javascript:;" onclick="resetTimer()" class="btn btn-primary" aria-hidden="true">Yes, Keep me signed in</a>
                            <a href="javascript:;" onclick="chooseOut()" class="btn btn-danger" id="alertbox" aria-hidden="true">No, Sign me out</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="{{ url('vendors/bundle.js') }}"></script>

@yield('script')

<!-- App scripts -->
<script src="{{ url('assets/js/app.min.js') }}"></script>

<!--session JS-->
<script>
        var c = 0; max_count = 10; logout = true;
        startTimer();

        function startTimer(){
            setTimeout(function(){
                logout = true;
                c = 0; 
                max_count = 10;
                $('#timer').html(max_count);
                $('#logout_popup').modal('show');
                startCount();

            }, 30*60*1000);//10 detik =10*1000, 30 menit=30*60*1000, 
         
        }

        function resetTimer(){
            logout = false;
            $('#logout_popup').modal('hide');
            startTimer();
        }

        function chooseOut(){
            logout = false;
            $('#logout_popup').modal('hide');
            // alert('Your time is expired');
            window.location='/';
            // startTimer();
        }

        function timedCount() {
            c = c + 1;
            if(c<=10){
            remaining_time = max_count - c;
                if( remaining_time == 0 && logout ){
                    $('#logout_popup').modal('hide');
                    //location.href = $('#logout_url').val();
                    chooseOut();
                }
                else{
                    $('#timer').html(remaining_time);
                    t = setTimeout(function(){timedCount()}, 1000);
                }
        }
            else{
                startTimer();
            }
        }

        function startCount() {
           timedCount();
        }

        function press(){
            $('#logout_popup').modal('hide');
            console.log('press');
            resetTimer();
        }

    </script>
</body>
</html>
