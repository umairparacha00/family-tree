<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Models\Person;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PersonController extends Controller
{
    public function create()
    {
        $fathers = Person::all(['id', 'name']);
        return view('person.create', ['fathers' => $fathers]);
    }

    /**
     * @param StorePersonRequest $request
     * @return RedirectResponse
     */
    public function store(StorePersonRequest $request)
    {
        if (
            $request['father_id'] &&
            $request['father_id'] === '-- select father --'
        ) {
            $father = null;
        } else {
            $father = $request['father_id'];
        }

        $person = Person::query()->create([
            'name' => $request['name'],
            'father_id' => $father,
            'phone' => $request['phone'],
            'address' => $request['address'],
            'city' => $request['city'],
            'country' => $request['country'],
            'caste' => $request['caste'],
            'bio' => $request['bio']
        ]);
        return redirect(route('person.show', $person->id))->with(
            'toast_success',
            'Person created successfully'
        );
    }

    public function show(Person $person)
    {
        return view('person.show', compact('person'));
    }

    public function edit(Person $person)
    {
        $fathers = Person::all(['id', 'name']);
        return view('person.edit', [
            'person' => $person,
            'fathers' => $fathers
        ]);
    }

    public function update(StorePersonRequest $request, Person $person)
    {
        if (
            $request['father_id'] &&
            $request['father_id'] === '-- select father --'
        ) {
            $father = null;
        } else {
            $father = $request['father_id'];
        }

        $person->update([
            'name' => $request['name'],
            'father_id' => $father,
            'phone' => $request['phone'] ?? null,
            'address' => $request['address'],
            'city' => $request['city'],
            'country' => $request['country'],
            'caste' => $request['caste'],
            'bio' => $request['bio'] ?? null
        ]);

        return redirect(route('person.show', $person->id))->with(
            'toast_success',
            'Person updated successfully'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Person $person
     * @return Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
