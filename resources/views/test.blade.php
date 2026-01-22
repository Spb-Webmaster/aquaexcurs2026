@extends('layouts.layout')
@section('content')
test
<x-form
    :action="route('test_pdf')"
>
    <div class="">
        <input type="submit" />
    </div>
</x-form>
@endsection
