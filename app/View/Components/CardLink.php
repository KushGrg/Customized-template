<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardLink extends Component
{
    public string $title;
    public ?string $link;
    public ?string $icon;
    public ?string $text;
    public ?string $permission;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $title,
        string $link = null,
        string $icon = null,
        string $text = null,
        string $permission = null
    ) {
        $this->title = $title;
        $this->link = $link;
        $this->icon = $icon;
        $this->text = $text;
        $this->permission = $permission;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-link');
    }
}
