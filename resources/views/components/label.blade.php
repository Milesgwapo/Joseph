@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-yellow-700']) }}>
    {{ $value ?? $slot }}
</label>
