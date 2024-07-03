@extends('layouts/mainLayout')
@section('content')

    <!-- Hero Section Begin -->
    <section class="hero-section" id="hero-section">
        <div class="hero-items">
            <div class="single-hero-item hero-bg-image" style="background-image: radial-gradient(circle, transparent, #151515eb), url(img/hero-slider/boxer-lowquali.webp);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-text">
                                <h2>Academia de Muay Thai</h2>
                                <h1>Rick Fight</h1>
                                <a href="./#home-about" class="primary-btn">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- About Section Begin -->
    <section id="home-about" class="home-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>Brazilian Muay Thai</h2>
                        <p class="short-details">
                            A equipe Brazilian Muay Thai é uma das principais referências no cenário do Muay Thai no Brasil. A equipe se destaca por formar atletas de alto nível, e por promover a cultura e os valores do Muay Thai
                             
                        </p>
                        <p class="long-details"> 
                            Fundada por Ney Aguillar no final da década de 90, a Brazilian Muay Thai é equipe conhecida por sua dedicação ao ensino, treinamento e competição de atletas do mais alto nivel até iniciantes e curiosos pelo esporte. 
                        </p>
                        <p class="long-details">
                            Brazilian Muay Thai é uma potência no cenário do Muay Thai, conhecida por sua excelência em treinamento, compromisso com os valores do esporte e impacto positivo na vida de seus membros
                        </p>
                        <a href="https://instagram.com/ebrazilian_muaythai/" class="primary-btn about-btn">Saiba Mais</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/gallery/gallery-7.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Professionals Section Begin -->
    <section id="professionals-section" class="professionals-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Professores</h2>
                        <p>Equipe de professores da academia</p>
                    </div>
                </div>
            </div>
            <div class="row professionals-gird">
                <div class="grid-sizer"></div>
                <div class="col-lg-3 col-md-6 grid-item">
                    <div class="professionals-item large-item" style="background-image:  linear-gradient(to top, #151515eb, transparent), url(img/trainer/trainer-1.jpg);">
                        <a href="#" class="professionals-text">
                            <div class="categories">Samira</div>
                            <h5>Professor instrutor</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 grid-item">
                    <div class="professionals-item large-item" style="background-image: linear-gradient(to top, #151515eb, transparent), url(img/trainer/trainer-2.jpg);">
                        <a href="#" class="professionals-text">
                            <div class="categories">Gustavo</div>
                            <h5>Professor instrutor</h5>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 grid-item">
                    <div class="professionals-item large-item" style="background-image: linear-gradient(to top, #151515eb, transparent), url(img/trainer/trainer-3.jpg);">
                        <a href="#" class="professionals-text">
                            <div class="categories">Guilherme</div>
                            <h5>Professor instrutor</h5>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 grid-item">
                    <div class="professionals-item large-item" style="background-image: linear-gradient(to top, #151515eb, transparent), url(img/trainer/trainer-4.jpg);">
                        <a href="#" class="professionals-text">
                            <div class="categories">Ricardo</div>
                            <h5>Professor instrutor</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Professionals Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section">
        <div class="class-title set-bg" data-setbg="img/classes-title-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                            <h2>INICIE HOJE MESMO</h2>
                            <p>Escolha o professor com quem mas se identificou e venha fazer uma aula experimental hoje mesmo</p>
                            <a href="https://wa.me/5511996242656?text=<?=urlencode('Olá gostaria de marca uma aula experimental.')?>" target="_blank" class="secundary-btn" style="margin-top: 15px">Entre em contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->
    
    <!-- Class Time Section Begin -->
    <section id="classtime-section" class="classtime-section class-time-table spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Grade de horários</h2>
                        <p>Professor responsavel</p>
                    </div>
                </div>
            </div>
            <div class="classtime-table">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Segunda-feira</th>
                            <th>Terça-feira</th>
                            <th>Quarta-feira</th>
                            <th>Quinta-feira</th>
                            <th>Sexta-feira</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="workout-time">7:00</td>
                            <td class="hover-bg ts-item">
                                <span>7:00 - 8:00</span>
                                <h6>Ricardo</h6>
                            </td>
                            <td class="hover-bg ts-item">
                                <span>7:00 - 8:00</span>
                                <h6>Ricardo</h6>
                            </td>
                            <td class="hover-bg ts-item">
                                <span>7:00 - 8:00</span>
                                <h6>Ricardo</h6>
                            </td>
                            <td class="hover-bg ts-item">
                                <span>7:00 - 8:00</span>
                                <h6>Ricardo</h6>
                            </td>
                            <td class="hover-bg ts-item">
                                <span>7:00 - 8:00</span>
                                <h6>Ricardo</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">9:00</td>
                            <td class="hover-bg ts-item">
                                <span>9:00 - 10:00</span>
                                <h6>Gustavo</h6>
                            </td>
                            <td></td>
                            <td>
                                <span>9:00 - 10:00</span>
                                <h6>Gustavo</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item">
                                <span>9:00 - 10:00</span>
                                <h6>Gustavo</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">14:00</td>
                            <td class="hover-bg ts-item">
                                <span>14:00 - 15:00</span>
                                <h6>Guilherme</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item">
                                <span>14:00 - 15:00</span>
                                <h6>Guilherme</h6>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">17:00</td>
                            <td class="hover-bg ts-item">
                                <span>17:30 - 18:30</span>
                                <h6>Samira</h6>
                            </td>
                            <td class="hover-bg ts-item">
                                <span>17:00 - 18:00</span>
                                <h6>Samira</h6>
                            </td>
                            <td class="hover-bg ts-item">
                                <span>17:30 - 18:30</span>
                                <h6>Samira</h6>
                            </td>
                            <td class="hover-bg ts-item">
                                <span>17:00 - 18:00</span>
                                <h6>Samira</h6>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">19:00</td>
                            <td class="hover-bg ts-item">
                                <span>19:00 - 20.00</span>
                                <h6>Ricardo</h6>
                            </td>
                            <td class="hover-bg ts-item">
                                <span>19:00 - 20:30</span>
                                <h6>Ricardo</h6>
                            </td>
                            <td class="hover-bg ts-item">
                                <span>19:00 - 20:00</span>
                                <h6>Ricardo</h6>
                            </td>
                            <td class="hover-bg ts-item">
                                <span>19:00 - 20:00</span>
                                <h6>Ricardo</h6>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">20:00</td>
                            <td class="hover-bg ts-item">
                                <span>20:00 - 21.30</span>
                                <h6>Ricardo</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item">
                                <span>20:00 - 21:30</span>
                                <h6>Ricardo</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item">
                                <span>20:00 - 21:30</span>
                                <h6>Ricardo</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Class Time Section End -->

    <!-- Product Section Begin -->
    <section id="product-section" class="product-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Produtos</h2>
                        <p>Produtos personalizados</p>
                    </div>
                </div>
            </div>
            <div class="row product-gird">
                <div class="grid-sizer"></div>
                
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 grid-item">
                    <a class="product-item large-item">
                        <div class="product-image" style="background-image: img/products/{{ $product->image }}">
                            <img src="img/products/{{ $product->image }}" alt="">
                            <div class="product-shadow"></div>
                        </div>
                        <div class="product-text">
                            <h5>{{ $product->title }}</h5>
                            <div class="categories">{{ $product->description }}</div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product Section End -->

@endsection
