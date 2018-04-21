
<html>
<head>
<meta charset="utf-8">
<link rel="Stylesheet" type="text/css" href="style.css" />
<link rel="Stylesheet" type="text/css" href="slider.css" />
<link rel="Stylesheet" type="text/css" href="css/dyndanie.css" />
<title>Witamy na stronie Wikęd!</title>


<script src="css/jquery.min.js"></script>
<script>
$(function() {

     var pauseTime = 4000;

     $('#slider .pagination li').click(function (e) {
          e.preventDefault();
          //po kliknięciu czyścimy timer
          clearTimeout(timer);

          var $this = $(this);
          var $li = $this.parent().find('li');
          var index = $li.index($this);

          $('#slider .slide').removeClass('active').eq(index).addClass('active');

          $li.removeClass('active');
          $this.addClass('active');

          //włączamy timer do kolejnego kliknięcia
          timer = setTimeout(function() {
               var index = $li.index($li.parent().find('.active'));
               var clickLi = (index>=$li.length-1)? 0 : ++index;

               $('#slider .pagination li').eq(clickLi).click();
          }, pauseTime);
     });

     //po wejściu na stronę odpalamy pierwszy timer, który kliknie na drugi element paginacji
     var timer = setTimeout(function() {
          $('#slider .pagination li').eq(1).click();
     }, pauseTime);


$('.next').on('click', function(e) {
         e.preventDefault();
         var $li = $('#slider .pagination li');
         var $slides = $('#slider .slide');
         var index = $slides.index($slides.filter('.active'));
         if (index < $slides.length - 1) {
             index += 1;
         } else {
             index = 0;
         }
         $slides.removeClass('active');
         $slides.eq(index).addClass('active');

         $li.removeClass('active');
         $li.eq(index).addClass('active');

         clearTimeout(time);
         timer = setTimeout(function() {
             var index = $li.index($li.parent().find('.active'));
             var clickLi = (index>=$li.length-1)? 0 : ++index;

             $('#slider .pagination li').eq(clickLi).click();
         }, pauseTime);
     })
   });

</script>
<style>
.krotkie
{
line-height:1px;
}

</style>

</head>
<body>

<div id="all">
  <div id="header">
    <div id="header-in">

       <?php include 'menu.php';?>

  </div></div>

<div id="topout">
 <div id="topout-in">

<section class="slider" id="slider">
    <h2 class="visualhidden">Slider</h2>

    <article class="slide active">
      <div id="sliderobrazdiv">
      <img class="obrazek" width="550" src="slajd2.png">
      </div>

      <div id="textslider"><br><br><h3 class="title">Drzwi Stalowe</h3><p id="textslider2" class="text" style="color:#171916">Wybierając nasze drzwi macie Państwo pewność bezpieczeństwa na długie lata i gwarancję wysokiej jakości wykonania. Do produkcji naszych drzwi używamy tylko sprawdzonych technologii oraz najlepszych materiałów...</p></div>
      <a class="big-more">Zobacz więcej</a>
	</article><!-- e:slide -->

     <article class="slide">
      <div id="sliderobrazdiv">
      <img class="obrazek" style="width:480;margin:5px 5px 5px 20px;" src="images/ppoz.png">
      </div>
      <div id="textslider"><br><br><h3 class="title" style="color:red;left:-50px;margin-bottom:10px">Drzwi p.poż.</h3><p id="textslider2" class="text" style="color:#171916;left:-50px;width:450px" >Wybierając nasze drzwi macie Państwo pewność bezpieczeństwa na długie lata i gwarancję wysokiej jakości wykonania. Do produkcji naszych drzwi używamy tylko sprawdzonych technologii oraz najlepszych materiałów...</p>

     </div>
     <a class="big-more">Zobacz więcej</a>
     </article><!-- e:slide -->

     <img class="next" src="images/next.png" style="z-index:1000; position:absolute;right:35px;bottom:70px">


	 <!-- <ul class="pagination"  style="visibility:hidden">
          <li class=""><a href="">1</a></li>
          <li class="active"><a href="">2</a></li>
     </ul> -->


</section><!-- e:slider -->
</div>

