@props([
    'rand' =>  rand(1, 10000),
    'checked' => false,
    'name' => '',
    'value' => '',
    'title' => '',
    'class' => '',
])
<div class="checkbox-wrapper-3 {{ $class }}">
    <div class="checkbox__flex">
        <div class="checkbox__left">
    <input type="checkbox" name="{{ $name }}" value="{{$value}}" id="cbx-{{ $rand }}" class="cbx-3" @if($checked) checked @endif/>
    <label for="cbx-{{ $rand }}" class="toggle"><span></span></label>
    </div>
        <div class="checkbox__right">{!! $title !!}</div>
    </div>
    @error($name) <div class="checkbox_error">{{$message}}</div>@enderror


</div>
