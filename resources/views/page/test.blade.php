@extends('layouts.demo')
@section('content')
    <!-- Slider Section -->
    <div class="mb-5">
        <div class="bg-img-hero" style="background-image: url({{ asset('/template/img/img1.jpg') }});">
            <div class="container max-height-420 overflow-hidden carousel slide" data-bs-ride="carousel" id="cacxcasdasdasd">
                <div class="carousel-indicators">
                    <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#cacxcasdasdasd"
                        type="button"></button>
                    <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#cacxcasdasdasd"
                        type="button"></button>
                    <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#cacxcasdasdasd"
                        type="button"></button>
                </div>
                <div class="list-slider d-flex carousel-inner">
                    <div class="bg-img-hero-center carousel-item active">
                        <div class="row max-height-420 py-7 py-md-0">
                            <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                <h1 class="font-size-64 text-lh-57 font-weight-light animate__animated animate__fadeInUp"
                                    style="animation-delay: 500ms;opacity: 1;">
                                    THE NEW <span class="d-block font-size-55">STANDARD</span>
                                </h1>
                                <h6 class="font-size-15 font-weight-bold mb-3 animate__animated animate__fadeInUp"
                                    style="animation-delay: 1s; opacity: 1;">
                                    UNDER FAVORABLE
                                    SMARTWATCHES
                                </h6>
                                <div class="mb-4 price animate__animated animate__fadeInUp"
                                    style="animation-delay: 1.2s; opacity: 1;">
                                    <span class="font-size-13">FROM</span>
                                    <div class="font-size-50 font-weight-bold text-lh-45">
                                        <sup class="">$</sup>749<sup class="">99</sup>
                                    </div>
                                </div>
                                <a href="../shop/single-product-fullwidth.html"
                                    class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16 animate__animated animate__fadeInUp"
                                    tabindex="0" style="animation-delay: 1.3s; opacity: 1;">
                                    Start Buying
                                </a>
                            </div>
                            <div class="thumb-slider col-xl-5 col-6 d-flex align-items-center animate__animated animate__zoomIn"
                                style="animation-delay: 1.4s; opacity: 1;" data-scs-animation-in="animate__zoomIn">
                                <img class="img-fluid"
                                    src="https://transvelo.github.io/electro-html/2.0/assets/img/416X420/img1.png"
                                    alt="Image Description">
                            </div>
                        </div>
                    </div>
                    <div class=" bg-img-hero-center carousel-item">
                        <div class="row min-height-420 py-7 py-md-0">
                            <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                <h1 class="font-size-64 text-lh-57 font-weight-light animate__animated animate__fadeInUp"
                                    data-scs-animation-in="animate__fadeInUp" style="animation-delay: 1s">
                                    THE NEW <span class="d-block font-size-55">STANDARD</span>
                                </h1>
                                <h6 class="font-size-15 font-weight-bold mb-3 animate__animated animate__fadeInUp"
                                    data-scs-animation-in="animate__fadeInUp" style="animation-delay: 1.2s">UNDER
                                    FAVORABLE
                                    SMARTWATCHES
                                </h6>
                                <div class="mb-4 price animate__animated animate__fadeInUp"
                                    data-scs-animation-in="animate__fadeInUp" style="animation-delay: 1.3s">
                                    <span class="font-size-13">FROM</span>
                                    <div class="font-size-50 font-weight-bold text-lh-45">
                                        <sup class="">$</sup>749<sup class="">99</sup>
                                    </div>
                                </div>
                                <a href="../shop/single-product-fullwidth.html"
                                    class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16 animate__animated animate__fadeInUp"
                                    data-scs-animation-in="animate__fadeInUp" data-scs-animation-delay="400" tabindex="-1"
                                    style="animation-delay: 1.4s">
                                    Start Buying
                                </a>
                            </div>
                            <div class="thumb-slider col-xl-5 col-6  d-flex align-items-center animate__animated animate__fadeInUp"
                                data-scs-animation-in="animate__fadeInUp" data-scs-animation-delay="500"
                                style="animation-delay: 1.5s">
                                <img class="img-fluid"
                                    src="https://transvelo.github.io/electro-html/2.0/assets/img/416X420/img2.png"
                                    alt="Image Description">
                            </div>
                        </div>
                    </div>
                    <div class=" bg-img-hero-center carousel-item">
                        <div class="row min-height-420 py-7 py-md-0">
                            <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                <h1 class="font-size-64 text-lh-57 font-weight-light animate__animated animate__fadeInUp"
                                    data-scs-animation-in="animate__fadeInUp" style="animation-delay: 1s">
                                    THE NEW <span class="d-block font-size-55">STANDARD</span>
                                </h1>
                                <h6 class="font-size-15 font-weight-bold mb-3 animate__animated animate__fadeInUp"
                                    data-scs-animation-in="animate__fadeInUp" style="animation-delay: 1.2s">UNDER
                                    FAVORABLE
                                    SMARTWATCHES
                                </h6>
                                <div class="mb-4 price animate__animated animate__fadeInUp"
                                    data-scs-animation-in="animate__fadeInUp" style="animation-delay: 1.3s">
                                    <span class="font-size-13">FROM</span>
                                    <div class="font-size-50 font-weight-bold text-lh-45">
                                        <sup class="">$</sup>749<sup class="">99</sup>
                                    </div>
                                </div>
                                <a href="../shop/single-product-fullwidth.html"
                                    class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-15 animate__animated animate__fadeInUp"
                                    data-scs-animation-in="animate__fadeInUp" style="animation-delay: 1.4s">
                                    Start Buying
                                </a>
                            </div>
                            <div class="thumb-slider col-xl-5 col-6  d-flex align-items-center animate__animated animate__fadeInUp"
                                style="animation-delay: 1.5s">
                                <img class="img-fluid"
                                    src="https://transvelo.github.io/electro-html/2.0/assets/img/416X420/img3.png"
                                    alt="Image Description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Section -->

    <div class="container max-height-420 overflow-hidden carousel slide" data-bs-ride="carousel"
        id="carouselExampleIndicators">
        <div class=" d-flex carousel-inner">
            <div class="bg-img-hero-center carousel-item active">
                <div>
                    <div>
                        <img alt="..." class="d-block w-100" src="https://i.postimg.cc/LsTXqTNZ/1.jpg">
                        <div class="carousel-caption">
                            <h1 class="font-size-64 text-lh-57 font-weight-light animate__animated animate__zoomIn"
                                data-scs-animation-in="animate__fadeInUp animate__fadeInUp">
                                THE NEW <span class="d-block font-size-55">STANDARD</span>
                            </h1>
                            <h6 class="font-size-15 font-weight-bold mb-3 animate__animated animate__fadeInUp"
                                data-scs-animation-in="animate__fadeInUp">UNDER FAVORABLE
                                SMARTWATCHES
                            </h6>
                            <div class="mb-4 price animate__animated animate__fadeInUp">
                                <span class="font-size-13">FROM</span>
                                <div class="font-size-50 font-weight-bold text-lh-45">
                                    <sup class="">$</sup>749<sup class="">99</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-img-hero-center carousel-item">
                <div class="">
                    <div class="">
                        <img alt="..." class="d-block w-100" src="https://i.postimg.cc/C1rx7Kyh/2.jpg">
                        <div class="carousel-caption">
                            <h1 class="font-size-64 text-lh-57 font-weight-light animate__animated animate__bounceInRight"
                                style="animation-delay: 1s">Graphics
                                Design</h1>
                            <h6 class="font-size-15 font-weight-bold mb-3 animate__animated animate__bounceInLeft "
                                style="animation-delay: 2s">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
                                excepturi quas
                                vero.</h6>
                            <div class="mb-4 price animate__animated animate__fadeInUp" style="animation-delay: 3s">
                                <span class="font-size-13">FROM</span>
                                <div class="font-size-50 font-weight-bold text-lh-45">
                                    <sup class="">$</sup>749<sup class="">99</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-img-hero-center carousel-item">
                <div>
                    <div>
                        <img alt="..." class="d-block w-100" src="https://i.postimg.cc/c4nL7ZFW/3.jpg">
                        <div class="carousel-caption">
                            <h5 class="animate__animated animate__bounceInRight" style="animation-delay: 1s">Photography
                            </h5>
                            <p class="animate__animated animate__bounceInLeft" style="animation-delay: 2s">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
                                excepturi quas
                                vero.</p>
                            <p class="animate__animated animate__bounceInRight" style="animation-delay: 3s"><a
                                    href="#">Learn
                                    More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
            type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
                class="visually-hidden">Previous</span></button> <button class="carousel-control-next"
            data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true"
                class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
    </div>
@endsection
