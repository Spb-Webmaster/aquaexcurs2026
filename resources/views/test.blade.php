@extends('layouts.layout')
@section('content')
<form action="{{ route('test_send') }}" method="post">
    <input  type="text" value="{{ rand(100,10000) }}" />
    <input type="submit" value="send" />
</form>
@endsection
