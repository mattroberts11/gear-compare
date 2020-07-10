<?php $baseURL = base_url().'deals'; ?>

<p id="breadcrumbs"> <a href="<?php echo $baseURL ?>">Home</a><span class="sep">»</span>&nbsp;&nbsp;<?php echo $cat['0']['Category'] ?><span class="sep">»</span> </p>
<!-- LEFT NAV -->
<div id="prod_left">
<div id="prod_left_box">
  <div id="prod_left_head"><h3>Explore the <?php echo $cat['0']['Category'] ?> Category</h3></div>
  <ul>
    <?php foreach ($left_nav as $left_nav_item): ?>
    <li> <a href="<?php echo $baseURL.'/subcat/'.url_title($cat['0']['Category'],'-',TRUE).'/'.url_title($left_nav_item['SubCategory'],'-',TRUE).'/?cat='.$cat['0']['Category'].'&subcat='.$left_nav_item['SubCategory'] ?>" > <?php echo $left_nav_item['SubCategory'] ?>  
	<?php //product count
		$this->load->model('nav_model');
		$count = $this->nav_model->get_category_left_nav_count($cat['0']['Category'],$left_nav_item['SubCategory']);
		echo ' ('.$count.')';
	?></a>
	</li>
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
<h1>Gear Sale Category: <?php echo $cat['0']['Category']; ?> </h1>
<?php 
	//shuffle($cat); 
	echo $this->pagination->create_links();
	foreach ($cat as $cat_item): 
	//do discount percentage math
	$number = ($cat_item['SalePrice'] / $cat_item['RetailPrice']) * 100;
	$number2 = 100 - $number;
	$percentOff = number_format($number2, 0);
	//create links
	$slug = $baseURL.'/detail'.'/'.$cat_item['SKU'].'/'.url_title($cat_item['ProductName'],'-',TRUE); 
?>
<div id="product_box">
  <div class="discountBox"><?php echo $percentOff; ?>% off!</div>
  <div id="product_box_image"><a href="<?php echo $slug ?>" alt="<?php echo $cat_item['ProductName'] ?>"> <img src="<?php echo $cat_item['ImageURL'] ?>" height="160" width="160" border="0" alt="<?php echo $cat_item['ProductName'] ?>"/> </a>
    <div id="product_box_name"><a href="<?php echo $slug ?>" ><?php echo $cat_item['ProductName'] ?></a>
      <div class="brand">Brand: <a href="<?php echo $baseURL.'/brand/'.url_title($cat_item['BrandName'],'-',TRUE) ?>" alt="<?php echo $cat_item['BrandName']?>" ><?php echo $cat_item['BrandName'] ?></a> </div>
    </div>
  </div>
  <div id="product_box_bottom">
    <div id="pricing">
      <div class="sale"> $<?php echo number_format($cat_item['SalePrice'],2) ?></div>
      <div class="reg">Reg. $<?php echo number_format($cat_item['RetailPrice'],2) ?></div>
    </div>
    <!-- buy button -->
    <a href="<?php echo $slug ?>" class="button small right" title="<?php echo $cat_item['ProductName'] ?> Details">Details</a> </div>
</div>
<?php endforeach ?>
<div style="clear:both;"></div>
<?php echo $this->pagination->create_links(); ?>
