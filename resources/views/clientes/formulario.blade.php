@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Informe abaixo as informações do cliente <a class="float-right" href="{{ url('/clientes') }}">Listagem de Clientes</a>
                </div>

                <div class="card-body">

                    @if (Session::has('mensagem_sucesso'))
                        <div class="alert alert-success" role="alert">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif 

                    @if (Request::is('*/editar'))
                        {!! Form::Model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id]) !!}
                    @else
                        {!! Form::Open(['url' =>'clientes/salvar']) !!}
                    @endif

                    {!! Form::Label('nome', 'Nome') !!}
                    
                    {!! Form::Input('text', 'nome', null, ['Class' => 'form-control', 'autofocus', 'Placeholder'=>'Nome']) !!}
                    
                    {!! Form::Label('nome', 'Endereço') !!}
                    
                    {!! Form::Input('text', 'endereco', null, ['Class' => 'form-control', 'autofocus', 'Placeholder'=>'Endereço']) !!}
                    
                    {!! Form::Label('nome', 'Número') !!}
                    
                    {!! Form::Input('text', 'numero', null, ['Class' => 'form-control', 'autofocus', 'Placeholder'=>'Número']) !!}
                    <br />

                    {!! Form::Submit('Salvar', ['Class' => 'btn btn-primary']) !!}

                    {!! Form::Close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
