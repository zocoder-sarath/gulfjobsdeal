<?php 
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);

$this->beginPage() 
?>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    </head>
<body>
<?php $this->beginBody() ?>


<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="index.html" class="logo"><img src="<?php echo Yii::getAlias('@web/images'); ?>/logo.png" alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12"> 
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav">
              <li class="dropdown active"><a href="index.html">Home <span class="caret"></span></a> 
                <!-- dropdown start -->
                <ul class="dropdown-menu">
                  <li class="active"><a href="index.html">Home Static Image</a></li>
                  <li><a href="index2.html">Home With Map</a></li>
                  <li><a href="index3.html">Home With Slider</a></li>
                </ul>
                <!-- dropdown end --> 
              </li>
              <li><a href="about-us.html">About us</a></li>
              <li class="dropdown"><a href="#.">Pages <span class="caret"></span></a> 
                <!-- dropdown start -->
                <ul class="dropdown-menu">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Register</a></li>
                  <li><a href="job-listing.html">Job Listing</a></li>
                  <li><a href="job-detail.html">Job Detail</a></li>
                  <li><a href="candidate-listing.html">Candidate Listing</a></li>
                  <li><a href="candidate-detail.html">Candidate Detail</a></li>
                  <li><a href="company-detail.html">Company Profile</a></li>
                  <li><a href="edit-profile.html">Edit Profile</a></li>
                  <li><a href="post-job.html">Post a Job</a></li>
                  <li><a href="packages.html">Packages</a></li>
                  <li><a href="faqs.html">FAQs</a></li>
                  <li><a href="404.html">404 Page</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
                <!-- dropdown end --> 
              </li>
              <li class="dropdown"><a href="blog.html">Blog <span class="caret"></span></a> 
                <!-- dropdown start -->
                <ul class="dropdown-menu">
                  <li><a href="blog.html">Blog List</a></li>
                  <li><a href="blog-detail.html">Blog Detail</a></li>
                  <li><a href="blog-grid.html">Blog Grid</a></li>
                  <li><a href="blog-full-width.html">Blog Grid Full Width</a></li>
                </ul>
                <!-- dropdown end --> 
              </li>
              <li><a href="contact-us.html">Contact</a></li>
              <li class="postjob"><a href="post-job.html">Post a job</a></li>
              <li class="jobseeker"><a href="candidate-listing.html">Job Seeker</a></li>
              <li class="dropdown userbtn"><a href=""><img src="<?php echo Yii::getAlias('@web/images/candidates/01.jpg'); ?>" alt="" class="userimg" /></a>
              	 <ul class="dropdown-menu">
                    <li><a href="dashboard.html"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Profilt</a></li>
                    <li><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> My Jobs</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                  </ul>
              </li>
            </ul>
            <!-- Nav collapes end --> 
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- Nav end --> 
      </div>
    </div>
    <!-- row end --> 
  </div>
  <!-- Header container end --> 
</div>





