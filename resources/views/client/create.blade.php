@extends('layouts.app')

@section('content')

    <div class="container-fluid text-center py-4 fs-3">Create Client</div>

    <div class="container text-center">
        <form action="{{route('clients.store')}}" method="POST" id="createClientFOrm">
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <button type="submit">Create</button>
        </form>
    </div>

@endsection
