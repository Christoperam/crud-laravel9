<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;

use function PHPUnit\Framework\returnSelf;

class EmpleadoController extends Controller
{
    //
    public function index()
    {
        $empleados = Empleados::all();
        return view('admin.index')->with('empleados',$empleados);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function edit($id)
    {
        $empleado = Empleados::find($id);
        return view('admin.edit')->with('empleado', $empleado);
    }

    public function update(Request $request, $id)
    {
        $item = Empleados::find($id);

        $item->nombre = $request->get('nombre');
        $item->apellidos = $request->get('apellidos');
        $item->email = $request->get('email');
        $item->password = $request->get('password');
        $item->telefono = $request->get('telefono');
        $item->puesto = $request->get('puesto');
        $item->edad = $request->get('edad');
        $item->sexo = $request->get('sexo');
        $item->sueldo = $request->get('sueldo');
        $item->fechaIngreso = $request->get('fecha');

        $item->save();

        return redirect()->to('/');
    }

    public function destroy($id)
    {
        $empleado = Empleados::find($id);
        $empleado -> delete();
        return redirect('/');
    }

    public function store(Request $request)
    {
        $empleados = new Empleados();

        $empleados->nombre = $request->get('nombre');
        $empleados->apellidos = $request->get('apellidos');
        $empleados->email = $request->get('email');
        $empleados->password = $request->get('password');
        $empleados->telefono = $request->get('telefono');
        $empleados->puesto = $request->get('puesto');
        $empleados->edad = $request->get('edad');
        $empleados->sexo = $request->get('sexo');
        $empleados->sueldo = $request->get('sueldo');
        $empleados->fechaIngreso = $request->get('fecha');

        $empleados->save();

        return redirect()->to('/');
    }

    public function home()
    {
        return view('admin.index');
    }
}
