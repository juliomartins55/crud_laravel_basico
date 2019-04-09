@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Clientes <a class="float-right" href="{{ url('/clientes/novo') }}">Novo Cliente</a>
                </div>

                <div class="card-body">

                	@if (Session::has('mensagem_sucesso'))
                        <div class="alert alert-success" role="alert">{{ Session::get('mensagem_sucesso') }}</div>
                    @endif
                	
                    <table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Nome</th>
					      <th scope="col">Endereço</th>
					      <th scope="col">Número</th>
					      <th scope="col">Ações</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($clientes as $cliente)
					    <tr>
					      <!-- <th scope="row">{{ $cliente['nome'] }}</th> -->
					      <th scope="row">{{ $cliente->nome }}</th> 
					      <td>{{ $cliente['endereco'] }}</td>
					      <td>{{ $cliente['numero'] }}</td>
					      <td>
					      	<a href="clientes/{{$cliente->id}}/editar" class="btn btn-primary">Editar</a>
					      	{!! Form::Open(['method' => 'DELETE', 'url' => 'clientes/'.$cliente->id, 'style' => 'display: inline;' ]) !!}
					      	<!--<a href="clientes/{{$cliente->id}}/excluir" class="btn btn-default">Excluir</a>-->
					      	<button type="submit" class="btn btn-default">Excluir</button>
					      	{!! Form::Close() !!}
					      </td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
