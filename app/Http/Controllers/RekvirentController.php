<?php

namespace App\Http\Controllers;

use App\Rekvirent;
use Illuminate\Http\Request;

class RekvirentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekvirenter = Rekvirent::all();
        return view('rekvirent.index', compact('rekvirenter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()  {
        return view('rekvirent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        Rekvirent::create(
            request()->validate([
                'name' => ['required', 'min: 2'],
                'initialer' => ['required'],

            ]));

        return redirect('/rekvirent');
    }

    /**
     * Display the specified resource.
     */

    public function show(Rekvirent $rekvirent)
    {
        return view('rekvirent.show', compact('rekvirent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rekvirent  $rekvirent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekvirent $rekvirent)
    {
        return view('rekvirent.edit', compact('rekvirent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rekvirent  $rekvirent
     * @return \Illuminate\Http\Response
     */
    public function update(Rekvirent $rekvirent)
    {
        $rekvirent->update(request(['name', 'initialer']));

        return redirect('/rekvirent');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rekvirent $rekvirent)
    {
        $rekvirent->delete();

        return redirect('/rekvirent');
    }
}
