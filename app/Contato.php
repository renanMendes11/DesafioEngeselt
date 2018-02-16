<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function contacts(){
    }

    public function cadastro($nome, $email, $telefone, $masc, $fem, $dataNasc,
                             $logradouro, $numero, $bairro, $cidade, $estado){
        if($masc = 'on')
            $this->sexo = 'masculino';
        elseif ($fem = 'on')
            $this->sexo = 'feminino';
        else
            $this->sexo = '';

        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->dataNasc = $dataNasc;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->save();
    }


}
