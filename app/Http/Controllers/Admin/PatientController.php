<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class PatientController extends Controller
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
        $patients = User::patients()->paginate(10);
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'dni' => 'nullable|min:5',
            'phone' => 'nullable|min:8'
        ];

        $this->validate($request, $rules);
        User::create(
            $request->only('name','email', 'dni', 'address', 'phone')
            +
               [
                    'role' => 'patient',
                    'password' => Hash::make($request->input('password'))
                ]
        );

        $notification = 'El Paciente se ha registrado con exito.';
        return redirect('/patients')->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'dni' => 'nullable|min:5',
            'phone' => 'nullable|min:8'
        ];

        $this->validate($request, $rules);
        $user = User::patients()->findOrFail($id);
        $data = $request->only('name', 'email', 'dni', 'address', 'phone');
        $password = $request->input('password');
        if ($password) {
            $data['password'] = Hash::make($password);
        }
        $user->fill($data);
        $user->save();

        $notification = 'La información del paciente se ha actualizado con exito.';
        return redirect('/patients')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $patient)
    {
        $patientName = $patient->name;
        $patient->delete();

        $notification = 'El paciente, '. $patientName .', se ha borrado con exito.';
        return redirect('patients')->with(compact('notification'));

    }
}
