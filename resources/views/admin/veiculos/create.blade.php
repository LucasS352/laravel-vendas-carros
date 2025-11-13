<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastrar Novo Veículo') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Ops! Algo deu errado:</strong>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <form method="POST" action="{{ route('veiculos.store') }}">
                        @csrf 
                        
                        <div class="mt-4">
                            <label for="marca" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Marca</label>
                            <input id="marca" name="marca" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>
                        </div>

                        <div class="mt-4">
                             <label for="modelo" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Modelo</label>
                             <input id="modelo" name="modelo" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>
                        </div>
                        
                        <div class="mt-4"><label for="cor" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Cor</label><input id="cor" name="cor" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required></div>
                        <div class="mt-4"><label for="ano" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Ano</label><input id="ano" name="ano" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required></div>
                        <div class="mt-4"><label for="quilometragem" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Quilometragem</label><input id="quilometragem" name="quilometragem" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required></div>
                        <div class="mt-4"><label for="valor" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Valor</label><input id="valor" name="valor" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required></div>
                        <div class="mt-4"><label for="descricao" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Descrição</label><textarea id="descricao" name="descricao" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" rows="3"></textarea></div>
                        <div class="mt-4"><label for="foto1" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Foto 1 (Link URL)</label><input id="foto1" name="foto1" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required></div>
                        <div class="mt-4"><label for="foto2" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Foto 2 (Link URL)</label><input id="foto2" name="foto2" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required></div>
                        <div class="mt-4"><label for="foto3" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Foto 3 (Link URL)</label><input id="foto3" name="foto3" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required></div>
                        <div class="mt-4"><label for="foto4" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Foto 4 (Opcional)</label><input id="foto4" name="foto4" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"></div>
                        <div class="mt-4"><label for="foto5" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Foto 5 (Opcional)</label><input id="foto5" name="foto5" type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300"></div>


                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Salvar Veículo
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>