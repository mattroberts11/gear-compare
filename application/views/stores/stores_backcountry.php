<?php $baseURL = base_url().'deals'; ?>

<p id="breadcrumbs"> <a href="<?php echo $baseURL ?>">Home</a><span class="sep">»</span>&nbsp;&nbsp;Backcountry.com Coupons, Deals and Sales<span class="sep">»</span> </p>
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
   <?php $this->load->view('sale/left_under_nav_sales');?>
  
</div>
<!-- END LEFT NAV -->
<div id="prod_box_container">
<h1>Backcountry.com Coupons, Sales and Deals</h1>
<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=1334&amp;pw=2986&amp;ctc=bcLogoBnr" target="_blank"><img src="http://www.avantlink.com/gbi/10060/1334/2336/2986/image.jpg?ctc=bcLogoBnr" width="120" height="60" style="border: 0px;float:left; padding:5px;" alt="Backcountry.com" /></a>
    Backcountry.com is the place to go for all of your outdoor gear needs.  If you like to find <strong>deals on outdoor gear</strong> from Backcountry.com, then this is your page!  GearCompare.com 
   posts all of <strong>Backcountry.com's sales, coupon codes and special deals</strong> on this page. And they change often so bookmark this page, or if you want to always know what is
   on sale at Backcountry.com then please <a href="http://eepurl.com/nOBjP">sign up for our FREE newsletter!</a> </p>
<?php
// Construct the full URL of your coupon feed request
$strUrl = "http://www.avantlink.com/coupons/coupon_feed.php?cfi=3635&pw=2986";

// Make the actual request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>

<div style="clear:both;"></div>