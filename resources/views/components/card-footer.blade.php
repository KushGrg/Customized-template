<div class="flex justify-between items-center mt-6">
    <div class="text-start">
       <a href="{{ $backRoute }}"
   class="btn inline-flex items-center px-4 py-2 text-sm font-medium bg-purple-800 rounded text-white">
    <x-icon name="o-arrow-left" class="w-4 h-4 mr-2" />
    {{ $backLabel }}
</a>
    </div>

    <div class="text-end">
        <x-button :label="$buttonLabel" :type="$buttonType" :icon-right="$buttonIcon" :class="$buttonClass" 
            :spinner="$spinner"  />
    </div>
</div>
