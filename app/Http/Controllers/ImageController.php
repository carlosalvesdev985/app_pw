<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ImageController extends Controller
{
    //Essa função mosta no dashboad, onde podemos gerenciar nossos arquivos
    public function listagem(){
        $image = Image::all();
        return view('paginas/listagem')->with('imagens', $image);
    }
    //Podemos passar os paremetros para os métodos das duas maneiras, tanto do jeito da função acima quanto da função abaixo.
    
    //Essa função mostra detalhes da nossa imagem 
    public function show(Image $image){
        return view('paginas/detalhes', [
            'image' => $image
        ]);
    }
    //Essa função new para criar uma nova imagem
    public function new(){
        return view('paginas/adicionar');
    }
    //Recebe requisição de criação usando metodo post
    public function save(Request $request){
        $validation = $request->validate([
            'name' => 'string|required',
            'img' => 'file|nullable',
            'description' => 'string|required',
        ]);
        $validation['slug'] = Str::slug($validation['name']);
        if(!empty($validation['img']) && $validation['img']->isValid()){
            $file = $validation['img'];
            $path = $file->store('imagens');
            $validation['img'] = $path;
        };
        Image::create($validation);
        return Redirect::route('list');
    }
    public function edit($id){
        $image = Image::find($id);
        return view('paginas/editar', ['image'=> $image]);
    }
    public function update(Request $request, Image $image){
        $validation = $request->validate([
            'name' => 'string|required',
            'img' => 'file|nullable',
            'description' => 'string|required',
        ]);
        if(!empty($validation['img']) && $validation['img']->isValid()){
            $file = $validation['img'];
            $path = $file->store('imagens');
            $validation['img'] = $path;
        };
        
        $image->fill($validation);
        $image->save();
        return Redirect::route('list');
    }
    public function delete($id){
        $image = Image::find($id);
        $image->delete();
        Storage::delete($image->img);
        return Redirect::route('list');
    }

}
