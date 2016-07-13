    <div class="container" id='main-content'>
    <h1>Страница настроек галлереи</h1>
    
    <div class="alert alert-info"><p>Для лучшего отображения используйте изображения размером 1920х500 пикселей.</p></div>

  


    <div class="row masonry" data-columns>
    			<div class="item ">
				<div class="thumbnail">
				<div class="caption">
				
				<form role="form" enctype="multipart/form-data" action="#" method="post">
				
    <input class="form-control input-lg" name="file[]" type="file" id="exampleInputFile"><br>
  
					
          <input class="form-control input-lg" name="slogan" type="text" value="" placeholder='Название техники'><br>
					<input class="form-control input-lg" name="price" type="number" value="" placeholder='Цана за час'><br>
					<textarea name="sttext" class='form-control' id="" cols="30" rows="10"></textarea>
					<input type="submit" name="load_file" class="btn btn-default" value="Добавить технику">
					
					</form>
				</div>
				</div>
			</div>
    	<? foreach ($gallery as $item):?>
			<div class="item" data-item="<?=$item['id']?>">
				<div class="thumbnail">
					<img src="<?=base_url();?>images/<?=$item['img']?>" alt="" class="img-responsive">
					<div class="caption">
					<input type='text' class="form-control img-title" data-tehnika="<?=$item['id']?>" value='<?=$item['title']?>'>
          <p>
        <textarea rows="5" class="form-control img-text" data-tehnika="<?=$item['id']?>" type="text" value=""><?=$item['description']?></textarea>
					</p>
					<div class="input-group">
  <input type="text" class="form-control st-price" data-tehnika="<?=$item['id']?>" value="<?=$item['price']?>">
  <span class="input-group-addon">руб./час</span>
</div>
					<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button data-img="<?=$item['id']?>" type="button" class="btn save-img btn-primary">Сохранить</button>
  </div>
  <div class="btn-group">
    <button data-img="<?=$item['id']?>" type="button" class="btn del-img btn-danger">Удалить</button>
  </div>
</div>
					</div>
				</div>
			</div>
       <?endforeach;?>
    	</div>
    </div>
    
   <script>
$(document).ready(function() {
    $('.del-img').click(function(){
        	var html = $.ajax({
			type: "POST",
			url: "del_st",
			data: ({
            'id': $(this).data('img'), 
        }),
            dataType: "json",
            async: false,
        }).responseText;
	location.reload();
    });
    $('.save-img').click(function(){
        id = $(this).data('img');
        	var html = $.ajax({
			type: "POST",
			url: "save_img",
			data: ({
            'id': $(this).data('img'), 
            'title': $('.img-title[data-tehnika="'+id+'"]').val(),
            'text': $('.img-text[data-tehnika="'+id+'"]').val(),
            'price': $('.img-prise[data-tehnika="'+id+'"]').val(),
        }),
            dataType: "json",
            async: false,
        }).responseText;
	location.reload();
    });
})
</script>