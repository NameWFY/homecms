<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:98:"D:\phpStudy\WWW\htdocs\month12\homecms\public/../application/admin/index\view\housing\updateZI.php";i:1516967598;}*/ ?>
<?php 
use think\Session;
$userInfo = Session::get("userInfo");
$NewuserInfo = unserialize($userInfo);
$userName = $NewuserInfo['adm_userName'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/admin/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php  echo $userName; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> 房源管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo url('index/Housing/indexadd'); ?>">房源添加</a></li>
                      <li><a href="<?php echo url('index/Housing/show'); ?>">房源展示</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> 用户管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo url('index/Usermanage/indexadd'); ?>">添加用户</a></li>
                      <li><a href="<?php echo url('index/Usermanage/show'); ?>">用户展示</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php  echo $userName; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo url('index/Login/Out'); ?>"><i class="fa fa-sign-out pull-right"></i> Log out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span><?php  echo $userName; ?></span>
                          <span class="time">没做哈</span>
                        </span>
                        <span class="message">
                          点了，去哪我也不知道
                        </span>
                      </a>
                    </li>

                   
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>房源管理</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="没做哈">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">被点!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>房源<small>添加表单</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="<?php echo url('index/Housing/updateZIdo'); ?>?hou_id=<?php echo $DbFind['hou_id']; ?>" method="post" novalidate>

                        
                      <span class="section">添加 房源</span>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">房源名称 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" value="<?php echo $DbFind['hou_name']; ?>" name="hou_name" required="required" type="text">
                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">房源地址 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" value="<?php echo $DbFind['hou_address']; ?>" name="hou_address" required="required" type="text">
                        </div>
                      </div>

                      <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">房源户型*</label>
                      <div class="col-md-3 col-sm-6 col-xs-12">
                          <select id="heard" class="form-control" name="hou_layout" required>
                          	><
                            <option value="1" <?php if($DbFind['hou_layout']=='1'){ echo "selected='selected'"; } ?>  >一居</option>
                            <option value="2"  <?php if($DbFind['hou_layout']=='2'){ echo "selected='selected'"; } ?>>两居</option>
                            <option value="3"  <?php if($DbFind['hou_layout']=='3'){ echo "selected='selected'"; } ?>>三居</option>
                            <option value="4"  <?php if($DbFind['hou_layout']=='4'){ echo "selected='selected'"; } ?>>四居</option>
                            <option value="5"  <?php if($DbFind['hou_layout']=='5'){ echo "selected='selected'"; } ?>>五居及以上</option>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">房源价格 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" value="<?php echo $DbFind['hou_price']; ?>" name="hou_price" required="required" type="text">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">房源数量 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" value="<?php echo $DbFind['hou_num']; ?>" name="hou_num" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">房源备注 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="hou_content" class="form-control col-md-7 col-xs-12" rows="6"><?php echo $DbFind['hou_content']; ?></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>

<script type="text/javascript">
     $(document).on("click",'#jia',function(){
       var clone = $("#yixiang").clone();
       $(clone).find('span[id=jia]').attr('id','jian').html('-');
       $('#yixiang').after(clone);
     })
     $(document).on("click",'#jian',function(){
       $(this).parent().remove();
     })
</script>