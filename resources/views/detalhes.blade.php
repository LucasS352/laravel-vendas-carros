<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Detalhes do Veículo - AutoVendas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Título Dinâmico --}}
    <title>AutoVendas | Detalhes do {{ $veiculo->marca ?? 'Veículo' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><i class="fa fa-clock-o"></i> Segunda a Sexta: 08:00 às 18:00</li>
                            <li><i class="fa fa-envelope-o"></i> contato@autovendas.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            @auth
                                <a href="{{ route('dashboard') }}" style="color: #111; font-weight: 700;"><i class="fa fa-user"></i> Painel Admin</a>
                            @else
                                <a href="{{ route('login') }}" style="color: #111; font-weight: 700;"><i class="fa fa-user"></i> Login</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="AutoVendas Logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Vitrine</a></li>
                                @auth
                                <li><a href="{{ route('veiculos.index') }}">Gerenciar Veículos</a></li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <div class="breadcrumb-option set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        {{-- Nome dinâmico do veículo --}}
                        <h2>{{ $veiculo->marca ?? 'Marca' }} {{ $veiculo->modelo ?? 'Modelo' }} {{ $veiculo->ano ?? '' }}</h2> 
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                            <a href="{{ route('home') }}">Vitrine</a>
                            <span>Detalhes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="car-details spad">
        <div class="container">
            <div class="row">
                
                {{-- Coluna Principal (9 colunas) --}}
                <div class="col-lg-9">
                    <div class="car__details__pic">
                        
                        {{-- Imagem Grande Padrão (Foto 1) --}}
                        <div class="car__details__pic__large">
                            <img class="car-big-img" src="{{ asset($veiculo->foto1 ?? 'img/default-car.jpg') }}" alt="{{ $veiculo->modelo ?? '' }}">
                        </div>
                        
                        {{-- Carrossel de Miniaturas --}}
                        <div class="car-thumbs">
                            <div class="car-thumbs-track car__thumb__slider owl-carousel">
                                @for ($i = 1; $i <= 3; $i++)
                                    @php
                                        $foto = 'foto' . $i;
                                    @endphp
                                    @if(isset($veiculo->$foto))
                                        <div class="ct" data-imgbigurl="{{ asset($veiculo->$foto) }}"><img src="{{ asset($veiculo->$foto) }}" alt="{{ $veiculo->modelo }} Foto {{ $i }}"></div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                    
                    {{-- Tabs de Informações --}}
                    <div class="car__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Descrição Geral</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Ficha Técnica</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Opcionais/Itens</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content">
                            
                            {{-- Aba 1: Descrição Geral --}}
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="car__details__tab__info__item">
                                                <h5>Detalhes</h5>
                                                <p>{{ $veiculo->descricao ?? 'Nenhuma descrição detalhada fornecida para este veículo.' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Aba 2: Ficha Técnica (CORRIGIDO: Removido os ) --}}
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Principais Características</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Quilometragem: {{ number_format($veiculo->quilometragem ?? 0, 0, ',', '.') }} km</li>
                                                    <li><i class="fa fa-check"></i> Ano Fabricação: {{ $veiculo->ano ?? 'N/A' }}</li>
                                                    <li><i class="fa fa-check"></i> Cor Externa: {{ $veiculo->cor ?? 'N/A' }}</li>
                                                    <li><i class="fa fa-check"></i> Câmbio: {{ $veiculo->transmissao ?? 'N/A' }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>Informações Adicionais</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Motorização: {{ $veiculo->motor ?? '1.5 TURBO' }}</li>
                                                    <li><i class="fa fa-check"></i> Combustível: {{ $veiculo->combustivel ?? 'FLEX' }}</li>
                                                    <li><i class="fa fa-check"></i> Portas: {{ $veiculo->portas ?? '4' }}</li>
                                                    <li><i class="fa fa-check"></i> Localização: {{ $veiculo->cidade ?? 'São Paulo' }}</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Aba 3: Opcionais/Itens de Série (Estrutura profissional com divisão em colunas) --}}
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="car__details__tab__feature">
                                    <h5>Opcionais e Itens de Série</h5>
                                    <div class="row">
                                        
                                        @php
                                            // Array de Opcionais. Se o seu modelo tiver um campo 'opcionais' que é um array ou JSON, use $veiculo->opcionais
                                            $opcionais = $veiculo->opcionais ?? ['Ar Condicionado', 'Direção Elétrica', 'Vidros Elétricos', 'Airbags Frontais', 'Freios ABS', 'Controle de Estabilidade', 'Rodas de Liga Leve', 'Sistema de Som Premium', 'Alarme', 'Travas Elétricas', 'Sensor de Estacionamento', 'Câmera de Ré'];
                                            
                                            // Divide a lista em 4 colunas para exibição em telas grandes
                                            $colunas = array_chunk($opcionais, ceil(count($opcionais) / 4));
                                        @endphp

                                        @forelse ($colunas as $chunk)
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="car__details__tab__feature__item">
                                                    <ul>
                                                        @foreach ($chunk as $item)
                                                            <li><i class="fa fa-check-circle"></i> {{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-lg-12">
                                                <p>Nenhum opcional listado para este veículo.</p>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                {{-- Coluna Lateral (Sidebar - 3 colunas) --}}
                <div class="col-lg-3">
                    <div class="car__details__sidebar">
                        
                        {{-- Preço e Detalhes Principais --}}
                        <div class="car__details__sidebar__model">
                            <h4 style="color: #ff3333; margin-bottom: 20px;">
                                R$ {{ number_format($veiculo->valor ?? 0, 2, ',', '.') }}
                            </h4>
                            <ul>
                                <li>Marca <span>{{ $veiculo->marca ?? 'N/A' }}</span></li>
                                <li>Modelo <span>{{ $veiculo->modelo ?? 'N/A' }}</span></li>
                                <li>Ano <span>{{ $veiculo->ano ?? 'N/A' }}</span></li>
                                <li>KM <span>{{ number_format($veiculo->quilometragem ?? 0, 0, ',', '.') }}</span></li>
                            </ul>
                            
                            {{-- Botão de Contato (WhatsApp) --}}
                            <a href="https://wa.me/5514999999999?text=Ol%C3%A1%2C%20tenho%20interesse%20no%20ve%C3%ADculo%20{{ $veiculo->marca ?? '' }}%20{{ $veiculo->modelo ?? '' }}%20({{ $veiculo->ano ?? '' }}).%20Poderia%20me%20enviar%20mais%20detalhes%3F" 
                                class="primary-btn" target="_blank" style="background-color: #25d366; border-color: #25d366;">
                                <i class="fa fa-whatsapp"></i> Fale Conosco (WhatsApp)
                            </a>
                        </div>
                        
                        {{-- Botões de Ação --}}
                        <div class="car__details__sidebar__payment">
                            <h5 style="margin-bottom: 15px;">Interessado?</h5>
                            <a href="#" class="primary-btn sidebar-btn"><i class="fa fa-sliders"></i> Simular Financiamento</a>
                            <a href="#" class="primary-btn sidebar-btn"><i class="fa fa-envelope-o"></i> Solicitar Contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer set-bg" data-setbg="{{ asset('img/footer-bg.jpg') }}">
        <div class="container">
            <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                            <h2>Fale Conosco</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__option">
                            <div class="option__item"><i class="fa fa-phone"></i> (11) 99749-4999</div>
                            <div class="option__item email"><i class="fa fa-envelope-o"></i> contato@autovendas.com</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="{{ asset('img/footer-logo.png') }}" alt=""></a>
                        </div>
                        <p>Trabalho Prático de Laravel - Sistema de Venda de Veículos.</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-4 col-md-4">
                    <div class="footer__widget">
                        <h5>Links Rápidos</h5>
                        <ul>
                            <li><a href="{{ route('home') }}"><i class="fa fa-angle-right"></i> Vitrine</a></li>
                            <li><a href="{{ route('login') }}"><i class="fa fa-angle-right"></i> Login Admin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__copyright__text">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados</p>
            </div>
        </div>
    </footer>
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Buscar veículo...">
            </form>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>