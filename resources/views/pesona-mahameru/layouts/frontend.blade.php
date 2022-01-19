<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Pesona Mahameru</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('image/logo/logo2.png')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('pesona-master/style.css')}}">
    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

</head>

<body>
    <!-- Preloader -->
    {{-- <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> --}}

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
       
        <!-- Top Header Area -->
        <div class="top-header-area">
            
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="{{url("/")}}"><img src="{{asset('image/logo/logo4.png')}}" alt="" style="height: 52px; width: 125px"></a>
                        </div>
                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pesona Mahameru : Cosmetics Industry"><img src="{{asset('master/img/core-img/placeholder.png')}}" alt=""> <span> Sentul, Bogor, Jawa Barat 16810</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="marketing@pesonamahameru.com"><img src="{{asset('master/img/core-img/message.png')}}" alt=""> <span>marketing@pesonamahameru.com</span></a>
                        </div>
                        
                        {{-- <div class="col-md-2 top-contact-info d-flex align-items-center classynav" >
                            <select class="form-control changeLang" style="margin-left: 10px;background-color: transparent;">
                                <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }} >INDONESIA</option>
                                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>ENGLISH</option>
                            </select>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{url("/")}}">@lang('menu.home')</a></li>
                                    {{-- <li><a href="{{url('/karir')}}">About Us</a></li> --}}
                                    <li><a href="#">@lang('menu.perusahaan.name')</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url("/profil-perusahaan")}}">@lang('menu.perusahaan.sub1')</a></li>
                                            <li><a href="{{url('/karir')}}">@lang('menu.perusahaan.sub2')</a></li>
                                            <li><a href="{{url("gallery")}}">@lang('menu.perusahaan.sub3')</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sample</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url("/form-sample")}}">Form-sample</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">@lang('menu.layanan.name')</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url("/oem-odm-cosmetics")}}">ODM / OEM/ OBM </a></li>
                                            <li><a href="{{url("/proses-maklon-kosmetik")}}">@lang('menu.layanan.sub1')</a></li>
                                            <li><a href="{{url('/peraturan')}}">@lang('menu.layanan.sub2')</a></li>
                                            <li><a href="{{url('/desain-kemasan')}}">@lang('menu.layanan.sub3')</a></li>
                                            <li><a href="{{url("/faq")}}">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">@lang('menu.produk')</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url("/product")}}">All Categories</a></li>
                                            <?php $cats= DB::table('categories')->where(['parent_id' => 0])->get();?>
                                            @foreach ($cats as $item)
                                            <li><a href="{{url("category/". $item->id)}}">{{$item->name}}</a></li>      
                                            @endforeach
                                        </ul>
                                    </li>
                                    
                                    <li><a href="#">Pesonapedia</a>
                                        <ul class="dropdown">
                                             <li><a href="{{url("/pesona-pedia")}}">Pesona Pedia</a></li>
                                            <li><a href="{{url("/ingredients")}}">Ingredients </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/artikel')}}">@lang('menu.artikel')</a></li>
                                    <li><a href="{{url('/kontak')}}">@lang('menu.kontak')</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="{{asset('master/img/core-img/call2.png')}}" alt=""> +6285881232081 </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    @yield('content')


        <!-- ##### Newsletter Area Start ###### -->
        <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url({{asset('image/slider/bb.jpg')}});">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-lg-8">
                        <div class="nl-content text-center">
                            <h2>Subscribe to our newsletter</h2>
                            <form action="{{url("/send-subcribe")}}" method="post">
                                <input type="email" name="email" id="nlemail" placeholder="Your e-mail">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Newsletter Area End ###### -->
    
        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area section-padding-100-0">
            <div class=" text-center items-center p-12 xs:py-16">
                <p class="mb-4 text-lg">Stay Connected with Us</p>
                <div>
                  <a href="https://www.facebook.com/nose.co.id/"  target="_blank"><img src="{{asset('image/footer/facebook.png')}}" class="inline-block max-w-xs max-h-30 content-center m-auto mb-8 mx-4 xs:max-h-30"></a>
                  <a href="https://www.youtube.com/channel/UC5N7RVz3JGWueGTS0j4Asnw"  target="_blank"><img src="{{asset('image/footer/youtube.png')}}" class="inline-block max-w-xs max-h-30 content-center m-auto mb-8 mx-4 xs:max-h-30 xs:mx-2" target="_blank"></a>
                  <a href="https://www.linkedin.com/company/pt-pesona-mahameru/"  target="_blank"><img src="{{asset('image/footer/linkedin.png')}}" class="inline-block max-w-xs max-h-30 content-center m-auto mb-8 mx-4 xs:max-h-30 xs:mx-2" target="_blank"></a>
                  <a href="https://www.instagram.com/pesonamahameru.id/"  target="_blank"><img src="{{asset('image/footer/instagram.png')}}" class="inline-block max-w-xs max-h-30 content-center m-auto mb-8 mx-4 xs:max-h-30 xs:mx-2" target="_blank"></a>
                  <a href="https://goo.gl/maps/9ysvm6RW7ZM7wjNn8"  target="_blank"><img src="{{asset('image/footer/map.png')}}" class="inline-block max-w-xs max-h-30 content-center m-auto mb-8 mx-4 xs:max-h-30 xs:mx-2" target="_blank"></a>
                </div>
                <p class="leading-normal">
                    Plaza Amsterdam Blok B Sentul City No. 56, Kec. Babakan Madang, Bogor, Jawa Barat 16810<br>
                  Telepon / WA : +6285881232081
                </p>
                <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="5b42498f-5576-4235-a159-62876ebf82cb";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

              </div>


            <!-- Copywrite Area -->
            <div class="copywrite-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                                <!-- Footer Logo -->
                                <a href="index.html" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>
                                <!-- Copywrite Text -->
                                <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy; Pesona Mahameru <script>document.write(new Date().getFullYear());</script> All rights reserved  
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <a href="https://wa.me/6285881232081?text=Hallo PT Pesona Mahameru" class="float" target="_blank">						
				<i class="fa fa-whatsapp my-float"></i></a>
        </footer>
        <!-- ##### Footer Area Start ##### -->

        <script type="text/javascript">
  
            
          
        </script>
    
        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="{{asset('pesona-master/js/jquery/jquery-2.2.4.min.js')}}"></script>
        <!-- Popper js -->
        <script src="{{asset('pesona-master/js/bootstrap/popper.min.js')}}"></script>
        <!-- Bootstrap js -->
        <script src="{{asset('pesona-master/js/bootstrap/bootstrap.min.js')}}"></script>
        <!-- All Plugins js -->
        <script src="{{asset('pesona-master/js/plugins/plugins.js')}}"></script>
        <!-- Active js -->
        <script src="{{asset('pesona-master/js/active.js')}}"></script>
        
        <link rel="stylesheet" href="{{asset('lte/plugins/ekko-lightbox/ekko-lightbox.css')}}">
        <script src="{{asset('lte/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

        

    </body>

    @if(Session::has('sub'))
    <script>
    toastr.success("Selamat !! anda akan medapat pemberitahuan dari email");
    </script>
@endif

    @yield('footer-frontend')
    
    </html>