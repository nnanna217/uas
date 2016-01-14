<div id="wrapper" style="margin-top: -20px;">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; min-height: 0;">
    <div class="navbar-default sidebar" role="navigation" style="margin-top: 0;">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a><i class="fa fa-bank fa-fw"></i> Spam : 2564</a>
                </li>
                <li>
                    <a><i class="fa fa-bar-chart-o fa-fw"></i>Malware : 276</a>
                </li>
                <li>
                    <a><i class="fa fa-money fa-fw"></i> Hackers : 1587 </a>
                </li>
                <li>
                    <a><i class="fa fa-money fa-fw"></i> Phishing : 984 </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-pagelines fa-fw"></i> Data Leak : 9634</a>
                    <!-- /.nav-second-level -->
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
            <h1 class="page-header">Financial Intelligence</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Details</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>3326</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>3325</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>3324</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>3323</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>3322</td>
                                                    <td>$8345.23</td>
                                                </tr>
                                                <tr>
                                                    <td>10/21/2013</td>
                                                    <td>2:23 PM</td>
                                                    <td>3321</td>
                                                    <td>$245.12</td>
                                                </tr>
                                                <tr>
                                                    <td>10/21/2013</td>
                                                    <td>2:15 PM</td>
                                                    <td>3320</td>
                                                    <td>$5663.54</td>
                                                </tr>
                                                <tr>
                                                    <td>10/21/2013</td>
                                                    <td>2:13 PM</td>
                                                    <td>3319</td>
                                                    <td>$943.45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
    
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Amount Processed per Month (₦)
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Amount processed from Banks (₦)
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
    
    </div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?= $this->Html->script(['jquery/jquery.min.js', 'metisMenu/dist/metisMenu.min.js','raphael/raphael-min.js','morrisjs/morris.min.js','morris-data.js','sb-admin-2.js']);?>
    