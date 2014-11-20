<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$base_url = Yii::app()->request->getBaseUrl();
$cs = Yii::app()->getClientScript();
//$cs->registerCssFile($base_url . '/css/layout.css');
$cs->registerCssFile($base_url . '/css/timer-simple.css');
$cs->registerScriptFile($base_url . '/js/prefixfree.js');
?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<div class="timer_container">
	<!-- time to add the controls -->
	<input id="start" name="controls" type="radio" />
	<input id="stop" name="controls" type="radio" />
	<input id="reset" name="controls" type="radio" />
	<div class="timer">
		<div class="cell">
			<div class="numbers tenhour moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers hour moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers tenminute movesix">0 1 2 3 4 5 6</div>
		</div>
		<div class="cell">
			<div class="numbers minute moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers tensecond movesix">0 1 2 3 4 5 6</div>
		</div>
		<div class="cell">
			<div class="numbers second moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers milisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers tenmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers hundredmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
	</div>
	<!-- Lables for the controls -->
	<div id="timer_controls">
		<label for="start">Start</label>
		<label for="stop">Stop</label>
		<label for="reset">Reset</label>
	</div>
</div>