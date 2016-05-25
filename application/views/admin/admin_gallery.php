    <div class="container" id='main-content'>
    <h1>Страница настроек галлереи</h1>
    <div class="alert alert-info">Для лучшего отображения используйте изображения размером 1920х500 пикселей.</div>
    
    <div class="row masonry" data-columns>
    	<? foreach ($gallery as $item):?>
			<div class="item">
				<div class="thumbnail">
					<img src="<?=base_url();?>images/<?=$item['img']?>" alt="" class="img-responsive">
					<div class="caption">
					<p>
					<input class="form-control" type="text" value="<?=$item['description']?>">
					</p>
					<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Сохранить</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-danger">Удалить</button>
  </div>
</div>
					</div>
				</div>
			</div>
       <?endforeach;?>
    	</div>
    </div>