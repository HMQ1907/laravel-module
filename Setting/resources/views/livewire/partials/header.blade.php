<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ Module::asset('setting:images/' . $module->icon) }}" alt="" height="35">
            </a>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($menus as $menu)
                        <li class="nav-item dropdown tw-mr-3">
                            <a class="nav-link @if (count($menu['children']) > 0) dropdown-toggle custom-dropdown-toggle @endif"
                                href="{{ route($menu['uri']) }}" role="button" wire:navigate>
                                <i class="{{ $menu['icon'] }} tw-mr-1"></i>
                                {{ $menu['title'] }}
                            </a>

                            @include('setting::components.layouts.partials.sub_menu', [
                                'subMenus' => $menu['children'],
                                'style' =>
                                    'left: 10%; top: 40px; margin-left: 1px; dispaly: none; position: absolute',
                            ])
                        </li>
                    @endforeach
                </ul>
                <div class="nav-item dropdown tw-cursor-pointer">
                    <div class="pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong class="me-2">{{ Auth::user()->name }}</strong>
                        <img src="https://gbm-stg.webike.net/pm-new/img/7c4d1533480bb4c5911d95699fef5186.jpg"
                            class="img-thumbnail" alt="avatar" width="40" height="40">
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="">Change Password</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" wire:click="logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    let dropdowns = document.querySelectorAll('.custom-dropdown-toggle')
    dropdowns.forEach((dd) => {
        dd.addEventListener('click', function(e) {
            var el = this.nextElementSibling
            el.style.display = el.style.display === 'block' ? 'none' : 'block'
        })
    })
</script>
