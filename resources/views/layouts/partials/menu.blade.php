<li class="menu{{ activeAll($menu->submenu) }}">
    <a href="#{{ $menu->url }}" data-active="{{ expanded($menu->submenu) }}" class="menu-toggle">
        <div class="base-menu">
            <div class="base-icons">
                <i data-feather="{{ $menu->icon }}"></i>
            </div>
            <span>{{ $menu->name }}</span>
        </div>
    </a>
    <i data-feather="chevron-left"></i>
</li>
