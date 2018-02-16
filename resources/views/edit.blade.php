@extends('adminlte::page')

@section('title', 'Editar Contato')

@section('content_header')
    <h1>Editar contato</h1>
@stop

@section('content')
    <div class="box-body">
        <form method="POST" action="{{ route('edit.store') }}">
            {{ csrf_field() }}
            <div class="form-group col-lg-5">
                <input type="text" name="nome" value="{{ $contato->name }}" placeholder="Nome" class="form-control">
            </div>

            <div class="form-group col-lg-5">
                <input type="text" name="email" value="{{ $contato->email }}" placeholder="Email" class="form-control">
            </div>

            <div class="form-group col-lg-10">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>

        </form>
    </div>
@stop