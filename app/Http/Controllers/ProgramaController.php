<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Programa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Consulta a la base de datos con el Query Builder, lo recomendable es hacerlo mediante el modelo
        // $programas = DB::table('programas')->get();

        //Haciendo la consulta mediante el modelo
        $programas = Programa::get();

        //Pasamos la variable de la consulta en forma de cadena a la vista con el compact
        return view('programa/programaIndex', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programa/programaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'min:5', 'max:255'],
            'titular' => ['required', 'string', 'min:5', 'max:255'],
            'dependencia' => 'required|string|min:5|max:255',
            'folio' => 'required|integer|min:1|unique:App\Models\Programa,folio',
            'calendario' => 'required|string|min:4|max:6',
        ]);
        dd($request->user());
        Programa::create($request->all());
        return redirect()->route('programa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        return view('programa.programaShow', compact('programa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        return view('programa/programaForm', compact('programa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programa $programa)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'min:5', 'max:255'],
            'titular' => ['required', 'string', 'min:5', 'max:255'],
            'dependencia' => 'required|string|min:5|max:255',
            'folio' => ['required', 'integer', 'min:1', Rule::unique('programas')->ignore($programa->id)],
            'calendario' => 'required|string|min:4|max:6',
        ]);
        Programa::where('id', $programa->id)->update($request->except('_token', '_method'));
        return redirect()->route('programa.show', $programa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        $programa->delete();
        return redirect()->route('programa.index');
    }
}
