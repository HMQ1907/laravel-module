@if (count($subMenus) > 0)
    <ul class="dropdown-menu" style='{{ $style }}'>
        @foreach ($subMenus as $subMenu)
            <li class="@if (count($subMenu['children']) > 0) nav-item dropdown dropend @endif">
                <a href="#"
                    class="@if (count($subMenu['children']) > 0) nav-link dropdown-toggle @else dropdown-item @endif"
                    @if (count($subMenu['children']) > 0) style="margin-left: 6px" @endif role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ $subMenu['title'] }}
                </a>

                @include('setting::components.layouts.partials.sub_menu', [
                    'subMenus' => $subMenu['children'],
                    'style' => 'left: 100%; top: 0; margin-left: 1px; dispaly: none; position: absolute;',
                ])
            </li>
        @endforeach
    </ul>
@endif
