<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CheckExams</a>
            </div>
            <!-- /.navbar-header -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li><a href="<?php echo page_url('dashboard') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                        <li><a href="<?php echo page_url('dashboard/addExam') ?>"><i class="fa fa-edit fa-fw"></i> Add exam</a></li>
                        <li><a href="<?php echo page_url('dashboard/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Table of exams
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Exam</th>
                                            <th>Last update</th>
                                            <th><center>Edit</center></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        <?php 
                                            
                                            foreach ($exams as $key => $exam) {
                                                    
                                                echo '<tr class="odd gradeX">';
                                                echo '<td>'.$exam['description'].'</td>';
                                                echo '<td>'.$exam['last_check'].'</td>';
                                                echo '<th><center>';
                                                echo '<a href="'.page_url('dashboard/removeExam/'.$exam['idexam']).'"><button type="button" class="btn btn-danger btn-circle">';
                                                echo '<i class="fa fa-times"></i>';
                                                echo '</button></a>';
                                                echo '</center></th>';
                                                echo '</tr>';
                                            }
                                        
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>
