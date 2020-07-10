<?php //var_dump($query); ?>
<?php foreach ($products as $products_item): ?>

	<h2><?php echo $products_item['ProductName'] ?></h2>
    <div id="main">
    	<?php echo $products_item['LongDescription'] ?>
    </div>
    <?php $slug = 'products/detail'.'/'.$products_item['prodid'].'/'.url_title($products_item['ProductName'],'-',TRUE); ?>
		<p>SLUG = <?php echo $slug; ?></p>
        <p>id = <?php echo $prodid = $products_item['prodid']; ?></p>	
    <p><a href="<?php echo $slug ?>">View Product</a></p>
    <?php $slug = ''; ?>
    
<?php endforeach ?>
<?php echo $this->pagination->create_links(); ?>

