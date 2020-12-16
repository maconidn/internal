<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">Stisla</a>
        </div>
        <ul class="sidebar-menu">
            @foreach ($menuTitles as $menuTitle)
            <li class="menu-header">{{ $menuTitle->name }}</li>
            @foreach ($menus as $menu)
                @if ($menu->menu_titles_id == $menuTitle->id)
                <li>
                    <a href="{{ route($menu->url) }}" class="nav-link"><i class="{{ $menu->icon }}"></i><span>{{ $menu->name }}</span></a>
                </li>
                @endif
            @endforeach
            @endforeach
        </ul>
    </aside>
</div>
