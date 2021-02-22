@extends('layout')

@section('content')
    <h2>Create a new person</h2>
    <form method="POST" action="{{route('people.store')}}">

        @csrf
        <label for="name">Name: *</label>
        <br>
        <input type="text"
               id="name"
               name="name"
               placeholder="Carl"
               value="{{old('name')}}"
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
               placeholder="DJ"
               value="{{old('occupation')}}"
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
            {{old('job_description')}}
        </textarea>
        <br><br>
        <input type="submit" value="Submit">
    </form>
@endsection

