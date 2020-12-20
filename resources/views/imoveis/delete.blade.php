@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header" style="font-size: 20px"> <strong> Tem certeza que deseja remover o Imóvel?</strong></div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">

                <h4>Tem certeza que deseja remover o imóvel?</h4>
                <p>Descrição: {{$imovel->descricao}}</p>
                <p>Preço: R$ {{number_format($imovel->preco, 2, ',', '.')}}</p>
                <p>Quantidade de Quartos: {{$imovel->qtdQuartos}}</p>
                <p>Tipo: {{$imovel->tipo}}</p>
                <p>Finalidade: {{$imovel->finalidade}}</p>
                <hr>
                <h4>Endereço</h4>
                <p>Logradouro: {{$imovel->logradouroEndereco}}</p>
                <p>Bairro: {{$imovel->bairroEndereco}}</p>
                <p>Número: {{$imovel->numeroEndereco}}</p>
                <p>CEP: {{$imovel->cepEndereco}}</p>
                <p>Cidade: {{$imovel->cidadeEndereco}}</p>
                <a href="{{route('imoveis.destroy', $imovel->id)}}" ><button class="btn btn-outline-danger btn-sm">Deletar</button> &nbsp;</a>
            </div>
            
            </div>
        </div>
        
</div>
&nbsp; &nbsp; &nbsp; <p><a href="{{ url()->previous()}}" class="btn btn-light">Voltar</a></p>

@endsection