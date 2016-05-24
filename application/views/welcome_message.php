<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>СПС - группа компаний</title>

    <!-- Bootstrap -->
    <link href="<?=base_url();?>css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url();?>css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url();?>css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
                    <div class="navbar navbar-default navbar-fixed-top">
                     <div class="container">
                         <div class="navbar-header">
                            <a href="#" class="navbar-brand hidden-sm"><img src="images/logo.png" id="logo" alt=""> СПС - ГРУППА КОМПАНИЙ</a>
                             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                                
                                 <span class="sr-only">Открыть навигацию</span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                             </button>
                         </div>
                         
                         <div class="collapse navbar-collapse" id="responsive-menu">
                             <ul class="nav navbar-nav">
                                 <? foreach($menu as $item): ?>
                                 <li><a href="#<?=$item['block']?>"><?=$item['title']?></a></li>
                                 <? endforeach; ?>
                             </ul>
                         </div>
                     </div>
                 </div>
                 
                 <div id="carousel" class="carousel slide">
                     <ol class="carousel-indicators">
                         <li class="active" data-target="#carousel" data-slide-to="0"></li>
                         <li data-target="#carousel" data-slide-to="1"></li>
                         <li data-target="#carousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                         <div class="item active">
                             <img src="<?=base_url();?>images/1.jpg" alt="">
                             <div class="carousel-caption"><h3>Гарантия качества</h3></div>
                         </div>
                         <div class="item">
                             <img src="<?=base_url();?>images/2.jpg" alt="">
                             <div class="carousel-caption"><h3>Низкие цены</h3></div>
                         </div>
                         <div class="item">
                             <img src="<?=base_url();?>images/3.jpg" alt="">
                             <div class="carousel-caption"><h3>Быстрая доставка</h3></div>
                         </div>
                     </div>
                     <a href="#carousel" class="left carousel-control" data-slide="prev">
                         <span class="glyphicon glyphicon-chevron-left"></span>
                     </a>
                     <a href="#carousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                     </a>
                 </div>
 <div class="container">
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <h1 id='pb'>Продажа бетона</h1>
             <p>Мы осуществаляем поставки бетона в любую точку города аболюдно бесплатно. Весь представленный ассортимент присутствует на нашем складе.</p>
         </div>
     </div>
 </div>
    <div class="container">
    	<div class="row masonry" data-columns>
    	<? foreach ($beton as $item):?>
			<div class="item">
				<div class="thumbnail">
					<div class="caption">
						<h3><a href="#"><?=$item['title']?></a></h3>
						<p><?=$item['description']?></p>
						<a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Заказать</a>
					</div>
				</div>
			</div>
			<? endforeach;?>
    	</div>
    </div>
    <div class="container-fluid" id="st-wrap">
     <div class="container">
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <h1 id='st'>Аренда спецтехники</h1>
             <p>Предсатвляем вашему внимаю спецтехнику, которая доступна для аренды.</p>
         </div>
     </div>
 </div>
    <div class="container">
    	<div class="row masonry" data-columns>
    	<? foreach ($teh as $item):?>
			<div class="item">
				<div class="thumbnail">
					<img src="<?=base_url();?>images/<?=$item['img']?>" alt="" class="img-responsive">
					<div class="caption">
						<h3><a href="#"><?=$item['title']?></a></h3>
						<p><?=$item['description']?></p>
						<a href="#" class="btn btn-success">Заказать</a>
					</div>
				</div>
			</div>
       <?endforeach;?>
    	</div>
    </div>
    </div>
    <div class="container">
           <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <h1 id='cont'>Наши контакты</h1>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-9 col-md-9 col sm-9">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=kPg0_q2m0LJS1gFGM87gufr8Au5jVm4y&width=100%&height=500&lang=ru_RU&sourceType=constructor&scroll=true"></script>
</div>
         <div class="col-lg-3 col-md-3 col-sm-3">
             <p class="conatact-item"><img class='cont-img' src="<?=base_url();?>images/maps.png"> Шарлыкское шоссе 1/6, оф. 406</p>
             <p class="conatact-item"><img class='cont-img' src="<?=base_url();?>images/14222063051894.png" alt=""> 29-24-78</p>
             <p class="conatact-item"><img class='cont-img' src="<?=base_url();?>images/mail_ru.png" alt=""> info@beton.ru</p>
         </div>
         </div>
     
    </div>
    <div class="container-fluid" id="cont-form">
    <div class="container">
       <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
             <h1 id='write'>Связаться с нами</h1>
             <p>Есть вопрос? Напишите нам и наши специалитсы ответят вам в короткие сроки.</p>
         </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
        <input type="text" class="form-control" placeholder="Ваше имя"><br>
        <div class="input-group">
        <span class="input-group-addon">@</span>
        <input type="email" class="form-control" placeholder="E-mail">
        </div><br>
        <input type="tel" class="form-control" placeholder="Телефон"><br>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <textarea class="form-control" rows="5"></textarea><br>
                <button type="button" class="btn btn-primary btn-lg">Отправить</button>     
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid" id="footer">
        <div class="container" >
        &copy; Все права защищены.
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url();?>js/bootstrap.js"></script>
    <script src="<?=base_url();?>js/salvattore.min.js"></script>
    <script src="<?=base_url();?>js/scroll.js"></script>
    <script src="<?=base_url();?>js/jquery.scrollUp.js"></script>
    <script>
    
  $(function () {
    $.scrollUp({
        scrollName: 'scrollUp', //  ID элемента
        topDistance: '300', // расстояние после которого появится кнопка (px)
        topSpeed: 300, // скорость переноса (миллисекунды)
        animation: 'fade', // вид анимации: fade, slide, none
        animationInSpeed: 200, // скорость разгона анимации (миллисекунды)
        animationOutSpeed: 200, // скорость торможения анимации (миллисекунды)
        scrollText: 'Наверх', // текст
        activeOverlay: false, // задать CSS цвет активной точке scrollUp, например: '#00FFFF'
    });
});

    </script>
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Заявка</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
        <button type="button" id='sent-form' class="btn btn-success">Отправить</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>