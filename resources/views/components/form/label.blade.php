@props([
    'required' => 0,
    'label',
])

<label {{ $attributes->class(['col-form-label', 'required' => $required]) }}>{{ $label }}</label>
