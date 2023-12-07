@extends('master')

{{-- @section('slick-css')
<link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
<!-- Add the slick-theme.css if you want default styling -->
@endsection --}}

@section('content')

{{-- START HERO --}}
    <div class="hero">
        <div class="hero-content container">
            <div class="hero-wrapper">
                <h1 class="hero-title"><span>PT.</span> LINGGA MAS BOSEMAR</h1>
                <h4 class="hero-description">Biro Iklan</h4>
            </div>
            <div class="hero-btn-wrapper">
                <button class="btn hero-btn hero-btn-primary ">
                    <div class="hero-btn-content">
                        HUBUNGI KAMI
                        <i class="fa-solid fa-phone hero-icon"></i>
                    </div>
                </button>
                    <button class="smoothscroll btn hero-btn hero-btn-secondary" onclick="functionforscroll('main')">
                        <div class="hero-btn-content">
                            <div class="scroll-down">TENTANG KAMI</div>
                            <i class="fa fa-angle-down hero-icon"></i>
                        </div>
                    </button>
                {{-- <a href="#about" class="btn hero-btn hero-btn-secondary">TENTANG KAMI</a> --}}
            </div>
        </div>
    </div>
    
    {{-- END HERO --}}

    {{-- START MAIN --}}
    <section class="main" id="main">
        <h2 class="main-title heading-secondary">PT. LINGGA MAS BOSEMAR </h2>
        <div class="container main-wrapper">
            <img src="{{asset('images/Logo-removebg.png')}}" alt="logo1" width="500px" height="500px" class="main-logo">
            <div class="row">
                <div class="main-left col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="main-left-wrapper">
                        <div class="main-left-description">
                            <p class="main-description">Merupakan perusahaan yang bergerak di bidang periklanan, atau lebih dikenal sebagai Biro Iklan. Berdiri sejak Juli 2022, PT. Lingga Mas Bosemar telah berpengalaman dalam menangani  iklan di berbagai media. Media cetak local maupun nasional, termasuk juga media-media digital.</p>
                            {{-- <p class="main-description"></p> --}}
                            <p class="main-description">Khusus dalam bidang Lelang, Biro Iklan kami telah berpengalaman dan bekerjasama degan beberapa instansi. Diantaranya: </p>
                        </div>
                        <div class="main-left-list">
                            <p class="main-description"> Bank BNI </p>
                            <p class="main-description"> Bank BRI </p>
                            <p class="main-description"> Bank BTN </p>
                            <p class="main-description"> Bank BTN Syariah </p>
                            <p class="main-description"> Bank BTPN </p>
                            <p class="main-description"> Bank Danamon </p>
                            <p class="main-description"> BPR </p>
                            <p class="main-description"> Koperasi </p>
                            <p class="main-description"> Balai Lelang Swasta </p>
                        </div>
                    </div>
                    <button class="btn hero-btn hero-btn-primary main-btn" onclick="functionforscroll('features')">
                        <div class="hero-btn-content">
                            Lebih Lanjut
                            <i class="fa-solid fa-angle-down hero-icon"></i>
                        </div>
                    </button>
                </div>
                <div class="main-right col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <img src="{{asset('images/Logo-removebg.png')}}" alt="logo1" width="300px" height="300px">
                </div>
            </div>
        </div>
    </section>
    {{-- END MAIN --}}
    
    
    {{-- START ABOUT --}}
    <section id="about" class="about">
    <div class=" about-wrapper">
        <div class="about-right">
            <div class="about-image">
                <div class="">
                    <img class="about-image-list" src="{{asset('images/about-2.jpg')}}" alt="" width="" height="800px">
                </div>
                <div class="">
                    <img class="about-image-list" src="{{asset('images/about-1.jpg')}}" alt="" width="" height="800px">
                </div>
                <div class="">
                    <img class="about-image-list" src="{{asset('images/about-3.jpg')}}" alt="" width="" height="800px">
                </div>
                {{-- <img src="{{asset('images/about-1.jpg')}}" alt="" width="100px" height="200px">
                <img src="{{asset('images/about-1.jpg')}}" alt="" width="100px" height="200px"> --}}
            </div>
            <ul class="about-button">
                <li class="prev">
                    <i class="fa fa-angle-left fa-3x about-icon"></i>
                </li>
                <li class="next">
                    <i class="fa fa-angle-right fa-3x about-icon"></i>
                </li>
            </ul>
        </div>
        <div class="about-left">
            <div class="shape-1 about-shape-1"></div>
            <div class="shape-1 about-shape-2"></div>
            <div class="about-content">
                <h2 class="about-title">CONTOH IKLAN</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, minima tempore. Nostrum iusto, exercitationem officia quos voluptates dicta. Eum itaque atque cumque explicabo porro illum sequi! Quas consequuntur voluptatum repudiandae!</p>
                </div>
            </div>
        </div>
    </section>
    {{-- END ABOUT --}}
    {{-- START FEATURES --}}
    <section class="features" id="features">
        <div class="container">
            <h1 class="heading-secondary">keunggulan</h1>
            <div class="features-wrapper">
                <div class="features-box">
                    <div>
                        <i class="fa-solid fa-lock fa-2xl features-icon" class=""></i>
                    </div>
                    <div class="features-content">
                        <h3>Aman & Terpecaya</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur illo veritatis aut architecto aliquid, ab sit nostrum aperiam quos excepturi neque saepe fuga corporis ex assumenda eligendi! Ducimus, distinctio consequuntur?</p>
                    </div>
                </div>
                <div class="features-box">
                    <div>
                        <i class="fa-solid fa-lock fa-2xl features-icon" class=""></i>
                    </div>
                    <div class="features-content">
                        <h3>Aman & Terpecaya</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae voluptatum pariatur velit deleniti, officiis commodi et quia? Nesciunt, molestiae deleniti.</p>
                </div>
            </div>
            <div class="features-box">
                <div>
                    <i class="fa-solid fa-lock fa-2xl features-icon" class=""></i>
                </div>
                <div class="features-content">
                    <h3>Aman & Terpecaya</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae voluptatum pariatur velit deleniti, officiis commodi et quia? Nesciunt, molestiae deleniti.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- END FEATURES --}}

    {{-- START FOOTER --}}
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-wrapper">
                <h4 class="footer-title">Lingga Mas Bosemar</h4>
                <div class="footer-menu">
                    <a href="{{route('contact')}}" class="footer-menu-list">Contact</a>
                    <a href="" class="footer-menu-list">Tentang Kami</a>
                    <a href="" class="footer-menu-list">Jelajahi</a>
                </div>
            </div>
            <div class="footer-separator"></div>
            <div class="footer-bottom">
                <p class="footer-copyright">© 2023 PT. Lingga Mas Bosemar. All rights reserved</p>
                <div class="contact-right-sosmed">
                    <a href=""><div class="footer-logo footer-logo-1"></div></a>
                    <a href=""><div class="footer-logo footer-logo-2"></div></a>
                    <a href=""><div class="footer-logo footer-logo-3"></div></a>
                </div>
            </div>
        </div>
    </footer>
    {{-- END FOOTER --}}
    
    {{-- <section class="iklan">
        <div class="container">
            <div class="iklan-wrapper">
                <div class="iklan-box">
                    <img class="iklan-image" src="{{asset('images/about-2.jpg')}}" alt="" width="100%" height="300px">
                    <h5 class="iklan-title">Lorem, ipsum.</h5>
                    <div class="iklan-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est perspiciatis in, praesentium sequi, optio dolorum nesciunt consectetur iure deleniti error voluptates sed repudiandae quis molestiae ea nemo. Quis, quas officia?</div>
                    <button class="btn iklan-btn">
                        <div class="iklan-btn-wrapper">
                            lihat detail
                        <i class="fa fa-angle-right hero-icon"></i>
                    </div>
                </button>
            </div>
            <div class="iklan-box">
                <img class="iklan-image" src="{{asset('images/about-2.jpg')}}" alt="" width="100%" height="300px">
                <h5 class="iklan-title">Lorem, ipsum.</h5>
                <div class="iklan-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est perspiciatis in, praesentium sequi, optio dolorum nesciunt consectetur iure deleniti error voluptates sed repudiandae quis molestiae ea nemo. Quis, quas officia?</div>
                <button class="btn iklan-btn">
                    <div class="iklan-btn-wrapper">
                        lihat detail
                        <i class="fa fa-angle-right hero-icon"></i>
                    </div>
                </button>
            </div>
            <div class="iklan-box">
                <img class="iklan-image" src="{{asset('images/about-2.jpg')}}" alt="" width="100%" height="300px">
                <h5 class="iklan-title">Lorem, ipsum.</h5>
                <div class="iklan-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est perspiciatis in, praesentium sequi, optio dolorum nesciunt consectetur iure deleniti error voluptates sed repudiandae quis molestiae ea nemo. Quis, quas officia?</div>
                <button class="btn iklan-btn">
                    <div class="iklan-btn-wrapper">
                        lihat detail
                        <i class="fa fa-angle-right hero-icon"></i>
                    </div>
                </button>
            </div>
        </div>
    </div>    
</section> --}}

<script type="text/javascript">
    const functionforscroll = function(id){
        const reqId = "#"+id;
        window.scrollTo(0, $(reqId).offset().top-100);
    }
</script>
@endsection