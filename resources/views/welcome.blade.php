<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loja de Veículos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <h1 class="text-2xl font-bold text-indigo-600">🚗 Venda de Veículos</h1>
                
                <div class="flex gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-700 font-bold hover:text-indigo-600">Painel Admin</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 font-bold hover:text-indigo-600">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-700 font-bold hover:text-indigo-600">Registrar</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Veículos Disponíveis</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($veiculos as $veiculo)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transition-transform duration-300">
                <div class="h-56 overflow-hidden">
                    <img src="{{ $veiculo->foto1 }}" alt="{{ $veiculo->modelo }}" class="w-full h-full object-cover">
                </div>
                
                <div class="p-6">
                    <div class="text-sm text-indigo-500 font-bold uppercase">{{ $veiculo->marca }}</div>
                    <h3 class="text-xl font-bold text-gray-900 mt-1">{{ $veiculo->modelo }}</h3>
                    <p class="text-gray-500 text-sm mt-1">{{ $veiculo->cor }} • {{ $veiculo->ano }}</p>
                    
                    <p class="text-gray-600 mt-3 text-sm line-clamp-2">
                        {{ $veiculo->descricao }}
                    </p>

                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-2xl font-bold text-gray-900">R$ {{ number_format($veiculo->valor, 2, ',', '.') }}</span>
                    </div>
                    
                    <button class="mt-4 w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition">
                        Ver Detalhes
                    </button>
                </div>
            </div>
            @endforeach
        </div>

        @if($veiculos->isEmpty())
            <div class="text-center py-10">
                <p class="text-gray-500 text-lg">Nenhum veículo cadastrado no momento.</p>
            </div>
        @endif
    </div>

</body>
</html>