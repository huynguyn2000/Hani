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
                                        <p class="descripcion"></p>
                                    </div>
                                    @endforeach
                                </article>
                        @endfor
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="galeria" id="galeria">
        <div class="foto">
            <img src="https://scontent-hkg4-2.xx.fbcdn.net/v/t1.15752-9/122241234_822391491829625_309624408973423699_n.png?_nc_cat=111&_nc_sid=ae9488&_nc_ohc=tIHQS56z2AgAX9yYlZW&_nc_ht=scontent-hkg4-2.xx&oh=cdb16459b560f48a3882797dbc140b38&oe=5FB730E0" alt="">
        </div>
        <div class="foto">
            <img src="https://scontent-hkg4-1.xx.fbcdn.net/v/t1.15752-9/122150175_3108560285919272_6787058916496092711_n.png?_nc_cat=100&_nc_sid=ae9488&_nc_ohc=2nZWieNHfusAX8syCLB&_nc_ht=scontent-hkg4-1.xx&oh=d0c85df7ea0ac6f7ef5a23c0627b1b6c&oe=5FB6C152" alt="">
        </div>
        <div class="foto">
            <img src="https://scontent-hkg4-1.xx.fbcdn.net/v/t1.15752-9/121965801_761010954631478_109311369813086301_n.png?_nc_cat=106&_nc_sid=ae9488&_nc_ohc=h1EfXS_9nnkAX9WAUPm&_nc_ht=scontent-hkg4-1.xx&oh=79638992175448e4ce2983f45db063fb&oe=5FB7468B" alt="">
        </div>
        <div class="foto">
            <img src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t1.0-9/122872342_3407650219349628_1328568537868304878_o.jpg?_nc_cat=111&ccb=2&_nc_sid=8bfeb9&_nc_ohc=qAPHmoVZjSwAX8AyLrv&_nc_ht=scontent.fsgn2-1.fna&oh=0d02ecd6dd9e40e9d30d0bbdeb54840d&oe=5FD2EB3C" alt="">
        </div>
    </section>
@stop
