<?php $baseURL = base_url().'deals'; ?>

<p id="breadcrumbs"> Home<span class="sep">»</span></p>
<!-- LEFT NAV -->
<div id="prod_left">
  <div id="prod_left_head"><h3>Gear Categories:</h3></div>
  <ul>
    <?php foreach ($left_nav as $left_nav_item): ?>
    <li> <a href="<?php echo $baseURL.'/category/'.url_title($left_nav_item['Category'],'-',TRUE) ?>" > <?php echo $left_nav_item['Category'] ?> </a> </li>
    <?php endforeach ?>
  </ul>
</div>
<!-- ===== END LEFT NAV ======= -->
<div id="prod_box_container">
  <h1>Welcome to GearCompare.com Gear Deals and Outdoor Gear On Sale!</h1>
  <?php  shuffle($products); 
	   echo $this->pagination->create_links();  
	   foreach ($products as $products_item): 
		//do discount percentage math
		$number = ($products_item['SalePrice'] / $products_item['RetailPrice']) * 100;
		$number2 = 100 - $number;
		$percentOff = number_format($number2, 0);
		$slug = $baseURL.'/detail/'.$products_item['SKU'].'/'.url_title($products_item['ProductName'],'-',TRUE); 
?>
  <div id="product_box">
    <div class="discountBox"><?php echo $percentOff; ?>% off!</div>
    <div id="product_box_image"><a href="<?php echo $slug ?>" style="display: block; "> <img src="<?php echo $products_item['ThumbURL'] ?>" height="160" width="160" border="0" alt="<?php echo $products_item['ProductName'] ?>"/> </a>
      <div id="product_box_name"> <a href="<?php echo $slug ?>" ><?php echo $products_item['ProductName'] ?></a> </b> <br/>
        <div class="brand">Brand: <a href="<?php echo $baseURL.'/brand/'.url_title($products_item['BrandName'],'-',TRUE) ?>" alt="<?php echo $products_item['BrandName']?>" ><?php echo $products_item['BrandName'] ?></a> </div>
      </div>
    </div>
    <div id="product_box_bottom">
      <div id="pricing">
        <div class="sale"> $<?php echo number_format($products_item['SalePrice'], 2) ?></div>
        <div class="reg">Reg. $<?php echo number_format($products_item['RetailPrice'], 2) ?></div>
      </div>
      <!-- buy button -->
      <a href="<?php echo $slug ?>" class="button small right" title="<?php echo $products_item['ProductName'] ?> Details">Details</a> </div>
</div>
    <!--</div>
  </div>-->
  <?php endforeach ?>
  <div style="clear:both;"></div>
  <?php echo $this->pagination->create_links(); ?> </div>
