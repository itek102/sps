    <div class="container" id='main-content'>
    <h1>Страница настроек бетона</h1>
      


    <div class="row masonry" data-columns>
    			<div class="item ">
				<div class="thumbnail">
				<div class="caption">
				
				<form role="form" enctype="multipart/form-data" method="post">
				
  
					
					<input class="form-control input-lg" name="title" type="text" value="" placeholder='Марка бетона'><br>
					<textarea class="form-control img-description" rows="5" name="description"></textarea><br>
					<input type="submit" name="load_file" class="btn btn-default" value="Добавить">
					
					</form>
				</div>
				</div>
			</div>
    	<? foreach ($gallery as $item):?>
			<div class="item" data-item="<?=$item['id']?>">
				<div class="thumbnail">
				
					<div class="caption">
					<p><input class="form-control input-xs beton-title" data-img="<?=$item['id']?>" type="text" value="<?=$item['title']?>" placeholder=''></p>
                        <p><textarea class="form-control img-description" data-img="<?=$item['id']?>" rows="5"><?=$item['description']?></textarea></p>
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
			url: "del_beton",
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
			url: "save_beton",
			data: ({
            'id': $(this).data('img'), 
            'description': $('.img-description[data-img="'+id+'"]').val(),
            'title': $('.beton-title[data-img="'+id+'"]').val(),
        }),
            dataType: "json",
            async: false,
        }).responseText;
	location.reload();
    });
})
</script>