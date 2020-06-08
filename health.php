<!DOCTYPE html>
<html>
<head>
	<title>1REP MAX | MEMBER</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" >
  	<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  	<script src="<?php echo base_url('assets/fonts/font-awesome.min.css')?>"></script>
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
</head>
<body>  
    <style>   
    body {
        overflow-x: hidden;
     }
    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        background: #222831;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    #page-content-wrapper {
        width: 100%;
        position: absolute;
        padding: 15px;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    /* Sidebar Styles */

    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 250px;
        margin: 0;
        padding: 0;
        list-style: none;
        color: #FFFFFF;        
    }

    .sidebar-nav li {
        text-indent: 20px;
        line-height: 40px;
        border-bottom: 1px solid black;
    }

    .sidebar-nav li a {
        display: block;
        box-sizing: border-box;
        text-decoration: none;
        /*color: black;*/
        color: #E3207B;
        border-top: 2px;
        border-color: #fff;
    }

    .sidebar-nav li a:hover {
        text-decoration: none;
        color: black;
        /*background: rgba(255,255,255,0.2);*/
        background-color: #FFFFFF;
    }

    .sidebar-nav li .active
    {
        text-decoration: all;
        background-color: #FFFFFF;
        color: #000000;
        box-shadow: 0px 2px 10px #000000;
    }

    @media(min-width:768px) {
        #wrapper {
            padding-left: 250px;
        }
        #sidebar-wrapper {
            width: 250px;
        }
        #page-content-wrapper {
            padding: 20px;
            position: relative;
        }
    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 100%;
      border-radius: 5px;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
  </style>
	<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            	<br><br>
        		<h1 align="center">1REP MAX</h1>
 				<br><br><br> 
                <li >
                    <a href="<?php echo base_url('Home')?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url('Home/plan')?>">My Plans</a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url('Home/health')?>" class="active">Health Status</a>
                </li>
                <br><br><br><br>
                <input type="button" name="logout" id="logout" onclick="window.location.href='<?php echo base_url('Login/logout')?>' " value="logout">
            </ul>
        </div>
        <div class="container-fluid">
        	<h3 style="float: right;">Welcome: <?php echo $session_data['name']?></h3><br><br>
        	<p style="font-size: 40px; text-decoration: none;">Health Status</p>
        	<hr>
        </div>
        <div id="page-content-wrapper" align="center">
        	<div class="card"  style="width: 50%; border-width: 0.35px; background-color: #eeeeee;">
        		<div class="container" >		<!-- `calorie`, `height`, `weight`, `fat`, `remarks` -->
        			<div class="row">
        				<table class="table table-borderless">
        					<div class="container">
					  		<tbody>
						  	<?php foreach($GetHealth as $data){?>		
							    <tr>
							      <th scope="row">Calories:</th>
							      <td><?php echo $data['calorie']?></td>
							    </tr>
							    <tr>
							      <th scope="row">Height:</th>
							      <td><?php echo $data['height']?></td>
							    </tr>
							    <tr>
							      <th scope="row">Weight:</th>
							      <td><?php echo $data['weight']?></td>
							    </tr>
							    <tr>
							      <th scope="row">Fat:</th>
							      <td><?php echo $data['fat']?></td>
							    </tr>
							    <tr>
							      <th scope="row">Remarks:</th>
							      <td><?php echo $data['remarks']?></td>
							    </tr>
							<?php }?>    
						  </tbody>
						</div>
						</table>
        			</div>
        		</div>
        	</div>       
        </div>
    </div>
</body>
</html>