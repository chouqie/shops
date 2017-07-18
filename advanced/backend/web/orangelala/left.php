	<!--左侧-->
  <div class="Sellerber_left menu" id="menuBar">
    <div class="show_btn" id="rightArrow"><span></span></div>
    <div class="side_title"><a title="隐藏" class="close_btn"><span></span></a></div>
    <div class="menu_style" id="menu_style">
    <div class="list_content">
    <div class="skin_select">
      <ul class="dropdown-menu dropdown-caret">
         <li><a class="colorpick-btn selected" href="javascript:ovid()"data-val="default"  id="default" style="background-color:#222A2D" ></a></li>
         <li><a class="colorpick-btn" href="javascript:ovid()" data-val="blue" style="background-color:#438EB9;" ></a></li>
         <li><a class="colorpick-btn" href="javascript:ovid()" data-val="green" style="background-color:#72B63F;" ></a></li>
         <li><a class="colorpick-btn" href="javascript:ovid()" data-val="blue" style="background-color:#D0D0D0;" ></a></li>
         <li><a class="colorpick-btn" href="javascript:ovid()" data-val="blue" style="background-color:#FF6868;" ></a></li>
      </ul>     
    </div>

    <div class="search_style">
        <form action="#" method="get" class="sidebar_form">
            <div class="input-group">
                <input type="text" name="q" class="form-control">
                <span class="input-group-btn">
                    <a class="btn_flat" href="javascript:" onclick=""><i class="fa fa-search"></i></a>
                </span>
            </div>
        </form>
    </div>

    <dl class="nav nav-list" id="menu_list">
      <dt class="shop_index nav_link " ><a href="javascript:void(0)" name="index.html" class="iframeurl" title=""><i class="fa fa-home"></i><span class="menu-text">商城首页</span></a></dt>
      <dd class="submenu" style="height:0px; border:0px;"></dd>
     


      <?php foreach($this->params['left'] as $key=>$val){ ?>
      <dt class="nav_link ">
          <a href="javascript:void(0)" class="dropdown-toggle title_nav">
              <i class="fa <?= $val['class'];?>"></i>
              <span class="menu-text"><?= $val['name'];?></span>
              <b class="arrow fa fa-angle-down"></b>
          </a>
      </dt>
      
      <dd class="submenu">
        <ul>
          <?php if(!empty($val['children'])){ ?>
            <?php foreach($val['children'] as $k=>$v){ ?>
            <li class="home"><a href="<?php echo Yii::$app->request->baseUrl; ?>/?r=<?= $v['controller']?>/<?= $v['action']?>" name="Products.html" title="产品类表" class="iframeurl"><i class="fa fa-angle-double-right"></i><?= $v['name'];?></a></li>
            <?php } ?>
          <?php } ?>

        </ul>
      </dd>
      <?php } ?>




  <!-- <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa fa-database"></i><span class="menu-text"> 订单管理 </span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="Order.html" title="订单类表" class="iframeurl"><i class="fa fa-angle-double-right"></i>订单类表</a></li>
       <li class="home"><a href="javascript:void(0)" name="Brand_Manage.html" title="品牌管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>订单处理</a></li>
       <li class="home"><a href="javascript:void(0)" name="Order_Logistics.html" title="物流管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>物流管理</a></li>
        <li class="home"><a href="javascript:void(0)" name="Category_Manage.html" title="分类管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>退款操作</a></li>
       </ul>
      </dd>



       <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa fa-credit-card"></i><span class="menu-text"> 支付管理 </span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="Products_List.html" title="产品类表" class="iframeurl"><i class="fa fa-angle-double-right"></i>产品类表</a></li>
       <li class="home"><a href="javascript:void(0)" name="Brand_Manage.html" title="品牌管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>品牌</a></li>
       <li class="home"><a href="javascript:void(0)" name="Category_Manage.html" title="分类管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>分类管理</a></li>
       </ul>
      </dd>
      <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa  fa-th-list"></i><span class="menu-text"> 店铺管理 </span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="Products_List.html" title="产品类表" class="iframeurl"><i class="fa fa-angle-double-right"></i>店铺列表</a></li>
       <li class="home"><a href="javascript:void(0)" name="Brand_Manage.html" title="品牌管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>店铺审核</a></li>
       <li class="home"><a href="javascript:void(0)" name="Category_Manage.html" title="分类管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>店铺分类</a></li>
       </ul>
      </dd>
      <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa  fa-file-photo-o"></i><span class="menu-text"> 广告管理 </span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="Advertising_list.html" title="广告列表" class="iframeurl"><i class="fa fa-angle-double-right"></i>广告列表</a></li>
       <li class="home"><a href="javascript:void(0)" name="Advertising_sort.html" title="分类管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>分类管理</a></li>
       <li class="home"><a href="javascript:void(0)" name="Category_Manage.html" title="分类管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>分类管理</a></li>
       </ul>
      </dd>
  <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa fa-bar-chart"></i><span class="menu-text"> 报表管理 </span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="system_info.html" title="订单报表" class="iframeurl"><i class="fa fa-angle-double-right"></i>订单报表</a></li>
       <li class="home"><a href="javascript:void(0)" name="Columns.html" title="产品销量" class="iframeurl"><i class="fa fa-angle-double-right"></i>产品销量</a></li>
       <li class="home"><a href="javascript:void(0)" name="Category_Manage.html" title="分类管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>交易量</a></li>
       </ul>
      </dd>
        <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa fa-user"></i><span class="menu-text"> 会员管理 </span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="member_list.html" title="会员列表" class="iframeurl"><i class="fa fa-angle-double-right"></i>会员列表</a></li>
       <li class="home"><a href="javascript:void(0)" name="Columns.html" title="等级管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>等级管理</a></li>
       <li class="home"><a href="javascript:void(0)" name="Category_Manage.html" title="会员记录" class="iframeurl"><i class="fa fa-angle-double-right"></i>会员记录</a></li>
       </ul>
      </dd>
      <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa fa-cogs"></i><span class="menu-text"> 系统管理 </span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="system_info.html" title="系统信息" class="iframeurl"><i class="fa fa-angle-double-right"></i>系统信息</a></li>
       <li class="home"><a href="javascript:void(0)" name="Columns.html" title="自定义导航栏" class="iframeurl"><i class="fa fa-angle-double-right"></i>自定义导航栏</a></li>
       <li class="home"><a href="javascript:void(0)" name="Category_Manage.html" title="分类管理" class="iframeurl"><i class="fa fa-angle-double-right"></i>日志操作</a></li>
       </ul>
      </dd>
       <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa fa-file-text-o"></i><span class="menu-text"> 文章管理 </span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="Article_list.html" title="文章列表" class="iframeurl"><i class="fa fa-angle-double-rightt"></i>文章列表</a></li>
       </ul>
      </dd>
       <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa  fa-hdd-o "></i><span class="menu-text"> OTA管理 </span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="Article_list.html" title="文章列表" class="iframeurl"><i class="fa fa-angle-double-rightt"></i>门票列表</a></li>
       <li class="home"><a href="javascript:void(0)" name="Article_list.html" title="文章列表" class="iframeurl"><i class="fa fa-angle-double-rightt"></i>门票设置</a></li>
       </ul>
      </dd>
        <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa fa-file-text-o"></i><span class="menu-text">单页面管理 </span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="page_list.html" title="页面列表" class="iframeurl"><i class="fa fa-angle-double-right"></i>页面列表</a></li>
       </ul>
      </dd>
       <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa fa-users"></i><span class="menu-text">管理员管理 </span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="admin_Competence.html" title="权限设置" class="iframeurl"><i class="fa fa-angle-double-right"></i>权限设置</a></li>
       <li class="home"><a href="javascript:void(0)" name="administrator_list.html" title="管理员列表" class="iframeurl"><i class="fa fa-angle-double-right"></i>管理员列表</a></li>
       <li class="home"><a href="javascript:void(0)" name="Personal_info.htm" title="个人信息" class="iframeurl"><i class="fa fa-angle-double-right"></i>个人信息</a></li>
       </ul>
      </dd>
       <dt class="nav_link"><a href="#" class="dropdown-toggle title_nav"><i class="fa fa-wrench"></i><span class="menu-text">界面工具</span><b class="arrow fa fa-angle-down"></b></a></dt>
    <dd class="submenu">
     <ul>
       <li class="home"><a href="javascript:void(0)" name="interface.html" title="界面模板" class="iframeurl"><i class="fa fa-angle-double-right"></i>界面模板</a></li>
       <li class="home"><a href="javascript:void(0)" name="form_builder.html" title="表单构建器" class="iframeurl"><i class="fa fa-angle-double-right"></i>表单构建器</a></li>
       </ul>
      </dd> -->


      </dl>  
    </div>
  </div>
 </div>