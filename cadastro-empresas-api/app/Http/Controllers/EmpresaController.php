<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpresaController extends Controller
{
    public function Index()
    {
        return Empresa::all();
    }


    public function Store(Request $request)
    {
        Empresa::create($request->all());
    }


    public function Update(Request $request, $id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->update($request->all());
    }

    public function SoftDelete($id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();

        return redirect()
                ->with('message', 'Empresa deletada com sucesso');
    }

}
