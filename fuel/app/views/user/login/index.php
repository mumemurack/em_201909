<?php include(APPPATH.'views/_include/header.php'); ?>

<div class="row align-items-center mt-5">
	<div class="col-6">
		<h1><?php echo Config::get('_site.name'); ?>をはじめよう！</h1>
		<p class="lead"><?php echo Config::get('_site.name'); ?>でいますぐ、イベント管理をはじめよう！</p>
		<hr class="my-4">
		<a class="btn btn-info btn-lg" href="/user/register/" role="button">今すぐ会員登録</a>
	</div>
	<div class="col-6">
		<h3 class="h3 mb-3 font-weight-normal">ログイン</h3>
		<form action="/user/login/" method="post">
			<div class="form-group">
				<label for="InputUsername">Username</label>
				<input type="text" name="username" class="form-control" id="InputUsername" aria-describedby="usernameHelp" placeholder="Username">
			</div>
			<div class="form-group">
				<label for="InputPassword1">Password</label>
				<input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-info" name="action" value="login">ログイン</button>
		</form>
	</div>
</div>

<?php include(APPPATH.'views/_include/footer.php'); ?>