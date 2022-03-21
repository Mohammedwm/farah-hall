@props([
    'type' => 'text',
    'id' => null,
    'name',
    'value' => '',
])
@php
$id = $id ?? $name;
@endphp

<input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ old($name, $value) }}"
    {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>

@error($name)
    <p class="invalid-feedback">{{ $message }}</p>
@enderror
