<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 01/10/15
 * Time: 21:37
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index($letra = "A"){
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', compact('pessoas'));
    }

    public function busca(Request $request)
    {
        $busca = $request->busca;
        $pessoas = [];
        if (!empty($busca)) {
            $pessoas = Pessoa::where('nome', 'like', "%{$busca}%")
                ->orWhere('apelido', 'like', "%{$busca}%")
                ->get();
        }
        return view('agenda', compact('pessoas'));

    }


}