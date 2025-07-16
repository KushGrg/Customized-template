<div class="bg-white shadow rounded-xl p-4">
    <div class="flex items-center justify-between">
        <!-- Title on the left -->
        <div class="text-start">
            <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>       
        </div>

        <!-- Button on the right, only if permission is granted -->
        @if ($link && $permission)
            @can($permission)
                <a href="{{ $link }}" class="inline-flex items-center px-4 py-2  bg-purple-800 text-white text-sm font-medium rounded-md hover:bg-purple-900 transition" wire:navigate>
                    @if($icon)
                        <x-icon name="{{ $icon }}" class="w-4 h-4 mr-2" />
                    @endif
                    <span>{{ $text ?? 'View' }}</span>
                </a>
            @endcan
        @endif
    </div>

    <!-- Slot content goes here BELOW title and button -->
    @if (trim($slot))
        <div class="mt-4">
            {{ $slot }}
        </div>
    @endif
</div>
