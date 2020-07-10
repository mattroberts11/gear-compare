<?php $baseURL = base_url().'deals'; ?>

<p id="breadcrumbs"> <a href="<?php echo $baseURL ?>">Home</a><span class="sep">»</span>&nbsp;&nbsp;Campsaver.com Coupons, Deals and Sales<span class="sep">»</span> </p>
<!-- LEFT NAV -->
<div id="prod_left">
<div id="prod_left_box">
  <div id="prod_left_box">
  <div id="prod_left_head"><h3>Main Categories</h3></div>
  <ul>
    <?php foreach ($main_cat_nav as $main_cat_nav_item): ?>
    <li> <a href="<?php echo $baseURL.'/category/'.url_title($main_cat_nav_item['Category'],'-',TRUE) ?>" > <?php echo $main_cat_nav_item['Category'] ?> </a> </li>
    <?php endforeach ?>
  </ul>
  </div>
</div>
  <span style="text-align:center"><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=85121&amp;pw=2986&amp;ctc=bcLftRail" target="_blank"><img src="http://www.avantlink.com/gbi/10060/85121/2336/2986/image.jpg?ctc=bcLftRail" width="150" height="140" style="border: 0px;" alt="" /></a></span>
  <div class="saleLinks">
  <p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=61341&amp;pw=2986" target="_blank" rel="nofollow">Up to 40% Off New Arc'teryx Apparel &amp; Gear at Backcountry.com - Click Here<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/61341/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>

<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=61337&amp;pw=2986" target="_blank" rel="nofollow">Up to 40% Off Marmot at Backcountry.com - Limited Time Only<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/61337/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>

<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=49133&amp;pw=2986" target="_blank" rel="nofollow">2012 Patagonia Sale at Backcountry.com - Up to 40% Off Now - Click Here<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/49133/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>

<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=1328&amp;pw=2986" target="_blank" rel="nofollow">40% off Stoic at Backcountry.com - Click Here - Limited Time<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/1328/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>

<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=2061&amp;pw=2986" target="_blank" rel="nofollow">Backcountry.com Semi-Annual Sale Best Deals Page<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/2061/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>

<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=67771&amp;pw=2986" target="_blank" rel="nofollow">On Sale Page at Backcountry.com - Click Here<img style="border: none !important; margin: 0px !important;" src="http://www.avantlink.com/tpv/10060/67771/2336/2986/-/ml/image.png" alt="" width="0" height="0" /></a></p>
  </div>
</div>
<!-- END LEFT NAV -->
<div id="prod_box_container">
<h1>Campsaver.com Coupons, Sales and Deals</h1>
<?php
// Construct the full URL of your coupon feed request
$strUrl = "http://www.avantlink.com/coupons/coupon_feed.php?cfi=33061&pw=2986";

// Make the actual request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>

<div style="clear:both;"></div>