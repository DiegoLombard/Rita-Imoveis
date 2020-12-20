@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rita Imoveis - Administração de Imóveis') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p> {{ __('Seja Bem-Vindo(a)!') }}</p>
                    <p> <a href="{{route('imoveis.create')}}"> <button class="btn btn-info">Incluir novo Imóvel</button></a> </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
