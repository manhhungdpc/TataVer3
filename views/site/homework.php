<?php 
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="son-site">
	<div class="homework">
		<div class="container">
			<div class="homework-items have-picture">
				<div class="row">
					<div class="col-xs-12 col-md-12 col-lg-12">
						<p class="title"><span></span></p>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-12">
						<?=
						Html::img(Yii::$app->request->baseUrl.'/image/sleep.jpg',array('width'=>'100%','height'=>'auto','title'=>'home page','id'=>'class'))?>
						<audio controls>
							<source src="audio/tol.mp3" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>	
						</div>
					</div>
				</div>
				<div class="homework-items normal"></div>
				<div class="homework-items option"></div>
			</div>
		</div>
	</div>