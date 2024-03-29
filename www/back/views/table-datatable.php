 

<!DOCTYPE html>
<html lang="en">

<head>
	<script type="text/javascript" src="controcoach.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>admin</title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<!-- Custom Stylesheet -->
	<link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body>

	<!--*******************
		Preloader start
	********************-->
	<div id="preloader">
		<div class="loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
			</svg>
		</div>
	</div>
	<!--*******************
		Preloader end
	********************-->

	
	<!--**********************************
		Main wrapper start
	***********************************-->
	<div id="main-wrapper">

		<!--**********************************
			Nav header start
		***********************************-->
		<div class="nav-header">
			<div class="brand-logo">
				<a href="index.html">
					<b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
					<span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
					<span class="brand-title">
						<img src="images/logo-text.png" alt="">
					</span>
				</a>
			</div>
		</div>
		<!--**********************************
			Nav header end
		***********************************-->

		<!--**********************************
			Header start
		***********************************-->
		<div class="header">    
			<div class="header-content clearfix">
				
				<div class="nav-control">
					<div class="hamburger">
						<span class="toggle-icon"><i class="icon-menu"></i></span>
					</div>
				</div>
				<div class="header-left">
					<div class="input-group icons">
						<div class="input-group-prepend">
							<span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
						</div>
						<input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
						<div class="drop-down   d-md-none">
							<form action="#">
								<input type="text" class="form-control" placeholder="Search">
							</form>
						</div>
					</div>
				</div>
				<div class="header-right">
					
							</a>
							<div class="drop-down animated fadeIn dropdown-menu">
								<div class="dropdown-content-heading d-flex justify-content-between">
									<span class="">3 New Messages</span>  
									
								</div>
								<div class="dropdown-content-body">
									<ul>
										<li class="notification-unread">
											<a href="javascript:void()">
												<img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
												<div class="notification-content">
													<div class="notification-heading">Saiful Islam</div>
													<div class="notification-timestamp">08 Hours ago</div>
													<div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
												</div>
											</a>
										</li>
										<li class="notification-unread">
											<a href="javascript:void()">
												<img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
												<div class="notification-content">
													<div class="notification-heading">Adam Smith</div>
													<div class="notification-timestamp">08 Hours ago</div>
													<div class="notification-text">Can you do me a favour?</div>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void()">
												<img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
												<div class="notification-content">
													<div class="notification-heading">Barak Obama</div>
													<div class="notification-timestamp">08 Hours ago</div>
													<div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void()">
												<img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
												<div class="notification-content">
													<div class="notification-heading">Hilari Clinton</div>
													<div class="notification-timestamp">08 Hours ago</div>
													<div class="notification-text">Hello</div>
												</div>
											</a>
										</li>
									</ul>
									
								</div>
							</div>
						</li>
						<li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
								<i class="mdi mdi-bell-outline"></i>
								<span class="badge badge-pill gradient-2 badge-primary">3</span>
							</a>
							<div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
								<div class="dropdown-content-heading d-flex justify-content-between">
									<span class="">2 New Notifications</span>  
									
								</div>
								<div class="dropdown-content-body">
									<ul>
										<li>
											<a href="javascript:void()">
												<span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
												<div class="notification-content">
													<h6 class="notification-heading">Events near you</h6>
													<span class="notification-text">Within next 5 days</span> 
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void()">
												<span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
												<div class="notification-content">
													<h6 class="notification-heading">Event Started</h6>
													<span class="notification-text">One hour ago</span> 
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void()">
												<span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
												<div class="notification-content">
													<h6 class="notification-heading">Event Ended Successfully</h6>
													  <span class="notification-text">One hour ago</span>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void()">
												<span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
												<div class="notification-content">
													<h6 class="notification-heading">Events to Join</h6>
													<span class="notification-text">After two days</span> 
												</div>
											</a>
										</li>
									</ul>
									
								</div>
							</div>
						</li>
						<li class="icons dropdown d-none d-md-flex">
							<a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
								<span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
							</a>
							<div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
								<div class="dropdown-content-body">
									<ul>
										<li><a href="javascript:void()">English</a></li>
										<li><a href="javascript:void()">Dutch</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="icons dropdown">
							<div class="user-img c-pointer position-relative"   data-toggle="dropdown">
								<span class="activity active"></span>
								<img src="images/user/1.png" height="40" width="40" alt="">
							</div>
							<div class="drop-down dropdown-profile   dropdown-menu">
								<div class="dropdown-content-body">
									<ul>
										<li>
											<a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
										</li>
										<li>
											<a href="email-inbox.html"><i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
										</li>
										
										<hr class="my-2">
										<li>
											<a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
										</li>
										<li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--**********************************
			Header end ti-comment-alt
		***********************************-->

		<!--**********************************
			Sidebar start
		***********************************-->
		<div class="nk-sidebar">           
			<div class="nk-nav-scroll">
				<ul class="metismenu" id="menu">
				   
					
				   
					<li class="nav-label">Gestion de cours</li>
					<li>
						<a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./table-basic.html" aria-expanded="false">Gestion de cours</a></li>
							<li><a href="./table-datatable.html" aria-expanded="false">Gestion des coaches</a></li>                         </ul>
