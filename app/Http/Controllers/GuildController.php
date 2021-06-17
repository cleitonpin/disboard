<?php

namespace App\Http\Controllers;

use App\Models\Guild;
use Illuminate\Http\Request;

class GuildController extends Controller
{
    public function index() {

        $guilds['guilds'] = Guild::all();

        return view('guilds', $guilds);
    }

    public function create(Request $r)
    {

        $guild = new Guild();
        $guild->name = $r->name;

        if ($guild->save()) {
            return redirect('guilds');
        }
    }

    public function delete(int $id)
    {
        Guild::destroy($id);
        return redirect()->route('guilds.listar')->with('sucesso', 'Livro excluído com sucesso');
    }

    public function editar(Request $request, int $id) {

        $request->validate([
            'name'  => 'required',
        ]);

        Guild::where('id', $id)->update($request->except('_token'));


        return redirect()->route('guilds.listar')->with('sucesso', 'Livro atualizado com sucesso');
    }
} 
