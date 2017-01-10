@extends('site::templates.site')

@section('content')
    <div class="nossos-clientes container texto">
        <h1 class="titulo clPadrao">Conheça alguns de nossos clientes</h1>
        <div class="clientes">
            <div class="container-cliente">
                <div class="logo-cliente">
                    {!! Html::image('assets/Site/imgs/banners/banner5.jpg') !!}
                </div>
                <a href="#" class="titulo link-top-left borderLinkBlue">Conheça</a>
            </div>

            <div class="container-cliente">
                <div class="logo-cliente">
                    {!! Html::image('assets/Site/imgs/clientes/cadius.png') !!}
                </div>
                <a target="_blank" href="http://www.cadiuscorretora.com.br" class="titulo link-top-left borderLinkBlue">Conheça</a>
            </div>

            <div class="container-cliente">
                <div class="logo-cliente">
                    {!! Html::image('assets/Site/imgs/banners/banner1.jpg') !!}
                </div>
                <a href="#" class="titulo link-top-left borderLinkBlue">Conheça</a>
            </div>

            <div class="container-cliente">
                <div class="logo-cliente">
                    {!! Html::image('assets/Site/imgs/clientes/cadius.png') !!}
                </div>
                <a href="#" class="titulo link-top-left borderLinkBlue">Conheça</a>
            </div>
        </div>
    </div>

    <div class="nossos-servicos container clWhite">
        <h1 class="titulo">Nossos Serviços</h1>

        <div class="servicos texto">
            <div class="servico">
                {!! Html::image('assets/Site/imgs/servicos/webehospedagem.png', 'Desenvolvimento Web') !!}
                <div class="servico-descricao">
                    <a href="#" class="titulo">Desenvolvimento Web e Hospedagens</a>
                    <p class="sobre-o-servico">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Aspernatur,
                        consectetur cum dicta eum fugiat libero
                        neque nostrum odit placeat praesentium
                        saepe vero? Alias dicta dolorum excepturi impedit
                        perspiciatis reiciendis, ut?</p>
                </div>
            </div>

            <div class="servico">
                {!! Html::image('assets/Site/imgs/servicos/sitesexistentes.png', 'Manutenção em Sites') !!}
                <div class="servico-descricao">
                    <a href="#" class="titulo clPadrao link">Manutenção em sites já existentes</a>
                    <p class="sobre-o-servico">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Aspernatur,
                        consectetur cum dicta eum fugiat libero
                        neque nostrum odit placeat praesentium
                        saepe vero? Alias dicta dolorum excepturi impedit
                        perspiciatis reiciendis, ut?</p>
                </div>
            </div>

            <div class="servico">
                {!! Html::image('assets/Site/imgs/servicos/seo.png', 'Otimização de Sites') !!}
                <div class="servico-descricao">
                    <a href="#" class="titulo clPadrao link">Otimização de sites (SEO)</a>
                    <p class="sobre-o-servico">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Aspernatur,
                        consectetur cum dicta eum fugiat libero
                        neque nostrum odit placeat praesentium
                        saepe vero? Alias dicta dolorum excepturi impedit
                        perspiciatis reiciendis, ut?</p>
                </div>
            </div>

            <div class="servico">
                {!! Html::image('assets/Site/imgs/servicos/ecommerce.png', 'Plataforma e-commerce') !!}
                <div class="servico-descricao">
                    <a href="#" class="titulo clPadrao link">Lojas Virtuais (e-commerce)</a>
                    <p class="sobre-o-servico">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Aspernatur,
                        consectetur cum dicta eum fugiat libero
                        neque nostrum odit placeat praesentium
                        saepe vero? Alias dicta dolorum excepturi impedit
                        perspiciatis reiciendis, ut?</p>
                </div>
            </div>

            <div class="servico">
                {!! Html::image('assets/Site/imgs/servicos/mobile.png', 'Desenvolvimento Mobile') !!}
                <div class="servico-descricao">
                    <a href="#" class="titulo clPadrao link">Desenvolvimento de aplicativos móveis</a>
                    <p class="sobre-o-servico">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Aspernatur,
                        consectetur cum dicta eum fugiat libero
                        neque nostrum odit placeat praesentium
                        saepe vero? Alias dicta dolorum excepturi impedit
                        perspiciatis reiciendis, ut?</p>
                </div>
            </div>
        </div>
    </div>

    <div class="a-mdev">
        <div class="container center a-mdev-descricao">
            <h1 class="titulo clPadrao">REALIZAR O SEU DESAFIO É NOSSO OBJETIVO</h1>
            <a href="#" class="clPadrao link-top-left borderLinkBlue titulo">Solicite um Orçamento</a>
        </div>
    </div>
    <footer>
        <div class="container texto footer">
            <div class="mapa-do-site titulo">
                <h3>Mapa do Site</h3>
                <li><a href="#">HOME</a></li>
                <li><a href="#">SERVIÇOS</a></li>
                <li><a href="#">PORTFÓLIO</a></li>
                <li><a href="#">CONTATO</a></li>

            </div>

            <div class="footer-nossos-servicos titulo">
                <h3>Nossos Serviços</h3>
                <li><a href="#">Desenvolvimento Web e Hospedagens</a></li>
                <li><a href="#">Manutenção em sites já existentes</a></li>
                <li><a href="#">Otimização de sites (SEO)</a></li>
                <li><a href="#">Lojas Virtuais (e-commerce)</a></li>
                <li><a href="#">Desenvolvimento de aplicativos móveis</a></li>
            </div>

            <div class="a-empresa">
                {!! Html::image('assets/Site/imgs/logo/logoMdevBranca.png', 'A MDev') !!}
                <div class="sociais">
                    <a href="#"><i class="fa fa-fw fa-2x fa-facebook-square"></i></a>
                    <a href="#"><i class="fa fa-fw fa-2x fa-twitter-square"></i></a>
                </div>
            </div>

            <div class="footer-orcamento titulo">
                <a href="#" class="link-top-left">Solicite um Orçamento</a>
            </div>
        </div>
    </footer>
@endsection