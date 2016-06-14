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
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Comfortaa:300,300&subset=cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=cyrillic' rel='stylesheet' type='text/css'>

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
                                 <?=$login_panel?>
                             </ul>
                         </div>
                     </div>
                 </div>
                 
                 <div id="carousel" class="carousel slide">
                     <ol class="carousel-indicators">
                        <?
                         for($i=0; $i<$gallery_num; $i++){
                            echo '<li class="gallery-indicator" data-target="#carousel" data-slide-to="'.$i.'"></li>';
                         }?>

                     </ol>
                     <div class="carousel-inner">
                        <?foreach($gallery as $item):?>
                         <div class="item gallery-img">
                             <img src="<?=base_url();?>images/<?=$item['img']?>" alt="">
                             <div class="carousel-caption"><h3><?=$item['description']?></h3></div>
                         </div>
                         <?endforeach;?>
                         
                     </div>
                     <a href="#carousel" class="left carousel-control" data-slide="prev">
                         <span class="glyphicon glyphicon-chevron-left"></span>
                     </a>
                     <a href="#carousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                     </a>
                 </div>
                 <div class="container-fluid" id="beton-wrap">
 <div class="container">
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <h1 id='pb'>Продажа бетона</h1>
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
    </div>
        <div class="container-fluid" id="ring-wrap">
     <div class="container">
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <h1 id='ring'>Кольца</h1>
         </div>
     </div>
 </div>
    <div class="container">
    	<div class="row masonry" data-columns>
    	<? foreach ($ring as $item):?>
			<div class="item">
				<div class="thumbnail">
					<img src="<?=base_url();?>images/<?=$item['img']?>" alt="" class="img-responsive">
					<div class="caption">
						<h3><a href="#"><?=$item['title']?></a></h3>
						<p><?=$item['text']?></p>
						<a href="#" class="btn btn-success">Заказать</a>
					</div>
				</div>
			</div>
       <?endforeach;?>
    	</div>
    </div>
    </div>
    <div class="container-fluid" id="st-wrap">
     <div class="container">
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <h1 id='st'>Аренда спецтехники</h1>
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
             <p class="conatact-item"><img class='cont-img' src="<?=base_url();?>images/maps.png"><?=$adress;?></p>
             <p class="conatact-item"><img class='cont-img' src="<?=base_url();?>images/14222063051894.png" alt=""><?=$phone;?></p>
             <p class="conatact-item"><img class='cont-img' src="<?=base_url();?>images/mail_ru.png" alt=""><?=$email;?></p>
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
                <button type="button" class="btn btn-success btn-lg">Отправить</button>     
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
    <script type="text/javascript">
        $(document).ready(function(){
    $('.gallery-img').eq(0).addClass('active');
    $('.gallery-indicator').eq(0).addClass('active');
            $('#sent-form').click(function(){
                var html = $.ajax({
      type: "POST",
      url: "welcome/send_mail",
      data: ({
           'Contact' : $('#inputContact').val(),
           'Vid' : $('#inputVid').val(),
           'Marka' : $('#inputMarka').val(),
           'Col' : $('#inputCol').val(),
           'Dost' : $('#inputDost').val(),
           'Date' : $('#inputDate').val(),
           'Adress' : $('#inputAdress').val(),
           'Otvet' : $('#inputOtvet').val(),
           'TelOtvet' : $('#inputTelOtvet').val(),
        }),
            dataType: "json",
            async: false,
        }).responseText;
            })
});  
</script>
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Заявка</h4>
      </div>
    <div class="form-horizontal">
      <div class="modal-body">
            
             <div class="form-group">
        <label for="inputContact" class="col-sm-2 control-label">Контактные данные</label>
        <div class="col-sm-10">
          <input name="inputContact" type="text" class="form-control" id="inputContact" value="" placeholder="Контактные данные">
           <span class="help-block">Например: 89123456789, ivanov@mail.com</span>
        </div>
      </div>  
              
       <div class="form-group">
        <label for="inputVid" class="col-sm-2 control-label">Вид продукции</label>
        <div class="col-sm-10">
          <select name="inputVid" id="inputVid" class="form-control">
  <option value="Бетон">Бетон</option>
  <option value="Раствор">Раствор</option>
  <option value="Керамзитобетон">Керамзитобетон</option>
</select>
        </div>
      </div>
         
          
 <div class="form-group">
        <label for="inputMarka" class="col-sm-2 control-label">Марка/класс/пластичность</label>
        <div class="col-sm-10">
          <input  type="text" class="form-control" name="inputMarka" id="inputMarka" placeholder="Марка/класс/пластичность" value="">
          <span class="help-block">Например: М250/В20/П3</span>
        </div>
      </div>
          
          
      <div class="form-group">
        <label for="inputCol" class="col-sm-2 control-label">Количество м<sup>3</sup></label>
        <div class="col-sm-10">
          <input name="inputCol" type="text" class="form-control" id="inputCol" placeholder="Количество" value="">
        </div>
      </div>
      
      
      <div class="form-group">
        <label for="inputDost" class="col-sm-2 control-label">Доставка</label>
        <div class="col-sm-10">
          <select name="inputDost" id="inputDost" class="form-control">
  <option value='Самовывоз'>Самовывоз</option>
  <option value='СПС'>СПС</option>
</select>
        </div>
      </div>
     
      <div class="form-group">
        <label for="inputDate" class="col-sm-2 control-label">Дата и время поставки</label>
        <div class="col-sm-10">
          <input name="inputDate" type="datetime-local" class="form-control" id="inputDate" placeholder="Доставка" value="">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAdress" class="col-sm-2 control-label">Адрес доставки</label>
        <div class="col-sm-10">
          <input name="inputAdress" type="text" class="form-control" id="inputAdress" placeholder="Адрес доставки" value="">
          <span class="help-block">Например: г. Оренбург, Шарлыкское шоссе, 1/6</span>
        </div>
      </div>
       <div class="form-group">
        <label for="inputOtvet" class="col-sm-2 control-label">Ответственный за приемку</label>
        <div class="col-sm-10">
          <input name="inputOtvet" type="text" class="form-control" id="inputOtvet" placeholder="Ответственный за приемку" value="">
          <span class="help-block">Например: Иванов Иван Иванович</span>
        </div>
      </div>
       <div class="form-group">
        <label for="inputMarka" class="col-sm-2 control-label">Телефон ответственного</label>
        <div class="col-sm-10">
          <input name="inputTelOtvet" type="text" class="form-control" id="inputTelOtvet" placeholder="Ответственный за приемку" value="">
          <span class="help-block">Например: 89123456789</span>
        </div>
      </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
        <input type="submit" name="send_application" id='sent-form' value="Отправить" class="btn btn-success">
      </div>
</div>
    </div>
  </div>
</div>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter37769280 = new Ya.Metrika({ id:37769280, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/37769280" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>