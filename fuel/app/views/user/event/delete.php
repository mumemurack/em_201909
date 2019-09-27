<?php include(APPPATH.'views/_include/header.php'); ?>

<div class="row justify-content-md-center">
	<div class="col-12 col-md-8">
		<h1 class="h3 mb-3 font-weight-normal">イベント削除</h1>
<?php if ($page_type == SList::PAGE_COMPLETE) { ?>
		<div class="form-group">
			<h4>削除が完了しました！</h4>
			<a href="/user/event/" class="btn btn-info">イベント一覧へ</a>
		</div>
<?php } else { ?>
		削除しますか？
		<form action="./" method="post">
			<div class="form-group">
				<?php echo Form::label('イベントタイトル', 'event_title');?>
				<div><?php echo Arr::get($event, 'event_title');?></div>
			</div>
			<div class="form-group">
				<?php echo Form::label('イベント概要', 'event_abstract');?>
				<div><?php echo Arr::get($event, 'event_abstract');?></div>
			</div>
			<div class="form-group">
				<?php echo Form::label('イベント内容', 'event_content');?>
				<div><?php echo Arr::get($event, 'event_content');?></div>
			</div>
			<?php echo Form::hidden('action','delete'); ?>
			<?php echo Form::hidden('id',Arr::get($event, 'event_id')); ?>
			<button type="submit" class="btn btn-info">削除</button>
		</form>
<?php } ?>
	</div>
</div>

<?php include(APPPATH.'views/_include/footer.php'); ?>