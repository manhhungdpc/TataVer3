<?php 
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
    <header class="clearfix sub-header">
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
        <?php $this->endBody() ?>
      </body>
      </html>
      <?php $this->endPage() ?>
