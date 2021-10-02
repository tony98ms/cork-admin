<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
    <nav id="compactSidebar">
        <ul class="menu-categories">
            @foreach ($menuData[0]->menu as $menu)
                @include('layouts.partials.menu', ['menu' => $menu])
            @endforeach
        </ul>
    </nav>

    <div id="compact_submenuSidebar" class="submenu-sidebar">
        @foreach ($menuData[0]->menu as $menu)
            @include('layouts.partials.submenu', ['menu' => $menu])
        @endforeach
    </div>
</div>
<!--  END SIDEBAR  -->
