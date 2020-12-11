@extends('layouts.app')
@section('content')
    <section class="content1" id="content1">
        <div class="content-contenedor">
            <div class="foto">
                <img src="{{ asset('theme_admin/image/120199541_3324887317625919_8047858071268706537_o.jpg') }}" alt="">
                <aside>
                    <h3>About</h3>
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
@stop
