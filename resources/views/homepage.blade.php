@extends('master')

@section('content')

{{-- START HERO --}}
    <div class="hero">
        <div class="hero-content container">
            <div class="hero-wrapper">
                <h1 class="hero-title">PT. LINGGA MAS BOSEMAR</h1>
                <h4 class="hero-description">Biro Iklan</h4>
            </div>
            <div class="hero-btn-wrapper">
                <button class="btn hero-btn hero-btn-primary ">HUBUNGI KAMI</button>
                {{-- <a href="#about" class="btn hero-btn hero-btn-secondary">TENTANG KAMI</a> --}}
                <button class="smoothscroll btn hero-btn hero-btn-secondary" onclick="functionforscroll('about')">
                    <div class="scroll-down">TENTANG KAMI</div>
                </button>
            </div>
        </div>
    </div>

{{-- END HERO --}}

{{-- START ABOUT --}}
<section class="about" id="about">
    <div class="container">
        {{-- <h1 class="heading-secondary">TENTANG KAMI</h1> --}}
        <div class="features">
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
    </div>
</section>
{{-- END ABOUT --}}

<script>
    const functionforscroll = function(id){
        const reqId = "#"+id;
        window.scrollTo(0, $(reqId).offset().top-85);
    }
</script>
@endsection