@extends('layouts.app')

@section('content')
    <h1>Admin Page</h1>
    <p>Welcome to the admin page!</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
