    <div class="container" id='main-content'>
    <h1>Страница стандартных настроек</h1>
    <div class="row">
    <div class="col-lg-6">
    <form class="form-horizontal" action="" method="post">
       <div class="form-group">
        <label for="inputAdress" class="col-sm-2 control-label">Адрес</label>
        <div class="col-sm-10">
          <input name="adress" type="text" class="form-control" id="inputAdress" value="<?=$adress?>" placeholder="Адрес">
        </div>
      </div>       
       <div class="form-group">
        <label for="inputPhone" class="col-sm-2 control-label">Телефон</label>
        <div class="col-sm-10">
          <input name="phone" type="text" class="form-control" id="inputPhone" placeholder="Телефон" value="<?=$phone?>">
        </div>
      </div>
       <div class="form-group">
        <label for="inputMail" class="col-sm-2 control-label">Почта</label>
        <div class="col-sm-10">
          <input name="email" type="text" class="form-control" id="inputMail" placeholder="Почта" value="<?=$email?>">
          <span class="help-block">На эту почту будут отправляться заявки.</span>
        </div>
      </div>
      <input id="save-default" type="submit" name="save_default" class="btn pull-right <?=$btn_color?>" value="<?=$msg?>">
      
    </form>

    </div>
    </div>
    </div>