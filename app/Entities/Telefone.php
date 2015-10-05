<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 01/10/15
 * Time: 21:53
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'descricao',
        'codpais',
        'ddd',
        'prefixo',
        'sufixo'
    ];

    public function getNumeroAttribute(){
        return "{$this->codpais} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }
}