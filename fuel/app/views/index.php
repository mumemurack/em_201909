<?php include(APPPATH.'views/_include/header.php'); ?>


	<div class="main_carouse">
		<div id="carouselMainCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselMainCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselMainCaptions" data-slide-to="1"></li>
				<li data-target="#carouselMainCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="/assets/img/main_1.jpg" class="d-block w-100" alt="イベントの図１">
				</div>
				<div class="carousel-item">
					<img src="/assets/img/main_2.jpg" class="d-block w-100" alt="イベントの図２">
				</div>
				<div class="carousel-item">
					<img src="/assets/img/main_3.jpg" class="d-block w-100" alt="イベントの図３">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselMainCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselMainCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<h2>Event!</h2>
			<p class="small">イベント管理が簡単にできる</p>
			<p>「<?php echo Config::get('_site.name'); ?>」なら、登録してすぐにイベントの登録・管理ができるぐらい、とっても簡単！</p>
		</div>
		<div class="col-md-4">
			<h2>Entry!</h2>
			<p class="small">イベントの参加管理ができる</p>
			<p>「<?php echo Config::get('_site.name'); ?>」なら、イベントに参加登録ができるから、管理も簡単！</p>
		</div>
		<div class="col-md-4">
			<h2>Adjust!</h2>
			<p class="small">イベント日程調整も簡単！</p>
			<p>「<?php echo Config::get('_site.name'); ?>」なら、イベント日程を登録できるから、調整も簡単！</p>
		</div>
	</div>

	<h1>イベント</h1>
	<div class="py-2">
		<ul class="list-group">
	<?php foreach ($events as $event) { ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-3">
						<?php echo Util::date('Y/m/d', $event['event_update_time']); ?>
					</div>
					<div class="col-9">
						<?php echo $event['event_title']; ?>
					</div>
				</div>
			</li>
	<?php } ?>
		</ul>
		<div class="text-right py-1">
			<a href="">もっと見る</a>
		</div>
	</div>


<?php include(APPPATH.'views/_include/footer.php'); ?>