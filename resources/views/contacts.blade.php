@extends('adminlte::page')

@section('title', 'Catalogo Telefonico')

@section('content_header')
    <h1>Contatos</h1>
@stop

@section('content')
    <div class="box-header">
        <form action="{{ route('pesquisa') }}" method="POST" class="form form-inline">
            {{ csrf_field() }}
            <input type="text" name="nome" class="form-control" placeholder="Nome">
            <input type="text" name="email" class="form-control" placeholder="Email">
            <input type="text" name="telefone" class="form-control" placeholder="Telefone">
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>

    </div>

    @foreach($contatos as $contato)
    <div class="box-body">
        <ul class="todo-list ui-sortable col-lg-10" >
                <li>
                    <span class="text">Nome: {{ $contato->nome }}</span>
                    <span class="text">Email: {{ $contato->email }}</span>
                    <span class="text">Telefone: {{ $contato->telefone }}</span>
                    <div class="tools">
                        <form action="{{url('remove')}}" method="post">
                            <input type="hidden" name="id" value="{{$contato->id}}">
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </form>

                    </div>
                </li>
        </ul>
    </div>
    @endforeach
    <a href="{{route('cadastro')}}" class="btn btn-primary">Novo contato</a>
@stop