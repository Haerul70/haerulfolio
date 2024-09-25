<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ route('index') }}" target="_blank"><img
                src="{{ asset('assets/admin/images/logos.png') }}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="{{ route('index') }}" target="_blank"><img
                src="{{ asset('assets/admin/images/logo-mini.png') }}" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    @if ($about)
                        @foreach ($about as $item)
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle"
                                    src="{{ asset('storage/' . $item->profile_picture) }}" alt="Profile Picture">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">{{ $item->user->name }}</h5>
                                <span>{{ $item->user->role->role_names }}</span>
                            </div>
                        @endforeach
                    @else
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">No User Data</h5>
                        </div>
                    @endif
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                        class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a href="{{ route('about.data-about') }}"
                class="nav-link {{ request()->routeIs(['about.create-data-about', 'about.edit-data-about', 'about.delete-data-about', 'about.data-softdelete-about']) ? 'active' : '' }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-box"></i>
                </span>
                <span class="menu-title">About</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a href="{{ route('education.data-education') }}"
                class="nav-link {{ request()->routeIs(['education.create-data-education', 'education.edit-data-education', 'education.delete-data-education', 'education.data-softdelete-education']) ? 'active' : '' }}">
                <span class="menu-icon">
                    <i class="mdi mdi-school"></i>
                </span>
                <span class="menu-title">Education</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a href="{{ route('experience.data-experiences') }}"
                class="nav-link {{ request()->routeIs(['experience.create-data-experience', 'experience.edit-data-experience', 'experience.delete-data-experience', 'experience.data-softdelete-experience']) ? 'active' : '' }}">
                <span class="menu-icon">
                    <i class="mdi mdi-briefcase"></i>
                </span>
                <span class="menu-title">Experience</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a href="{{ route('service.data-services') }}"
                class="nav-link {{ request()->routeIs(['service.create-data-services', 'service.edit-data-services', 'service.delete-data-services', 'service.data-softdelete-services']) ? 'active' : '' }}">
                <span class="menu-icon">
                    <i class="mdi mdi-wrench"></i>
                </span>
                <span class="menu-title">Service</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a
                href="{{ route('skill.data-skills') }}"class="nav-link {{ request()->routeIs(['skill.create-data-skills', 'skill.edit-data-skill', 'skill.delete-data-skill', 'skill.data-softdelete-skill']) ? 'active' : '' }}">
                <span class="menu-icon">
                    <i class="mdi mdi-format-line-style"></i>
                </span>
                <span class="menu-title">Skills</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a
                href="{{ route('portfolio.data-portfolios') }}"class="nav-link {{ request()->routeIs(['portfolio.create-data-portfolio', 'portfolio.edit-data-portfolio', 'portfolio.delete-data-portfolio', 'portfolio.data-softdelete-portfolio']) ? 'active' : '' }}">
                <span class="menu-icon">
                    <i class="mdi mdi-border-all"></i>
                </span>
                <span class="menu-title">Portfolio</span>
            </a>
        </li>

        <div class="dropdown-divider"></div>

        <li class="nav-item menu-items">
            <a class="nav-link" href="#" onclick="confirmLogout(event)">
                <span class="menu-icon">
                    <i class="mdi mdi-logout-variant"></i>
                </span>
                <span class="menu-title">Logout</span>
            </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ul>
</nav>
