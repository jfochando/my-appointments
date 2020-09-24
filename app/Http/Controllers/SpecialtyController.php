<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialties = Specialty::all();
        return view('specialties.index', compact('specialties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specialties.create');
    }

    public function perfomValidation($request) {
        // Validamos el formulario
        $rules = [
            'name' => 'required|min:3'
        ];
        $messages = [
            'required' => 'El campo Nombre es obligatorio',
            'min' => 'El campo nombre tiene que tener al menos 3 caracteres'
        ];
        $this->validate($request, $rules, $messages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->perfomValidation($request);
        $specialty = New Specialty();
        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        // return back(); // Vuelve a tras
        //redireccion normal
        // return redirect('/specialties');
        // redireccicon con notificaciones
        $notification = 'La especilidad se ha registrado correctamente' ;
        return redirect('/specialties')->with(compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specialty  $specialty
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialty $specialty)
    {
        // dd($specialty->all());
        return view('specialties.edit', compact('specialty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialty  $specialty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialty $specialty)
    {
        // Validamos el formulario
        // $rules = [
        //     'name' => 'required|min:3'
        // ];
        // $messages = [
        //     'required' => 'El campo Nombre es obligatorio',
        //     'min' => 'El campo nombre tiene que tener al menos 3 caracteres'
        // ];
        // $this->validate($request, $rules, $messages);

        $this->perfomValidation($request);

        $specialty->name = $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save();

        // return back();
        // return redirect('/specialties');
        $notification = 'La especilidad se ha actualizado correctamente';
        return redirect('/specialties')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialty  $specialty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialty $specialty)
    {
        $specialtyDeleted = $specialty->name;
        $specialty->delete();
        $notification = 'La especilidad '. $specialtyDeleted .' se ha eliminado correctamente';
        return redirect('/specialties')->with(compact('notification'));
    }
}
