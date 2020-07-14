@extends('layouts.admin-home')

@section('content')
<!--Mensagem de sucesso-->
@if(session()->has('sucesso'))
<div class="alert alert-success">
    {{ session()->get('sucesso') }}
</div>
@endif

<div id="cabecalho">
    <h1 class="text-center">Imóveis</h1><br/><br/>
    <div class="row">      
        <div class="col-md-12 text-center">
            <h2>Lista de Proprietários</h2>
            <div class="table-responsive">        
                <table class="table table-hover" id="id_tabela">
                    <thead>
                        <tr>
                            <th>#</th>                                                     
                            <th>Nome</th>                       
                            <th>Cnpj/Cpf</th>
                            <th>Email</th>                            
                            <th>Telefone</th>
                            <th>Endereço</th>
                            <th>Cidade</th>
                            <th>UF</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($obj_propr as $valor)
                        <tr>
                            <td>{{$valor->id}}</td>
                            <td>{{$valor->nome}}</td>                          
                            <td>{{$valor->cnpj_cpf}}</td>
                            <td>{{$valor->email}}</td>                   
                            <td>{{$valor->telefone}}</td>
                            <td>{{$valor->endereco}}</td>   
                            <td>{{$valor->cidade}}</td>
                            <td>{{$valor->estado}}</td>
                        </tr>   
                        @endforeach 
                    </tbody>    
                </table>           

            </div><!-- /fim da div table-responsive-->    


        </div>         

    </div>
</div>

@endsection
