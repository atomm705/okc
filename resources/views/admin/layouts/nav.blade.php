<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.index') }}" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="{{ asset('admin/images/dosolution-logo.png') }}">
      </span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li class="menu-item @if(request()->routeIs('admin.index')) active @endif">
            <a href="{{ route('admin.index') }}" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div class="text-truncate">Головна</div>
            </a>
        </li>
        <li class="menu-item @if(request()->routeIs('admin.services.*')) active @endif">
            <a href="" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div class="text-truncate">Послуги</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.divisions') }}" class="menu-link">Відділення</a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.groups') }}" class="menu-link">Категорії</a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.services') }}" class="menu-link">Послуги</a>
        </li>
        <li class="menu-item @if(request()->routeIs('admin.doctors')) active @endif">
            <a href="{{ route('admin.doctors') }}" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div class="text-truncate">Лікарі</div>
            </a>
        </li>
        <li class="menu-item @if(request()->routeIs('admin.settings.*')) open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div class="text-truncate">Налаштування</div>
            </a>
        </li>
    </ul>
</aside>
<div class="layout-page">

    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

            <ul class="navbar-nav flex-row align-items-center ms-auto">

                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="{{ asset('admin/images/user_icon.jpg') }}" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('admin/images/user_icon.jpg') }}" alt class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-medium d-block">
                                            {{ Auth::user()->name }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}">
                                <i class='bx bx-log-out me-2'></i>
                                <span class="align-middle">Вийти</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Search Small Screens -->
        <div class="navbar-search-wrapper search-input-wrapper  d-none">
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="" aria-label="">
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
        </div>
    </nav>
