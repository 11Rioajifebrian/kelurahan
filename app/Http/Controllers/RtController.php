<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use Illuminate\Http\Request;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rts = Rt::all();
        return view('rt.index', compact('rts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rt.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_rt' => 'required|string|max:10|unique:rt',
            'alamat' => 'required|string|max:50',
            'no_hp' => 'required|string|max:50|unique:rt',
        ]);

        Rt::create($request->all());

        return redirect()->route('rt.index')
            ->with('success', 'RT created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rt $rt)
    {
        return view('rt.show', compact('rt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rt $rt)
    {
        return view('rt.edit', compact('rt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rt $rt)
    {
        $request->validate([
            'no_rt' => 'required|string|max:10|unique:rt,no_rt,' . $rt->id,
            'alamat' => 'required|string|max:50',
            'no_hp' => 'required|string|max:50|unique:rt,no_hp,' . $rt->id,
        ]);

        $rt->update($request->all());

        return redirect()->route('rt.index')
            ->with('success', 'RT updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rt $rt)
    {
        $rt->delete();

        return redirect()->route('rt.index')
            ->with('success', 'RT deleted successfully.');
    }
}
