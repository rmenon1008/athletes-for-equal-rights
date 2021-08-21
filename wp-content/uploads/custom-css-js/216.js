<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 

var images=new Array('http://afer.menon.pro/wp-content/uploads/2020/07/2016-3-Kaepernick_AP_17228715348644.jpg','http://afer.menon.pro/wp-content/uploads/2020/07/2016-1-WNBA-black-lives-matter-GettyImages-545715456.jpg','http://afer.menon.pro/wp-content/uploads/2020/07/2016-1-WNBA-black-lives-matter-GettyImages-545715456.jpg', 'http://afer.menon.pro/wp-content/uploads/2020/07/2016-2-Lilesa.jpg', 'http://afer.menon.pro/wp-content/uploads/2020/07/2014-4-GettyImages-579708428.jpg', 'http://afer.menon.pro/wp-content/uploads/2020/07/2014-5-GettyImages-460461468.jpg', 'http://afer.menon.pro/wp-content/uploads/2020/07/2014-3-st-louis-rams-AP_847673362364.jpg', 'http://afer.menon.pro/wp-content/uploads/2020/07/2014-2-Ariyana-Smith-high-res-from-Register-Mail.jpg', 'http://afer.menon.pro/wp-content/uploads/2020/07/1996-abdul-rauf-AP_96031602495.jpg', 'http://afer.menon.pro/wp-content/uploads/2020/07/2012_MiamiHeatx.jpg', 'http://afer.menon.pro/wp-content/uploads/2020/07/1973-2-arthur-ashe-AP_513455448201.jpg', 'http://afer.menon.pro/wp-content/uploads/2020/07/1967-1-Kathy-Switzer-GettyImages-591900346.jpg', 'http://afer.menon.pro/wp-content/uploads/2020/07/1968-smith-and-carlos-GettyImages-640827780.jpg');
var nextimage=0;
doSlideshow();

function doSlideshow(){
  if(nextimage>=images.length){nextimage=0;}
  $('.archive-header')
    .css('background-image','url("'+images[nextimage++]+'")')
    .fadeIn(500,function(){
    setTimeout(doSlideshow,1000);
  });
}</script>
<!-- end Simple Custom CSS and JS -->
