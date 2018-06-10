<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $project["project_name"] ?></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../../assets/scss/style.css">
    <link href="../../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/"><h5>S.E. Project Management System</h5></a>
                <a class="navbar-brand hidden" href="/">S.E. </a>
            </div>
           

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <h3 class="menu-title">เมนูหลัก</h3>
                <li class="active">
                <a href="<?php echo site_url("/") ?>"> <i class="menu-icon fa fa-book"> </i> ปริญญานิพนธ์</a>
                    </li>
                    <h3 class="menu-title">แนะนำเว็บไซต์</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-info"></i>คู่มือการใช้งาน</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-info-circle"></i><a href="ui-buttons.html">การใช้งานเบื้องต้น</a></li>
                            <li><i class="fa fa-check-circle"></i><a href="ui-badges.html">ผลประโยชน์ที่ได้รับ</a></li>
                            <li><i class="fa fa-lightbulb-o"></i><a href="ui-tabs.html">คุณค่าขององค์ความรู้</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">เกี่ยวกับเรา...</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-flag"></i>ทีมผู้พัฒนา</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">ข้อมูลทีมผู้พัฒนา</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">ช่องทางการติดต่อ</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            </div>

            <div class="header-menu">
                <div class="col-sm-12">
                    <div class="user-area dropdown float-right">
                        <a href=" <?php echo site_url("stu"); ?> " class="dropdown-toggle" >
                            <p>เข้าสู่ระบบ</p>
                        </a>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            
            

            <div class="content mt-3">
                <div class="animated fadeIn">


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">ข้อมูลปริญญานิพนธ์</strong>
                                </div>
                                    <div class="card-body">
                                        <div id="pay-invoice">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3 class="text-center">รายละเอียดของปริญญานิพนธ์</h3>
                                                </div>
                                                <hr> 
                                            
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">ชื่อหัวข้อ</label>
                                                    <p> <?php echo $project["project_name"] ?> </p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">ปีที่จัดทำ</label>
                                                    <p><?php echo $project["year"] ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">ประเภทปริญญานิพนธ์</label>
                                                    <p><?php echo $project["category"] ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">ผู้จัดทำ</label>
                                                    <p> <?php echo $project["maker1"] ?> ,&nbsp; <?php echo $project["maker2"] ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">อาจารย์ที่ปรึกษา</label>
                                                    <p> <?php echo $project["teacher"] ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">บทคัดย่อ</label>
                                                    <p> <?php echo $project["Abstract"] ?> </p>
                                                </div>
                                            </div>
                                        </div>        
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"><strong>ข้อมูลปริญญานิพนธ์</strong></div>
                                    <div class="card-body">
                                        <div id="pay-invoice">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3 class="text-center">เอกสารที่เกี่ยวข้อง</h3>
                                                </div>
                                                <hr> 
                                                <div class="row form-group">
                                                    <div class="col-12">
                                                        <p>หากต้องการดาวน์โหลดเอกสารที่เกี่ยวข้องคุณจำเป็นต้องทำการ<font color="red">เข้าสู่ระบบ</font>เสียก่อน ต้องการเข้าสู่ระบบหรือไม่?<a href="<?php echo site_url("/stu"); ?>"><font color="blue"> เข้าสู่ระบบทันที </font></a></p>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        </div>    
                    </div>
                </div><!-- /#right-panel -->
            </div>
        </div>
    </div>
    <!-- Right Panel -->

    <script src="../../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="../../assets/js/plugins.js"></script>
    <script src="../../assets/js/main.js"></script>


    <script src="../../assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="../../assets/js/dashboard.js"></script>
    <script src="../../assets/js/widgets.js"></script>
    <script src="../../assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="../../assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="../../assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../../assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
