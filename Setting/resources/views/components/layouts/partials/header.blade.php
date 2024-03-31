<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="https://gbm-stg.webike.net/pm-new/img/logo.png" alt="" height="35">
            </a>
            {{-- @if (Auth::check()) --}}
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Local Products</a></li>
                            <li><a class="dropdown-item" href="">Local Manufacturers</a></li>
                            <li><a class="dropdown-item" href="">Local Models</a></li>
                            <li><a class="dropdown-item" href="">Local Products</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="nav-item dropdown">
                    <div class="pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong class="me-2"></strong>
                        <img src="https://gbm-stg.webike.net/pm-new/img/7c4d1533480bb4c5911d95699fef5186.jpg"
                            class="img-thumbnail" alt="avatar" width="40" height="40">
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="">Change Password</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="">Logout</a></li>
                    </ul>
                </div>
            </div>
            {{-- @endif --}}
        </div>
    </nav>
</header>
