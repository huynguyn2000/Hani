
   
@extends('layouts.app')
@section('content')
    <section class="content1" id="content1">
        <div class="content-contenedor">
            <div class="foto">
                <img src="{{ asset('theme_admin/image/120199541_3324887317625919_8047858071268706537_o.jpg') }}" alt="">
                <aside>
                    
                    <h4>It’s time for Coffee & Tea!</h4>
                    <h4><p>The Hani's drinks create the amazing stories of your lives.</p>
                        <p>Replay your good memories now!</p>
                    </h4><hr>
                    <p>
                        Đồ uống của Hani tạo ra những câu chuyện tuyệt vời trong cuộc sống của bạn.
                        Hãy cùng nhau ôn lại những kỷ niệm đẹp của bạn ngay bây giờ!
                    </p>
                    <p>  Những kế hoạch lớn nhỏ thông qua những kinh nghiệm...
                        Bằng tất cả cố gắng chúng tôi kết hợp giữa cuộc sống và sự sáng tạo.
                        Cống hiến cho các sự kiện văn hoá và nghệ thuật,
                        phát triển các thiết kế sống động và ấm cúng,
                        để đạt được khoảnh khắc cảm xúc tuyệt vời trong cuộc sống.</p>
                </aside>
            </div>
        </div>
    </section>
    <a  href="{{ route('order.cart') }}">
   <div class="noel-image">
   <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="350" height="400">
    <path fill="transparent" d="M0 0h350v400H0z"/>
    <g class="plane">
      <rect x="215.747" y="157.738" width="25.511" height="43.645" rx="12.755" ry="12.755" fill="#711723"/>
      <path fill="#f40009" d="M166.263 185.401h74.995v31.965h-74.995zM166.263 217.366h74.995a31.965 31.965 0 01-31.965 31.965h-43.03v-31.965z"/>
      <g class="hand">
        <rect x="136.437" y="152.836" width="26.365" height="9.113" rx="4.557" ry="4.557" transform="rotate(-120 149.62 157.393)" fill="#f6bfb1"/>
        <path fill="#f40009" d="M144.906 163.746l11.978-6.916 20.407 35.346-11.978 6.916z"/>
        <rect x="139.226" y="154.214" width="20.172" height="6.973" rx="3.486" ry="3.486" transform="rotate(-30 149.312 157.7)" fill="#e6e6e6"/>
      </g>
      <path fill="#f6bfb1" d="M171.488 155.28h37.805v23.974h-37.805z"/>
      <path d="M165.956 185.093v64.545h-12.602v-.024c-.406.015-.818.024-1.23.024a32.272 32.272 0 110-64.545c.412 0 .824.01 1.23.025v-.025z" fill="#711723"/>
      <path fill="#300403" d="M161.345 185.093h4.918v64.545h-4.918z"/>
      <path d="M113.376 210.296v11.987h-2.34v-.004a6.053 6.053 0 01-.23.004 5.993 5.993 0 110-11.987c.077 0 .154.002.23.005v-.005z" fill="#f40009"/>
      <g fill="#300403">
        <circle cx="155.505" cy="244.106" r="2.459"/>
        <circle cx="155.505" cy="190.933" r="2.459"/>
        <circle cx="155.505" cy="208.452" r="2.459"/>
        <circle cx="155.505" cy="226.586" r="2.459"/>
      </g>
      <rect class="blade" x="113.244" y="167.266" width="6.762" height="98.354" rx="3.381" ry="3.381" fill="#300403"/>
      <path d="M195.154 211.526h34.732a4.918 4.918 0 014.917 4.918 4.918 4.918 0 01-4.917 4.917h-34.732a4.918 4.918 0 01-4.917-4.917 4.918 4.918 0 014.917-4.918z" fill="#711723"/>
      <g fill="#fff">
        <rect x="174.148" y="171.282" width="15.925" height="40.192" rx="7.963" ry="7.963"/>
        <rect x="188.824" y="171.282" width="15.925" height="40.192" rx="7.963" ry="7.963"/>
        <rect x="180.862" y="167.691" width="15.925" height="51.21" rx="7.963" ry="7.963" transform="rotate(-90 188.824 193.296)"/>
        <path d="M161.55 180.896a7.963 7.963 0 016.42-9.252l20.066-3.625a7.963 7.963 0 019.251 6.42 7.963 7.963 0 01-6.42 9.251l-20.066 3.626a7.963 7.963 0 01-9.251-6.42z"/>
        <path d="M183.122 174.543a7.963 7.963 0 019.251-6.42l19.491 3.521a7.963 7.963 0 016.42 9.252 7.963 7.963 0 01-9.251 6.42l-19.491-3.522a7.963 7.963 0 01-6.42-9.25z"/>
      </g>
      <rect x="167.185" y="151.899" width="6.455" height="27.355" rx="3.227" ry="3.227" fill="#711723"/>
      <rect x="207.449" y="151.899" width="6.455" height="27.355" rx="3.227" ry="3.227" fill="#711723"/>
      <circle cx="190.083" cy="165.883" r="3.842" fill="#e76160"/>
      <circle cx="190.083" cy="179.868" r="6.454"/>
      <path fill="#f40009" d="M167.185 148.21h46.718v7.069h-46.718zM213.903 145.137h-46.718a10.757 10.757 0 0110.757-10.758h25.204a10.757 10.757 0 0110.757 10.758z"/>
      <path fill="#711723" d="M167.185 143.907h46.718v4.303h-46.718z"/>
      <circle cx="181.016" cy="146.059" r="7.377" fill="#711723"/>
      <circle cx="181.016" cy="146.059" r="5.62" fill="#300403"/>
      <circle cx="200.072" cy="146.059" r="7.377" fill="#711723"/>
      <circle cx="200.072" cy="146.059" r="5.62" fill="#300403"/>
      <path d="M176.713 165.422s2.459-3.995 6.454 0M197.306 165.422s2.459-3.995 6.454 0" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="1.844"/>
    </g>
    </svg>   
    <style>
