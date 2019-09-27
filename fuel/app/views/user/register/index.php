<?php include(APPPATH.'views/_include/header.php'); ?>

<div class="row justify-content-md-center">
	<div class="col-12 col-md-8">
		<h1 class="h3 mb-3 font-weight-normal">会員登録</h1>
<?php if ($page_type == SList::PAGE_DEFAULT) { ?>
			<form action="./" method="post">
				<div class="form-group">
					<?php echo Form::label('Email address', 'email');?>
					<?php echo Form::input('email',Arr::get($params, 'email'),array('class'=>'form-control', 'placeholder' => 'email', 'required' => 'required'));?>
				</div>
				<div class="form-group">
					<?php echo Form::label('Password', 'password');?>
					<?php echo Form::password('password', '', array('class'=>'form-control', 'placeholder' => 'Password', 'required' => 'required'));?>
				</div>
				<?php echo Form::hidden('action','confirm'); ?>
				<button type="submit" class="btn btn-warning">確認</button>
			</form>
<?php } elseif ($page_type == SList::PAGE_CONFIRM) { ?>
		<form action="./" method="post">
			<div class="form-group">
				<?php echo Form::label('Email address', 'email');?>
				<div><?php echo Arr::get($params, 'email');?></div>
			</div>
			<div class="form-group">
				<?php echo Form::label('Password', 'password');?>
				<div>***</div>
			</div>
			<?php echo Form::hidden('action','save'); ?>
			<?php echo Form::hidden('email', Arr::get($params, 'email')); ?>
			<?php echo Form::hidden('password', Arr::get($params, 'password')); ?>
			<button type="submit" class="btn btn-info">登録</button>
		</form>
<?php } elseif ($page_type == SList::PAGE_COMPLETE) { ?>
		<div class="form-group">
			<h3>登録が完了しました！</h3>
			<p class="lead">さっそくマイページからはじめましょう！</p>
			<a href="/user/" class="btn btn-info">マイページへ</a>
		</div>
<?php } ?>
	</div>
</div>

<?php include(APPPATH.'views/_include/footer.php'); ?>