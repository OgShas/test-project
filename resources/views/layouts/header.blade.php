<div class="container d-flex justify-content-between align-items-center">
    <h1 class="h3 m-0">{{ config('app.name') }}</h1>
    <nav>
        <ul class="nav">
            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link text-white">Home</a></li>
            <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link text-white">About</a></li>
            <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link text-white">Contact</a></li>
            <li class="nav-item"><a href="{{ url('/create-client') }}" class="nav-link text-white">Create Client</a></li>
            <li class="nav-item"><a href="{{ url('/api/clients') }}" class="nav-link text-white">All Clients</a></li>
        </ul>
    </nav>
</div>
