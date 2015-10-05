<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 05/10/15
 * Time: 19:34
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;

class PessoaController
{
    public function destroy($id)
    {
        Pessoa::destroy($id);

        return redirect()->route('agenda.index');
    }
}