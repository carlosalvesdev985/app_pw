@extends('layout.principal')
@section('conteudo')

<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">IMAGENS</h1>
                <a href="{{ route('add') }}"
                    class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
            </div>
            <table class="table-auto w-full text-center whitespace-no-wrap border">
                <thead class="border">
                    <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 border">ID
                        </th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 border"
                            style="width: 150px">Imagem</th>
                        <th class="px-8 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 border">
                            Nome</th>
                        <th class="px-8 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 border">
                            Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @foreach($imagens as $i)
                    <tr @if($loop->even)class="bg-gray-100"@endif>
                        <td class="px-4 py-3 border">{{$i->id}}</td>
                        <td class="px-4 py-3 border">
                            <img alt="img" class="object-cover object-center w-full h-full block" src="{{url("storage/{$i->img}")}}">
                        </td>
                        <td class="px-8 py-3 border">{{$i->name}}</td>
                        <td class="px-4 py-3 text-sm text-center space-x-3 text-gray-900 border">
                            <a  href="{{ route('edit', $i->id) }}" class="mt-3 text-indigo-500 inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>
                            <a  href="{{ route('delete', $i->id) }}" class="mt-3 text-indigo-500 inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </a>
                            <a href="{{ route('details', $i->slug) }}"
                                class="mt-3 text-indigo-500 inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</section>

<footer class="text-gray-600">
    <div class="bg-gray-100">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class="text-gray-500 text-sm text-center sm:text-left">© 2022 Projeto Programação Web —
                <a href="#" class="text-gray-600 ml-1" target="_blank" rel="noopener noreferrer">Prof. Fabricio</a>
            </p>
            <span
                class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-500 text-sm">Desenvolvido
                por Leandro Miranda e Carlos Alves</span>
        </div>
    </div>
</footer>
teste
@endsection