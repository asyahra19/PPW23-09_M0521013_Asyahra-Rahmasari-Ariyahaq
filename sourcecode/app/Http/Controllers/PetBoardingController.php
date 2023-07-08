<?php

namespace App\Http\Controllers;

use App\Models\PetBoarding;
use Illuminate\Http\Request;

class PetBoardingController extends Controller
{
    public function index()
    {
        $boardings = PetBoarding::all();
        return view('boarding.index', compact('boardings'));
    }

    public function create()
    {
        return view('boarding.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pet_name' => 'required',
            'owner_name' => 'required',
            'entry_date' => 'required|date',
            'exit_date' => 'required|date'
        ]);

        PetBoarding::create($data);
        return redirect()->route('boarding.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $boarding = PetBoarding::findOrFail($id);
        return view('boarding.edit', compact('boarding'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'pet_name' => 'required',
            'owner_name' => 'required',
            'entry_date' => 'required|date',
            'exit_date' => 'required|date'
        ]);

        $boarding = PetBoarding::findOrFail($id);
        $boarding->update($data);

        return redirect()->route('boarding.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $boarding = PetBoarding::findOrFail($id);
        $boarding->delete();

        return redirect()->route('boarding.index')->with('success', 'Data berhasil dihapus');
    }
}
