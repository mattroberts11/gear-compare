<?php $baseURL = base_url().'deals'; ?>

<p id="breadcrumbs"> <a href="<?php echo $baseURL ?>">Home</a><span class="sep">»</span>&nbsp;&nbsp;Altrec.com Coupons, Deals and Sales<span class="sep">»</span> </p>
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
<h1>Altrec.com Coupons, Sales and Deals</h1>
<p><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=147&amp;pw=2986&amp;ctc=altrecLogoBnr115" target="_blank"><img src="http://www.avantlink.com/gbi/10032/147/2336/2986/image.gif?ctc=altrecLogoBnr115" width="115" height="93" style="border: 0px;float:left; padding:5px;" alt="Altrec.com" /></a>
   Altrec.com is one of the leading outdoor retailers online.  Here you can find Altrec.com coupon codes, sale information and general deals on gear at Altrec.com. If it is on sale or Altrec gets a special purchase from 
   the manufacturer you will be able to find it here.  GearCompare.com will also get exclusive coupon codes from Altrec and will post them here.  If you would like to keep posted on 
   all of the sale information at Altrec.com please <a href="http://eepurl.com/nOBjP" target="_blank">sign up for our FREE newsletter!</a> 
</p>
<?php
// Construct the full URL of your coupon feed request
$strUrl = "http://www.avantlink.com/coupons/coupon_feed.php?cfi=3515&pw=2986";

// Make the actual request
$strHtml = file_get_contents($strUrl);

// Stream back the response
echo $strHtml;
?>

<div style="clear:both;"></div>