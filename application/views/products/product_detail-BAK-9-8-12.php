<?php
	//do discount percentage math
	$number = ($products_item['SalePrice'] / $products_item['RetailPrice']) * 100;
	$number2 = 100 - $number;
	$percentOff = number_format($number2, 0);
	//urls
	$baseURL = base_url().'deals';
?>

<p id="breadcrumbs"> <a href="<?php echo $baseURL ?>">Home</a><span class="sep">»</span><a href="<?php echo $baseURL.'/category/'.url_title($products_item['Category'],'-', TRUE) ?>"><?php echo $products_item['Category'] ?></a> <span class="sep">»</span><a href="<?php echo $baseURL.'/subcat/'.url_title($products_item['Category'],'-', TRUE).'/'.url_title($products_item['SubCategory'],'-', TRUE).'/?cat='.$products_item['Category'].'&subcat='.$products_item['SubCategory'] ?>"><?php echo $products_item['SubCategory'] ?> </a><span class="sep">»</span><a href="<?php echo $baseURL.'/group/'.url_title($products_item['Category'],'-', TRUE).'/'.url_title($products_item['SubCategory'],'-', TRUE).'/?cat='.$products_item['Category'].'&subcat='.$products_item['SubCategory'].'&group='.$products_item['ProductGroup'] ?>"><?php echo $products_item['ProductGroup'] ?></a> <span class="sep">»</span></p>
<div id="detail_left">
  <div id="detail_prod_photo">
    <div class="discountBox"><?php echo $percentOff; ?>% off!</div>
    <?php echo '<img src="'.$products_item['ImageURL'].'"height="270" width="270" style="" border="0" alt="'.$products_item['ProductName'].'"/>'; ?> </div>
  <div id="detail_left_related_items">
    <div style="padding: 5px; background-color: #F27F02; color:#fff; "> <b>Share With Your Friends!</b> </div>
    <div style="padding: 8px; float: left; ">
      <p> <a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode($baseURL.'/detail/'.$products_item['SKU'].'/'.url_title($products_item['ProductName'],'-',TRUE))?>&media=<?php echo urlencode($products_item['ImageURL']);  ?>&description=<?php echo urlencode($products_item['ProductName']); ?>" class="pin-it-button" count-layout="none"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></p>
      <p>
      <div class="fb-like" data-href="<?php echo $baseURL.'/detail/'.$products_item['SKU'].'/'.url_title($products_item['ProductName'],'-',TRUE)?>" data-send="true" data-width="200" data-show-faces="true"></div>
      </p>
      <p><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </p>
      <p><a href="https://twitter.com/gearcompare" class="twitter-follow-button" data-show-count="false">Follow @gearcompare</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </p>
      <p>
      <su:badge layout="2"></su:badge>
      </p>
      <p>
      <g:plusone size="medium"></g:plusone>
      </p>
    </div>
  </div>
  
</div>
<div id="detail_main_content"> <?php echo '<h1 class="details">'.$products_item['ProductName'].'</h1>';?>
  <div id="price_buy_container">
    <div style="float: left; ">
      <div style="float: left; "> <span style="color: red; font-size: 30px; font-weight: bold; ">$<?php echo number_format($products_item['SalePrice'],2) ?></span> <span style="color: rgb(170, 170, 170); font-size: 30px; font-weight: bold; ">*</span> </div>
      <div style="float: left; margin: 5px 0px 20px 20px; font-size: 12px;">Retail: <strong>$<?php echo number_format($products_item['RetailPrice'],2)?></strong> <br/>
        Discount: <strong><span style="color: red;"><?php echo $percentOff; ?>% Off<span></strong> </div>
    </div>
    <div style="float: left; margin: 5px 0px 0px 20px; color: rgb(153, 153, 153); width: 300px; font-size: 11px; ">* This item is on sale at <?php echo $merchant[0]['merchname']; ?>.</div>
    <div style="clear: both; "> </div>
    <div id="button-box"> <a href="<?php echo $products_item['BuyLink'] ?>" class="button" target="_blank" rel="nofollow">View Deal at <?php echo $merchant[0]['merchname']; ?>!</a></div>
  </div>
  <h3>Description</h3>
  <?php echo '<p>'.$products_item['LongDescription'].'</p>'; ?>
  <h3>Coupons, Reviews and Price Comparison</h3>
  <p><strong><em>Click Additional Information Link :</em></strong> <strong><?php echo $products_item['ProductContentWidget'] ?></strong></p>
  <h3>Keywords</h3>
  <?php echo '<p class="tags"><em>'.$products_item['Keywords'].'</em></p>'; ?>
  <h3>More <?php echo $products_item['ProductGroup'] ?> on GearCompare.com</h3>
  <strong>COMING SOON!</strong>
  <?php //echo '<p>This is Product SKU = '.$products_item['SKU'].'</p>'; ?>
</div>
<?php echo $products_item['ProductPageViewTracking'] //TRACKS PAGE VIEWS BY PRODUCT ?>
<!--</div>-->
