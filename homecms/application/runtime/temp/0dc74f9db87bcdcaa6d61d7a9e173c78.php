<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"D:\phpStudy\WWW\DayOne\homecms\public/../application/admin/index\view\usermanage\show.php";i:1517142563;}*/ ?>
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
                <h3>房源 <small>房源展示</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
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
                    <h2>房源<small>展示</small></h2>
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
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>用户姓名</th>
                          <th>用户电话</th>
                          <th style="width: 60px;">用户性别</th>
                          <th>用户年龄</th>
                          <th >购房意向</th>
                          <th>意向房源</th>
                          <th style="width: 90px;">回访时间</th>
                          <th style="width: 90px;">添加时间</th>
                          <th style="width: 90px;">修改时间</th>
                          <th>备注</th>
                          <th style="width: 80px;">是否成交</th>
                          <th>操作</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if($HouInfo){ foreach($HouInfo as $k=>$v){ ?>
                        <tr>
                          <td><?php echo $v['use_name'] ?></td>
                          <td><?php echo $v['use_phone'] ?></td>
                          <td><?php echo $v['use_sex'] ?></td>
                          <td><?php echo $v['use_age'] ?></td>
                          <td>
                            <?php 
                            if($v['use_intention']=='1'){
                              echo '极高';
                            }else if($v['use_intention']=='2'){
                              echo '高';
                            }else if ($v['use_intention']=='3') {
                              echo '一般';
                            }else if ($v['use_intention']=='4') {
                              echo '了解';
                            }
                           ?></td>
                          <td style="width: 70px;"><?php echo $v['hou_id']; ?></td>
                          <td class="use_visit"><?php echo date("Y-m-d H:i:s",$v['use_visit']); ?></td>
                          <td><?php echo date("Y-m-d H:i:s",$v['use_time']); ?></td>
                          <th class="upd_time"><?php if(empty($v['upd_time'])){echo "还未修改过"; }else{echo date("Y-m-d H:i:s",$v['upd_time']);} ?></th>
                          <td width="220" align="center" >   
                          <textarea   id='use_contentt' use_id='<?php echo $v['use_id']; ?>'  style="display: none;"   required="required"   class="form-control col-md-7 colsol-xs-12" rows="4" cols="25" ><?php echo $v['use_content']   ?></textarea>
                          <span id='use_content' use_id='<?php echo $v['use_id']; ?>' ><?php echo $v['use_content'] ?> </span>
                          </td>
                          <td>
                            <?php if($v['use_deal']=='0'){?>
                            <button type="button" class="btn btn-primary" >未成交</button>
                            <?php }else{ ?>
                            <button type="button" class="btn btn-primary" >成交</button>
                            <?php } ?>
                            </td>
                          <td>
                          <a href="<?php echo url('index/Usermanage/updateZI'); ?>?use_id=<?php echo $v['use_id']; ?>">
                            <button type="button" class="btn btn-primary" >修改</button>
                          </a>
                            <button type="button" class="btn btn-warning" use_id='<?php echo $v['use_id']; ?>' id="deleteZI">删除</button>
                            <button type="button" class="btn btn-success" use_id='<?php echo $v['use_id']; ?>' id="HFZI">回访</button>
                          </td>
                        </tr>
                        <?php }} ?>
                      </tbody>
                    </table>
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
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

  </body>

</html>
<script type="text/javascript">




  $(document).on('click','#use_content',function(){
    $(this).hide();
    $(this).prev().show();
  })


  $(document).on('blur','#use_contentt',function(){
    var content = $(this).val();
    var use_id  = $(this).attr('use_id');
    thiss=$(this);
    $.ajax({
      url:"<?php echo url('index/Usermanage/uplodeCon'); ?>",
      data:{content:content,use_id:use_id},
      dataType:'json',
      type:'post',
      success:function(response){
        if(response.mgs=='2'){
          alert('修改失败');return;
        }
        thiss.parent().parent().find('[class=upd_time]').html(response.time);
      }
    })
    $(this).val(content);
    $(this).next().html(content).show();
    $(this).html(content).hide();
  })



    $(document).on("click",'#deleteZI',function(){
    var use_id = $(this).attr('use_id');
    var thiss = $(this);
    if(window.confirm('你确定要删除吗？')){
      $.ajax({
        url:"<?php echo url('index/Usermanage/deleteZi'); ?>",
        data:{use_id:use_id},
        dataType:'json',
        type:'post',
        success:function(response){
          if(response.mgs=='1'){
            thiss.parent().parent().remove();
            alert('删除成功');return;
          }else if(response.mgs=='2'){
            alert('删除失败');return;
          }
        }
      })
    }
  })

    

    $(document).on("click",'#HFZI',function(){
    var use_id = $(this).attr('use_id');
    var thiss = $(this);
    $.ajax({
        url:"<?php echo url('index/Usermanage/HFZI'); ?>",
        data:{use_id:use_id},
        dataType:'json',
        type:'post',
        success:function(response){
          if(response.mgs=='1'){
            thiss.parent().parent().find('[class=use_visit]').html(response.time);
            alert('回访成功');return;
          }else if(response.mgs=='2'){
            alert('回访失败');return;
          }
        }
      })
  })



</script>