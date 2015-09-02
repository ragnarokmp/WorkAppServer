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
            <a class="navbar-brand" href="index.html">WorkApp Admin</a>
        </div>
        <!-- /.navbar-header -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>

                    <li><a href="<?php echo page_url('exercise') ?>"><i class="fa fa-bar-chart-o fa-fw"></i> Exercises</a></li>
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
                <h1 class="page-header">Exercises</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Exercises List
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Series</th>
                                    <th>Repetitions</th>
                                    <th>Pause</th>
                                    <th>Muscles</th>
                                    <th>Frequency</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php

                                foreach ($exercises as $index => $ex){

                                    echo '<tr>';
                                    echo '<td>'.$ex['name'].'</td>';
                                    echo '<td>'.$ex['series'].'</td>';
                                    echo '<td>'.$ex['repetition'].'</td>';
                                    echo '<td>'.$ex['recovery'].'</td>';
                                    echo '<td>'.$ex['muscles'].'</td>';
                                    echo '<td>'.$ex['frequency'].'</td>';
                                    echo '<td>'.$ex['usedWeight'].'</td>';
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