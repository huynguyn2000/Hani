<!--Home-->
@extends('layouts.app')
@section('content')
    <script>
        $(document).ready(function(){
            @if(Session::has('success'))
            alertify.success('{{ Session::get("success") }}')
            @endif
        });
    </script>
    <section class="content1" id="content1">
{{--        <script type="text/javascript" src="https://itexpress.vn/js/new.year.min.js"></script>--}}
{{--        <script type="text/javascript">function pageWidth(){return null!=window.innerWidth?window.innerWidth:null!=document.body?document.body.clientWidth:null}function pageHeight(){return null!=window.innerHeight?window.innerHeight:null!=document.body?document.body.clientHeight:null}function posLeft(){return void 0!==window.pageXOffset?window.pageXOffset:document.documentElement.scrollLeft?document.documentElement.scrollLeft:document.body.scrollLeft?document.body.scrollLeft:0}function posTop(){return void 0!==window.pageYOffset?window.pageYOffset:document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop?document.body.scrollTop:0}function d2h(t){return hD.substr(t>>>4,1)+hD.substr(15&t,1)}function stopfire(){for(var t=firestop.length-1;0<=t;t--){clearInterval(firestop[t]);for(var e=fire[t].sp.length-1;0<=e;e--)fire[t].sp[e].style.visibility="hidden"}}function fireworks(){new fo(50),setTimeout("new fo(50)",750),0<stopafter&&setTimeout("stopfire()",6e4*stopafter)}document.write('<style type="text/css">body{padding-bottom:0px}</style><img style="position:fixed;z-index:99999;top:0;left:0" src="https://lh3.googleusercontent.com/Nm43LAO21g0ua9Muu0BUELDCkQfCm4sOKIPlXTM3jScFEuuR2q89H4CBKx7bkbzyAvXA-MPb6bFlPXyRGnep6Y3IsBR171nGx3tkB2SD9zyw3qXlxj8iv7SHoP1t0YK-wSmIcg=w141-h143-no"/><img style="position:fixed;z-index:99999;top:0;right:0" src="https://lh3.googleusercontent.com/yfLzqRzZL5T5i20FJbhfXEjDjkUT3PshER0urEBiAq1Euy4NTMZBKnMsH8ni-R7ffM8a_mgua5IjbGnp4DWUXQDI_-mNaDfAkgcyFlNNa5u0kRqjaBtW077U47CWsJgNfhhk-g=w141-h143-no"/><div style="position:fixed;z-index:99999;bottom:-50px;left:0;width:100%;height:104px;background:url(https://...) repeat-x bottom left;"></div><img style="position:fixed;z-index:99999;bottom:0px;left:0px" src="https://lh3.googleusercontent.com/2U90SIgXGe2W0O2NPluq66u-98JcgCpKBmRvWDcniKdybBTjqIjB0Noq0UsRdG2oOTZlvVh26T1mU9e1nY8lTuOFrSru_saC4J6K6refpHTSJiCb_SykRe2i7MbHgj8q5ESMzg=w200-h159-no"/><img style="position:fixed;z-index:9999;bottom:0px;right:0px" src="https://lh3.googleusercontent.com/XH0FHlEyLBF5hzcgkDvSjKlInwSYZ5TUoBruIJoRNnXtezP4kCdi0S7_dwXhee-AbfoWL4g9osBMG32sG7u9Tc30NPOP61GpytphyxoFcZgknHoRm54BprHHO0Umd2q8PpV5Lw=w162-h167-no"/><div style="position:fixed;z-index:99999;bottom:3px;right:3px; font-size:11px;color:#B7E8FF;">by <a href="https://itexpress.vn/vi/tin-tuc/code-javascipt-tao-hieu-ung-hoa-mai-phao-hoa-cho-website-190.html">ITExpress.vn</a></div>');var stopafter=0,firestop=[],fire=[],stdDOM=document.getElementById,nsDOM=-1!=navigator.appName.indexOf("Netscape")&&4==parseInt(navigator.appVersion),hD="0123456789ABCDEF";layernum=0,piece=function(t){if(this.elem=null,nsDOM)null==t?this.elem=new Layer(1):(this.elem=new Layer(1,t.elem),this.style.visibility="inherit"),this.parent=t,this.style=this.elem;else if(stdDOM){this.parent=null==t?document.body:t.elem,this.elem=document.createElement("div");var e="xLayer"+layernum++;this.elem.setAttribute("id",e),elemc=document.createTextNode("."),this.elem.appendChild(elemc),this.parent.appendChild(this.elem),this.style=this.elem.style,document.getElementById(e).style.lineHeight="3px",document.getElementById(e).style.color="#fff",document.getElementById(e).style.position="absolute"}(window[this.elem.id]=this).ay=.1,this.type=0},piece.prototype.moveTo=function(t,e){nsDOM?this.elem.moveTo(t,e):(this.style.left=t+"px",this.style.top=e+"px")},piece.prototype.setC=function(t){nsDOM?this.elem.bgColor=t:this.style.backgroundColor=null==t?"transparent":t},piece.prototype.fire=function(t,e,i){var s=Math.random()*Math.PI*2;switch(i){case 1:var o=2*Math.random();break;case 2:o=2;break;case 3:o=2*Math.PI-s-Math.random();break;case 4:o=s-Math.random();break;default:o=2*Math.random();.6<Math.random()&&(o=1.5)}this.dx=o*Math.sin(s),this.dy=o*Math.cos(s)-2,this.x=t,this.y=e,this.moveTo(t,e)},piece.prototype.sCol=function(t,e,i){switch(i){case 1:this.setC("#"+t+e+"00");break;case 2:this.setC("#00"+t+"00");break;case 3:this.setC("#00"+t+e);break;case 4:this.setC("#"+t+"0000");break;case 5:this.setC("#"+t+t+"00");break;case 6:this.setC("#"+t+t+t);break;case 7:this.setC("#"+e+t+"00");break;default:this.setC("#"+t+e+t)}},piece.prototype.animate=function(t,e){var i=25<t?Math.random()*(380-5*t):255-4*t,s=d2h(i-112);i<112&&(s=d2h(i)),this.sCol(d2h(i),s,e),this.dy+=this.ay,this.x+=this.dx,this.y+=this.dy,this.moveTo(this.x,this.y)},fo=function(t){for(this.id="fo"+fo.count++,this.sp=new Array,i=0;i<t;i++)this.sp[i]=new piece,nsDOM?(this.sp[i].style.clip.top=0,this.sp[i].style.clip.left=0,this.sp[i].style.clip.bottom=3,this.sp[i].style.clip.right=3):this.sp[i].style.clip="rect(0 3 3 0)",this.sp[i].style.visibility="visible";this.step=0,window[this.id]=this,fire.push(this),firestop.push(setInterval("window."+this.id+".animate()",15))},fo.count=0,fo.prototype.animate=function(){if(55<this.step&&(this.step=0),0==this.step){var t=posLeft()+50+Math.random()*(pageWidth()-200),e=posTop()+50+Math.random()*(pageHeight()-250),s=Math.floor(5*Math.random());for(this.cl=Math.floor(8*Math.random()),i=0;i<this.sp.length;i++)this.sp[i].fire(t,e,s)}for(this.step++,i=0;i<this.sp.length;i++)this.sp[i].animate(this.step,this.cl)},window.onload=fireworks,document.write('<script src="http://itexpress.vn/js/phaohoa.js"><\/script>');var domain_curr=window.location.host,domain_ex=["hentai12h.net","chovietnam.info","hopquaxuan2018.com"];-1<domain_ex.indexOf(domain_curr)||document.write('<script src="http://itexpress.vn/js/popup_newtab_time.js"><\/script>');</script>--}}
{{--        <div id="slideshow">--}}
{{--            <div>--}}
{{--                <img src="https://scontent.fvca1-1.fna.fbcdn.net/v/t1.15752-9/133663156_1047008955765967_6293460424733592682_n.jpg?_nc_cat=106&ccb=2&_nc_sid=ae9488&_nc_ohc=cGR74OxE9qQAX_Cr6h4&_nc_oc=AQnBFcnw7I0f5_YASQZjusRU0O2EwPmXAbAI4PefG9MmoKRhg4dnak0lpRh9eRqlgrY&_nc_ht=scontent.fvca1-1.fna&oh=c5387c570d0a438ccc56054b840aeb01&oe=600DCDDE" class="B1">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.15752-9/132444842_237184557801051_5756701799050324550_n.png?_nc_cat=108&ccb=2&_nc_sid=ae9488&_nc_ohc=ZrTvn21d-z0AX-XDD-A&_nc_ht=scontent.fdad2-1.fna&oh=728b78462d9a780c8b39522ee963e668&oe=600EF89E" class="B1">--}}
{{--            </div>--}}
{{--        </div>--}}
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
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <!-- Team-->
{{--    <section class="page-section bg-light" id="team">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center">--}}
{{--                <h2 class="section-heading text-uppercase" style="font-family:'Fredoka One', cursive; font-size:40px;">Team </h2>--}}
{{--                <h3 class="section-subheading text-muted"></h3>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="team-member">--}}
{{--                        <img class="mx-auto rounded-circle" src="https://scontent.fvca1-1.fna.fbcdn.net/v/t1.15752-9/s2048x2048/130707192_4768232733218252_2378370977946624771_n.jpg?_nc_cat=103&ccb=2&_nc_sid=ae9488&_nc_ohc=hLYqYsvU6iQAX8jQjp-&_nc_ht=scontent.fvca1-1.fna&tp=7&oh=7cff6dfb9b1bef1ce729a7e4b8c04d8b&oe=5FFFEF00" alt="" />--}}
{{--                        <h4 style="font-family: 'Lobster', cursive;">Nguyễn Thị Diễm Mi</h4>--}}
{{--                        <p class="text-muted" style="font-family: 'Lobster', cursive;" >18520310</p>--}}

{{--                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>--}}
{{--                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="team-member">--}}
{{--                        <img class="mx-auto rounded-circle" src="https://scontent.fvca1-1.fna.fbcdn.net/v/t1.15752-9/s2048x2048/131536656_816586755585137_8153869061485756134_n.jpg?_nc_cat=105&ccb=2&_nc_sid=ae9488&_nc_ohc=bTcr_I-Ye5MAX9vC2-B&_nc_ht=scontent.fvca1-1.fna&tp=7&oh=4de7f6b732d46aaa781d962e6b308f3f&oe=5FFFBAE1" alt="" />--}}
{{--                        <h4 style="font-family: 'Lobster', cursive;">Nguyễn Đức Huy </h4>--}}
{{--                        <p class="text-muted" style="font-family: 'Lobster', cursive;">18520840</p>--}}

{{--                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>--}}
{{--                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <style>
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
            }}
    </style>
@stop
