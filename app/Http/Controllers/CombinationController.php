<?php

namespace App\Http\Controllers;

use App\Models\Combination;
use Illuminate\Http\Request;

class CombinationController extends Controller
{
    public function index()
    {
        $data = Combination::all();
        return view('home', compact('data'));
    }

    public function create(Request $req)
    {
        $data = new Combination([
            'name' => $req->post['name']
        ]);
        $data->save();
        try {
            return redirect('/home')->with('success', 'Combinação salva com sucesso!');
        } catch (\Throwable $e) {
            return redirect('/home')->with('error', 'Não foi possível criar essa combinação.');
        }
    }

    public function update(Request $req, $id)
    {
        $data = Combination::find($id);
        try {
            $data->name = $req->post['name'];
            $data->save();
            return redirect('/home')->with('success', 'Combinação atualizada com sucesso!');
        } catch (\Throwable $e) {
            return redirect('/home')->with('error', 'Não foi possível atualizar essa combinação. Tente novamente mais tarde.');
        }
    }

    public function delete($id)
    {
        $data = Combination::find($id);
        try {
            $data->delete();
            return redirect('/home')->with('success', 'Combinação removida com sucesso!');
        } catch (\Throwable $e) {
            return redirect('/home')->with('error', 'Não é possível remover essa combinação.');
        }
    }
}
