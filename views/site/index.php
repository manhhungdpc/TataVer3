<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\ActiveForm;
use frontend\assets\AppAsset;
use yii\helpers\BaseUrl;
use \yii\base\Model;

AppAsset::register($this);
?>
<?php
$this->title = 'Tata English';
?>
<?php
$images = [
Html::img(Yii::$app->request->baseUrl.'/image/logo.png',array('width'=>'269px','height'=>'50%','title'=>'home page','id'=>'class'))
,
Html::img(Yii::$app->request->baseUrl.'/image/page1_icon1.png',array('class'=>'icon-s'))
,
Html::img(Yii::$app->request->baseUrl.'/image/page1_icon2.png',array('class'=>'icon-s'))
,
Html::img(Yii::$app->request->baseUrl.'/image/page1_icon3.png',array('class'=>'icon-s'))
,
Html::img(Yii::$app->request->baseUrl.'/image/page1_pic4.jpg',array('id'=>'footer-image'))
,
Html::img(Yii::$app->request->baseUrl.'/image/gift.png',array('class'=>'gift','width'=>'50px','height'=>"50px"))
];

$links = [
'lotrinh'=> Html::a('Read more',['/site/lotrinh'],['class' => 'btn btn-primary']),
'tw'=> Html::a('Read more',['/site/trangweb'],['class' => 'btn btn-primary']),
'camnhan'=> Html::a('Read more',['/site/camnhan'],['class' => 'btn btn-primary']),
'lv1'=> Html::a('Read more','https://youtu.be/CU8fg8j2Jmk',['class' => 'btn btn-primary']),
'lv2'=> Html::a('Read more','https://youtu.be/8QmQOUQWVq0',['class' => 'btn btn-primary']),
'lv3'=> Html::a('Read more','https://youtu.be/HNeanpYXr3A',['class' => 'btn btn-primary']),
'dk'=> Html::a('đăng ký học thử miễn phí','https://docs.google.com/forms/d/1uP3xRPPnzhGgF7ikqCvxzC9UDSA5qOAU4MiNe2Kx9y4/viewform',['class' => 'btn btn-primary']),
'download'=> Html::a('DOWNLOAD','download/OXFORD_WINDOWS.zip',['class' => 'btn btn-danger']),
];
?>
<div class="header-bot">
  <div class="sub-bot-top">
    <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
        <p class="big-size lead">PREPARING STUDENTS FOR SUCCESSFUL FUTURE!</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1"><p class="small-size lead">Life isn't about finding yourself , life is about creating yourself</p>
        </div>
      </div>
    </div>
    <div class="clearfix">
    </div>
  </div>
</div>
<div id="contents">
  <div class="container">
    <div class="sub-main-top">
      <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="thump">
            <div class="bot-image">
              <?=$images[1]; ?>
            </div>
            <p class="medium-size">Lộ trình học tập</p></br>
            <p class="small-size">
              <span >Level 1: Phát âm, nghe nói phản xạ</span><br>
              <span >Level 2: Nghe nói đọc viết cơ bản</span><br>
              <span >Level 3: Nghe nói đọc viết nâng cao</span><br>
              <span >Level 4: Cam kết đầu ra TOEIC 700+ </span><br>
            </p>
            <?=$links['lotrinh'];?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="thump">
            <div class="bot-image ">
              <?=$images[2]; ?>
            </div>
            <p class="medium-size">Trang web tự học</p></br>
            <p class="small-size">
              <span>Học bằng âm thanh, hình ảnh sinh động</span></br>
              <span>Từ vựng chỉ cần học 1 lần là thuộc làu</span></br>
              <span>Học ngữ pháp ứng dụng vào 4 kĩ năng</span></br>
              <span>Luyện nghe chưa bao giờ lại dễ đến thế</span></br>
            </p>
            <?=$links['tw']; ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="thump">
            <div class="bot-image">
              <?=$images[3];  ?>
            </div>
            <p class="medium-size">Cảm nhận học sinh</p></br>
            <p class="small-size">
              <span>"Đại học cũng bốn năm rồi</span></br>
              <span>Toàn là nằm ngủ không thì chơi game</span></br>
              <span>Ngoài ra chẳng biết gì thêm</span></br>
              <span>Thời gian cứ thế êm đềm trôi qua". </span></br>
            </p>
            <?=$links['camnhan']; ?>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="sub-main-mid">
      <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="sologan">
            <p class="medium-size">Video học sinh:</p>
            <p class="small-size">Cuối cùng khi tốt nghiệp tại TATA thì các học viên không chỉ đạt được khả năng Nghe, Nói, Đọc, Viết thành thạo để áp dụng vào cuộc sống và công việc sau này mà còn đạt được ít nhất 700 điểm Toeic.</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="thump">
              <iframe width="100%" height="235"src="https://www.youtube.com/embed/CU8fg8j2Jmk"frameborder="0"allowfullscreen></iframe>
              <p class="medium-size">Tốt nghiệp level 1</p>
              <p class="small-size"><span>Chỉ sau 20 tuần là toàn bộ các học viên đã có thể phát âm chuẩn tất cả các từ theo từ điển Oxford và có thể nói chuyện một cách thoải mái, tự nhiên về các vấn đề quen thuộc trong cuộc sống.</span></p>
              <?=$links['lv1']; ?>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="thump"> 
              <iframe width="100%"height="235"src="https://www.youtube.com/embed/8QmQOUQWVq0"frameborder="0"allowfullscreen></iframe>
              <p class="medium-size">Tốt nghiệp level 2</p>
              <p class="small-size">Và sau 20 tuần tiếp theo các học viên không chỉ nắm vững tất cả các cấu trúc ngữ pháp áp dụng vào Nghe, Nói, Đọc, Viết mà còn có thể nói chuyện trơn tru, tự nhiên với những người nước ngoài.</p>  
              <?=$links['lv2']; ?>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="thump">
              <iframe width="100%"height="235"src="https://www.youtube.com/embed/HNeanpYXr3A"frameborder="0"allowfullscreen></iframe>
              <p class="medium-size">Cam kết đầu ra</p>
              <p class="small-size"><span>Hầu hết học sinh đến với TATA đều bắt đầu từ con số không, phát âm thì sai đến 99%.
                Thế nhưng ... </span>
              </p>
              <?=$links['lv3']; ?>
            </div>  
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="sub-main-bot">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-ms-12 col-md-4 col-lg-4">
            <div class="thump">
              <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                <?=$images[5] ?>
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <p class="small-size"><span>Mời bạn tham gia 2 tuần học thử miễn phí tại TATA để nhận ra rằng mình hoàn toàn có thể tự học được cả 4 kỹ năng Nghe, Nói, Đọc, Viết trong Tiếng Anh</span></p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-8">
            <?=$images[4]; ?>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 ">
            <?=$links['dk']?>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      
      <div class="main-bot">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12m">
          <p class="medium-size">DOWNLOAD TỪ ĐIỂN OXFORD</p>
          </div>
          <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12"><p class="small-size">
            Từ điển Oxford là từ điển tốt nhất thế giới để luyện phát âm, tra cứu các hiện tượng ngữ pháp và cách sử dụng các từ vựng..</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?=$links['download']?>
          </div>
          <div class="clear-fix"></div>
        </div>
      </div>
    </div>
  </div>
</div>