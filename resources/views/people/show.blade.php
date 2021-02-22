@extends('layout')

@section('content')
    <h2>{{$person->name}} is a {{$person->occupation}} [<a href="{{ route("people.edit", $person) }}">edit</a>]</h2>
    <h3>Job description</h3>
    <p>{{$person->job_description}}</p>
@endsection

