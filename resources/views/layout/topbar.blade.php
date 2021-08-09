<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" data-bs-toggle="dropdown" aria-expanded="true">
                    <span class="text-dark">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Help</a>
                    <a class="dropdown-item" href="{{ route('logout') }}">Sign out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
