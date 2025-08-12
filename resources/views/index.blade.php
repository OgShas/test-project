@extends('layouts.app')

@section('content')
    {{-- ===== MAIN CONTENT ===== --}}
    <main class="py-5">
        <div class="container">
            <h2 class="mb-4">Welcome to {{ config('app.name') }}</h2>
            <p>This is your homepage. You can edit this section in <code>index.blade.php</code>.</p>

            {{-- Example Bootstrap grid --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm mb-4">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title 1</h5>
                            <p class="card-text">Some example text to build on the card title.</p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
                </div>
                {{-- Repeat for more cards --}}
            </div>
        </div>
    </main>
@endsection
