
@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header" style="font-size: 20px"> <strong> Detalhes do Imóvel</strong></div>
    <div class="card-body" >
        <div class="row">
            <div class="col-md-12">
                
                <h4> &nbsp;Sobre o Imóvel</h4>
                <p> &nbsp; Descrição: {{$imovel->descricao}}</p>
                <p> &nbsp;Preço: R$ {{number_format($imovel->preco, 2, ',', '.')}}</p>
                <p> &nbsp;Quantidade de quartos: {{$imovel->qtdQuartos}}</p>
                <p> &nbsp;Tipo: {{$imovel->tipo}}</p>
                <p> &nbsp;Finalidade: {{$imovel->finalidade}}</p>
                <hr>
                <h4> &nbsp;Endereço</h4>
                <p> &nbsp;Logradouro: {{$imovel->logradouroEndereco}}</p>
                <p> &nbsp;Bairro: {{$imovel->bairroEndereco}}</p>
                <p> &nbsp;Número: {{$imovel->numeroEndereco}}</p>
                <p> &nbsp;CEP: {{$imovel->cepEndereco}}</p>
                <p> &nbsp;Cidade: {{$imovel->cidadeEndereco}}</p> 

                
            </div>
        </div>
    </div>
</div>
<p><a href="{{ url()->previous()}}" class="btn btn-light">Voltar</a></p>

@endsection
