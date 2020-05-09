<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>登录</title>
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
                               <input type="text" class="form-control" placeholder="学号" name="ID"/>
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="form-control" placeholder="姓名" class="form-control" name="studen_id" />
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="form-control" placeholder="所在系" class="form-control" name="suozaixi" />
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="form-control" placeholder="联系方式" class="form-control" name="numb" />
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input type="form-control" placeholder="年级" class="form-control" name="nianji" />
                            </div>
                        </div>
                        <div class="footer text-center">
                      
                            <a href="" class="btn btn-primary btn-round btn-lg btn-block" name="submit" type="submit"  >报名</a>
                        </div>
                       <?php 


$con = mysql_connect('localhost','root','','bysj');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

mysql_query("INSERT INTO add_stu (ID, student_id, suozaixi,numb,nianji) 
VALUES (ID, student_id, suozaixi,numb,nianji);

/*mysql_query("INSERT INTO  add_stu(ID, student_id, suozaixi,numb,nianji) 
VALUES ('1618031', 'QIU', 'JSJ', '17348672853', '4')");

mysql_close($con);

    /*$con=mysqli_connect('localhost','root','');
	if($con) {
		echo 'link ok';
	}else {
		echo 'error';
        }*/
 $con=mysqli_connect('localhost','root','','bysj');//登陆数据库并进入里面的test数据库
if($con){
	// print("连接成功");
	// mysqli_select_db('test',$conn);
	$result=mysqli_query($con,"SELECT * FROM student");//对test数据库进行SQL语句操作SELECT * FROM student，并将结果作为一个对象返回
	$result_arr=mysqli_fetch_assoc($result);//将数据读成一个数组
	/*
		mysqli_fetch_assoc()从结果集中取得一行作为关联数组：
	*/
	print_r($result_arr);
}else{
	echo "连接失败";
}

  


      
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
