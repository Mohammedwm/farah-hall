@props([
    'type' => 'text',
    'id' => null,
    'name',
    'label' => null,
    'value' => '',
    'required' => 0,
])
@php
$id = $id ?? $name;
@endphp

@if (isset($label))
    <x-form.label :required="$required">
        {{ $label }}
    </x-form.label>
@endif
<div class="col-10">
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>
</div>
@error($name)
    <p class="invalid-feedback">{{ $message }}</p>
@enderror
