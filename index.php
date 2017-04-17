<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>نظر سنجی سومین همایش IO</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="mystyle/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
      $(function () {
        $('#submit').bind('click', function (event) {
         event.preventDefault();
          $.ajax({
            type: 'POST',
            url: 'sadjadio.php',
            data: $('form').serialize(),
            success: function (response) {
              if(response == "false"){
               $("#kh").show();
              //  alert(response);
              } else{
                $("#khk").show()
                //alert(response);
              }
            },
            error: function() {
              $("#khkh").show()
            }
          });

        });
      });
</script>
</head>

<body>
    <div class="background-image"></div>
    <div class="container">
        <div class="starter-template">
            <h1 class="titr">نظر سنجی سومین همایش سجاد آي او</h1>
            <p class="lead titr">اگر در سومین همایش Sadjad I/O شرکت کردید و فرصت پرکردن فرم نظرسنجی را پیدا نکردید، میتوانید هم اکنون از فرم نظرسنجی آنلاین برای رساندن نظرات، پیشنهادات و انتقادات خود به ما اقدام کنید. بابت وقتی که برای پرکردن فرم میگذارید از شما صمیمانه متشکریم
            <span class="glyphicon glyphicon-heart"></span></p>
        </div>
        <form id="ajaxform" name="ajaxform" action="sadjadio.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
		                              <span class="glyphicon glyphicon-arrow-left"></span>به صورت کلی از سومین همایشIO راضی هستید؟
		                        </h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="radio">
                                        <label>
		                            <input type="radio" name="optionsRadios" value="عالی">
		                            عالی
                                <?php
                                require 'db.php';
                                $ch = $database->select("shit", "three", [
                                	"three" => "عالی"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>

		                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="radio">
                                        <label>
		                            <input type="radio" name="optionsRadios" value="خوب">
		                            خوب
                                <?php
                                require 'db.php';
                                $ch = $database->select("shit", "three", [
                                  "three" => "خوب"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
		                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="radio">
                                        <label>
		                            <input type="radio" name="optionsRadios" value="متوسط">
		                            متوسط                                <?php
                                require 'db.php';
                                $ch = $database->select("shit", "three", [
                                	"three" => "متوسط"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
		                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="radio">
                                        <label>
		                            <input type="radio" name="optionsRadios" value="نظر">
		                            نظری ندارم                                 <?php
                                require 'db.php';
                                $ch = $database->select("shit", "three", [
                                	"three" => "نظر"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
		                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                    <span class="glyphicon glyphicon-arrow-left"></span> برای بهتر شدن همایش ما چه پیشنهاداتی دارید ؟
                </h3>
                        </div>
                        <div class="panel-body">
			  <textarea class="form-control" rows="8" name="ideas"></textarea>
  			</div>
                    </div>
                </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                        <span class="glyphicon glyphicon-user"></span>ارائه <a href="https://profile.ir/saeedyazdanian" >سعید یزدانیان</a> چطور بود ؟
                    </h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios1" value="عالی">
                                    عالی
                                <?php
                                require 'db.php';
                                $ch = $database->select("shit", "saied", [
                                	"saied" => "عالی"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios1" value="خوب">
                                    خوب
                                <?php
                                require 'db.php';
                                $ch = $database->select("shit", "saied", [
                                  "saied" => "خوب"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios1" value="بد">
                                    بد
                                <?php
                                require 'db.php';
                                $ch = $database->select("shit", "saied", [
                                	"saied" => "بد"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios1" value="بهتر">
                                    میتونه بهتر بشه
                                <?php
                                require 'db.php';
                                $ch = $database->select("shit", "saied", [
                                	"saied" => "بهتر"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios1" value="نظر">
                                    نظری ندارم
                                <?php
                                require 'db.php';
                                $ch = $database->select("shit", "saied", [
                                	"saied" => "نظر"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                        <span class="glyphicon glyphicon-user"></span>ارائه  <a href="https://profile.ir/amirbgh" >امیر بقایی </a> چطور بود؟
                    </h3>
                            </div>
                             <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios2" value="عالی">
                                    عالی <?php
                                require 'db.php';
                                $ch = $database->select("shit", "amir", [
                                	"amir" => "عالی"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios2" value="خوب">
                                    خوب <?php
                                require 'db.php';
                                $ch = $database->select("shit", "amir", [
                                  "amir" => "خوب"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios2" value="بد">
                                    بد <?php
                                require 'db.php';
                                $ch = $database->select("shit", "amir", [
                                	"amir" => "بد"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios2" value="بهتر">
                                    میتونه بهتر بشه <?php
                                require 'db.php';
                                $ch = $database->select("shit", "amir", [
                                	"amir" => "بهتر"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios2" value="نظر">
                                    نظری ندارم <?php
                                require 'db.php';
                                $ch = $database->select("shit", "amir", [
                                	"amir" => "نظر"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                        <span class="glyphicon glyphicon-user"></span>ارائه <a href="http://jebelli.blog.ir/" >صادق جبلی </a> چطور بود ؟
                    </h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios3" value="عالی">
                                    عالی<?php
                                require 'db.php';
                                $ch = $database->select("shit", "sadegh", [
                                	"sadegh" => "عالی"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios3" value="خوب">
                                    خوب<?php
                                require 'db.php';
                                $ch = $database->select("shit", "sadegh", [
                                  "sadegh" => "خوب"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios3" value="بد">
                                    بد
                                <?php
                                require 'db.php';
                                $ch = $database->select("shit", "sadegh", [
                                	"sadegh" => "بد"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios3" value="بهتر">
                                    میتونه بهتر بشه<?php
                                require 'db.php';
                                $ch = $database->select("shit", "sadegh", [
                                	"sadegh" => "بهتر"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label>
                                    <input type="radio" name="optionsRadios3" value="نظر">
                                    نظری ندارم
                                <?php
                                require 'db.php';
                                $ch = $database->select("shit", "sadegh", [
                                	"sadegh" => "نظر"
                                ]);
                                $t = sizeof($ch);
                                echo "<span class=\"badge\"> $t </span>";
                                ?>
                                </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    </div>
                 <div class="alert alert-danger kh" id="khk" role="alert"><strong>شما قبلا نظرتونو ثبت کردید !</strong></div>
     	         <div class="alert alert-success kh" id="kh" role="alert"><strong>نظر شما با موفقیت ثبت شد. ممنون :)</strong></div>
     	         <div class="alert alert-danger kh" id="khkh" role="alert">متاسفانه اطلاعات ثبت نشد</div>
                 <button id="submit" type="submit" class="test btn btn-primary btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>ارسال‌!			</button>
                 </form>
            </div>
</body>

</html>
