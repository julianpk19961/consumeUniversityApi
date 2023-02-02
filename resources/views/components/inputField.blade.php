<input type="{{ $type ?? 'text' }}" class="{{ $inputClass ?? 'form-control' }}" id="{{ $fieldname ?? 'ERROR_NO_DEF' }}"
    name="{{ $fieldname ?? 'ERROR_NO_DEF' }}" value="{{ old($fieldname ?? '') ?? ($value ?? '') }}"
    placeholder="{{ $placeholder ?? '' }}" {{ ($enable ?? 0) == 1 ? 'readonly' : '' }}>

{{-- Error por validación --}}
@error($fieldname ?? 'ERROR_NO_DEF')
    <small class="text-danger"><strong>*{{ $message }}</strong></small>
@enderror
