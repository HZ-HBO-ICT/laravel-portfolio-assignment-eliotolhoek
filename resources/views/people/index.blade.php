@extends('layout')

@section('content')
<h2>Index of people</h2>
<ul>
    @foreach($people as $person)
        <li><a href="{{ route('people.show', $person) }}">{{ $person->name }} is a {{ $person->occupation }}</a></li>
    @endforeach
</ul>
<p><a href="{{route('people.create')}}">Add new person</a></p>
@endsection