<div id="frontout">
<div id="frontin">
    <div id="frontin1"><h3><br><br><br>Firma WIKĘD jest renomowanym i uznanym producentem stolarki okiennej i drzwiowej oraz konstrukcji aluminiowych.</h3><p class="textslide" style="width:680px" >W naszych autoryzowanych punktach sprzedaży spotkacie Państwo wykwalifikowaną kadrę pracowników, których doświadczenie i profesjonalizm są do Waszej dyspozycji. W przeciągu kilku ostatnich lat podwoiliśmy zatrudnienie, powiększamy powierzchnie produkcyjne i wymieniamy maszyny na najnowszej generacji sprzęt co sprawia że jesteśmy jedną z dynamiczniej rozwijających się firm w regionie.</p></div>
    <div id="frontin2"><br><br><img id="frontinimg" src="images/rdrzwi.png" style=""><img id="frontinimg" src="images/pobierzkatalog.png"><img id="frontinimg" width="220" style="margin-left:-15"src="images/serwis.png"></div>
    </div>
</div>

  <div id="categories">
    <div id="categories-in">
        <div id="modul"><h3 class="modul" style="margin-top:15px;margin-left:7px;">Systemy PVC</h3><img id="imgborder" width="175" src="images/pvc.jpg"><a class="more">Zobacz szczegóły</a><hr><p class="male">Jednym z najważniejszych elementów naszego domu są okna, które muszą łączyć styl i elegancję z praktycznością i trwałością...</p></div>
        <div id="modul"><h3 class="modul" style="margin-top:15px;margin-left:7px;">Systemy aluminiowe</h3><img id="imgborder" width="175" src="images/alu.jpg"><a class="more">Zobacz szczegóły</a><hr><p class="male">Jednym z najważniejszych elementów naszego domu są okna, które muszą łączyć styl i elegancję z praktycznością i trwałością...</p></div>
        <div id="modul"><h3 class="modul" style="margin-top:15px;margin-left:7px;">Drzwi stalowe</h3><img id="imgborder" width="175" src="images/stal.jpg"><a class="more">Zobacz szczegóły</a><hr><p class="male">Jednym z najważniejszych elementów naszego domu są okna, które muszą łączyć styl i elegancję z praktycznością i trwałością...</p></div>
        <div id="modul"><h3 class="modul" style="margin-top:15px;margin-left:7px;">Rolety</h3><img id="imgborder" width="175" src="images/rolety.jpg"><a class="more">Zobacz szczegóły</a><hr><p class="male">Jednym z najważniejszych elementów naszego domu są okna, które muszą łączyć styl i elegancję z praktycznością i trwałością...</p></div>
        <div id="modul"><h3 class="modul" style="margin-top:15px;margin-left:7px;">Bramy</h3><img id="imgborder" width="175" src="images/bramy.jpg"><a class="more">Zobacz szczegóły</a><hr><p class="male">Jednym z najważniejszych elementów naszego domu są okna, które muszą łączyć styl i elegancję z praktycznością i trwałością...</p></div>
    </div>
  </div>

  <div id="modules">
  <div id="modules-in">
  <div id="module-left"><h3 style="margin:5 5 10 5px;">Nasze realizacje</h3><img class="mgborder" src="images/bhwej.jpg" style="float:left;margin-right:10px;"><p class="textbold" style="float:left;margin:5px 0 5px 0">Budynek Biurowo-Handlowy Wejherowo</p><p class="male" style="margin-right:20px">Wśród naszych dotychczasowych realizacji są zarówno domy jednorodzinne, pensjonaty i hotele jak i osiedla mieszkaniowe i obiekty użyteczności publicznej. Różnorodność obsługiwanych inwestycji połączona z szerokim asortymentem oraz naszym wieloletnim doświadczeniem spowodowała, że ofertę jesteśmy w stanie przedstawić wielu inwestorom, zaspokajając najróżniejsze gusta. </p></div>





  <div id="module-right">
    <img style="position:absolute;left:-50px;top:-40px" src="images/aktualnosci.png"> <a><div style="font-weight:bold;padding:5px;width:200px; position:absolute;left:-px;top:30px;font-size:18px;"><ul><li>Wikęd sponsoruje Lecha Gdańsk</li></a><br><a><li>Blablablablabalbla</li></a><br><a><li>Kordian Bober pracownikiem miesiąca</li></ul></a>
  </div>


  </div>
  </div>

  <div id="footer"><div id="footer-in"><div style="float:left;width:500px"><p style="width:500px" class="textmale">O firmie | Okna | Drzwi | Sys. aluminiowe | Bramy | Rolety | Realizacje | Kontakt</p><p class="textmale" style="width:500px">© 2017 wiked.pl. Wszelkie prawa zastrzeżone.</p></div><div style="float:right"><img class="imgfoot1" src="images/g1.jpg"> <img class="imgfoot1" src="images/g2.jpg"><img class="imgfoot" src="images/d1.jpg"><img class="imgfoot" src="images/d2.jpg"></div></div></div><div style="clear:both"></div>


</div>




</body>

<!--
<div id="modleft"></div>
<div id="modright"></div>
-->

</html>
