<?php

namespace App\Http\Controllers;

use App\Models\BodyPart;
use Illuminate\Http\Request;

class BodyPartController extends Controller
{
    public function index()
    {
        $data = BodyPart::all();
        return view('main', compact('data'));
    }

    public function create(Request $req)
    {
        $data = new BodyPart([
            'name' => $req->post['name']
        ]);
        $data->save();
        return redirect('/bodyparts')->with('success', 'Parte do corpo adicionada com sucesso!');
    }

    public function update(Request $req, $id)
    {
        $data = BodyPart::find($id);
        try {
            $data->name = $req->post['name'];
            $data->save();
            return redirect('/bodyparts')->with('success', 'Parte do corpo atualizada com sucesso!');
        } catch(\Throwable $e) {
            return redirect('/bodyparts')->with('error', 'Não foi possível atualizar essa parte do corpo. Tente novamente mais tarde.');
        }
    }

    public function delete($id)
    {
        $data = BodyPart::find($id);
        try {
            $data->delete();
            return redirect('/bodyparts')->with('success', 'Parte do corpo removida com sucesso!');
        } catch(\Throwable $e) {
            return redirect('/bodyparts')->with('error', 'Não é possível remover essa parte do corpo.');
        }
    }

}
