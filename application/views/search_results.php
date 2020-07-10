<?php $baseURL = base_url().'deals'; ?>
<p id="breadcrumbs"> <a href="<?php echo $baseURL ?>">Home</a><span class="sep">»</span>&nbsp;&nbsp;<?php echo 'Search' ?><span class="sep">»</span> </p>
<!-- LEFT NAV -->
<div id="prod_left">

  <div id="prod_left_box">
  <div id="prod_left_head"><h3>Main Categories</h3></div>
  <ul>
    <?php foreach ($main_cat_nav as $main_cat_nav_item): ?>
    <li> <a href="<?php echo $baseURL.'/category/'.url_title($main_cat_nav_item['Category'],'-',TRUE) ?>" > <?php echo $main_cat_nav_item['Category'] ?> </a> </li>
    <?php endforeach ?>
  </ul>
  </div>
  <span style="text-align:center"><a href="http://www.avantlink.com/click.php?tt=ml&amp;ti=85121&amp;pw=2986&amp;ctc=bcLftRail" target="_blank"><img src="http://www.avantlink.com/gbi/10060/85121/2336/2986/image.jpg?ctc=bcLftRail" width="150" height="140" style="border: 0px;" alt="" /></a></span>
  
</div>
<!-- END LEFT NAV -->
<div id="prod_box_container">
<h1>Search Results: <?php //echo ucwords($this->uri->segment(3)) ; ?></h1>
<div id="searchForm">
	<?php //$this->load->helper('form'); ?>
    <?php //echo form_open($this->uri->uri_string); ?>
    <?php //echo form_label('', 'search-box'); ?>
    <?php //echo form_input(array('name' => 'q', 'id' => 'search-box', 'value' => $search_terms)); ?>
    <?php //echo form_submit('search', 'Search'); ?>
    <?php //echo form_close(); ?>
 </div>
<?php if ( ! is_null($results)): ?>
    <?php if (count($results)): ?>
        <ul id="search">
        <?php foreach ($results as $result): ?>
        <?php
			//do discount percentage math
			$number = ($result->SalePrice / $result->RetailPrice) * 100;
			$number2 = 100 - $number;
			$percentOff = number_format($number2, 0);
		?>
            <li class="searchResult"><img src="<?php echo $result->ThumbURL;?>" height="60" width="60"  /><a href="<?php echo $baseURL.'/detail/'.$result->SKU.'/'.url_title($result->ProductName,'-',TRUE); ?>"><?php echo $result->ProductName; ?></a>
            <br />
            <span style="margin-left:65px; font-size:11px;"><span style="color:#666666;">Reg: $<?php echo number_format($result->RetailPrice,2); ?></span><span style="color:#336600"><strong>  Sale: $<?php echo number_format($result->SalePrice,2); ?></span>&nbsp;&nbsp; <span style="color:#FF0000;"><?php echo $percentOff ?>% off</strong></span></span>
            
            </li>
        <?php endforeach ?>
        </ul>
    <?php else: ?>
        <p><em>There are no results for your query.</em></p>
    <?php endif ?>
<?php endif ?>
<div style="clear:both;"></div>