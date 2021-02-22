@extends('layout')

@section('content')
    <h2>Edit {{$person->name}}</h2>
    <form method="POST" action="{{route('people.update', $person)}}">
        @csrf
        @method('PUT')
        <label for="name">Name: *</label>
        <br>
        <input type="text"
               id="name"
               name="name"
               value="{{$person->name}}"
               placeholder="Carl"
               required>
        @error('name')
            <p style="color: red">{{$errors->first('name')}}</p>
        @enderror
        <br><br>
        <label for="occupation">Occupation: *</label>
        <br>
        <input type="text"
               id="occupation"
               name="occupation"
               value="{{$person->occupation}}"
               placeholder="DJ"
               required>
        @error('occupation')
        <p style="color: red">{{$errors->first('occupation')}}</p>
        @enderror
        <br><br>
        <label for="job_description">Job description:</label><br>
        <textarea id="job_description"
                  name="job_description"
                  style="width: 600px; height: 100px"
                  placeholder="Description of what you do">
            {{$person->job_description}}
        </textarea>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <form method="POST" action="{{route('people.destroy', $person)}}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
@endsection

