<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 05/10/15
 * Time: 19:33
 */

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Telefone;

class TelefoneController extends Controller
{
    public function destroy($id)
    {
        Telefone::destroy($id);

        return redirect()->route('agenda.index');
    }
}