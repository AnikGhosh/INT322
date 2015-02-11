<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>INT322 Winter 2015|Anik Ghosh</title>
 
        <link rel="stylesheet" href="includes/reset.css"   type="text/css" media="screen"> 

		<style>body { padding-top: 70px; }</style><!-- adding padding to body to make sure nav bar doesn't overlay content-->

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href=".\bootstrap\css\bootstrap.css" media="screen">

		<!-- Font Awesome CSS source from http://www.bootstrapcdn.com/#fontawesome_tab -->
		<!--<link href=".\bootstrap\font-awesome.min.css" rel="stylesheet">-->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

        <!--brand logo-->
		    <header>
     		  <div class="image">
      			<img id="ctl00_Image1" src="includes/ict-int322.png" alt="INT322 - Web Programming On Unix" title="INT322 - Web Programming On Unix" /><!-- style="border-width:0px;" />-->
     		  </div>
    	    </header><br /><br />

        <!--INVERSE NAVBAR-->

	  <nav class="navbar navbar-inverse">
        <div class="container-fluid">
           <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
               </ul>
            </li>
          </ul>
      
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
            </ul>
         </div><!--navbar-collapse ends-->
        </div> <!--container fluid class ends-->
      </nav>

        <!-- INVERSE NAVBAR ENDS -->			

		 <nav class="navbar navbar-default navbar-fixed-bottom">
			<div class="container-fluid">
			 <footer class="footer">
			   <div class="container">
                   <section class="text-muted">
	                 <script type="text/javascript">
	                  //<![CDATA[
	                     var dt=new Date(document.lastModified);   // Get document last modified date
	                     document.write('This page was last updated on '+dt.toLocaleString()) 
	                  //]]>
	                 </script>
                   </section>
			   </div>
			  </footer>
			</div>
		</nav>


		<!-- Bootstrap core JavaScript -->
   		<!--================================================== -->
    		<!-- Placed at the end of the document so the pages load faster -->
            <!----><script src="includes/myscript.js"  type="text/javascript"></script> 
    		<script src=".\bootstrap\js\jquery.min.js"></script>
    		<script src=".\bootstrap\js\bootstrap.js"></script>
    		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    		<script src=".\bootstrap\js\ie10-viewport-bug-workaround.js"></script>
    		<script src=".\bootstrap\js\bootswatch.js"></script>
  </body>
</html>