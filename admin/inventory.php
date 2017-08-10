<?php
session_start();
if(!isset($_SESSION['authenticated'])) {
    header('Location: sign-in.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Dashboard Tables, Free Admin Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open%20Sans:300,400,700">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo_main.css">
    <!--
    Dashboard Template
    http://www.templatemo.com/preview/templatemo_415_dashboard
    -->
</head>
<body>
<div id="main-wrapper">

    <div class="template-page-wrapper">
        <!--/.navbar-collapse -->

        <div class="templatemo-content-wrapper">
            <div class="templatemo-content">
                <ol class="breadcrumb">
                    <li><a href="dashboard.php">Admin Panel</a></li>
                    <li class="active">Manage Inventory</li>
                </ol>
                <h1>Manage Users</h1>
                <p>Here goes tables and users.</p>

                <div class="row margin-bottom-30">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#">New Users <span class="badge">42</span></a></li>


                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group pull-right" id="templatemo_sort_btn">
                            <button type="button" class="btn btn-default">Sort by</button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">First Name</a></li>
                                <li><a href="#">Last Name</a></li>
                                <li><a href="#">Username</a></li>
                            </ul>
                        </div>

                        <div class="table-responsive">
                            <h4 class="margin-bottom-15">Another Table of Existing Users</h4>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Edit</th>
                                    <th>Action</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John</td>
                                    <td>Henry</td>
                                    <td>@jh</td>
                                    <td>a@company.com</td>
                                    <td><a href="#" class="btn btn-default">Edit</a></td>
                                    <td>
                                        <!-- Split button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                    data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Bootstrap</a></li>
                                                <li><a href="#">Font Awesome</a></li>
                                                <li><a href="#">jQuery</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><a href="#" class="btn btn-link">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Bill</td>
                                    <td>Goods</td>
                                    <td>@bg</td>
                                    <td>bg@company.com</td>
                                    <td><a href="#" class="btn btn-default">Edit</a></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                    data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Bootstrap</a></li>
                                                <li><a href="#">Font Awesome</a></li>
                                                <li><a href="#">jQuery</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><a href="#" class="btn btn-link">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Authen</td>
                                    <td>Jobs</td>
                                    <td>@aj</td>
                                    <td>aj@company.com</td>
                                    <td><a href="#" class="btn btn-default">Edit</a></td>
                                    <td>
                                        <!-- Split button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                    data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Bootstrap</a></li>
                                                <li><a href="#">Font Awesome</a></li>
                                                <li><a href="#">jQuery</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><a href="#" class="btn btn-link">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Jesica</td>
                                    <td>High</td>
                                    <td>@jh</td>
                                    <td>jh@company.com</td>
                                    <td><a href="#" class="btn btn-default">Edit</a></td>
                                    <td>
                                        <!-- Split button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                    data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Bootstrap</a></li>
                                                <li><a href="#">Font Awesome</a></li>
                                                <li><a href="#">jQuery</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><a href="#" class="btn btn-link">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Tom</td>
                                    <td>Grace</td>
                                    <td>@tg</td>
                                    <td>tg@company.com</td>
                                    <td><a href="#" class="btn btn-default">Edit</a></td>
                                    <td>
                                        <!-- Split button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                    data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Bootstrap</a></li>
                                                <li><a href="#">Font Awesome</a></li>
                                                <li><a href="#">jQuery</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><a href="#" class="btn btn-link">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Book</td>
                                    <td>Rocker</td>
                                    <td>@br</td>
                                    <td>br@company.com</td>
                                    <td><a href="#" class="btn btn-default">Edit</a></td>
                                    <td>
                                        <!-- Split button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                    data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Bootstrap</a></li>
                                                <li><a href="#">Font Awesome</a></li>
                                                <li><a href="#">jQuery</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><a href="#" class="btn btn-link">Delete</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination pull-right">
                            <li class="disabled"><a href="#">«</a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">5 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
                    </div>
                    <div class="modal-footer">
                        <a href="sign-in.php" class="btn btn-primary">Yes</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common/CommonTemplate.js"></script>
<script src="js/util.js"></script>
<script src="js/commonhtml.js"></script>
<script src="js/app.js"></script>


</body>
</html>