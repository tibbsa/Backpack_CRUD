<!-- html5 range input -->
@include('crud::fields.inc.wrapper_start')
    <label for="{{ $field['name'] }}">{!! $field['label'] !!}</label>
    @include('crud::fields.inc.translatable_icon')
    <input
        type="range"
        name="{{ $field['name'] }}"
        id="{{ $field['name'] }}"
        value="{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}"
        @include('crud::fields.inc.attributes')
        >

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
@include('crud::fields.inc.wrapper_end')