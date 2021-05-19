
@extends('layout')

@section('cabecalho')
Champier bookstore
@endsection

@section('conteudo')  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif   
           <form action="" method="post">
                   @csrf
                    <div class="form-group">
                        <label for="nome">ISBN</label>
                        <input type="text" class="form-control" name="isbn">

                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome">

                        <label for="nome">Autor</label>
                        <input type="text" class="form-control" name="autor">
                        
                        <label for="nome">PRECO</label>
                        <input type="text" class="form-control" name="preco">
                    </div>
                    <button  class="btn btn-primary">Adicionar</button> 
            </form>
@endsection
