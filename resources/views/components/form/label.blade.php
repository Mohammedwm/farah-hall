@props([
    'required' => false,
    'label',
    ])

<label {{$attributes->class(['col-2 col-form-label','required'=> $required]) }}>
    {{ $slot }}
</label>
