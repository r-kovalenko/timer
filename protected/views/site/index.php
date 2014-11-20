<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$base_url = Yii::app()->request->getBaseUrl();
$cs = Yii::app()->getClientScript();
//$cs->registerCssFile($base_url . '/css/layout.css');
$cs->registerCssFile($base_url . '/css/timer.css');
$cs->registerScriptFile($base_url . '/js/timer.js');
?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<div class="timer_container">
	<!-- time to add the controls -->
	<div class="timer">
		<div id="hours">00</div>
		<div class="twodot">:</div>
		<div id="minutes">00</div>
		<div class="twodot">:</div>
			<div id="seconds">00</div>
		<div class="twodot">:</div>
		<div id="miliseconds">000</div>
	</div>
	<!-- Lables for the controls -->
	<div id="timer_controls">
		<button id="start" type="button" onclick="start();">Старт</button>
		<button id="stop" type="button" onclick="stop();">Стоп</button>
		<button id="reset" type="button" onclick="reset();">Стереть</button>
	</div>
</div>
<script>
	init();
</script>