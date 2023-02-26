@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-base-content bg-transparent rounded-md shadow-sm border-gray-300 focus:border-primary focus:ring focus:ring-primary-content focus:ring-opacity-50']) !!}>
