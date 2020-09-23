<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Administración</span>
                </h6>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.html">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="icons.html">
                            <i class="ni ni-planet text-blue"></i>
                            <span class="nav-link-text">Especialidades</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="map.html">
                            <i class="ni ni-single-02 text-orange"></i>
                            <span class="nav-link-text">Médicos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.html">
                            <i class="ni ni-satisfied text-info"></i>
                            <span class="nav-link-text">Pacientes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('formLogout').submit();">
                            <i class="ni ni-button-power text-dark"></i>
                            <span class="nav-link-text">{{ __('Cerrar Sesión') }}</span>
                        </a>
                        <form action="{{ route('logout') }}" method="post" style="display: none" id="formLogout">
                            @csrf
                        </form>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Informes</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href=""
                            target="_blank">
                            <i class="ni ni-collection text-red"></i>
                            <span class="nav-link-text">{{ __('Frecuenca de citas') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""
                            target="_blank">
                            <i class="ni ni-spaceship"></i>
                            <span class="nav-link-text">{{ __('Médicos mas activos') }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
