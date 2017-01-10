{{-- Topo e Menus --}}
<header class="header container">
    <a href="#">{!! Html::image('assets/Site/imgs/logo/logoMdevBranca.png', 'Logo Mdev', ['class' => 'logoTopo']) !!}</a>
    <nav class="menu">
        <ul class="titulo">
            <li><a href="#" class="clWhite link-top-left link-bottom-right">HOME</a></li>
            <li><a href="#" class="clWhite link-top-left link-bottom-right">SERVIÇOS</a></li>
            <li><a href="#" class="clWhite link-top-left link-bottom-right">PORTFÓLIO</a></li>
            <li><a href="#" class="clWhite link-top-left link-bottom-right">CONTATO</a></li>
        </ul>
    </nav>
</header>

{{-- Banners --}}
<div class="box-banners swiper-container">
    <div class="swiper-wrapper">
        <div class="banner swiper-slide" style="background: url({{'assets/Site/imgs/banners/banner5.jpg'}})"></div>
        <div class="banner swiper-slide" style="background: url({{'assets/Site/imgs/banners/banner1.jpg'}})"></div>
        <div class="banner swiper-slide" style="background: url({{'assets/Site/imgs/banners/banner3.jpg'}})"></div>
        <div class="banner swiper-slide" style="background: url({{'assets/Site/imgs/banners/banner4.jpg'}})"></div>
    </div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>