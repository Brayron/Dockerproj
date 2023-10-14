<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes2;
use Illuminate\Http\Request;

/**
 * Class Estudiantes2Controller
 * @package App\Http\Controllers
 */
class Estudiantes2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes2s = Estudiantes2::paginate();

        return view('estudiantes2.index', compact('estudiantes2s'))
            ->with('i', (request()->input('page', 1) - 1) * $estudiantes2s->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiantes2 = new Estudiantes2();
        return view('estudiantes2.create', compact('estudiantes2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estudiantes2::$rules);

        $estudiantes2 = Estudiantes2::create($request->all());

        return redirect()->route('estudiantes2s.index')
            ->with('success', 'Estudiantes2 created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiantes2 = Estudiantes2::find($id);

        return view('estudiantes2.show', compact('estudiantes2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiantes2 = Estudiantes2::find($id);

        return view('estudiantes2.edit', compact('estudiantes2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estudiantes2 $estudiantes2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiantes2 $estudiantes2)
    {
        request()->validate(Estudiantes2::$rules);

        $estudiantes2->update($request->all());

        return redirect()->route('estudiantes2s.index')
            ->with('success', 'Estudiantes2 updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estudiantes2 = Estudiantes2::find($id)->delete();

        return redirect()->route('estudiantes2s.index')
            ->with('success', 'Estudiantes2 deleted successfully');
    }
}
