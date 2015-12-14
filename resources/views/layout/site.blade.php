<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bygimotic</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    {!! Html::style('css/app.css') !!}
</head>
<body>

    @include('partials.navbar')
    @include('partials.first-screen')
    @yield('content')
    @include('partials.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
        function initMap() {

            var myLatlng = new google.maps.LatLng(50.400641, 30.529164);

            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatlng,
                scrollwheel: false,
                zoom: 17
            });

            var marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
                title:"проспект Науки, 11А"
            });

            var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<div id="bodyContent">'+
                    '<p>Украина, Киев, проспект Науки, 11А</p>'+
                    '</div>'+
                    '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }

        var h_hght = 100; // высота шапки
        var h_mrg = -2;    // отступ когда шапка уже не видна
        $(function(){
            $(window).scroll(function(){
                var top = $(this).scrollTop();
                var elem = $('#top_nav');
                if (top+h_mrg < h_hght) {
                    elem.css('top', (h_hght-top));
                    $('#rain').show();
                    $('#logo').show();
                    $('#nav1').css('width','76%')
                            .css('border-radius', '10px');

                } else {
                    elem.css('top', h_mrg)
                        .css('width','100%');
                    $('#rain').hide();
                    $('#logo').hide();
                    $('#nav1').css('width','100%')
                            .css('border-radius', '0');
                }
            });
        });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxu4RkGJcvmClumHn5rAb2A4iW0vyEKGo&callback=initMap" async defer></script>
</body>
</html>