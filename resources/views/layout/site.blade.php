<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect();

?>
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

<div id="page-preloader">
    <div class="cssload-container">
        <div class="cssload-circle-1">
            <div class="cssload-circle-2">
                <div class="cssload-circle-3">
                    <div class="cssload-circle-4">
                        <div class="cssload-circle-5">
                            <div class="cssload-circle-6">
                                <div class="cssload-circle-7">
                                    <div class="cssload-circle-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cssload-container1">
            <div class="cssload-l">L</div>
            <div class="cssload-circle"></div>
            <div class="cssload-square"></div>
            <div class="cssload-triangle"></div>
            <div class="cssload-i">I</div>
            <div class="cssload-n">N</div>
            <div class="cssload-g">G</div>
        </div>
    </div>
</div>

<div class="modal fade contact popup-wrapper" id="contactUs"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <a href="" class="close-btn"><img src="img/close.png"></a>
                <h5>Напишите нам</h5>
                <p>Что бы заказать обратный звонок введите свое имя и номер телефона</p>
                <form id="contForm" method="post" action="mail.php" name="contact">
                    <label>
                        <input type="text" name="name" required="required" placeholder="Имя" id="name" >
                    </label>
                    <label>
                        <input type="tel" name="tel" required="required" placeholder="Номер телефона" id="tel">
                    </label>
                    <label>
                        <textarea class="animated" name="message" placeholder="Ваше сообщение"></textarea>
                    </label>
                    <button type="submit">Отправить</button>
                </form>
                <!-- <div class="text-center"><span>Fields marked with* are mandatory</span></div> -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="thanks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="thanks-message">
                    <p class="thx">Спасибо!<br/>Мы вам перезвоним!</p>
                </div>
            </div>
        </div>
    </div>
</div>


@include('partials.navbar')
@include('partials.first-screen')
@yield('content')
@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/form.js"></script>
<?php if ( $detect->isMobile() ): ?>
<script src="js/mobile.js"></script>
<?php endif ?>

</body>
</html>