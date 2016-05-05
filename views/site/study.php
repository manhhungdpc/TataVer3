<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
?>
<?php
$this->title = 'Study';
?>
<?php
$homeworkImg=Html::img(Yii::$app->request->baseUrl.'/image/homework.jpg',array('width'=>'300px','height'=>'150px','title'=>'homework','class'=>'study-icons'));
$listeningImg=Html::img(Yii::$app->request->baseUrl.'/image/listening.jpg',array('class'=>'study-icons','onclick'=>'','title'=>'listening',));
$volcabImg=Html::img(Yii::$app->request->baseUrl.'/image/volcab.jpg',array('class'=>'study-icons','onclick'=>'','title'=>'vocab',));
$typingImg=Html::img(Yii::$app->request->baseUrl.'/image/typing.jpg',array('class'=>'study-icons','onclick'=>'','title'=>'typing',));
$grammarImg=Html::img(Yii::$app->request->baseUrl.'/image/gramma.jpg',array('class'=>'study-icons','onclick'=>'','title'=>'grammar',));
?>
<?php
$linksStudy=[
'homework'=>Html::a("$homeworkImg",['/site/homework']),
'volcab'=>Html::a("$volcabImg",['/site/homework']),
'typing'=>Html::a("$typingImg",['/site/homework']),
'listening'=>Html::a("$listeningImg",['/site/homework']),
'grammar'=>Html::a("$grammarImg",['/site/homework']),
];
?>
<div class="son-site">
	<div class="site-study">
		<div class="container">
			<div class="row">
				<div class="col-sx-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-sx-12 col-sm-4 col-md-4 col-lg-4 thump">
						<p class="medium-size">homework</p>
						<?=$linksStudy['homework']?>
					</div>
					<div class="col-sx-12 col-sm-4 col-md-4 col-lg-4 thump">
						<p class="medium-size">volcab</p>
						<?=$linksStudy['volcab']?>
					</div>
					<div class="col-sx-12 col-sm-4 col-md-4 col-lg-4 thump">
						<p class="medium-size">typing</p>
						<?=$linksStudy['typing']?>
					</div>
				</div>
				<div class="col-sx-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-sx-12 col-sm-4 col-md-4 col-lg-4 thump">
						<p class="medium-size">listening</p>
						<?=$linksStudy['listening']?>
					</div>
					<div class="col-sx-12 col-sm-4 col-md-4 col-lg-4 thump">
						<p class="medium-size">grammar</p>
						<?=$linksStudy['grammar']?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>