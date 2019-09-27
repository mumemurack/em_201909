<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FuelPHP Framework</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('front.css'); ?>
</head>
<body>
	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info">
			<div class="container">
				<a class="navbar-brand" href="/"><?php echo Config::get('_site.name'); ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
	<?php if ( ! empty($login_user)) { ?>
						<li class="nav-item<?php if ($page == 'user_index'){ ?> active<?php } ?>">
							<a class="nav-link" href="/user/">マイページ</a>
						</li>
						<li class="nav-item<?php if ($page == 'user_event_create' || $page == 'user_event_edit' || $page == 'user_event_delete' || $page == 'user_event_index'){ ?> active<?php } ?>">
							<a class="nav-link" href="/user/event/">イベント管理</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/user/logout/">ログアウト</a>
						</li>
	<?php }else{ ?>
						<li class="nav-item<?php if ($page == 'user_login_index' || $page == 'user_register_index'){ ?> active<?php } ?>">
							<a class="nav-link" href="/user/login/">ログイン/会員登録</a>
						</li>
	<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main class="container">