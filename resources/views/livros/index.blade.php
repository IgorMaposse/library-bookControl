@extends('layout')

@section('cabecalho')
Champier bookstore
@endsection

@section('conteudo')  

@if(!empty($mensagem))
 <div class=" alert alert-success">
 {{$mensagem}}         
 </div>
 @endif

<!--<a href="/livros/criar" class="btn btn-dark mb-2">Adicionar</a> -->
<a href="{{route('form_criar_livro')}}" class="btn btn-dark mb-2">Adicionar</a> 
    <ul class ="list-group">
        @foreach($livros as $livro)        
        <li class ="list-group-item d-flex justify-content-between align-itens-center">
        {{$livro->nome}}
            <form method="post" action="/livros/{{ $livro->id }}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($livro->nome) }}')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </li>
        @endforeach
    </ul>
@endsection    