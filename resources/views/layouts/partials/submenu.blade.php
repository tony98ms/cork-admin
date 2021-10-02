<div class="submenu{{ showAll($menu->submenu) }}" id="{{ $menu->url }}">
    <ul class="submenu-list" data-parent-element="#{{ $menu->url }}">
        @foreach ($menu->submenu as $submenu)
            <li class="{{ active($submenu->url) }}">
                <a href="{{ route($submenu->route) }}">
                    <span class="icon"> <i data-feather="circle"></i></span>
                    {{ $submenu->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
