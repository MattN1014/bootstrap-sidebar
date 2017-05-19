<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Bootstrap Sidebar menu</title>

        <link rel="stylesheet" href="style.css">
	</head>
	<body>

		<div class="wrapper">

			<nav id="sidebar">
				<ul class="list-unstyled components text-center">
					<li class="active">
						<a href="">
							<i class="fa fa-home"></i>
							Home
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-briefcase"></i>
							About 
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-wrench"></i>
							Services
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-pencil"></i>
							Portfolio
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-envelope"></i>
							Contact 
						</a>
					</li>
				</ul>
			</nav>

			<div class="content">
				<header>
					<div class="container-fluid">
						
						<div class="col-md-12 text-center">
							<h1>Bootstrap sidebar menu</h1>
						</div>
					</div>
				</header>
			</div>

		</div>

		<!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>

	</body>
</html>