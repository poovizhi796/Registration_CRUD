<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/Bootstrap.min.css') }}" type="text/css" >
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" >
        <script src="{{ asset('js/Bootstrap.min.js') }}" type="text/js"></script>
        <script src=" {{ asset('js/jquery-3.2.1.js') }}"></script>
        <script src=" {{ asset('js/Popper.min.js') }}"></script>
    </head>
    <body class="container">
        <div class="row">
            <div class="col-md-4 flower"></div>
            <div class="col-md-4 flower">
                <div class="card" style="margin:5px; width: 20rem;">
                    <img class="card-img-top img-fluid" src="{{ asset('images/saibaba.jpg') }}" alt="Card image cap">
                    <div class="card-body welcome">
                        <h5 class="card-title">OmSaiRam Institute</h5>
                        <p class="card-text">Some quick example text to build on the registration portal and make up the bulk of the registrations and followups details content.</p>
                        <a href="/registration" class="btn btn-primary">Registration</a>
                        <button class="flower_fall btn btn-warning">Click Me</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 flower"></div>
        </div>
    </body>
</html>
<script>
$(document).ready( function () {
    $('.flower_fall').click( function () {
        var imageUrl = "{{ asset('images/flower.gif') }}";
        $('.flower').css('background-image', "url("+imageUrl+")");
    });
    $('.flower_fall').dblclick( function (){
        var imageUrl2 = "{{ asset('images/flower2.png') }}";
        $('.flower').css("background-image", "url("+imageUrl2+")");

    });
    $('.status_update').click( function(){
        alert('hi');

    });
});
</script>
