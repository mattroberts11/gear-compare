<?php $baseURL = base_url().'deals'; ?>

<p id="breadcrumbs"> <a href="<?php echo $baseURL ?>">Home</a><span class="sep">»</span><a href="<?php echo $baseURL.'/category/'.url_title($group['0']['Category'],'-', TRUE).'/?cat='.$group['0']['Category'].'&subcat='.$group['0']['SubCategory']; ?>"><?php echo $group['0']['Category'] ?></a><span class="sep">»</span><a href="<?php echo $baseURL.'/subcat/'.url_title($group['0']['Category'],'-', TRUE).'/'.url_title($group['0']['SubCategory'],'-', TRUE).'/?cat='.$group['0']['Category'].'&subcat='.$group['0']['SubCategory']; ?>"><?php echo $group['0']['SubCategory'] ?></a><span class="sep">»</span>&nbsp;&nbsp;<?php echo $group['0']['ProductGroup'] ?><span class="sep">»</span> </p>
<!-- LEFT NAV -->
<div id="prod_left">
  <div id="prod_left_head">
    <h3><?php echo $group['0']['SubCategory']; ?></h3>
  </div>
  <ul>
    <?php foreach ($left_nav as $left_nav_item): ?>
    <li> <a href="<?php echo $baseURL.'/group/'.url_title($left_nav_item['Category'],'-',TRUE).'/'.url_title($left_nav_item['SubCategory'],'-',TRUE).'/'.url_title($left_nav_item['ProductGroup'],'-',TRUE).'/?cat='.$left_nav_item['Category'].'&subcat='.$left_nav_item['SubCategory'].'&group='.$left_nav_item['ProductGroup'] ?>" > <?php echo $left_nav_item['ProductGroup'] ?></a> </li>
    <?php endforeach ?>
  </ul>
 
</div>
<!-- END LEFT NAV -->
<div id="prod_box_container">
  <h1><?php echo $group['0']['ProductGroup']; ?> On Sale</h1>
  <?php 
	 shuffle($group);
	 foreach ($group as $group_item): 
	 //do discount percentage math
	 $number = ($group_item['SalePrice'] / $group_item['RetailPrice']) * 100;
	 $number2 = 100 - $number;
	 $percentOff = number_format($number2, 0);
	 //create links
	 $slug = $baseURL.'/detail'.'/'.$group_item['SKU'].'/'.url_title($group_item['ProductName'],'-',TRUE); 
?>
  <div id="product_box">
    <div class="discountBox"><?php echo $percentOff; ?>% off!</div>
    <div id="product_box_image"><a href="<?php echo $slug ?>"> <img src="<?php echo $group_item['ImageURL'] ?>" height="160" width="160" border="0" alt="<?php echo $group_item['ProductName'] ?>"/> </a>
      <div id="product_box_name"><a href="<?php echo $slug ?>" ><?php echo $group_item['ProductName'] ?></a>
        <div class="brand">Brand: <a href="<?php echo $baseURL.'/brand/'.$group_item['BrandName'] ?>" ><?php echo $group_item['BrandName'] ?></a> </div>
      </div>
    </div>
    <div id="product_box_bottom">
      <div id="pricing">
        <div class="sale"> $<?php echo number_format($group_item['SalePrice'],2) ?> </div>
        <div class="reg">Reg. $<?php echo number_format($group_item['RetailPrice'],2) ?></div>
      </div>
      <!-- buy button -->
      <a href="<?php echo $slug ?>" class="button small right" title="<?php echo $group_item['ProductName'] ?> Details">Details</a> </div>
  </div>
  <?php endforeach ?>
  <div style="clear:both;"></div>
  <?php //echo $this->pagination->create_links(); ?>
</div>
