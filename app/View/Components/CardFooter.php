<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardFooter extends Component
{
    public string $backRoute;
    public string $backLabel;
    public string $buttonLabel;
    public string $buttonType;
    public string $buttonIcon;
    public string $buttonClass;
    public string $spinner;
    /**
     * Create a new component instance.
     */
    public function __construct(
        string $backRoute = null,
        string $backLabel = null,
        string $buttonLabel = null,
        string $buttonType = null,
        string $buttonIcon = null,
        string $buttonClass = null,
        string $spinner = null,


    ) {
        $this->backRoute = $backRoute ?? '#';
        $this->backLabel = $backLabel ?? 'Back';
        $this->buttonLabel = $buttonLabel ?? 'Save';
        $this->buttonType = $buttonType ?? 'submit';
        $this->buttonIcon = $buttonIcon ?? 'o-document-plus';
        $this->buttonClass = $buttonClass ?? 'bg-violet-800 text-white';
        $this->spinner = $spinner ?? 'create';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-footer');
    }
}