@import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Leckerli+One&family=Nerko+One&family=Ubuntu:wght@300&display=swap');       
    .Menu1{
      font-family: 'Fredoka One', cursive;
    }
    .categoria{
      font-family: 'Fredoka One', cursive;
    }
    @import url('https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Lobster&family=Ubuntu&display=swap');

    </style>
    </div> </a>
    <section class="menu">
        <div class="Menu1">
            <h3 class="titulo" id="platillos">Menu</h3>
            <div class="contenedor-menu">
                <div class="contenedor-menu2">
                    <!-- SAN PHAM -->
                    @if (isset($productsND))
                        @for($i=0; $i<$countCate; $i++)
                                <article>
                                    <p class="categoria">{{ $categories[$i]->c_name }}</p>
                                    @foreach($productsND[$i] as $key => $value)
                                    <div class="platillo">
                                        <p class="nombre">{{ $value->pro_name }}</p>
                                        <p class="precio">{{ $value->pro_price }}</p>
{{--                                        <p class="descripcion"></p>--}}
                                    </div>
                                    @endforeach
                                </article>
                        @endfor
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="galeria" id="galeria" style="margin-bottom: 30px;">
        <div class="foto">
            <img src="{{ asset('theme_admin/image/128424967_3506155622832420_5331212983638655245_o.jpg') }}" alt="">
        </div>
        <div class="foto">
            <img src="{{ asset('theme_admin/image/128812484_3506156009499048_3375755073180637359_o.jpg') }}" alt="">
        </div>
        <div class="foto">
            <img src="{{ asset('theme_admin/image/129003028_3506156162832366_4680126327750079344_o.jpg') }}" alt="">
        </div>
        <div class="foto">
            <img src="{{ asset('theme_admin/image/129897150_3506155819499067_3945939008353199087_o.jpg') }}" alt="">
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="font-family:'Fredoka One', cursive; font-size:40px;">Team </h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="https://scontent.fvca1-1.fna.fbcdn.net/v/t1.15752-9/s2048x2048/130707192_4768232733218252_2378370977946624771_n.jpg?_nc_cat=103&ccb=2&_nc_sid=ae9488&_nc_ohc=hLYqYsvU6iQAX8jQjp-&_nc_ht=scontent.fvca1-1.fna&tp=7&oh=7cff6dfb9b1bef1ce729a7e4b8c04d8b&oe=5FFFEF00" alt="" />
                            <h4 style="font-family: 'Lobster', cursive;">Nguyễn Thị Diễm Mi</h4>
                            <p class="text-muted" style="font-family: 'Lobster', cursive;" >18520310</p>
                
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="https://scontent.fvca1-1.fna.fbcdn.net/v/t1.15752-9/s2048x2048/131536656_816586755585137_8153869061485756134_n.jpg?_nc_cat=105&ccb=2&_nc_sid=ae9488&_nc_ohc=bTcr_I-Ye5MAX9vC2-B&_nc_ht=scontent.fvca1-1.fna&tp=7&oh=4de7f6b732d46aaa781d962e6b308f3f&oe=5FFFBAE1" alt="" />
                            <h4 style="font-family: 'Lobster', cursive;">Nguyễn Đức Huy </h4>
                            <p class="text-muted" style="font-family: 'Lobster', cursive;">18520840</p>
      
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
        
        </section>
    <style>
