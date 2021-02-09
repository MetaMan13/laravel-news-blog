<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideNavigationItem extends Component
{
    public $match;
    public $route;
    public $name;
    public $icons = [
        'globe' => 'fas fa-globe-europe',
        'location' => 'fas fa-map-marker-alt',
        'positive' => 'fas fa-smile-beam',
        'science' => 'fas fa-microscope',
        'health' => 'fas fa-heartbeat',
        'sport' => 'fas fa-futbol',
        'finance' => 'fas fa-money-bill-alt',
        'lifestyle' => 'fab fa-pagelines',
        'politics' => 'fas fa-landmark',
        'crime' => 'fas fa-balance-scale-right',
        'celebrity' => 'fas fa-camera',
    ];
    public $iconName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $name, $iconName, $match = null)
    {
        $this->route = $route;
        $this->name = $name;
        $this->iconName = $iconName;
        $this->match = $match;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.side-navigation.item');
    }
}
