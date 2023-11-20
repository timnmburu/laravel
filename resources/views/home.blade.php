@extends('layouts.app')

@section('content')
    <h1>Welcome to the Home Page</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
