<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $major =Major::all();
        return view("index", compact("major"))->with("i", (request()->input('page',1)-1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Validate the request data
       $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required|date',

        ]);
        Major::create($request->all());

        session()->flash('success', 'Major created successfully');

        return redirect()->route('major.index');

        }
            

    /**
     * Display the specified resource.
     */
    public function show(Major $major)
    {
        return view('edit',compact('major'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Major $major)
    {
        return view('edit',compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Major $major,$id)
    {
        $request->validate([

            'name' => 'required' .$id,
            'description' => 'required',
            'duration' => 'required|date',
        ]);
        $major = Major::findOrFail($id);
        $major->update($request->all());
    

        session()->flash('success', 'Major updated seccessfully');
    

        return redirect()->route('major.index');
    }

    public function destroy(Major $major)
    {
        $major->delete();
        session()->flash('success', 'Major deleted successfully');

        return redirect()->route('major.index');
    }
}
