{{-- <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-text mx-3">{{ __('Homepage') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

           

            <li class="nav-item {{ request()->is('admin/exams/questions') || request()->is('admin/exams/questions') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.questions.index') }}">
                    <i data-feather="trending-up"></i>
                    <span>{{ __('Question') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/exams/options') || request()->is('admin/exams/options') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.options.index') }}">
                    <i data-feather="trending-up"></i>
                    <span>{{ __('Option') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/exams/results') || request()->is('admin/exams/results') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.results.index') }}">
                    <i data-feather="trending-up"></i>
                    <span>{{ __('Result') }}</span></a>
            </li>



</ul> --}}

<nav id="sidebar" class="col-md-2 col-lg-2 d-md-block sidebar collpase ">
    <div class="position-sticky">
        <ul class="nav flex-column ms-1">
            <li class="nav-item">
                <a href="/admin/home" class="nav-link" aria-current="page">
                    <i data-feather="arrow-left"></i>
                    <span class="ml-2 ms-2">Back</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            
            <li class="nav-item {{ request()->is('admin/exams/questions') || request()->is('admin/exams/questions') ? 'active' : '' }}">
                <a class="nav-link" aria-current="page" href="{{ route('admin.questions.index') }}">
                <i data-feather="trending-up"></i>
                <span class="ml-2 ms-2">{{ __('Question') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/exams/options') || request()->is('admin/exams/options') ? 'active' : '' }}">
                <a class="nav-link" aria-current="page" href="{{ route('admin.options.index') }}">
                <i data-feather="trending-up"></i>
                <span class="ml-2 ms-2">{{ __('Option') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/exams/results') || request()->is('admin/exams/results') ? 'active' : '' }}">
                <a class="nav-link" aria-current="page" href="{{ route('admin.results.index') }}">
                <i data-feather="trending-up"></i>
                <span class="ml-2 ms-2">{{ __('Result') }}</span></a>
            </li>

                

        </ul>
    </div>
</nav>


<script src="https://unpkg.com/feather-icons"></script>
<script>
feather.replace()
</script>