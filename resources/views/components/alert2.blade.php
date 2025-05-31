<div {{ $attributes->merge(['class'=>'p-4 text-sm rounded-lg' . $color ]) }} role="alert">
    <span class="font-medium" >{{ $Title ?? 'Info Alert' }}</span>{{ $slot }}
</div>