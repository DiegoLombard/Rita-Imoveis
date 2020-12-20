@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header" >
            <h3>Cadastre o Imóvel</h3> 
        </div>
        <div class="card-body" >
            
        <form action="{{route('imoveis.store')}}" method="POST">
            {{ csrf_field() }}
            <h4>Dados do Imóvel </h4>
            <hr>
            <div class="form-group"  {{ $errors->has('qtdQuartos') ? 'has-error': ''}}>
                <label for="descricao"> Descrição</label>
                <input type="text" class="form-control" placeholder="Descrição" name="descricao" required>
                @if ($errors->has('descricao'))
                <span class="help-block">
                    <strong>{{$errors->first('descricao')}}</strong>
                </span>
                @endif
            </div>
            <div class="row"  >
                <div class="col-md-6">
                    <div class="form-group" {{ $errors->has('preco') ? 'has-error': ''}}>
                        <label for="preco">Preço</label>
                        <input type="text" class="form-control" placeholder="Preço" name="preco" required>
                        @if ($errors->has('preco'))
                            <span class="help-block">
                                <strong>{{$errors->first('preco')}}</strong>
                            </span>
                @endif
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group" {{ $errors->has('descricao') ? 'has-error': ''}}>
                        <label for="qtdQuartos">Quantidade de Quartos</label>
                        <input type="number" class="form-control" placeholder="Quantidade de Quartos" name="qtdQuartos" required>
                            @if ($errors->has('preco'))
                                <span class="help-block">
                                    <strong>{{$errors->first('preco')}}</strong>
                                </span>
                            @endif
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group" {{ $errors->has('tipo') ? 'has-error': ''}}>
                        <label for="tipo">Tipo de Imóvel</label>
                        <select name="tipo" class="form-control" required>
                            <option>Apartamento</option>
                            <option> Casa</option>
                            <option> Kitnet</option>
                        </select>
                        @if ($errors->has('tipo'))
                            <span class="help-block">
                                <strong>{{$errors->first('tipo')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group" {{ $errors->has('finalidade') ? 'has-error': ''}}>
                        <label for="finalidade">Finalidade do Imóvel</label>
                        <select name="finalidade" class="form-control" required>
                            <option>Venda</option>
                            <option> Locação</option>
                            
                        </select>
                        @if ($errors->has('finalidade'))
                            <span class="help-block">
                                <strong>{{$errors->first('finalidade')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <br>
            <h4>Endereço</h4>
            <hr>

                <div class="form-group" {{ $errors->has('lagradouroEndereco') ? 'has-error': ''}}>
                    <label for="logradouroEndereco">Longradouro</label>
                    <input type="text" class="form-control" placeholder="Logradouro" name="logradouroEndereco" required>
                    @if ($errors->has('lagradouroEndereco'))
                    <span class="help-block">
                        <strong>{{$errors->first('lagradouroEndereco')}}</strong>
                    </span>
                    @endif
                </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group" {{ $errors->has('bairroEndereco') ? 'has-error': ''}}>
                        <label for="bairroEndereco">Bairro</label>
                        <input type="text" class="form-control" placeholder="Bairro" name="bairroEndereco" required>
                        @if ($errors->has('bairroEndereco'))
                            <span class="help-block">
                                <strong>{{$errors->first('bairroEndereco')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group" {{ $errors->has('numeroEndereco') ? 'has-error': ''}}>
                        <label for="numeroEndereco">Número</label>
                        <input type="number" class="form-control" placeholder="Número" required name="numeroEndereco">
                        @if ($errors->has('numeroEndereco'))
                                <span class="help-block">
                                    <strong>{{$errors->first('numeroEndereco')}}</strong>
                                </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group" {{ $errors->has('cidadeEndereco') ? 'has-error': ''}}>
                        <label class="cidadeEndereco">Cidade</label>
                        <input type="text" class="form-control" placeholder="Cidade" required name="cidadeEndereco" >
                        @if ($errors->has('cidadeEndereco'))
                                <span class="help-block">
                                    <strong>{{$errors->first('cidadeEndereco')}}</strong>
                                </span>
                        @endif
                    </div>        
                </div>
                <div class="col-md-6">
                    <div class="form-group" {{ $errors->has('cepEndereco') ? 'has-error': ''}}>
                        <label class="cepEndereco">CEP</label>
                        <input type="text" class="form-control" placeholder="CEP" required name="cepEndereco" >
                        @if ($errors->has('cepEndereco'))
                                <span class="help-block">
                                    <strong>{{$errors->first('cepEndereco')}}</strong>
                                </span>
                        @endif
                    </div>        
                </div>
            </div>
           
           <p> <button type="submit" class="btn btn-primary">Cadastrar</button></p>
           <br>
          
        </form>
        <p><a href="{{ url()->previous()}}" class="btn btn-light">Voltar</a></p>
                
    </div>
    
    </div>

    </div>

    @endsection