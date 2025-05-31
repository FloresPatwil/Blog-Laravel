@props(['type'=> 'info']) 
{{-- Atrapa variables --}}
{{-- $attributes es la que recoge las demas  --}}
@php
    switch ($type) {
        case 'info':
            $color = 'text-blue-800 bg-blue-50 dark:bg-blue-400 dark:text-blaue-400';//blue
            break;
        case 'danger':
            $color = 'text-red-800 bg-orange-50 dark:bg-blue-400 dark:text-blaue-400';
            break;
        case 'sucess':
            $color = 'text-black-800 bg-green-50 dark:bg-green-400 dark:text-white-400';
            break;
        case 'warning':
            $color = 'text-yellow-800 bg-yellow-50 dark:bg-blue-400 dark:text-magenta-400';
            break;
        case 'dark':
            $color = 'text-gray-800 bg-gray-50 dark:bg-blue-400 dark:text-orange-400';
            break;    
        default:
            $color = 'blue';
    }
@endphp

<div {{ $attributes->merge(['class'=>'p-4 text-sm rounded-lg' . $color ]) }} role="alert">
    <span class="font-medium" >{{ $Title ?? 'Info Alert' }}</span>{{ $slot }}
</div>