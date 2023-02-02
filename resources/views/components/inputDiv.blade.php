<div class="{{ $divClass ?? null }}" id="{{ $divId ?? 'ERROR_NO_DEF' }}">

    {{-- Label --}}
    <x-inputLabel :fieldname="$fieldname" :show-field-name="$showname" :class="$labelClass ?? null" />

    {{-- input --}}
    <x-inputField :fieldname="$fieldname ?? null" :showname="$showname ?? null" :type="$type ?? null" :class="$inputClass ?? null" :enable="$enable ?? null"
        :placeholder="$placeholder ?? null" :input-class="$inputclass ?? null" :value="$value ?? old($fieldname)" />

</div>
