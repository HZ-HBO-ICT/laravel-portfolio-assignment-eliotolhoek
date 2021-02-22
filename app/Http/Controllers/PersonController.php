<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Person::all();

        return view('people.index', ['people'=> $people]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('people.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        Person::create($this->validatePerson($request));

        return redirect(route('people.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     */
    public function show(Person $person)
    {
        return view('people.show', ['person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     */
    public function edit(Person $person)
    {
        return view('people.edit', ['person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     */
    public function update(Request $request, Person $person)
    {
        $person->update($this->validatePerson($request));

        return redirect(route('people.show', $person));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return redirect(route('people.index'));
    }

    private function validatePerson(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'occupation' => 'required',
            'job_description' => ''
        ]);
    }
}
