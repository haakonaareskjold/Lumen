@extends('layouts.main')
@section('content')

    @if($user !== null)
        <div class="">{{$user->name}}</div>
        <div>{{$user->email}}</div>
    @else
        This user does not exist.
    @endif
@endsection
