<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('index') }}" target="_blank">
            <img src="{{ asset('assets/admin/img/logo3.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Haerul Folio</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}"
                    class="nav-link {{ request()->routeIs(['admin.dashboard']) ? 'active' : '' }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about.data-about') }}"
                    class="nav-link {{ request()->routeIs(['about.data-about', 'about.create-data-about', 'about.edit-data-about']) ? 'active' : '' }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">About</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('service.data-services') }}"
                    class="nav-link {{ request()->routeIs(['service.data-services', 'service.create-data-services', 'service.edit-data-services', 'service.delete-data-services']) ? 'active' : '' }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Service</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('education.data-education') }}"
                    class="nav-link {{ request()->routeIs(['education.data-education', 'education.create-data-education', 'education.edit-data-education', 'education.delete-data-education']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Education</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('experience.data-experiences') }}"
                    class="nav-link {{ request()->routeIs(['experience.data-experiences', 'experience.create-data-experience', 'experience.edit-data-experience', 'experience.delete-data-experience']) }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Experience</span>
                </a>
            </li>
            <li class="nav-item">
                <a
                    href="{{ route('portfolio.data-portfolios') }}"class="nav-link {{ request()->routeIs(['portfolio.data-portfolios', 'portfolio.create-data-portfolio', 'portfolio.edit-data-portfolio']) ? 'active' : '' }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Portfolio</span>
                </a>
            </li>
            <li class="nav-item">
                <a
                    href="{{ route('skill.data-skills') }}"class="nav-link {{ request()->routeIs(['skill.data-skills', 'skill.create-data-skills', 'skill.edit-data-skill']) ? 'active' : '' }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Skill</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Auth</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" onclick="confirmLogout(event)">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-button-power text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </div>
</aside>
