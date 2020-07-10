<?php
//do discount percentage math
$number = ($products_item['SalePrice'] / $products_item['RetailPrice']) * 100;
$percentOff = number_format($number, 0);
?>

<div style="overflow: hidden; ">
  <div id="breadcrumbs">Breadcrumbs</div>
  <div style="clear: both; "> <br/>
      </div>
  <div style="float: left; ">
    <div style="width: 300px; text-align: center; padding: 20px; border: 1px solid rgb(224, 224, 224); ">
      <div style="position: absolute; background-color: red; color: rgb(255, 255, 255); padding: 7px; width: 50px; font-weight: bold; z-index: 2; background-position: initial initial; background-repeat: initial initial; "><?php echo $percentOff; ?>% off!</div>
      <?php echo '<img src="'.$products_item['ImageURL'].'"height="270" width="270" style="" border="0" alt="'.$products_item['ProductName'].'"/>'; ?>
      </div><br />
      <div style="width: 338px; border: 2px solid rgb(224, 224, 224); float: left; ">
        <div style="padding: 5px; background-color: rgb(224, 224, 224); background-position: initial initial; background-repeat: initial initial; "> <b>Related items from across the web</b> </div>
        <div style="padding: 8px; float: left; "> <strong>products here</strong> <br/>
        </div>
      
    </div>
  </div>
  <!-- start product info - main product info container -->
  <div style="float: left; width: 590px; font-size: 13px; margin-left: 15px; "> <?php echo '<h1>'.$products_item['ProductName'].'</h1>';?>
    <div style="padding: 10px 0px; ">
      <div style="float: left; ">
        <div style="float: left; "> <span style="color: red; font-size: 35px; font-weight: bold; "><?php echo $products_item['SalePrice'] ?></span> <span style="color: rgb(170, 170, 170); font-size: 30px; font-weight: bold; ">*</span> </div>
        <div style="float: left; margin: 5px 0px 20px 20px; font-size: 12px; "> Retail: <strong><?php echo $products_item['RetailPrice']?></strong> <br/>
          Discount: <strong><?php echo $percentOff; ?>% Off</strong> </div>
      </div>
      <div style="float: left; margin: 5px 0px 0px 20px; color: rgb(153, 153, 153); width: 300px; font-size: 11px; ">* This item is for sale at Altrec.com.</div>
      <div style="clear: both; "> <br/>
      </div>
      <div id="button-box"> <a href="<?php echo $products_item['BuyLink'] ?>" class="button" data-bitly-type="bitly_hover_card">View Deal at Altrec.com!</a> </div>
      <br/>
    </div>
    <br/>
    <h4>Description</h4>
    <?php echo '<p>'.$products_item['LongDescription'].'</p>'; ?>
    <h4>More <?php echo $products_item['ProductGroup'] ?> on GearCompare.com</h4>
    <?php echo '<p>This is Product ID = '.$products_item['prodid'].'</p>'; ?> </div>
</div>
<!-- main prod container -->
