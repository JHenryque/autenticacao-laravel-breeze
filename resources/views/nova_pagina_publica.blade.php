<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nova Página Publica
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
{{--            apresentar dados do usuario logado        --}}
                    @auth()
                        <p>Estou logado</p>
                        <p>Name: <strong>{{ Auth::user()->name }}</strong></p>
                        <p>E-mail: <strong>{{ Auth::user()->email }}</strong></p>
                        <p><a href="{{ route('main_logout') }}">deslogar</a></p>
                    @else
                        <p>Não existe usuário autenticado</p>
                        <p>Clique <a href="{{ route('login') }}">aqui</a> para fazer login</p>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
