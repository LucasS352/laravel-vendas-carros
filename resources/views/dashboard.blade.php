<x-app-layout>
    <!-- Cabeçalho -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- 1. Grid de Estatísticas (KPIs) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1: Receita Total -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg p-6 hover:shadow-indigo-200 transition-shadow duration-300">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-indigo-600 bg-opacity-20 text-indigo-600 dark:text-indigo-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 11.218 12.77 11 12 11c-.77 0-1.536.218-2.121.659L9 12.218Z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Receita Total</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">R$ 1.84M</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Vendas (Unidades) -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg p-6 hover:shadow-green-200 transition-shadow duration-300">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-600 bg-opacity-20 text-green-600 dark:text-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Total de Carros Vendidos</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">232</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Ticket Médio -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg p-6 hover:shadow-blue-200 transition-shadow duration-300">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-600 bg-opacity-20 text-blue-600 dark:text-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.597 5.597m0 0h5.597M11.25 11.25l-5.814 5.518m0 0A11.95 11.95 0 0 1 2.25 18Z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Ticket Médio</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">R$ 12.105,26</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Vendedores -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg p-6 hover:shadow-yellow-200 transition-shadow duration-300">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-600 bg-opacity-20 text-yellow-600 dark:text-yellow-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A1.5 1.5 0 0 1 18 21.75H6a1.5 1.5 0 0 1-1.499-1.632Z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Vendedores Ativos</p>
                            <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">8</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 2. Grid de Conteúdo (Gráficos) -->
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">

                

                <!-- Gráfico de Pizza (Donut FAKE) -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Vendas por Marca</h3>
                    <div class="flex items-center justify-center h-64 relative">
                        <!-- O Gráfico (Gradiente cônico) -->
                        <div class="w-48 h-48 rounded-full bg-[conic-gradient(theme(colors.indigo.600)_0%_40%,theme(colors.blue.500)_40%_70%,theme(colors.green.500)_70%_100%)]">
                            <!-- O Buraco do Donut -->
                            <div class="w-32 h-32 bg-white dark:bg-gray-800 rounded-full absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center">
                                <span class="text-2xl font-bold text-gray-800 dark:text-gray-100">>
                            </div>
                        </div>
                    </div>
                    <!-- Legenda -->
                    <div class="mt-4 space-y-2 text-sm text-gray-600 dark:text-gray-400">
                        <div class="flex items-center"><span class="w-3 h-3 rounded-full bg-indigo-600 mr-2"></span> Fiat (40%)</div>
                        <div class="flex items-center"><span class="w-3 h-3 rounded-full bg-blue-500 mr-2"></span> Volkswagen (20%)</div>
                        <div class="flex items-center"><span class="w-3 h-3 rounded-full bg-green-500 mr-2"></span> Toyota (20%)</div>
                        <div class="flex items-center"><span class="w-3 h-3 rounded-full bg-green-500 mr-2"></span> Toyota (20%)</div>
                    </div>
                </div>
            </div>

            <!-- 3. Grid de Conteúdo (Metas e Vendedores) -->
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6">

                <!-- Metas Mensais (FAKE) -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Metas do Mês (Novembro)</h3>
                    <div class="space-y-4">
                        <!-- Meta 1 -->
                        <div>
                            <div class="flex justify-between text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                <span>Receita</span>
                                <span>R$ 1.84M / R$ 2.00M (92%)</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                        <!-- Meta 2 -->
                        <div>
                            <div class="flex justify-between text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                <span>Novos Anúncios</span>
                                <span>65 / 100 (65%)</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                                <div class="bg-blue-500 h-2.5 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        <!-- Meta 3 -->
                        <div>
                            <div class="flex justify-between text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                <span>Vendas Unidades</span>
                                <span>152 / 150 (101%)</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                                <div class="bg-green-500 h-2.5 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lista de Top Vendedores (FAKE) -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Top Vendedores</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-4">
                            <img class="h-10 w-10 rounded-full" src="https://placehold.co/100x100/6366F1/FFFFFF?text=AA" alt="Vendedor 1">
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-gray-100">Ana Augusta</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">38 Vendas (R$ 450.2k)</p>
                            </div>
                        </li>
                        <li class="flex items-center gap-4">
                            <img class="h-10 w-10 rounded-full" src="https://placehold.co/100x100/EC4899/FFFFFF?text=BS" alt="Vendedor 2">
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-gray-100">Bruno Silva</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">31 Vendas (R$ 390.0k)</p>
                            </div>
                        </li>
                        <li class="flex items-center gap-4">
                            <img class="h-10 w-10 rounded-full" src="https://placehold.co/100x100/8B5CF6/FFFFFF?text=CR" alt="Vendedor 3">
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-gray-100">Carla Ribeiro</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">25 Vendas (R$ 310.5k)</p>
                            </div>
                        </li>
                         <li class="flex items-center gap-4">
                            <img class="h-10 w-10 rounded-full" src="https://placehold.co/100x100/F59E0B/FFFFFF?text=DM" alt="Vendedor 4">
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-gray-100">Diego Matos</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">19 Vendas (R$ 280.1k)</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

             <!-- 4. Vendas Recentes (FAKE) -->
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Vendas Recentes</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Veículo</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Vendedor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Valor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Horário</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">Fiat Pulse 1.0 Turbo</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Ana Augusta</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">R$ 115.990,00</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Concluído</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Há 5 min</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">VW Polo Highline</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Bruno Silva</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">R$ 105.000,00</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Concluído</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Há 2 horas</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">Jeep Compass</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Ana Augusta</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">R$ 138.500,00</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pendente</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Há 3 horas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>