<?php include(APPPATH.'views/_include/header.php'); ?>



	<h1>
		<div class="row">
			<div class="col-10">
				イベント
			</div>
			<div class="col-2 pb-2 text-right">
				<a href="/user/event/create/" class="btn btn-success btn-sm w-100">追加</a>
			</div>
		</div>
	</h1>
	<div class="py-2">
		<ul class="list-group">
	<?php foreach ($events as $event) { ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-2">
						<?php echo Util::date('Y/m/d', $event['event_update_time']); ?>
					</div>
					<div class="col-7">
						<?php echo $event['event_title']; ?>
					</div>
					<div class="col-3">
						<a href="/user/event/edit/?id=<?php echo $event['event_id']?>" class="btn btn-primary btn-sm">編集</a>
						<a href="/user/event/delete/?id=<?php echo $event['event_id']?>" class="btn btn-danger btn-sm">削除</a>
					</div>
				</div>
			</li>
	<?php } ?>
		</ul>
	</div>


<?php include(APPPATH.'views/_include/footer.php'); ?>