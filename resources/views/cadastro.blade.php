@extends('adminlte::page')

@section('title', 'Novo Contato')

@section('content_header')
    <h1>Novo contato</h1>
@stop

@section('content')
    <div class="box-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p> {{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('cadastro.store') }}">
            {{ csrf_field() }}

            <div class="form-group col-lg-5">
                <input type="text" name="nome" value="" placeholder="Nome" class="form-control">
            </div>

            <div class="form-group col-lg-5">
                <input type="text" name="email" value="" placeholder="Email" class="form-control">
            </div>

            <div class="form-group col-lg-4">
                <input type="text" name="telefone" value="" placeholder="Telefone" class="form-control">
            </div>

            <div class="form-group col-lg-1">
                Masculino<input name="masc" value="" type="checkbox" class="checkbox">
            </div>
            <div class="form-group col-lg-1">
                Feminino<input name="fem" value="" type="checkbox" class="checkbox">
            </div>

            <div class="form-group col-lg-3">
                <input type="date" name="dataNasc"/>
            </div>

            <div class="form-group col-lg-4">
                <input type="text" name="logradouro" placeholder="Logradouro" class="form-control">
            </div>

            <div class="form-group col-lg-5">
                <input type="text" name="numero" placeholder="Numero" class="form-control">
            </div>

            <div class="form-group col-lg-5">
                <input type="text" name="bairro" placeholder="Bairro" class="form-control">
            </div>

            <div class="form-group col-lg-5">
                <input type="text" name="cidade" placeholder="Cidade" class="form-control">
            </div>

            <div class="form-group col-lg-5">
                <input type="text" name="estado" placeholder="Estado" class="form-control">
            </div>

            <div class="form-group col-lg-10">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>

        </form>
    </div>
@stop

{{--@if(is_null($contato)){--}}
{{--{{$valuemasc = 0}}--}}
{{--{{$valuefem = 0}}--}}
{{--{{ $nome = ""}}--}}
{{--{{ $email = ""}}--}}
{{--{{ $telefone = ""}}--}}
{{--}@elseif($contato->masc != null)--}}
{{--{{$valuemasc = 1}}--}}
{{--@elseif($contato->fem != null){--}}
{{--{{$valuefem = 1}}--}}
{{--}--}}
{{--{{$nome = $contato->nome}}--}}
{{--{{$email = $contato->email}}--}}
{{--{{$email = $contato->telefone}}--}}
{{--@endif--}}