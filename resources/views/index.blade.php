@extends('layouts.main')

@section('content')

    @forelse($users as $user)
    <p>Name:  {{$user->name}}</p>
    <p>email:  {{$user->email}}</p>
    @empty
        no users exist.
    @endforelse

@endsection
