<?php if ($page_type == SList::PAGE_DEFAULT) { ?>
			<form action="./" method="post">
				<div class="form-group">
					<?php echo Form::label('イベントタイトル', 'event_title');?>
					<?php echo Form::input('event_title',Arr::get($event, 'event_title'),array('class'=>'form-control', 'required' => 'required'));?>
				</div>
				<div class="form-group">
					<?php echo Form::label('イベント概要', 'event_abstract');?>
					<?php echo Form::input('event_abstract',Arr::get($event, 'event_abstract'),array('class'=>'form-control', 'required' => 'required'));?>
				</div>
				<div class="form-group">
					<?php echo Form::label('イベント内容', 'event_content');?>
					<?php echo Form::textarea('event_content',Arr::get($event, 'event_content'),array('class'=>'form-control', 'required' => 'required'));?>
				</div>
				<?php echo Form::hidden('action','confirm'); ?>
				<?php echo Form::hidden('id',Arr::get($event, 'event_id')); ?>
				<button type="submit" class="btn btn-warning">確認</button>
			</form>
<?php } elseif ($page_type == SList::PAGE_CONFIRM) { ?>
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
			<?php echo Form::hidden('action','save'); ?>
			<?php echo Form::hidden('event_title', Arr::get($event, 'event_title')); ?>
			<?php echo Form::hidden('event_abstract', Arr::get($event, 'event_abstract')); ?>
			<?php echo Form::hidden('event_content', Arr::get($event, 'event_content')); ?>
			<?php echo Form::hidden('id',Arr::get($event, 'event_id')); ?>
			<button type="submit" class="btn btn-info">登録</button>
		</form>
<?php } ?>