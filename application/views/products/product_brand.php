<?php $baseURL = base_url().'deals'; ?>
<p id="breadcrumbs"> <a href="<?php echo $baseURL ?>">Home</a><span class="sep">»</span><a href="<?php echo $baseURL.'/category/'.url_title($brand['0']['Category'],'-', TRUE).'/?cat='.$brand['0']['Category'].'&subcat='.$brand['0']['SubCategory']; ?>"><?php echo $brand['0']['Category'] ?></a><span class="sep">»</span>&nbsp;&nbsp;<?php echo $brand['0']['SubCategory'] ?><span class="sep">»</span> </p>
<!-- LEFT NAV -->
<div id="prod_left">
  <div id="prod_left_head"><h3><?php echo $brand['0']['BrandName']; ?></h3></div>
  <ul>
    <?php foreach ($left_nav as $left_nav_item): ?>
    <li><a href="<?php echo $baseURL.'/group/'.url_title($left_nav_item['Category'],'-',TRUE).'/'.url_title($left_nav_item['SubCategory'],'-',TRUE).'/'.url_title($left_nav_item['ProductGroup'],'-',TRUE).'/?cat='.$left_nav_item['Category'].'&subcat='.$left_nav_item['SubCategory'].'&group='.$left_nav_item['ProductGroup'] ?>" > <?php echo $left_nav_item['ProductGroup'] ?></a> </li>
    <?php endforeach ?>
  </ul>
</div>
<!-- END LEFT NAV -->
<div id="prod_box_container">
<h1><?php echo $brand['0']['BrandName']; ?> On Sale</h1>
<?php 
	shuffle($brand);  
	foreach ($brand as $brand_item): 
	//do discount percentage math
	$number = ($brand_item['SalePrice'] / $brand_item['RetailPrice']) * 100;
	$number2 = 100 - $number;
	$percentOff = number_format($number2, 0);
	//create links
	$slug = $baseURL.'/detail'.'/'.$brand_item['SKU'].'/'.url_title($brand_item['ProductName'],'-',TRUE); 
?>
<div id="product_box">
  <div class="discountBox"><?php echo $percentOff; ?>% off!</div>
  <div id="product_box_image"><a href="<?php echo $slug ?>"> <img src="<?php echo $brand_item['ThumbURL'] ?>" height="160" width="160" border="0" alt="<?php echo $brand_item['ProductName'] ?>"/> </a>
    <div id="product_box_name"><a href="<?php echo $slug ?>" ><?php echo $brand_item['ProductName'] ?></a>
      <div class="brand">Brand: <a href="<?php echo $baseURL.'/brand/'.url_title($brand_item['BrandName'],'-',TRUE) ?>" ><?php echo $brand_item['BrandName'] ?></a></div>
    </div>
  </div>
  <div id="product_box_bottom">
    <div id="pricing">
      <div class="sale"> $<?php echo number_format($brand_item['SalePrice'],2) ?> </div>
      <div class="reg">Reg. $<?php echo number_format($brand_item['RetailPrice'],2) ?> </div>
    </div>
      <!-- buy button -->
      <a href="<?php echo $slug ?>" class="button small right" title="<?php echo $brand_item['ProductName'] ?> Details">Details</a> </div>
  </div>
  <?php endforeach ?>
  <div style="clear:both;"></div>
  <?php //echo $this->pagination->create_links(); ?>
</div>