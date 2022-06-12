@extends('layout.principal')

@section('conteudo')

<section class="text-gray-600 overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
          <img alt="sinais" class="lg:w-1/2 w-full lg:h-full h-full object-cover object-center rounded" src="{{url("storage/{$image->img}")}}">
          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
              <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$image->name}}</h1>
              <p class="leading-relaxed">{{$image->description}}</p>
          </div>
      </div>
  </div>
@endsection