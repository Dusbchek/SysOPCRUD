@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-red-500']) }}>
        {{ $status }}
    </div>
@endif
