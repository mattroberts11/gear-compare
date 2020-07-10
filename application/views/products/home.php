<?php $baseURL = base_url().'index.php/products'; ?>

<p id="breadcrumbs"> Home<span class="sep">»</span></p>
<div id="home_deals_wrapper">
  <!--deal box logic-->
  <h1>GearCompare.com Outdoor Gear Deals</h1>
  <h2>Deals of the Day</h2>
<?php
//ALTREC
// Construct the full URL of your Deal of the Day request
//$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10032&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
//$strHtml = file_get_contents($strUrl);

// Stream back the response
//echo $strHtml;
?>

  
  
  <?php
  //BACKCOUNTRY
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10060&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
<?php 
//Dept of Goods
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10625&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
<?php
//REI
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10248&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
<?php
//MOOSEJAW
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10086&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
<?php
//PATAGONIA
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10083&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
<?php
//DOGFUNK
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10063&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
<?php
//HUCK N ROLL
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10477&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
<?php
// REAL CYCLIST
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10473&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
<?php
//SIERRA TRADING POST
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10921&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
<?php //Skis.com
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10279&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
<?php  //snowboards.com
// Construct the full URL of your Deal of the Day request
//$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10345&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
//$strHtml = file_get_contents($strUrl);

// Stream back the response
//echo $strHtml;
?>
<?php  //quicksilver
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=11293&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
<?php  //mountains plus
// Construct the full URL of your Deal of the Day request
$strUrl = "http://www.avantlink.com/api.php?module=DotdFeed&affiliate_id=2336&merchant_id=10597&website_id=2986&custom_tracking_code=&output=html&layout_id=21853";

// Make the actual Deal of the Day request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>
</div>
<!--home deal container-->
<!--RIGHT RAIL-->
<div id="home_right_rail">
  <div class="email">
    <h3 style="margin:0;padding:5px;background:#efefef;">Get Deals By Email (It's Free!)</h3>
    <!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://gearcompare.us5.list-manage.com/subscribe/post?u=d89e6cc9b714d7451e25f8c44&amp;id=4e275303b3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
	
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address </label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->
  </div>
  <div class="facebook"><h3 style="margin-bottom:10px;padding:5px;background:#efefef;">Like Us On Facebook!</h3> <div style="text-align:center;" class="fb-like" data-href="http://www.facebook.com/gearcomparedeals" data-send="true" data-layout="button_count" data-width="250" data-show-faces="true" data-font="tahoma"></div> </div>
  <!--RIGHT RAIL BANNERS-->
  <div class="banners"> 
  <div class="saleLinks">
  <p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=61341&amp;pw=2986" target="_blank" rel="nofollow">Up to 40% Off New Arc'teryx Apparel &amp; Gear at Backcountry.com - Click Here<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/61341/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>

<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=61337&amp;pw=2986" target="_blank" rel="nofollow">Up to 40% Off Marmot at Backcountry.com - Limited Time Only<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/61337/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>

<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=49133&amp;pw=2986" target="_blank" rel="nofollow">2012 Patagonia Sale at Backcountry.com - Up to 40% Off Now - Click Here<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/49133/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>

<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=1328&amp;pw=2986" target="_blank" rel="nofollow">40% off Stoic at Backcountry.com - Click Here - Limited Time<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/1328/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>

<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=2061&amp;pw=2986" target="_blank" rel="nofollow">Backcountry.com Semi-Annual Sale Best Deals Page<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/2061/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>

<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=67771&amp;pw=2986" target="_blank" rel="nofollow">On Sale Page at Backcountry.com - Click Here<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/67771/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>
  </div>
  
  
  
  <!--<a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=69113&amp;pw=2986" target="_blank"><img src="http://www.avantlink.com/gbi/10060/69113/2336/2986/image.jpg" width="270" height="225" style="border: 0px;" alt="Backcountry.com Sale" /></a>-->
  <a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=28937&amp;pw=2986&amp;ctc=bcSAShmrr" target="_blank"><img src="http://www.avantlink.com/gbi/10060/28937/2336/2986/image.jpg?ctc=bcSAShmrr" width="270" height="225" style="border: 0px;" alt="" /></a>
   <a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=110297&amp;pw=2986&amp;ctc=homeRightRailAltrec" target="_blank"><img src="http://www.avantlink.com/gbi/10032/110297/2336/2986/image.jpg?ctc=homeRightRailAltrec" width="270" height="225" style="border: 0px;" alt="Altrec.com Sale" /></a>
    <a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=13925&amp;pw=2986&amp;ctc=homeRightRailCampsaver" target="_blank"><img src="http://www.avantlink.com/gbi/10008/13925/2336/2986/image.jpg?ctc=homeRightRailCampsaver" width="270" height="225" style="border: 0px;" alt="Campsaver.com Sale" /></a>
    <a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=78255&amp;pw=2986&amp;ctc=homeRightRailMoosejaw" target="_blank"><img src="http://www.avantlink.com/gbi/10086/78255/2336/2986/image.jpg?ctc=homeRightRailMoosejaw" width="270" height="225" style="border: 0px;" alt="" /></a> 
    <p>
    <script type="text/javascript"><!--
google_ad_client = "ca-pub-4917549796554626";
/* GearCompare-Black-7-28-12 */
google_ad_slot = "6775248345";
google_ad_width = 250;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
    </p>
    </div><!--@END@ RIGHT RAIL BANNER CONTAINER -->
</div>
<!--END RIGHT RAIL-->
