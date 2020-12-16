<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\MenuTitle;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $menuTitles = MenuTitle::get();
        $menus = Menu::get();

        return view('components.sidebar', compact('menuTitles', 'menus'));
        // dd($menu);
    }
}
