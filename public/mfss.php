
<!DOCTYPE html>
<html lang="zh" class="js "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
   <title>魔灯</title>
   
  <meta name="description" content="modeng">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <link rel="stylesheet" href="theme/dotunnel/css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="theme/dotunnel/css/animate.css" type="text/css">
  <link rel="stylesheet" href="theme/dotunnel/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme/dotunnel/css/font.css" type="text/css">
  <link rel="stylesheet" href="theme/dotunnel/css/landing.css" type="text/css">
  <link rel="stylesheet" href="theme/dotunnel/css/app.css" type="text/css">
  <link rel="stylesheet" href="theme/dotunnel/css/custom.css" type="text/css">
  <link rel="shortcut icon" href="theme/dotunnel/images/favicon.ico">
  
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  	
  <!-- header -->
  <header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light affix-top" data-spy="affix" data-offset-top="1">
    <div class="container">
      <div class="navbar-header">        
        <a href="default.htm" class="navbar-brand"><img src="theme/dotunnel/images/logo.png" class="m-r-sm"><span class="text-muted">魔灯</span></a>
        <button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="default.htm">网站首页</a>
          </li>
          <li>
            <a href="default.htm#pricing">套餐购买</a>
          </li>
		  <li>
            <a href="code">邀请码</a>
          </li>
          <li>
          <li>
            <a href="services.htm">客户端下载</a>
          </li>		  
          <li>
            <a href="help">使用教程</a>
          </li>
		  <li>
            <a href="tos.htm">用户协议</a>
          </li>
		  <li>
            <a href="mfss.php">免费SS</a>
          </li>		  
		    <li>
            <div class="m-t-sm"> 
                        	<a href="auth/login" class="btn btn-warning btn-sm m-l">会员登录
            	</a>
            	<a href="auth/register" class="btn btn-sm btn-success m-l"><strong>
            	用户注册
            	</strong></a>
                        </div>
          </li>
		   <li>
		      <br>
		   </li>
        </ul>
      </div>
    </div>
  </header>
         
  <!-- / header -->


<section id="content">


<div class="container m-t-lg m-b-lg">
			<div class="row">
        <div class="col-sm-12 text-center">
<div class="blog-post">		              	
            <div class="post-item">
            	<div class="post-media">
            		<section class="panel bg-primary dk m-b-none">
                  <div class="carousel auto slide panel-body" id="c-fade">      
                        <div class="item active text-center">
                     <span class="h1">免费SS信息</span>                       
                      </div>                    
                  </div> 
                </section>
            	</div>
				<div class="line line-lg"></div>   
  <h3 class="post-title">服务器/IP：us1.moolight.club</h3>
  <div class="line line-lg"></div>  		 
			   <div class="post-sum"><p>                                        
                        <?php
                            $link=mysqli_connect('45.32.47.215','modengss','liuguotao1','modengss');
                            $exec="select * from user where id=3";
                            $result=mysqli_query($link,$exec);
                            while($rs=mysqli_fetch_object($result)){
                                $passwd=$rs->passwd;
                                $port=$rs->port;
                        ?>
                    <tr align="center">
               <h3 class="post-title">连接密码:  <td><?php echo $passwd ?></td> </h3>
			   			   <div class="line line-lg"></div> 
               <h3 class="post-title">连接端口: <td><?php echo $port ?></h3></td>
                </tr>
                <?php
                    }
                    mysqli_close();
                ?>
   </p>			 
			   <div class="line line-lg"></div>   
  <h3 class="post-title">加密方式：aes-256-cfb</h3>
  <div class="line line-lg"></div>  		 
          <h3 class="post-title">每12小时更改密码</h3>
  <div class="line line-lg"></div>  
  <div class="line line-lg"></div> 
    <h3 class="post-title">服务器/IP：153.125.238.208</h3>
  <div class="line line-lg"></div>  		 
			   <div class="post-sum"><p>                                        
                    <tr align="center">
               <h3 class="post-title">连接密码:  <td>modengss</td> </h3>
			   			   <div class="line line-lg"></div> 
               <h3 class="post-title">连接端口: <td>31953</h3></td>
                </tr>
   </p>			 
			   <div class="line line-lg"></div>   
  <h3 class="post-title">加密方式：aes-256-cfb</h3>
  <div class="line line-lg"></div>  		 
          <h3 class="post-title">不更改密码</h3>
		    <div class="line line-lg"></div> 
		免费SS速度慢，如需高速线路请注册购买。<br><br>
		 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div></div></section>
   <div class="post-sum"><p>     
   <center>
			  
        </center><br><br>		
<footer id="footer">
  <div class="bg-primary text-center">
      <div class="container wrapper">
        <div class="m-t-xl m-b">
          马上点击下方开始您的稳定高速上网体验.
          <a href="auth/login" class="btn btn-lg btn-dark b-white bg-empty m-sm">登陆使用</a>
          <a href="auth/register" class="btn btn-lg btn-warning b-white bg-empty m-sm">注册账户</a>
        </div>
      </div>
      <i class="fa fa-caret-down fa-4x text-primary m-b-n-lg block"></i>
    </div>
  
    <div class="bg-dark dker wrapper">
      <div class="container text-center m-t-lg">
        <div class="row m-t-xl m-b-xl">
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
            <i class="fa fa-bullhorn fa-3x icon-muted"></i>
            <h5 class="text-uc m-b m-t-lg">免责声明</h5>
            <p class="text-sm">使用 <a href="default.htm" title="魔灯">[魔灯]</a> 请遵守当地法律 <br>
              极限SS网络加速不承担因使用本站服务所发生的任何责任.
             </p>
          </div>
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInUp" data-delay="600">
            <i class="fa fa-ticket fa-3x icon-muted"></i>
            <h5 class="text-uc m-b m-t-lg">工单服务</h5>
            <p class="text-sm"><a href="../https@www.dotunnel.com/user/ticket">在线工单技术支持,最快回复</a><br>在使用本站服务过程中有任何问题欢迎提交工单.</p>
          </div>
          <div class="col-sm-4" data-ride="animated" data-animation="fadeInRight" data-delay="900">
            <i class="fa fa-desktop fa-3x icon-muted"></i>
            <h5 class="text-uc m-b m-t-lg">远程支持</h5>
            <p class="text-sm"></p><div class="follow-us">在线客服QQ： 你的QQ <br>邮箱：你的邮箱#qq.com(联系时请将#改为@)<p></p>
          </div>
        </div>
		<br>
        <div class="m-t-xl m-b-xl">
         
          <p> 
            <a href="#content" data-jump="true" class="btn btn-icon btn-rounded btn-dark b-dark bg-empty m-sm text-muted"><i class="fa fa-angle-up"></i></a>
          </p>
        </div>
      </div>
    </div>
	
  </div>
  </footer>
  <script src="theme/dotunnel/js/jquery.min.js"></script>
  <script src="theme/dotunnel/js/bootstrap.js"></script>
  <script src="theme/dotunnel/js/app.js"></script>
  

</body></html>
