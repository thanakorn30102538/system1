<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Software Engineering Project Management System</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

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
                
                    <div class="mx-auto d-block">
                        <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                            <h5 class="text-sm-center mt-2 mb-1"><font color ="white">คุณยังไม่ได้เข้าสู่ระบบ</font></h5>
                            <div class="location text-sm-center"> <a href ="<?php echo site_url("stu"); ?>"><font color ="">เข้าสู่ระบบทันที</font></a></div>
                    </div>
                            
                  
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
            <div class="col-sm-7">
                
                            <img class="" src="images/content/north1.jpg" size="150" alt="Card image cap">
                        
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                    <th>ปีที่จัดทำ</th>
                    <th>ชื่อปริญญานิพนธ์</th>
                    <th>ประเภท</th>
                    <th>อาจารย์ที่ปรึกษา</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($project as $p){ ?>
                        <tr>
                            <td><?php echo $p['year']; ?></td>
                            <td><?php echo $p['project_name']; ?></td>
                            <td><?php echo $p['category']; ?></td>
                            <td><?php echo $p['teacher']; ?></td>
                            <td>                 
                            <a href="<?php echo site_url("general/view_project/".$p['project_id']); ?>" class="btn btn-info btn-xs">ดู</a>
        
                </td>
                </tr>
                <?php } ?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>




    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
