<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('theme_admin/css/Hani11.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>HANI</title>
</head>
<script>
    $(function(){
        $(".js_order_item").click(function(event){
            event.preventDefault();
            let $this = $(this);
            let url = $this.attr('href');
            $('#md_content').html('');
            $(".transaction_id").text('').text($this.attr('data-id'));
            $("#myModal").modal('show');
            $.ajax({
                url: url,
            }).done(function (result){
                $('#md_content').append(result);
            });
        });
    })
</script>
<!-- navigation -->
@include('component.header')
<body>
<section class="main">
    @yield('content')
</section>
</body>
@include('component.footer')

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/efectos.js"></script>
<script src="js/parallax.js"></script>
</html>
