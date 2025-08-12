@extends('layouts.app')

@section('content')
    <h1 class="text-center py-3">{{$title}}</h1>
    <div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
        <digital-clock></digital-clock>
    </div>
@endsection
