<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <style>
        .wrapper {
    margin-top: 50px;
}
.widget-menu {
	background: #fff;
	
	border-radius: 3px;
	border-radius: 3px;
	border-radius: 3px;
	
	overflow: hidden
}
.widget-menu a {
	color: rgb(176, 175, 175);
	display: block;
	line-height: 20px;
	padding: 15px;
	text-decoration: none!important
}
.widget-menu .menu-icon {
	 
	margin-right: 10px;
	 
	color: #767676;
	 transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
}
.widget-menu .label {
	background: #888;
	box-shadow: 0 0 2px rgba(0,0,0,0.4) inset;
	box-shadow: 0 0 2px rgba(0,0,0,0.4) inset;
	box-shadow: 0 0 2px rgba(0,0,0,0.4) inset;
	border-radius: 3px;
	border-radius: 3px;
	border-radius: 3px;
	line-height: 20px;
	padding: 0 5px
}
.widget-menu .label.green {
	background: #78ba00
}
.widget-menu .label.orange {
	background: #d74f2a
}
.widget-menu>li+li {
	border-top: 1px solid #555
}
.widget-menu>li>a {
	background-color: #829ca4c7;
	color: #343434e7;
	transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
}
.widget-menu>li>a .icon-chevron-up {
	display: block
}
.widget-menu>li>a .icon-chevron-down {
	display: none
}
.widget-menu>li>a.collapsed .icon-chevron-up {
	display: none
}
.widget-menu>li>a.collapsed .icon-chevron-down {
	display: block
}
.widget-menu>li>a:hover {
	background-color: #316270c7;
	color: #fafafa;
}

.widget-menu>li>a:hover .menu-icon { color:#fff;}

.widget-menu>li ul li {
	background: #eee;
	border-top: 1px solid #ccc
}
.widget-menu>li ul li+li {
	border-top: 0
}
.widget-menu>li ul li.active a {
	background: #f0f0f0
}
.widget-menu>li ul li a {
	padding: 10px 15px 10px 30px
}
    </style>
    <body>
       
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="student.php"><i class="menu-icon icon-user"></i>Manage Students </a>
                                </li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="addbook.php"><i class="menu-icon icon-edit"></i>Add Books </a></li>
                                <li><a href="requests.php"><i class="menu-icon icon-tasks"></i>Issue/Return Requests </a></li>
                                <li><a href="recommendations.php"><i class="menu-icon icon-list"></i>Book Recommendations </a></li>
                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                                <li><a href="feedback.php"><i class="menu-icon icon-list"></i>Feedback </a></li>

                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->

                    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>

</html>