/* NOEL*/
.noel-image{
  position: absolute;
  height: 300px;
  width: 180px;
  -webkit-transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
          transform: translate(-50%,-50%);
  
  top: 80%;
  left: 85%;
}
svg{
    position: absolute;
    top: 0;
    left: 0;
}
.plane{
  position: absolute;
  -webkit-animation: float 3s infinite;
          animation: float 3s infinite;
}
@-webkit-keyframes float{
  50%{
    -webkit-transform: translateY(25px);
            transform: translateY(25px);
  }
}
@keyframes float{
  50%{
    -webkit-transform: translateY(25px);
            transform: translateY(25px);
  }
}
.hand{
  -webkit-transform: rotate(10deg);
      -ms-transform: rotate(10deg);
          transform: rotate(10deg);
  -webkit-animation: wave 1.5s infinite;
          animation: wave 1.5s infinite;
  -webkit-transform-origin: center;
      -ms-transform-origin: center;
          transform-origin: center; 
}
.blade{
  -webkit-animation:spin 1s infinite linear;
          animation:spin 1s infinite linear;
  -webkit-transform-origin: 50% 54%;
      -ms-transform-origin: 50% 54%;
          transform-origin: 50% 54%;
}
@-webkit-keyframes spin{
  100%{
    -webkit-transform: rotateX(360deg);
            transform: rotateX(360deg);
  }
}
@keyframes spin{
  100%{
    -webkit-transform: rotateX(360deg);
            transform: rotateX(360deg);
  }
}
@-webkit-keyframes wave{
  50%{
    -webkit-transform: rotate(-10deg);
            transform: rotate(-10deg);
  }
}
@keyframes wave{
  50%{
    -webkit-transform: rotate(-10deg);
            transform: rotate(-10deg);
  }
}
/* TEAM */
.container,
.container-fluid,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  width: 100%;
  padding-right: 0.75rem;
  padding-left: 0.9rem;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
.container {
    min-width: 992px !important;
  }
  .row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -0.75rem;
  margin-left: -0.75rem;
}
@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
}
@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .team-member {
  margin-bottom: 3rem;
  text-align: center;
}
.team-member img {
  width: 17rem;
  height: 14rem;
  border: 0.5rem solid rgba(0, 0, 0, 0.3);
}
.team-member h4 {
  margin-top: 1.5rem;
  margin-bottom: 0;
}
.text-muted {
  color: #6c757d !important;
}@import url('https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Ubuntu&display=swap');

</style>
@stop
