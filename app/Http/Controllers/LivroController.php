<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller{
   
    public function index(Request $request) {

        $livros = Livro::query()->orderBy('nome')->get();
        $mensagem= $request->session()->get('mensagem');
       
         return view('livros.index', compact('livros', 'mensagem'));
    }
    
    public function create(Request $request){

        return view('livros.create');
    }

    public function store(Request $request){

        $request->validate([
            'isbn' => 'required',
            'nome' => 'required',
            'autor' => 'required',
            'preco' => 'required'
        ]);
        $livro = Livro::create($request->all());
        $request->session()->flash('mensagem',"Livro {$livro->id} criado com sucesso {$livro->nome}");

        /*$nome = $request->nome; // get do nome 
        $livro=new Livro();
        $livro->save(); */

        /*Livro::create([
            'isbn' => $request->isbn,
            'nome' => $request->nome,
            'autor' => $request->autor,s
            'preco' => $request->preco, 
        ]);*/     
        return redirect('/livros');
    }

    public function destroy(Request $request){
        Livro::destroy($request->id);
       // $livro = Livro::findOrFail($id);
        $request->session()->flash('mensagem',"Livro excluido com sucesso");
        return redirect()->route('listar_livros');
    
    }

    
}
