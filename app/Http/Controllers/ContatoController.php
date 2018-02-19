<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EmailValidationFormRequest;


class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();
//        if (isset($contatos))
//            $contato = null;
        return view('contacts', compact('contatos'));
    }

    public function cadastro(EmailValidationFormRequest $request, Contato $contato)
    {
        $contato->cadastro($request->nome, $request->email, $request->telefone, $request->masc,
            $request->fem, $request->dataNasc, $request->logradouro, $request->numero, $request->bairro,
            $request->cidade, $request->estado);
        return Redirect::to('/');
    }
//    public function edit(Request $request, $id)
//    {
//        $data = array();
//        $contato = Contato::find($id);
//    }

    public function pesquisa(Request $request){
        if($request->email == null){
            if($request->nome == null)
                $contatos = Contato::all()->where('telefone', '', $request->telefone);
            else
                $contatos = Contato::all()->where('nome', '', $request->nome);
        }else
            $contatos = Contato::all()->where('email', '', $request->email);

        return view('contacts', compact('contatos'));
    }

    public function remove(Request $request){
        $id =$request->id;
        $contato = Contato::find($id);
        $contato->delete();
        return redirect()->action('ContatoController@index');
    }

    public function edit(Request $request){
//        dd($request->id);
//        $id =$request->id;
//        $contato = Contato::find($id);
        //$contato
//        return view('cadastro', compact('contato'));
    }


}
