<?php
/* @var $this SiteController */
$sport="Badminton";
$sport2="badminton";
$this->pageTitle=ucfirst($sport)." - ". Yii::app()->name;
?>
<body>
  <div class="fh5co-overlay" style="height:0px;"></div>
  <div id="fh5co-blog-section" style="min-height:100vh;background: url(images/coverpics/<?php echo $sport2;?>.jpg) no-repeat center;background-size:cover;">
    <div class="container" style="margin-top:60px;">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
  					<h2 style="color:#fbfbfb">Badminton</h2>
          </div>
        </div>
      </div>
      <div class="container animate-box sports">
        <div class="row">
          <p style="width:80%;margin:auto">For all badminton loving folks of IIT Bombay. Founded a year ago. It has been one of the 
                most active clubs handling the most active sport in the institute. With promotion of Badminton as its true motive, it has organised a wide range of events in 
                its first year of inception itself. This year its gonna be bigger and better. Headed by the Badminton Secretary and driven by the conveners, Badminton Club will be one of 
                the most happeing clubs of the year. Let's take the game in the institute to a higher level. </p>
              </div>
            </div>
			</div>
			<?php include 'sidebar.php'; ?>
</body>