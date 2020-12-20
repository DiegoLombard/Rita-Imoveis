@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header" style="font-size: 20px"> <strong> Lista de Imóveis Cadastrados</strong> </div>
    <div class="card-body">
        <form method="GET"  action="{{route('imoveis.index', 'buscar')}}">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Localizar imovel por cidade" name="buscar">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" > Pesquisar</button>

                </span>

            </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Cidade</th>
                            <th>Preço</th>
                            <th>Finalidade</th>
                            <th>Tipo</th>
                            <th>Ação</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($imoveis as $imovel)
                        <tr>
                            <td>{{$imovel->descricao}}</td>
                            <td>{{$imovel->cidadeEndereco}}</td>
                            <td>{{number_format($imovel->preco, 2, ',', '.')}}</td>
                            <td>{{$imovel->finalidade}}</td>
                            <td>{{$imovel->tipo}}</td>
                            <td>
                                <a href="{{route('imoveis.show', $imovel->id)}}" ><button class="btn btn-outline-primary btn-sm">Detalhes</button> &nbsp;</a>
                                <a href="{{route('imoveis.edit', $imovel->id)}}" ><button class="btn btn-outline-secondary btn-sm">Editar</button> &nbsp;</a>
                                <a href="{{route('imoveis.delete', $imovel->id)}}" ><button class="btn btn-outline-danger btn-sm">Deletar</button> &nbsp;</a>
                            </td>
                            
                        </tr>
                            
                        @endforeach
                        
                    </tbody>
                </table>     
                
            </div>
        </div>
        <div >
            <p> <a href="{{route('imoveis.create')}}"> <button class="btn btn-info">Incluir novo Imóvel</button></a> </p>
        
        <div  class="row d-flex justify-content-center">
            {{ $imoveis->links('pagination::bootstrap-4') }}
        </div>
        </div>
    </div>

    
    </div>
    
 
@endsection


