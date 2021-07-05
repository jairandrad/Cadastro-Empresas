<?php

namespace App\Http\Controllers;

use App\Models\Unidade;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function Index()
    {
        return Unidade::all();
    }


    public function Store(Request $request)
    {
        Unidade::create($request->all());
    }


    public function Update(Request $request, $id)
    {
        $unidade = Unidade::findOrFail($id);
        $unidade->update($request->all());
    }

    public function SoftDelete($id)
    {
        $unidade = Unidade::findOrFail($id);
        $unidade->delete();

        return redirect()
                ->with('message', 'Unidade deletada com sucesso');
    }

}
