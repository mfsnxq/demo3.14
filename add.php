<?php
	header("content-type:text/html;charset=utf-8");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>报名</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="" />
    <!--  Social tags      -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <meta charset="utf-8" />
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/game.js"></script>
    <link href="css/cai.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
        //登陆验证
        function baomin(){
            var username = $("#username").val();
            var student_name = $("#student_name").val();
            var suozaixi = $("#suozaixi").val();
            var numb = $("#numb").val();
            var nianji = $("#nianji").val();

            var param = {"username":username,"student_name":student_name,"suozaixi":suozaixi,"numb":numb,"nianji":nianji};

            if(username == ""){
                alert("学号不能为空！");
                $("#username").focus();
            }
            else if(student_name == ""){
                alert("姓名不能为空！");
                $("#student_name").focus();
            }
            else if(suozaixi == ""){
                alert("所在系不能为空！");
                $("#suozaixi").focus();
            }
            else if(numb == ""){
                alert("联系电话不能为空！");
                $("#numb").focus();
            }
            else if(nianji == ""){
                alert("年级不能为空！");
                $("#nianji").focus();
            }
            else{
                //ajax的登陆验证
            	$.ajax({
                    type:"post",
                    url:"index.php",
                    data:param,
                    success:function(data){
                    	if(data == 1){
                        	alert("报名失败");
                        	window.location.reload();
                            url="index.php";window.location.href=url;
                    	}
                    	else if(data == 0){
                        	alert("报名成功");
                            window.location.reload();
                            url="index.php";window.location.href=url;
                    	}
                    }
                });
            }
        }
        </script>
    
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="dropdown button-dropdown">
            <div class="navbar-translate">
                 
                <a class="navbar-brand" href="#" rel="tooltip" data-placement="bottom">
                    同济大学浙江学院---系部竞赛报名
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" data-nav-image="assets/img/blurred-image-1.jpg">
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/login.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="" action="">
                        <div class="header header-primary text-center">
                          
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                               <input type="text" class="form-control" placeholder="学号" id="username" name="username"/>
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="form-control" placeholder="姓名" class="form-control"id="student_name" name="studen_name" />
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="form-control" placeholder="所在系" class="form-control" id="suozaixi" name="suozaixi" />
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="form-control" placeholder="联系方式" class="form-control" id="numb" name="numb" />
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="form-control" placeholder="年级" class="form-control"id="nianji" name="nianji" />
                            </div>
                        </div>
                        <div class="footer text-center">
                      
                            <a href="" class="btn btn-primary btn-round btn-lg btn-block" onclick="baomin();" name="submit" type="submit"  >报名</a>
                        </div>
                       <?php 

      
?>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/plugins/bootstrap-switch.js"></script>

<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>

<script src="assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>

<script src="assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>
