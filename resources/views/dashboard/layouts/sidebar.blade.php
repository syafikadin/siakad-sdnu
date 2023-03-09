<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/courses*') ? 'active' : '' }}" href="/dashboard/jadwal">
                <span data-feather="book-open" class="align-text-bottom"></span>
                Jadwal Pelajaran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/raports*') ? 'active' : '' }}" href="/dashboard/raports">
                <span data-feather="book-open" class="align-text-bottom"></span>
                Raport
                </a>
            </li>
        </ul>

        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
            <span data-feather="grid" class="align-text-bottom"></span>
            Category
            </a>
        </li>
        </ul>
        @endcan
    </div>
</nav>