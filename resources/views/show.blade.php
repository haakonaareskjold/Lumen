@extends('layouts.main')
@section('content')

    @if($user !== null)
        <div class="">{{$user->name}}</div>
        <div>{{$user->email}}</div>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if($user !== null)
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
    @else
        This user does not exist.
    @endif
@endsection
