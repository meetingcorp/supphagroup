@extends('client.layouts.app')
@push('css')
    <style>
        .flickity-button {
            background: #fff;
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin: -17px 0px 0 !important;
            display: block;
            position: absolute;
            top: 38% !important;
            z-index: 10;
            cursor: pointer;
            text-align: center;
            transition: all 0.2s ease 0s;
            color: #9896a6;
            text-align: center;
            z-index: 200;
            border: 0;
            box-sizing: initial;
            opacity: 0;
            border-radius: 50%;
            box-shadow: 0 0px 15px rgb(0 0 0 / 10%);
        }
    </style>
@endpush
@section('content')
    <!--- Start Slide -->
    <div id="home" class="carousel d-none d-sm-block" data-items="1" data-arrows="false" data-dots="false">
        @foreach ($slide as $band)
            <div class="">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <img alt="image" style="margin-top: -50px;" width="100%"
                            src="{{ $band->getFirstMediaUrl('banner') }}">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div id="home" class="carousel d-block d-sm-none" data-items="1" data-arrows="false" data-dots="false">
        @foreach ($slide as $band)
            <div class="">
                <div class="portfolio-item-wrap">
                    <div class="portfolio-image">
                        <img alt="image" style="margin-top: -80px;" width="100%"
                            src="{{ $band->getFirstMediaUrl('banner_mobile') }}">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div id="aboutus">
        <div class="row">
            <div class="col-lg-6"
                style="background-color: #5B5B5B; border-radius: 0px 0px 50px 0px; padding: 90px 0px 90px 0px; height: 400px;">
                <div class="container text-white">
                    <div class="text-center">
                        <h2>SUPPA Corporation</h2>
                        <h4><a href="https://www.supphapruksa.com" target="_blank">SUPPHA PRUKSA Co.,Ltd</a></h4>
                        <h4><a href="https://www.chansugroup.com" target="_blank">CHAN –SU CONSTRUCTION Co.,Ltd</a></h4>
                        <h4><a href="https://www.boonrawee.com" target="_blank">BOONRAWEE Co.,Ltd.</a></h4>
                        <h4><a href="https://www.dna-architect.com" target="_blank">ARCHITECT DNA Co.,Ltd.</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="padding: 90px 0px 90px 0px; height: 400px;">
                <div class="text-center">
                    <h2><span style="color: #D0A73F;">SUPPA</span> GROUP</h2>
                    <h4 style="color: #a5a5a5;">
                        We are the corporation that provides <br>
                        comprehensive investment services in real estate <br>
                        business and guarantees a return on investment
                    </h4>
                    <a href="#" class="btn btn-lg btn-outline"
                        style="border-radius: 30px; border-color: #D0A73F;">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <section id="product">
        <div class="d-none d-sm-block">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="text-center">
						<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px;">
                        <h2 style="color: #D0A73F;">PRODUCTS</h2>
                        <h4 style="color: #a5a5a5;">
                            Create amaThe most happiest time of the day!.
                        </h4>
    
                        <a href="#" class="btn btn-lg btn-outline"
                            style="border-radius: 30px; border-color: #D0A73F; max-width: 286px;">Investment Service</a><br>
                        <a href="#" class="btn btn-lg btn-outline"
                            style="border-radius: 30px; border-color: #D0A73F;">Guarantees</a>
						</div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <img src="{{ asset('/images/suppa/3d-rendering-luxury-modern-bedroom-suite-hotel (1).jpg') }}" style="width: 100%; height: auto;" alt="">
                </div>
            </div>
        </div>
        <div class="d-block d-sm-none">
            <div class="row" style="margin-top: -30px;">
                <div class="col-12">
                    <img src="{{ asset('/images/suppa/3d-rendering-luxury-modern-bedroom-suite-hotel (1).jpg') }}" style="width: 100%;" alt="">
                </div>
                <div class="col-12" style="padding-top: 50px;">
                    <div class="container text-center">
                        <h2 style="color: #D0A73F;">PRODUCTS</h2>
                        <h4 style="color: #a5a5a5;">
                            Create amaThe most happiest time of the day!.
                        </h4>
    
                        <a href="#" class="btn btn-lg btn-outline"
                            style="border-radius: 30px; border-color: #D0A73F;">Investment Service</a><br>
                        <a href="#" class="btn btn-lg btn-outline"
                            style="border-radius: 30px; border-color: #D0A73F;">Guarantees</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="bussiness" style="background-color: #5B5B5B; border-radius: 0px 0px 0px 50px;">
        <div class="container">
            <h2 style="color: #D0A73F;">Business model Project Suppha Pruksa Khoayai</h2>
            <div id="portfolio" class="grid-layout portfolio-4-columns portfolio-xs-1-columns grid-loaded" data-margin="20">
                <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ asset('/images/suppa/รูปภาพ2.png') }}"
                                    alt="" style="height: 370px; width: auto;"></a>
                        </div>
                        <div class="portfolio-description" style="padding: 0; width: 100%;" data-lightbox="gallery">
                            <a>
                                <h2 class="text-white">MODERN LUXURIOUS COLONIAL MANSION</h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ asset('/images/suppa/รูปภาพ10.png') }}"
                                    alt="" style="height: 370px; width: auto;"></a>
                        </div>
                        <div class="portfolio-description text-center" style="padding: 0; width: 100%;" data-lightbox="gallery">
                            <a>
                                <h2 class="text-white">MODERN LUXURIOUS COLONIAL CONDOMINIUM</h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ asset('/images/suppa/LUXURIOUS  WELLNESS CENTER.jpg') }}"
                                    alt="" style="height: 370px; width: auto;"></a>
                        </div>
                        <div class="portfolio-description" style="padding: 0;  width: 100%;" data-lightbox="gallery">
                            <a>
                                <h2 class="text-white">LUXURIOUS WELLNESS CENTER</h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item img-zoom ct-photography ct-media ct-branding ct-marketing ct-webdesign">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{ asset('/images/suppa/รูปภาพ11.png') }}"
                                    alt="" style="height: 370px; width: auto;"></a>
                        </div>
                        <div class="portfolio-description" style="padding: 0;  width: 100%;" data-lightbox="gallery">
                            <a>
                                <h2 class="text-white">FIVE STAR HOTEL </h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="teamwork">
        <div class="container">
            <h2 style="color: #D0A73F;">TEAM WORK 11 YEARS EXPERIENCE</h2>
            <h3 style="color:#a5a5a5; font-size: 22px;">Create amaThe most happiest time of the day!.</h3>
            <div class="carousel team-members team-members-shadow flickity-enabled is-draggable carousel-loaded"
                data-items="4" data-arrows="true" data-dots="false">
                <div class="polo-carousel-item">
                    <div class="team-member">
                        <div class="team-image text-center">
                            <img alt="image" width="100%" src="{{ asset('/images/suppa/team/1.jpg') }}"
                                style="max-height: 300px; width: auto;">
                        </div>
                        <div class="team-desc">
                            <h4>Alea Smith</h4>
                            <h5>Software Developer</h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="social-icons social-icons-large social-icons-border social-icons-rounded social-icons-colored-hover float-right"
                                    style="margin-right: -10px; margin-top: -3px;">
                                        <ul>
                                            <li class="social-soundcloud">
                                                <a href="#"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn-md btn-outline float-left"
                                    style="margin-left: -10px; border-radius: 30px; border-color: #D0A73F; background-color: #D0A73F; color: #fff; font-size: 14px;"><i class="far fa-envelope"></i> MAIL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="polo-carousel-item">
                    <div class="team-member">
                        <div class="team-image text-center">
                            <img alt="image" width="100%" src="{{ asset('/images/suppa/team/1.jpg') }}"
                                style="max-height: 300px; width: auto;">
                        </div>
                        <div class="team-desc">
                            <h4>Alea Smith</h4>
                            <h5>Software Developer</h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="social-icons social-icons-large social-icons-border social-icons-rounded social-icons-colored-hover float-right"
                                    style="margin-right: -10px; margin-top: -3px;">
                                        <ul>
                                            <li class="social-soundcloud">
                                                <a href="#"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn-md btn-outline float-left"
                                    style="margin-left: -10px; border-radius: 30px; border-color: #D0A73F; background-color: #D0A73F; color: #fff; font-size: 14px;"><i class="far fa-envelope"></i> MAIL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="polo-carousel-item">
                    <div class="team-member">
                        <div class="team-image text-center">
                            <img alt="image" width="100%" src="{{ asset('/images/suppa/team/1.jpg') }}"
                                style="max-height: 300px; width: auto;">
                        </div>
                        <div class="team-desc">
                            <h4>Alea Smith</h4>
                            <h5>Software Developer</h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="social-icons social-icons-large social-icons-border social-icons-rounded social-icons-colored-hover float-right"
                                    style="margin-right: -10px; margin-top: -3px;">
                                        <ul>
                                            <li class="social-soundcloud">
                                                <a href="#"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn-md btn-outline float-left"
                                    style="margin-left: -10px; border-radius: 30px; border-color: #D0A73F; background-color: #D0A73F; color: #fff; font-size: 14px;"><i class="far fa-envelope"></i> MAIL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="polo-carousel-item">
                    <div class="team-member">
                        <div class="team-image text-center">
                            <img alt="image" width="100%" src="{{ asset('/images/suppa/team/1.jpg') }}"
                                style="max-height: 300px; width: auto;">
                        </div>
                        <div class="team-desc">
                            <h4>Alea Smith</h4>
                            <h5>Software Developer</h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="social-icons social-icons-large social-icons-border social-icons-rounded social-icons-colored-hover float-right"
                                    style="margin-right: -10px; margin-top: -3px;">
                                        <ul>
                                            <li class="social-soundcloud">
                                                <a href="#"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn-md btn-outline float-left"
                                    style="margin-left: -10px; border-radius: 30px; border-color: #D0A73F; background-color: #D0A73F; color: #fff; font-size: 14px;"><i class="far fa-envelope"></i> MAIL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="polo-carousel-item">
                    <div class="team-member">
                        <div class="team-image text-center">
                            <img alt="image" width="100%" src="{{ asset('/images/suppa/team/1.jpg') }}"
                                style="max-height: 300px; width: auto;">
                        </div>
                        <div class="team-desc">
                            <h4>Alea Smith</h4>
                            <h5>Software Developer</h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="social-icons social-icons-large social-icons-border social-icons-rounded social-icons-colored-hover float-right"
                                    style="margin-right: -10px; margin-top: -3px;">
                                        <ul>
                                            <li class="social-soundcloud">
                                                <a href="#"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn-md btn-outline float-left"
                                    style="margin-left: -10px; border-radius: 30px; border-color: #D0A73F; background-color: #D0A73F; color: #fff; font-size: 14px;"><i class="far fa-envelope"></i> MAIL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="polo-carousel-item">
                    <div class="team-member">
                        <div class="team-image text-center">
                            <img alt="image" width="100%" src="{{ asset('/images/suppa/team/1.jpg') }}"
                                style="max-height: 300px; width: auto;">
                        </div>
                        <div class="team-desc">
                            <h4>Alea Smith</h4>
                            <h5>Software Developer</h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="social-icons social-icons-large social-icons-border social-icons-rounded social-icons-colored-hover float-right"
                                    style="margin-right: -10px; margin-top: -3px;">
                                        <ul>
                                            <li class="social-soundcloud">
                                                <a href="#"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="btn btn-md btn-outline float-left"
                                    style="margin-left: -10px; border-radius: 30px; border-color: #D0A73F; background-color: #D0A73F; color: #fff; font-size: 14px;"><i class="far fa-envelope"></i> MAIL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
