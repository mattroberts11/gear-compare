<?php
	//do discount percentage math
	$number = ($products_item['SalePrice'] / $products_item['RetailPrice']) * 100;
	$number2 = 100 - $number;
	$percentOff = number_format($number2, 0);
	//urls
	$baseURL = base_url().'deals';
?>

<p id="breadcrumbs"> <a href="<?php echo $baseURL ?>">Home</a><span class="sep">�</span><a href="<?php echo $baseURL.'/category/'.url_title($products_item['Category'],'-', TRUE) ?>"><?php echo $products_item['Category'] ?></a> <span class="sep">�</span><a href="<?php echo $baseURL.'/subcat/'.url_title($products_item['Category'],'-', TRUE).'/'.url_title($products_item['SubCategory'],'-', TRUE).'/?cat='.$products_item['Category'].'&subcat='.$products_item['SubCategory'] ?>"><?php echo $products_item['SubCategory'] ?> </a><span class="sep">�</span><a href="<?php echo $baseURL.'/group/'.url_title($products_item['Category'],'-', TRUE).'/'.url_title($products_item['SubCategory'],'-', TRUE).'/?cat='.$products_item['Category'].'&subcat='.$products_item['SubCategory'].'&group='.$products_item['ProductGroup'] ?>"><?php echo $products_item['ProductGroup'] ?></a> <span class="sep">�</span></p>
<div id="detail_left">
  <div id="detail_prod_photo">
    <div class="discountBox"><?php echo $percentOff; ?>% off!</div>
    <?php echo '<img src="'.$products_item['ImageURL'].'"height="270" width="270" style="" border="0" alt="'.$products_item['ProductName'].'"/>'; ?> 
  </div>
  <div id="detail_left_related_items">
      <div style="padding: 5px; background-color: #F27F02; color:#fff; "> <b>Search by Keyword - Click Tag:</b> </div>
      <p>Not what you were looking for?  Click a tag below and do a search!</p>
      <p class="tags">
      <?php 
      $keywords = explode(",",$products_item['Keywords']); 
      foreach ($keywords as $keywords_item):
         echo '<span class="st_tag">';
          echo '<a rel="tag" href="'.$baseURL.'/search/?q='.$keywords_item.'">'.$keywords_item.'</a>';
          echo '</span>';
      
      endforeach
      ?>
      </p>
  </div>
  <div id="detail_left_related_items">
    <div style="padding: 5px; background-color: #F27F02; color:#fff; "> <b>Share With Your Friends!</b> </div>
    
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
<div id="detail_main_content"> 
    <div id="social">
        <div class="fb-like" data-href="<?php echo $baseURL.'/detail/'.$products_item['SKU'].'/'.url_title($products_item['ProductName'],'-',TRUE)?>" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
     &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>    
    <a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode($baseURL.'/detail/'.$products_item['SKU'].'/'.url_title($products_item['ProductName'],'-',TRUE))?>&media=<?php echo urlencode($products_item['ImageURL']);  ?>&description=<?php echo urlencode($products_item['ProductName']); ?>" class="pin-it-button" count-layout="none"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
    &nbsp;&nbsp;&nbsp;&nbsp;<su:badge layout="2"></su:badge>
    &nbsp;&nbsp;&nbsp;&nbsp;<g:plusone size="medium"></g:plusone>
    
    
    </div>
    <?php echo '<h1 class="details">'.$products_item['ProductName'].'</h1>';?>
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
  
  <?php echo '<p>'.$products_item['LongDescription'].'</p>'; ?>
  <p><strong><em>Click Additional Information Link :</em></strong> <strong><?php echo $products_item['ProductContentWidget'] ?></strong></p>
  <h2>Compare Prices for <?php echo $products_item['ProductName'] ?></h2>
  <p><span style="color:blue;font-style:italic;">*If the table below is empty there are no sale products to compare</span></p>
  <table width="100%" id="compareTable">
      <tr>
          <th>Store</th>
          <th>Image</th>
          <th>Product Name</th>
          <th>Retail Price</th>
          <th>Sale Price</th>
          <th>% Off</th>
          <th >Buy Link</th>
      </tr>
      <?php
        //if (!empty($dog_comp)){
      ?>
          <?php foreach ($dog_comp as $dog_comp_item): ?>
            <?php
                //do discount percentage math
                $number = ($dog_comp_item['SalePrice'] / $dog_comp_item['RetailPrice']) * 100;
                $number2 = 100 - $number;
                $percentOff = number_format($number2, 0);
            ?>
              <tr>
                  <td class="logo"><a href="<?php echo $dog_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="/images/stores/department-of-goods-logo-88.gif" border="0" width="60"/></a></td>
                  <td><a href="<?php echo $dog_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="<?php echo $dog_comp_item['ThumbURL']?>" height="60" width="60"  /></a></td>
                  <td><?php echo $dog_comp_item['ProductName'] ?></td>
                  <td>$<?php echo number_format($dog_comp_item['RetailPrice'],2)?></td>
                  <td class="salePrice">$<?php echo number_format($dog_comp_item['SalePrice'],2) ?></td>
                  <td class="percentOff"><?php echo $percentOff ?>%</td>
                  <td class="buyButton"><a href="<?php echo $dog_comp_item['BuyLink'] ?>" class="button" target="_blank" rel="nofollow">Buy at DepartmentOfGoods.com</a></td>
              </tr>
          <?php endforeach ?>
      <?php //} ?>
      <?php
        //if (!empty($altrec_comp)){
      ?>
          <?php foreach ($altrec_comp as $altrec_comp_item): ?>
          	<?php
				//do discount percentage math
				$number = ($altrec_comp_item['SalePrice'] / $altrec_comp_item['RetailPrice']) * 100;
				$number2 = 100 - $number;
				$percentOff = number_format($number2, 0);
			?>
              <tr>
                  <td class="logo"><a href="<?php echo $altrec_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="/images/stores/altrec-logo-88.jpg" border="0" /></a></td>
                  <td><a href="<?php echo $altrec_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="<?php echo $altrec_comp_item['ThumbURL']?>" height="60" width="60"  /></a></td>
                  <td><?php echo $altrec_comp_item['ProductName'] ?></td>
                  <td>$<?php echo number_format($altrec_comp_item['RetailPrice'],2)?></td>
                  <td class="salePrice">$<?php echo number_format($altrec_comp_item['SalePrice'],2) ?></td>
                  <td class="percentOff"><?php echo $percentOff ?>%</td>
                  <td class="buyButton"><a href="<?php echo $altrec_comp_item['BuyLink'] ?>" class="button" target="_blank" rel="nofollow">Buy at Altrec.com</a></td>
              </tr>
          <?php endforeach ?>
      <?php //} ?>
      <?php
        //if (!empty($altrec_comp)){
      ?>
      <?php foreach ($altrec_outlet_comp as $altrec_outlet_comp_item): ?>
          		<?php
				//do discount percentage math
				$number = ($altrec_outlet_comp_item['SalePrice'] / $altrec_outlet_comp_item['RetailPrice']) * 100;
				$number2 = 100 - $number;
				$percentOff = number_format($number2, 0);
				?>
              <tr>
                  <td class="logo"><a href="<?php echo $altrec_outlet_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="/images/stores/altrec-outlet-logo-88.jpg" border="0" /></a></td>
                  <td><a href="<?php echo $altrec_outlet_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="<?php echo $altrec_outlet_comp_item['ThumbURL']?>" height="60" width="60"  /></a></td>
                  <td><?php echo $altrec_outlet_comp_item['ProductName'] ?></td>
                  <td>$<?php echo number_format($altrec_outlet_comp_item['RetailPrice'],2)?></td>
                  <td class="salePrice">$<?php echo number_format($altrec_outlet_comp_item['SalePrice'],2) ?></td>
                  <td class="percentOff"><?php echo $percentOff ?>%</td>
                  <td class="buyButton"><a href="<?php echo $altrec_outlet_comp_item['BuyLink'] ?>" class="button" target="_blank" rel="nofollow">Buy at AltrecOutlet.com</a></td>
              </tr>
          
      <?php endforeach ?>
      <?php //} ?>
      <?php
        //if (!empty($altrec_comp)){
      ?>
      <?php foreach ($moosejaw_comp as $moosejaw_comp_item): ?>
          		<?php
				//do discount percentage math
				$number = ($moosejaw_comp_item['SalePrice'] / $moosejaw_comp_item['RetailPrice']) * 100;
				$number2 = 100 - $number;
				$percentOff = number_format($number2, 0);
				?>
              <tr>
                  <td class="logo"><a href="<?php echo $moosejaw_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="/images/stores/moosejaw-logo-88.jpg" border="0" /></a></td>
                  <td><a href="<?php echo $moosejaw_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="<?php echo $moosejaw_comp_item['ThumbURL']?>" height="60" width="60"  /></a></td>
                  <td><?php echo $moosejaw_comp_item['ProductName'] ?></td>
                  <td>$<?php echo number_format($moosejaw_comp_item['RetailPrice'],2)?></td>
                  <td class="salePrice">$<?php echo number_format($moosejaw_comp_item['SalePrice'],2) ?></td>
                  <td class="percentOff"><?php echo $percentOff ?>%</td>
                  <td class="buyButton"><a href="<?php echo $moosejaw_comp_item['BuyLink'] ?>" class="button" target="_blank" rel="nofollow">Buy at Moosejaw.com</a></td>
              </tr>
          
      <?php endforeach ?>
      <?php //} ?>
      <?php
        //if (!empty($altrec_comp)){
      ?>
      <?php foreach ($rei_comp as $rei_comp_item): ?>
          		<?php
				//do discount percentage math
				$number = ($rei_comp_item['SalePrice'] / $rei_comp_item['RetailPrice']) * 100;
				$number2 = 100 - $number;
				$percentOff = number_format($number2, 0);
				?>
              <tr>
                  <td class="logo"><a href="<?php echo $rei_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="/images/stores/rei-logo-88.jpg" border="0" /></a></td>
                  <td><a href="<?php echo $rei_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="<?php echo $rei_comp_item['ThumbURL']?>" height="60" width="60"  /></a></td>
                  <td><?php echo $rei_comp_item['ProductName'] ?></td>
                  <td>$<?php echo number_format($rei_comp_item['RetailPrice'],2)?></td>
                  <td class="salePrice">$<?php echo number_format($rei_comp_item['SalePrice'],2) ?></td>
                  <td class="percentOff"><?php echo $percentOff ?>%</td>
                  <td class="buyButton"><a href="<?php echo $rei_comp_item['BuyLink'] ?>" class="button" target="_blank" rel="nofollow">Buy at REI.com</a></td>
              </tr>
          
      <?php endforeach ?>
      <?php //} ?>
      <?php
        //if (!empty($altrec_comp)){
      ?>
      <?php foreach ($campsaver_comp as $campsaver_comp_item): ?>
          		<?php
				//do discount percentage math
				$number = ($campsaver_comp_item['SalePrice'] / $campsaver_comp_item['RetailPrice']) * 100;
				$number2 = 100 - $number;
				$percentOff = number_format($number2, 0);
				?>
              <tr>
                  <td class="logo"><a href="<?php echo $campsaver_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="/images/stores/campsaver-logo-88.jpg" border="0" /></a></td>
                  <td><a href="<?php echo $campsaver_comp_item['BuyLink'] ?>"  target="_blank" rel="nofollow"><img src="<?php echo $campsaver_comp_item['ThumbURL']?>" height="60" width="60"  /></a></td>
                  <td><?php echo $campsaver_comp_item['ProductName'] ?></td>
                  <td>$<?php echo number_format($campsaver_comp_item['RetailPrice'],2)?></td>
                  <td class="salePrice">$<?php echo number_format($campsaver_comp_item['SalePrice'],2) ?></td>
                  <td class="percentOff"><?php echo $percentOff ?>%</td>
                  <td class="buyButton"><a href="<?php echo $campsaver_comp_item['BuyLink'] ?>" class="button" target="_blank" rel="nofollow">Buy at Campsaver.com</a></td>
              </tr>
          
      <?php endforeach ?>
      <?php //} ?>
  </table>
  
  
  
  
  <h2>More <?php echo $products_item['ProductGroup'] ?> on Sale at GearCompare.com</h2>
  <p>More Related Items:</p>
  <?php 
  $i = 1;
  foreach ($related as $related_item): ?>
      <?php 
      
      if ($i == 5){
          echo '<div style="clear:both;"></div>' ;
      }
      ?>
      <div id="relatedItem">
          <a href="<?php echo $baseURL.'/detail/'.$related_item['SKU'].'/'.url_title($related_item['ProductName'],'-',TRUE); ?>">
          <img width="100" height="100" border="0" alt="<?php echo $related_item['ProductName']; ?>" src="<?php echo $related_item['ThumbURL'] ?>" />
         <br />
         <?php echo $related_item['ProductName']; ?></a>
         <br />
          <strong>$<?php echo number_format($related_item['SalePrice'],2); ?></strong>
      </div>
   <?php $i++; ?>
   <?php endforeach ?>
   <div style="clear:both;"><p>&nbsp;</p></div>
   
   <?php if(!empty($products_item['Keywords'])){
  echo '<h2>Search by Keyword Tags</h2>
  <p class="tags">';
   
  $keywords = explode(",",$products_item['Keywords']); 
  foreach ($keywords as $keywords_item):
     echo '<span class="st_tag">';
      echo '<a rel="tag" href="'.$baseURL.'/search/?q='.$keywords_item.'">'.$keywords_item.'</a>';
      echo '</span>';
  
  endforeach;
  
  echo '</p>';
  }
  ?>
  <?php //echo '<p class="tags"><em>'.$products_item['Keywords'].'</em></p>'; ?>
  
  
  
  <?php //echo '<p>This is Product SKU = '.$products_item['SKU'].'</p>'; ?>
</div>
<?php echo $products_item['ProductPageViewTracking'] //TRACKS PAGE VIEWS BY PRODUCT ?>
<!--</div>-->
