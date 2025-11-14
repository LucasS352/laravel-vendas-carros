<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AutoVendas - Vitrine de Veículos">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoVendas | Vitrine</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- === CSS do Template (da sua pasta /public) === -->
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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header (Igual ao anterior) -->
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
                                <li class="active"><a href="{{ route('home') }}">Vitrine</a></li>
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
    <!-- Header Section End -->

    <!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="{{ asset('img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Nossos Veículos</h2>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                            <span>Vitrine</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

    <!-- Car Section Begin -->
    <section class="car spad">
        <div class="container">
            <div class="row">

                <!-- === BARRA LATERAL DE FILTRO (NOVA) === -->
                <div class="col-lg-3">
                    <div class="car__sidebar">
                        
                        <!-- Formulário de Filtro (aponta para a rota 'home' com método GET) -->
                        <form action="{{ route('home') }}" method="GET">
                            
                            <!-- 1. Busca por Nome/Modelo -->
                            <div class="car__search">
                                <h5>Buscar por Nome</h5>
                                <input type="text" name="busca" placeholder="Ex: Pulse, Corolla..." value="{{ $inputs['busca'] ?? '' }}">
                            </div>

                            <div class="car__filter">
                                <h5>Filtros</h5>
                                
                                <!-- 2. Filtro de Marca -->
                                <select name="marca" onchange="this.form.submit()">
                                    <option value="">Todas as Marcas</option>
                                    @foreach ($marcas as $marca)
                                        <option value="{{ $marca }}" {{ ($inputs['marca'] ?? '') == $marca ? 'selected' : '' }}>
                                            {{ $marca }}
                                        </option>
                                    @endforeach
                                </select>
                                
                                <!-- 3. Filtro de Cor -->
                                <select name="cor" onchange="this.form.submit()">
                                    <option value="">Todas as Cores</option>
                                    @foreach ($cores as $cor)
                                        <option value="{{ $cor }}" {{ ($inputs['cor'] ?? '') == $cor ? 'selected' : '' }}>
                                            {{ $cor }}
                                        </option>
                                    @endforeach
                                </select>
                                
                                <div class="car__filter__btn mt-4">
                                    <button type="submit" class="site-btn">Filtrar</button>
                                    <a href="{{ route('home') }}" class="site-btn btn-secondary" style="background: #6c757d; margin-top: 10px;">Limpar Filtros</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- === FIM DA BARRA LATERAL === -->
                
                <!-- Coluna Principal (Reduzida para 9 colunas) -->
                <div class="col-lg-9">
                    <div class="row">
                        <!-- === LOOP DO BLADE COMEÇA AQUI === -->
                        @forelse ($veiculos as $veiculo)
                        <!-- Ajustado para 3 colunas (lg-4). Mantém 2 colunas em telas médias (md-6) -->
                        <div class="col-lg-4 col-md-6"> 
                            <div class="car__item">
                                <!-- Carrossel de Fotos -->
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="{{ asset($veiculo->foto1) }}" alt="{{ $veiculo->modelo }}">
                                    <img src="{{ asset($veiculo->foto2) }}" alt="{{ $veiculo->modelo }}">
                                    <img src="{{ asset($veiculo->foto3) }}" alt="{{ $veiculo->modelo }}">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">{{ $veiculo->ano }}</div>
                                        
                                        <!-- Link para a página de detalhes -->
                                        <h5><a href="{{ route('veiculo.detalhes', $veiculo->id) }}">{{ $veiculo->marca }} {{ $veiculo->modelo }}</a></h5>
                                        
                                        <ul>
                                            <li><span>{{ number_format($veiculo->quilometragem, 0, ',', '.') }}</span> km</li>
                                            <li>Auto</li>
                                            <li><span>{{ $veiculo->cor }}</span></li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option" style="background: #5363e6; color: white; padding: 5px 10px; border-radius: 4px;">À Venda</span>
                                        <h6>R$ {{ number_format($veiculo->valor, 2, ',', '.') }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <div class="alert alert-warning text-center" role="alert">
                                Nenhum veículo encontrado com esses filtros. Tente <a href="{{ route('home') }}" class="alert-link">limpar a busca</a>.
                            </div>
                        </div>
                        @endforelse
                        <!-- === FIM DO LOOP === -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Car Section End -->

    <!-- Footer Section Begin -->
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
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin (Não funcional, mas parte do template) -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
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