>
					<li lass="nav-label">Pages</li>
					<li>c
						<a class="has-arrow" href="javasc                    </liript:void()" aria-expanded="false">
							<i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="./page-login.html">Login</a></li>
							<li><a href="./page-register.html">Register</a></li>
							<li><a href="./page-lock.html">Lock Screen</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
								<ul aria-expanded="false">
									<li><a href="./page-error-404.html">Error 404</a></li>
									<li><a href="./page-error-403.html">Error 403</a></li>
									<li><a href="./page-error-400.html">Error 400</a></li>
									<li><a href="./page-error-500.html">Error 500</a></li>
									<li><a href="./page-error-503.html">Error 503</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		
				
				</table>

		
		<div class="content-body">

			
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title"> Table Cours</h4>
								 <divlass="table-responsive">
									
										<div class="card shadow mb-4">

			<div class="card-body">
			  <div class="table-responsive">


				
			   <?php
			   include "../core/ajoutercours.php";
			   $cours1c=new coursC();
			   if (isset($_GET['search_key'])) {
			   	$listecours=$cours1c->recherchercours($_GET['search_key']); 
			   } else
			   {
			   $listecours=$cours1c->affichercours();
			   $liste=$cours1c->trie();

			    }
				?> 

				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				  <tr>
					<th>Nom</th>
					<th>nbparticipant</th>
					<th>type</th>
					<th>duree</th>
					
				  </tr>
				  <?php 
				  foreach ($listecours as $row) {
					  # code...
				  

				   ?>


				   <tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['nbparticipant']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
		<td><?PHP echo $row['duree']; ?></td>
	 <td><form method="POST" action="supprimer.php">
	 <input type="submit" name="supprimer" class="btn btn-primary" value="supprimer"> 
	<input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
	</form>
	</td> 
	<td><a href="modifiercours.php?nom=<?PHP echo $row['nom'];?>"><button class="btn btn-primary">Modifier</button></a>
	</td>

	<?php 
} 
?>
<td><a href="pdf.php?nom=<?PHP echo $row['nom'];?>"><button class="btn btn-success"">PDF</button></a>
	</td>
	
	
				
				
				</table>
				<button id="positionajouter" class="btn btn-danger" href="#modalSubscriptionForm"
				  data-toggle="modal">Ajouter</button>
				<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog"
				  aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header text-center">
								
									<span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body mx-3">
						<form method="POST" action="ajoutercours.php" name="f1">
						  <table>
							<tr>
							  <td>
								<input type="text" id="nom" class="nomprenom" name="nom" required=" ">
  
							  </td>
  
							</tr>
							<tr>
								<td>
									<label>nom</label></td>
  
							</tr>
							<tr>
							  <td>
								<input type="number" id="nbparticipant" class="nbparticipant" name="nbparticipant" required="">
  
							  </td>
  
							</tr>
							<tr>
								<td>
									<label>nbparticipants</label> </td>
  
							</tr>
							<tr>
							  <td>
								<input type="text" class="text" id="type" name="type" required="">
  
							  </td>
  
							</tr>
							<tr>
								<td>
									<label>type</label></td>
  
							</tr>
							<tr>
							  <td>
								<input type="number" id="duree" class="duree" name="duree" required>
  
							  </td>
  
							</tr>
							<tr>
							   
									<td>
										<label>duree</label></td>
  
							</tr>
						   
  
							</tr>
						
							
  
							</tr>
							<tr>
								<td>
									<label></label>
								  </td>
  
							</tr>
							<tr>
								<td><button class="btn btn-danger" onclick="test1()" >Ajouter</button></td>
							</tr>
							
							
						  </table>
						  </form>

								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- #/ container -->
		</div>
		<table>
			

			<form method="GET" action="table-datatable.php" >
<caption>Rechercher un Cours</caption>
<tr>
<td>Nom de cours</td>
<td><input type="texte" name="search_key"></td>
</tr>
<td><input type="submit" name="rechercher" class="btn btn-success" value="rechercher" ></td>

</form>
</table>
<table>
			<form method="GET" action="stat1.php" >
<tr>

</tr> <tr>
<td><input type="submit" name="state" class="btn btn-success" value="statistique" ></td></tr>

</form>
</table>

		<!--**********************************
			Content body end
		***********************************-->
		
		
		<!--**********************************
			Footer start
		***********************************-->
		
	<script src="plugins/common/common.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/settings.js"></script>
	<script src="js/gleek.js"></script>
	<script src="js/styleSwitcher.js"></script>

	<script src="./plugins/tables/js/jquery.dataTables1.min.js"></script>
	<script src="./plugins/tables/js/datatable1/dataTables1.bootstrap4.min.js"></script>
	<script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>


</html>
