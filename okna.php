<html>
<head>
<meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="Stylesheet" type="text/css" href="style.css" />
<link rel="Stylesheet" type="text/css" href="css/taby.css" />
</head>
<body>

<div id="all">
  <div id="header"><div id="header-in">
  <?php include 'menu.php';?>
  </div></div>
  
 <div id="main-out">
    <div id="main-in">
      <div class="breadcrumbs"><span style="font-weight:bold">Jesteś tutaj: </span><span style="color:#6fac2f">Strona główna</span> / okna </div>
	
	  
	  
<div class="container">

	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1">Uchylno-przesuwne</li>
		<li class="tab-link" data-tab="tab-2">Przesuwne HST</li>
		<li class="tab-link" data-tab="tab-3">Odstawno-przesuwne</li>
		<li class="tab-link" data-tab="tab-4">Byle jakie</li>
		
	</ul>

	<div id="tab-1" class="tab-content current">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	</div>
	<div id="tab-2" class="tab-content">
		 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
	<div id="tab-3" class="tab-content">
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	</div>
	<div id="tab-4" class="tab-content">
		Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	</div>
  
  	<div id="tab-5" class="tab-content">
		Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	</div>

</div>

 <br><br><br><br><br><br><br><br><br><br><br><br>
  


	  
	</div>
</div>

    
  
  <?php include 'realizacje.php';?>
  

  
  
   
  
  
   <div id="footer"><div id="footer-in"><div style="float:left;width:500px"><p style="width:500px" class="textmale">O firmie | Okna | Drzwi | Sys. aluminiowe | Bramy | Rolety | Realizacje | Kontakt</p><p class="textmale" style="width:500px">© 2014 Wikęd.pl. Wszelkie prawa zastrzeżone.</p></div><div style="float:right"><img class="imgfoot1" src="images/g1.jpg"> <img class="imgfoot1" src="images/g2.jpg"><img class="imgfoot" src="images/d1.jpg"><img class="imgfoot" src="images/d2.jpg"></div></div></div><div style="clear:both"></div>
      
  </div>  
 
   <script>
$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
</script>
  
 </body>