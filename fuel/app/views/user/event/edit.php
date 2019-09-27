<?php include(APPPATH.'views/_include/header.php'); ?>

<div class="row justify-content-md-center">
	<div class="col-12 col-md-8">
		<h1 class="h3 mb-3 font-weight-normal">イベント編集</h1>
<?php if ($page_type == SList::PAGE_COMPLETE) { ?>
		<div class="form-group">
			<h4>編集が完了しました！</h4>
			<a href="/user/event/" class="btn btn-info">イベント一覧へ</a>
		</div>
<?php } else { ?>
		<?php include(dirname(__FILE__).DS.'_form.php'); ?>
<?php } ?>
	</div>
</div>

<?php include(APPPATH.'views/_include/footer.php'); ?>