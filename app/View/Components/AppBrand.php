<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppBrand extends Component
{
    public array $images = [
       
    ];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'HTML'
                <a href="/dashboard" wire:navigate>
                    <!-- Hidden when collapsed -->
                    <div {{ $attributes->class(["hidden-when-collapsed"]) }}>
                        <div class="flex justify-center items-center ">
                            <img src="/images/nccslogo.png" alt="NCCS Logo" class="h-12 w-auto" />
                            <!-- <span class="font-bold text-3xl me-3 text-purple-500 pink-300 bg-clip-text"> -->
                            <!-- </span> -->
                        </div>
                    </div>

                    <!-- Display when collapsed -->
                    <div class="display-when-collapsed hidden mx-5 mt-5 mb-1 h-[28px]">
                        <x-icon name="s-cube" class="w-6 -mb-1.5 text-purple-500" />
                    </div>
                </a>
            HTML;
    }
}

    

