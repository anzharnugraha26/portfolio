@extends('pesona-mahameru.layouts.frontend')
@section('content')
    <!-- ##### Hero Area Start ##### -->
    {{-- <div class="hero-area">
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url({{asset('/image/slider/s1.jpg')}});"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Start Your Business with us !</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Maklon Kosmetik &  <span>Skincare</span> </h2>
                                <p data-animation="fadeInUp" data-delay="500ms">Punya ide bisnis kosmetik, tapi bingung harus mulai dari mana? Pesona Mahameru bisa bantu kamu membuat produk sesuai idemu!</p>
                                <a href="https://wa.me/6285881232081?text=Hallo PT Pesona Mahameru" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms" target="_blank">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url({{asset('/image/slider/s2.jpg')}});"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Start Your Business with us !</h6>
                                <h3 data-animation="fadeInUp" data-delay="300ms" style="color: white">Quality Service | Quality Personality | Quality Product  </h3>
                                <h2 data-animation="fadeInUp" data-delay="300ms"><span>Skincare</span></h2>
                                <p data-animation="fadeInUp" data-delay="500ms">Punya ide bisnis kosmetik, tapi bingung harus mulai dari mana? Pesona Mahameru bisa bantu kamu membuat produk sesuai idemu!</p>
                                <a href="https://wa.me/6285881232081?text=Hallo PT Pesona Mahameru" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms" target="_blank">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url({{asset('/image/slider/s3.jpg')}});"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">PT Pesona Mahameru memiliki</h6>
                                <h3 data-animation="fadeInUp" data-delay="300ms" style="color: white">Research and Development </h3>
                                <h2 data-animation="fadeInUp" data-delay="300ms"><span>Professional</span></h2>
                                <p data-animation="fadeInUp" data-delay="500ms">Punya ide bisnis kosmetik, tapi bingung harus mulai dari mana? Pesona Mahameru bisa bantu kamu membuat produk sesuai idemu!</p>
                                <a href="https://wa.me/6285881232081?text=Hallo PT Pesona Mahameru" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms" target="_blank">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url({{asset('/image/slider/s4.jpg')}});"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Start Your Business with us !</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">tinggaljualan.com </h2>
                                <h3 data-animation="fadeInUp" data-delay="300ms" style="color: yellow"><span>Startup Design & Web Design</span></h3>
                                <p data-animation="fadeInUp" data-delay="500ms">Kami tinggaljualan.com hadir sebagai solusi Anda, sebuah jasa yang berada dibawah naungan PT Pesona Mahameru</p>
                                <a href="http://tinggaljualan.com/" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms" target="_blank">Kunjungi Website Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

        </div>
    </div> --}}
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Features Area Start ###### -->
    <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <p>@lang('home.header_1')</p>
                        <h2>Pesona Mahameru ?</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="200ms">
                        <div class="icon" style="background-color: white">
                            <img src="{{asset('image/icon/p.png')}}">
                        </div>
                        <div class="text">
                            <h5 style="text-align: center;">@lang('home.about_1.judul')</h5>
                            <p style="text-align: center;">@lang('home.about_1.isi')</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="300ms" style="background-color: white">
                        <div class="icon" style="background-color: white">
                            <img src="{{asset('image/icon/g.png')}}">
                        </div>
                        <div class="text">
                            <h5 style="text-align: center;">Good Quality Control</h5>
                            <p style="text-align: center;">@lang('home.about_2.isi')</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="icon" style="background-color: white">
                            <img src="{{asset('image/icon/ds.png')}}" >
                        </div>
                        <div class="text">
                            <h5 style="text-align: center;">Desain & Packaging</h5>
                            <p style="text-align: center;">@lang('home.about_3.isi')</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon" style="background-color: white">
                            <img src="{{asset('image/icon/h.png')}}" >
                        </div>
                        <div class="text">
                            <h5 style="text-align: center;">@lang('home.about_4.judul')</h5>
                            <p style="text-align: center;">@lang('home.about_4.isi')</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <div class="icon" style="background-color: white">
                            <img src="{{asset('image/icon/s.png')}}">

                        </div>
                        <div class="text">
                            <h5 style="text-align: center;">@lang('home.about_5.judul')</h5>
                            <p style="text-align: center;">@lang('home.about_5.isi')</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="icon" style="background-color: white">
                            <img src="{{asset('image/icon/sr.png')}}" >
                        </div>
                        <div class="text">
                            <h5 style="text-align: center;">@lang('home.about_6.judul')</h5>
                            <p style="text-align: center;">@lang('home.about_6.isi')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Features Area End ###### -->

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img jarallax" style="background-image: url({{asset('/image/slider/s1.jpg')}});"></div>

        <!-- Cta Content -->
        <div class="cta-content">
            <!-- Section Heading -->
            <div class="section-heading white">
                <div class="line"></div>
                <p>Bold desing and beyound</p>
                <h2>@lang('home.tentang.judul')</h2>
            </div>
            <h6 class="mb-0"><b>PT. Pesona Mahameru</b> @lang('home.tentang.isi')
            </h6>
            <div class="d-flex flex-wrap mt-50">
            </div>
            <a href="{{url("profil-perusahaan")}}" class="btn credit-btn box-shadow btn-2">Read More</a>
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-2-area wow fadeInUp" data-wow-delay="100ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="cta-text">
                            <h4>Satu Langkah mudah</h4>
                        </div>
                        <div class="cta-btn">
                            <a href="{{url('kontak')}}" class="btn credit-btn box-shadow">Konsultasi Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Services Area Start ###### -->
    
    <!-- ##### Services Area End ###### -->

    <!-- ##### Miscellaneous Area Start ###### -->
    <section class="miscellaneous-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="section-heading white">
                
                
                <h2 style="color: black;text-align: center;">Brand yang Maklon di PT Pesona Mahameru</h2>
            </div>
            <div class="col-12 mb-70">
                <div class="row">

                    <!-- Single Icons -->
                   
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/1.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/2.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/3.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/4.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/5.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/6.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/7.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/8.png')}}">
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/9.png')}}">
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/10.png')}}">
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/11.png')}}">
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/12.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/13.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/14.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/15.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/16.png')}}">
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/17.png')}}">
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/18.png')}}">
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/19.png')}}">
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/20.png')}}">
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/21.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/22.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/23.png')}}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="single-icons mb-30" style="background-color: white">
                         <img src="{{asset('image/maklon/24.png')}}">
                        </div>
                    </div>
                    
                </div>
                <p style="color: black;text-align: center;">and many more...</p>
            </div>


        </div>
    </section>
   

    {{-- @include('include.form-form') --}}



@endsection