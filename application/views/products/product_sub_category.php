<?php $baseURL = base_url().'deals'; ?>
<p id="breadcrumbs"> <a href="<?php echo $baseURL ?>">Home</a><span class="sep">»</span><a href="<?php echo $baseURL.'/category/'.url_title($subcat['0']['Category'],'-', TRUE).'/?cat='.$subcat['0']['Category'].'&subcat='.$subcat['0']['SubCategory']; ?>"><?php echo $subcat['0']['Category'] ?></a><span class="sep">»</span>&nbsp;&nbsp;<?php echo $subcat['0']['SubCategory'] ?><span class="sep">»</span> </p>
<!-- LEFT NAV -->
<div id="prod_left">
<div id="prod_left_box">
  <div id="prod_left_head"><h3><?php echo $subcat['0']['SubCategory']; ?></h3></div>
  <ul>
    <?php foreach ($left_nav as $left_nav_item): ?>
    <li><a href="<?php echo $baseURL.'/group/'.url_title($left_nav_item['Category'],'-',TRUE).'/'.url_title($left_nav_item['SubCategory'],'-',TRUE).'/'.url_title($left_nav_item['ProductGroup'],'-',TRUE).'/?cat='.$left_nav_item['Category'].'&subcat='.$left_nav_item['SubCategory'].'&group='.$left_nav_item['ProductGroup'] ?>" > <?php echo $left_nav_item['ProductGroup'] ?></a> </li>
    <?php endforeach ?>
  </ul>
  </div>
  <div id="prod_left_box">
  <div id="prod_left_head"><h3>Main Categories</h3></div>
  <ul>
    <?php foreach ($main_cat_nav as $main_cat_nav_item): ?>
    <li> <a href="<?php echo $baseURL.'/category/'.url_title($main_cat_nav_item['Category'],'-',TRUE) ?>" > <?php echo $main_cat_nav_item['Category'] ?> </a> </li>
    <?php endforeach ?>
  </ul>
  </div>
</div>
<!-- END LEFT NAV -->
<div id="prod_box_container">
<h1><?php echo $subcat['0']['SubCategory']; ?> On Sale</h1>
<?php 
	shuffle($subcat);  
	foreach ($subcat as $subcat_item): 
	//do discount percentage math
	$number = ($subcat_item['SalePrice'] / $subcat_item['RetailPrice']) * 100;
	$number2 = 100 - $number;
	$percentOff = number_format($number2, 0);
	//create links
	$slug = $baseURL.'/detail'.'/'.$subcat_item['SKU'].'/'.url_title($subcat_item['ProductName'],'-',TRUE); 
?>
<div id="product_box">
  <div class="discountBox"><?php echo $percentOff; ?>% off!</div>
  <div id="product_box_image"><a href="<?php echo $slug ?>"> <img src="<?php echo $subcat_item['ImageURL'] ?>" height="160" width="160" border="0" alt="<?php echo $subcat_item['ProductName'] ?>"/> </a>
    <div id="product_box_name"><a href="<?php echo $slug ?>" ><?php echo $subcat_item['ProductName'] ?></a>
      <div class="brand">Brand: <a href="<?php echo $baseURL.'/brand/'.url_title($subcat_item['BrandName'],'-',TRUE) ?>" ><?php echo $subcat_item['BrandName'] ?></a></div>
    </div>
  </div>
  <div id="product_box_bottom">
    <div id="pricing">
      <div class="sale"> $<?php echo number_format($subcat_item['SalePrice'],2) ?> </div>
      <div class="reg">Reg. $<?php echo number_format($subcat_item['RetailPrice'],2) ?> </div>
    </div>
      <!-- buy button -->
      <a href="<?php echo $slug ?>" class="button small right" title="<?php echo $subcat_item['ProductName'] ?> Details">Details</a> </div>
  </div>
  <?php endforeach ?>
  <div style="clear:both;"></div>
  <?php //echo $this->pagination->create_links(); ?>
</div>