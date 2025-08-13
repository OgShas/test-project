@extends('layouts.app')

@section('content')
    <h1 class="text-center py-3">{{$title}}</h1>
    <div class="d-flex justify-content-center align-items-center">
        <digital-clock></digital-clock>
    </div>
@endsection
