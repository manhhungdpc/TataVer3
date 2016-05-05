<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <link href='https://fonts.googleapis.com/css?family=Passion+One:400,700' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body>
  <?php $this->beginBody() ?>
  <?php 
  $logo=Html::img(Yii::$app->request->baseUrl.'/image/logo.png',array('width'=>'269px','height'=>'115px ','title'=>'home page','id' => 'logo',
    ));
  $toIndex = Html::a("$logo",['/site/index']);
  $btnDangKy=Html::a('Đăng ký học thử miễn phí','https://docs.google.com/forms/d/1uP3xRPPnzhGgF7ikqCvxzC9UDSA5qOAU4MiNe2Kx9y4/viewform',['class' => 'btn btn-danger']);
  $menuItems = [
  ['label' => 'Home', 'url' => ['/site/index']],
  ['label' => 'study', 'url' => ['/site/study']],
  /*'items'=>[
  ['label'=>'homework','url'=>['#']],
  ['label'=>'listening','url'=>['#']],
  ['label'=>'writing','url'=>['#']],
  ['label'=>'grammar','url'=>['#']],
  ['label'=>'typing','url'=>['#']],
  ],
  'options'=>['class'=>'nav NavBar-nav'],*/
  ];
  if (Yii::$app->user->isGuest) {
    #$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Log in', 'url' => ['/site/login']];
  } else {
    $menuItems[] = '<li>'
    . Html::beginForm(['/site/logout'], 'post')
    . Html::submitButton(
      'Logout (' . Yii::$app->user->identity->username . ')',
      ['class' => 'btn btn-link']
      )
    . Html::endForm()
    . '</li>';
    $menuItems[] = ['label' => 'feedback', 'url' => ['#']];
  }
  ?>
  <div class="container">   
    <header class="clearfix">
      <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2">
          <?=$toIndex;?> 
        </div>
        <?php if(Yii::$app->user->isGuest){
          echo '<div class="col-xs-12 col-sm-12 col-md-2 col-md-push-6">'.$btnDangKy.'</div>';
        } ?>
        <div class="col-xs-12 col-sm-12 col-md-5 col-md-rush-3">
          <nav>
            <?=Nav::widget([
              'options' => ['class' => 'menu'],
              'items' => $menuItems,
              ]);
              ?>                          
            </nav>
          </div>
          <div class="clearfix"></div>
        </div>                    
      </header> 
      <div class="contents">
        <div class="container">
          <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
          </div>
        </div>
        <?php $footer ='
        <footer class="footer">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 about">
                <address>
                  <strong>Tata English</strong><br>
                  Address: Số 9, ngõ 1, đường Cầu Vồng, Đức Thắng, Bắc Từ Liêm, Hà Nội.<br>
                  <abbr title="Phone">Phone:+84 0462 544 288/+84 0981 222 085<br>
                  </abbr>
                  Email: <a href="mailto:tata.edu.vn@gmail.com">tata.edu.vn@gmail.com</a><br>
                  FB: <a href="https://www.facebook.com/tata.edu.vn/?fref=ts">Page Facebook</a>
                </abbr> 
              </address>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29781.04442587521!2d105.781308!3d21.087413!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea04d15c4e0ccb03!2sTATA+Learning+English+for+Future!5e0!3m2!1sen!2sus!4v1461201342675"width="100%"frameborder="0"style="border:0" allowfullscreen class="map"></iframe>
            </div>
          </div>  
          <div class="clearfix"></div>
        </div>
      </footer>'?>
      <?php if(Yii::$app->user->isGuest){
        echo $footer;
      } ?>
    </div>
    <?php $this->endBody() ?>
  </body>
  </html>
  <?php $this->endPage() ?>
