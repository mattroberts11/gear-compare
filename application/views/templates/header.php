<?php $baseURL = base_url().'deals'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" itemscope itemtype="http://schema.org/Product">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="msvalidate.01" content="5CF75F168A225ACE0C1DAD346ED5A62F" />
<!--google plus info below-->
<!--<meta itemprop="name" content="Title of your content">
<meta itemprop="description" content="This would be a description of the content your users are sharing">
<meta itemprop="image" content="imageurl">-->
<link REL="SHORTCUT ICON" HREF="/favicon.ico">
<title><?php echo $title ?></title>
<?php 
	$page = $this->uri->segment(2);
	if (!isset($page)){
 		echo '<meta name="description" content="'.$title.' and outdoor gear on sale. Compare prices on your favorite outdoor gear, outdoor gear coupons, discounts, sales and offers you won\'t find any place else! | GearCompare.com"/>';
 }else{
 	echo '<meta name="description" content="'.$title.'"/>';
 }
 
?>
<meta name="keywords" content="<?php echo $title; ?>, outdoor coupons, coupon codes, gear coupons, gear discount, discount on gear, deal a day, save on gear, outdoor gear, climbing coupon, skiing coupon, snowboard coupon, ski sale, outdoor sale"/>
<link href="<?php echo base_url(); ?>css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/www.gearcompare.com<?php echo $baseURL; ?>/css/grid.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet" type="text/css" media="screen" />
<!--<link href="<?php echo base_url(); ?>css/style5.css" rel="stylesheet" type="text/css" media="screen" />-->
<!--<link href="/www.gearcompare.com<?php echo base_url(); ?>/css/master.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/www.gearcompare.com<?php echo base_url(); ?>/css/dropdown.css" rel="stylesheet" type="text/css" media="screen" />-->
<script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/megamenu.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/jquery.vegas.js" type="text/javascript"></script>
<script type="text/javascript">
	
	
	// wait till the DOM is loaded
	$(document).ready(function() {
		
		   jQuery(".megamenu").megamenu();
		   
		   
		  //$( function() {
           //   $.vegas({
          //    src:'<?php //echo base_url(); ?>images/backgroundFall1.jpg'
          //    });
          //    $.vegas('overlay', {
          //      src:'<?php //echo base_url(); ?>overlays/02.png'
          //    });
          //  });
			
	}); 
	
	
	
</script>
<!--[if IE 6]>
<link href="/www.gearcompare.com/css/ie6.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="/www.gearcompare.com/js/pngfix.js"></script>
<script type="text/javascript">
	DD_belatedPNG.fix('h1#graphic a,span#graphic a,div.top,div.bot,');
</script>
<![endif]-->
<!--[if IE 7]>
<link href="/www.gearcompare.com/css/ie7.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 8]>
<link href="/www.gearcompare.com/css/ie8.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
<!--[if IE]>
<style type="text/css">
html.ie a.button,html.ie #breadcrumbs,html.ie a.more-link {behavior: url("/www.gearcompare.com/PIE.php");position: relative;}</style>
<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2396730-4']);
  _gaq.push(['_setDomainName', 'gearcompare.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--stumbleupon-->
<script type="text/javascript">
  (function() {
    var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;
    li.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//platform.stumbleupon.com/1/widgets.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);
  })();
</script>
<!--facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--google plus-->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</head>
<body>
<a name="top"></a>
<div id="wrapper">
<!-- BEGIN TOP NAV -->
<div id="topnav_wrap">
  <div class="topnav">
    <div class="menu-top-menu-container">
      <ul id="menu-top-menu" class="menu">
        <li id=menu-item-first menu-item-last "menu-item-105" class="twitter menu-item menu-item-type-custom menu-item-object-custom menu-item-105"> <a target="_blank" href="http://www.twitter.com/gearcompare">Twitter</a></li>
        <li id="menu-item-106" class="facebook menu-item menu-item-type-custom menu-item-object-custom menu-item-106"><a target="_blank" href="http://www.facebook.com/gearcomparedeals">Facebook</a></li>
        <li id="menu-item-196" class="rss menu-item menu-item-type-custom menu-item-object-custom menu-item-196"><a href="http://feeds.feedburner.com/GearCompare">RSS</a></li>
        <li id="menu-item-119" class="star menu-item menu-item-type-taxonomy menu-item-object-category menu-item-119"><a href="http://eepurl.com/nOBjP" target="_blank">FREE Newsletter!</a></li>
        <li id="menu-item-119" class="quiksilver menu-item menu-item-type-taxonomy menu-item-object-category menu-item-119"><a href="<?php echo $baseURL; ?>/quiksilver">Quiksilver Sales</a></li>
        <li id="menu-item-119" class="patagonia menu-item menu-item-type-taxonomy menu-item-object-category menu-item-119"><a href="<?php echo $baseURL; ?>/patagonia">Patagonia Sales</a></li>
      </ul>
    </div>
    <!-- <div id="nav_search">HERE</div> -->
  </div>
</div>
<!-- END TOP NAV -->
<!-- BEGIN HEADER -->
<div id="header_wrap">
  <div id="header" class="clearfix"><a href="http://www.gearcompare.com"> <img src="<?php echo site_url(); ?>/../images/gc_logoTransBG2.png" height="66" alt="GearCompare.com Outdoor Gear Deals"/></a>
    <div id="headerad">
      <!-- <script type="text/javascript" src="http://www.avantlink.com/link.php?ml=28933&amp;p=2336&amp;pw=2986&amp;ctc=headBnr&amp;open=_blank"></script> -->
      <div class="search">
        <form method="get" action="/deals/search/">
          <input type="text"  onclick="this.value=''" value="Search for gear deals!" name="q">
          <input type="submit" value="Search">
        </form>
        <div class="underSearchBoxText">Find The Deal Your Looking For!</div>
      </div>
    </div>
  </div>
</div>
<!-- END HEADER -->
<div class="menu">
  <div class="tab" style="width:140px;"><a href="<?php echo $baseURL; ?>" style="background:#33689c;color:#eee;">HOME</a></div>
  <div class="tab" style="width:140px;"><a href="<?php echo $baseURL; ?>/altrec" style="" title="Altrec.com Deals, Coupons and Sales">Altrec.com Deals</a></div>
  <div class="tab" style="width:170px;"><a href="<?php echo $baseURL; ?>/backcountry" style="" title="Backcountry.com Deals, Coupons and Sales">Backcountry.com Deals</a></div>
  <div class="tab" style="width:100px;"><a href="<?php echo $baseURL; ?>/rei" style="" title="REI Deals, Coupons and Sales">REI Deals</a></div>
  <div class="tab" style="width:150px;"><a href="<?php echo $baseURL; ?>/moosejaw" style="" title="Moosejaw.com Deals, Coupons and Sales">Moosejaw.com Deals</a></div>
  <div class="tab" style="width:152px;"><a href="<?php echo $baseURL; ?>/campsaver" style="" title="Campsaver.com Deals, Coupons and Sales">Campsaver.com Deals</a></div>
  <div class="tab" style="width:140px;border-right:1px solid #aaa;"><a href="http://thedeal.gearcompare.com" target="_blank" titel="Outdoor Gear Deals Blog">The Deal Blog</a></div>
</div>
<div style="clear:both"></div>
<div style="border-left: 1px solid #aaa;border-right: 1px solid #aaa;border-bottom: 1px solid #aaa;">
  <ul class="megamenu">
    <li style="width:120px;"> <a href="<?php echo $baseURL; ?>/category/mens-clothing" style="">Men's Clothing</a>
      <div style="width: 820px;z-index:100;float:left;background:#666;">
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/mens-clothing/mens-jackets/?cat=Men's Clothing&subcat=Men's Jackets">Men's Jackets</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-jackets/mens-fullzip-hoodies/?cat=Men's Clothing&subcat=Men's Jackets&group=Men's Full-Zip Hoodies">Full-Zip Hoodies</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-jackets/mens-rain-jackets/?cat=Men's Clothing&subcat=Men's Jackets&group=Men's Rain Jackets">Rain Jackets</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-jackets/mens-fleece-jackets/?cat=Men's Clothing&subcat=Men's Jackets&group=Men's Fleece Jackets">Fleece Jackets</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-jackets/mens-down-jackets/?cat=Men's Clothing&subcat=Men's Jackets&group=Men's Down Jackets">Down Jackets</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-jackets/mens-softshell-jackets/?cat=Men's Clothing&subcat=Men's Jackets&group=Men's Softshell Jackets">Softshell Jackets</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-jackets/mens-windshirts-and-jackets/?cat=Men's Clothing&subcat=Men's Jackets&group=Men's Windshirts and Jackets">Windshirts and Jackets</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/mens-clothing/mens-jackets/?cat=Men's Clothing&subcat=Men's Jackets" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/mens-clothing/mens-pants/?cat=Men's Clothing&subcat=Men's Pants">Men's Pants</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-pants/mens-ski-pants/?cat=Men's Clothing&subcat=Men's Pants&group=Men's Ski Pants">Ski Pants</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-pants/mens-snowboard-pants/?cat=Men's Clothing&subcat=Men's Pants&group=Men's Snowboard Pants">Snowboard Pants</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-pants/mens-casual-pants/?cat=Men's Clothing&subcat=Men's Pants&group=Men's Casual Pants">Casual Pants</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-pants/mens-hiking-and-climbing-pants/?cat=Men's Clothing&subcat=Men's Pants&group=Men's Hiking and Climbing Pants">Hiking/Climbing Pants</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-pants/mens-rain-pants/?cat=Men's Clothing&subcat=Men's Pants&group=Men's Rain Pants">Rain Pants</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-pants/mens-denim-pants/?cat=Men's Clothing&subcat=Men's Pants&group=Men's Denim Pants">Denim Pants</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-pants/mens-performance-tights/?cat=Men's Clothing&subcat=Men's Pants&group=Men's Performance Tights">Performance Tights</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/mens-clothing/mens-long-underwear/?cat=Men's Clothing&subcat=Men's Long Underwear">Men's Long Underwear</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/mens-clothing/mens-pants/?cat=Men's Clothing&subcat=Men's Pants" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/mens-clothing/mens-shirts/?cat=Men's Clothing&subcat=Men's Shirts">Men's Shirts</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-shirts/mens-tshirts-slim-fit/?cat=Men's Clothing&subcat=Men's Shirts&group=Men's T-Shirts - Slim Fit">T-Shirts - Slim Fit</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-shirts/mens-flannel-shirts/?cat=Men's Clothing&subcat=Men's Shirts&group=Men's Flannel Shirts">Flannel Shirts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-shirts/mens-polo-shirts/?cat=Men's Clothing&subcat=Men's Shirts&group=Men's Polo Shirts">Polo Shirts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-shirts/mens-performance-shirts-long-sleeve/?cat=Men's Clothing&subcat=Men's Shirts&group=Men's Performance Shirts - Long Sleeve">Performance Shirts</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/mens-clothing/mens-shirts/?cat=Men's Clothing&subcat=Men's Shirts" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/mens-clothing/mens-shorts/?cat=Men's Clothing&subcat=Men's Shorts">Men's Shorts</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-shorts/mens-casual-shorts/?cat=Men's Clothing&subcat=Men's Shorts&group=Men's Casual Shorts">Casual Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-shorts/mens-running-shorts/?cat=Men's Clothing&subcat=Men's Shorts&group=Men's Running Shorts">Running Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-shorts/mens-hiking-and-climbing-shorts/?cat=Men's Clothing&subcat=Men's Shorts&group=Men's Hiking and Climbing Shorts">Hiking/Climbing Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-shorts/mens-board-shorts/?cat=Men's Clothing&subcat=Men's Shorts&group=Men's Board Shorts">Board Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/bike/mens-shorts/mens-mountain-bike-shorts/?cat=Bike&subcat=Men's Shorts&group=Men's Mountain Bike Shorts">Mountain Bike Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/bike/mens-shorts/mens-cycling-shorts/?cat=Bike&subcat=Men's Shorts&group=Men's Cycling Shorts">Cycling Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/mens-clothing/mens-shorts/?cat=Men's Clothing&subcat=Men's Shorts" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/mens-clothing/mens-accessories/?cat=Men's Clothing&subcat=Men's Accessories">Other</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/subcat/mens-clothing/gloves/?cat=Men's Clothing&subcat=Gloves">Gloves</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/mens-clothing/hats/?cat=Men's Clothing&subcat=Hats">Hats</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/mens-cycling-jerseys/?cat=Bike&subcat=Men's Cycling Jerseys">Cycling Jerseys</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/mens-shorts/?cat=Bike&subcat=Men's Shorts">Cycling Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/mens-clothing/socks/?cat=Men's Clothing&subcat=Socks">Socks</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-accessories/belts/?cat=Men's Clothing&subcat=Men's Accessories&group=belts">Belts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/mens-accessories/mens-wallets/?cat=Men's Clothing&subcat=Men's Accessories&group=Men's Wallets">Men's Wallets</a><br/>
            <a href="<?php echo $baseURL; ?>/category/mens-clothing/mens-accessories/?cat=Men's Clothing&subcat=Men's Accessories" class="more">More...</a></p>
        </div>
      </div>
    </li>
    <li style="width:140px;"> <a href="<?php echo $baseURL; ?>/category/womens-clothing" style="">Women's Clothing</a>
      <div style="width: 790px;z-index:100;background:#666;">
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/womens-clothing/womens-jackets/?cat=Women's Clothing&subcat=Women's Jackets">Women's Jackets</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-jackets/womens-fleece-jackets/?cat=Women's Clothing&subcat=Women's Jackets&group=Women's Fleece Jackets">Fleece Jackets</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-jackets/womens-down-jackets/?cat=Women's Clothing&subcat=Women's Jackets&group=Women's Down Jackets">Down Jackets</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-jackets/womens-snowboard-jackets/?cat=Women's Clothing&subcat=Women's Jackets&group=Women's Snowboard Jackets">Snowboard Jackets</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-jackets/womens-softshell-jackets/?cat=Women's Clothing&subcat=Women's Jackets&group=Women's Softshell Jackets">Softshell Jackets</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-jackets/womens-casual-jackets/?cat=Women's Clothing&subcat=Women's Jackets&group=Women's Casual Jackets">Casual Jackets</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/womens-clothing/womens-jackets/?cat=Women's Clothing&subcat=Women's Jackets" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/womens-clothing/womens-shirts/?cat=Women's Clothing&subcat=Women's Shirts">Women's Shirts</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-shirts/womens-tshirts-longsleeve/?cat=Women's Clothing&subcat=Women's Shirts&group=Women's T-Shirts - Long-Sleeve">T-Shirts - Long-Sleeve</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-shirts/womens-tshirts-shortsleeve/?cat=Women's Clothing&subcat=Women's Shirts&group=Women's T-Shirts - Short-Sleeve">T-Shirts - Short-Sleeve</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-shirts/womens-casual-shirts-long-sleeve/?cat=Women's Clothing&subcat=Women's Shirts&group=Women's Casual Shirts- Long-Sleeve">Casual Shirts- Long-Sleeve</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-shirts/womens-casual-shirts-short-sleeve/?cat=Women's Clothing&subcat=Women's Shirts&group=Women's Casual Shirts - Short-Sleeve">Casual Shirts - Short-Sleeve</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-shirts/womens-casual-tank-tops/?cat=Women's Clothing&subcat=Women's Shirts&group=Women's Casual Tank Tops">Casual Tank Tops</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/womens-clothing/womens-shirts/?cat=Women's Clothing&subcat=Women's Shirts" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/womens-clothing/womens-shorts/?cat=Women's Clothing&subcat=Women's Shorts">Women's Shorts</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-shorts/womens-casual-shorts/?cat=Women's Clothing&subcat=Women's Shorts&group=Women's Casual Shorts">Casual Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/trail-run/womens-shorts/?cat=Trail Run&subcat=Women's Shorts">Running Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-dresses-and-skirts/?cat=Women's%20Clothing&subcat=Women's%20Dresses%20and%20Skirts&group=Casual%20Skirts">Skirts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/bike/womens-shorts/womens-cycling-shorts/?cat=Bike&subcat=Women's Shorts&group=Women's Cycling Shorts">Cycling Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-shorts/womens-board-shorts/?cat=Women's Clothing&subcat=Women's Shorts&group=Women's Yoga Shorts">Yoga Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-shorts/womens-hiking-and-climbing-shorts/?cat=Women's Clothing&subcat=Women's Shorts&group=Women's Hiking and Climbing Shorts">Hiking/Climbing Shorts</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/bike/womens-shorts/womens-mountain-bike-shorts">Mountain Bike Shorts</a><br/>-->
            <a href="<?php echo $baseURL; ?>/subcat/womens-clothing/womens-shorts/?cat=Women's Clothing&subcat=Women's Shorts" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/womens-clothing/womens-pants/?cat=Women's Clothing&subcat=Women's Pants&group=Women's">Women's Pants</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-pants/womens-ski-pants/?cat=Women's Clothing&subcat=Women's Pants&group=Women's Ski Pants">Ski Pants</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-pants/womens-snowboard-pants/?cat=Women's Clothing&subcat=Women's Pants&group=Women's Snowboard Pants">Snowboard Pants</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-pants/womens-casual-pants/?cat=Women's Clothing&subcat=Women's Pants&group=Women's Casual Pants">Casual Pants</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-pants/womens-yoga-pants/?cat=Women's Clothing&subcat=Women's Pants&group=Women's Yoga Pants">Women'sYoga Pants</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-pants/womens-softshell-pants/?cat=Women's Clothing&subcat=Women's Pants&group=Women's Softshell Pants">Softshell Pants</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-pants/womens-hiking-pants/?cat=Women's Clothing&subcat=Women's Pants&group=Women's Hiking Pants">Hiking Pants</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-pants/womens-capri-pants">Capri Pants</a><br/>-->
            <a href="<?php echo $baseURL; ?>/subcat/womens-clothing/womens-pants/?cat=Women's Clothing&subcat=Women's Pants" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/womens-clothing/womens-swimwear/?cat=Women's Clothing&subcat=Women's Swimwear">Women's Swimwear</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-swimwear/bikini-tops/?cat=Women's Clothing&subcat=Women's Swimwear&group=Bikini Tops">Bikini Tops</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-swimwear/bikini-bottoms/?cat=Women's Clothing&subcat=Women's Swimwear&group=Bikini Bottoms">Bikini Bottoms</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-swimwear/onepiece-swim-suits/?cat=Women's Clothing&subcat=Women's Swimwear&group=One-piece Swim Suits">One-piece Swim Suits</a><br/>
            <a href="<?php echo $baseURL; ?>/group/womens-clothing/womens-swimwear/swimwear-sets/?cat=Women's Clothing&subcat=Women's Swimwear&group=Swimwear Sets">Swimwear Sets</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/womens-clothing/womens-swimwear/?cat=Women's Clothing&subcat=Women's Swimwear" class="more">More...</a></p>
        </div>
      </div>
    </li>
    <!-- ****** BIKE ****** -->
    <li style="width:75px;"> <a href="<?php echo $baseURL; ?>/category/bike" style="">Bike</a>
      <div style="width: 810px;z-index:100;background:#666;">
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/category/bike">Men's Cycling Clothing</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/bike/mens-cycling-jerseys/mens-cycling-jerseys-shortsleeve/?cat=Bike&subcat=Men's Cycling Jerseys&group=Men's Cycling Jerseys - Short-Sleeve">Men's Cycling Jerseys - Short-Sleeve</a><br/>
            <a href="<?php echo $baseURL; ?>/group/bike/mens-cycling-jerseys/mens-cycling-jerseys-longsleeve/?cat=Bike&subcat=Men's Cycling Jerseys&group=Men's Cycling Jerseys - Long-Sleeve">Men's Cycling Jerseys - Long-Sleeve</a><br/>
            <a href="<?php echo $baseURL; ?>/group/bike/mens-shorts/mens-mountain-bike-shorts/?cat=Bike&subcat=Men's Shorts&group=Men's Mountain Bike Shorts">Men's Mountain Bike Shorts</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/bike/mens-shirts/mens-cycling-tshirts/?cat=Bike&subcat=Men's Shirts&group=Men's Cycling Jerseys - Short Sleeve">Men's Cycling T-Shirts</a><br/>-->
            <a href="<?php echo $baseURL; ?>/subcat/bike/socks/bike-socks/?cat=Bike&subcat=Socks&group=Bike Socks">Bike Socks</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/mens-bike-shoes/?cat=Bike&subcat=Men's Bike Shoes">Men's Bike Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/category/bike" class="more">More...</a></p>
          <h3><a href="<?php echo $baseURL; ?>/subcat/bike/womens-shirts/?cat=Bike&subcat=Women's Shirts">Women's Cycling Clothing</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/subcat/bike/womens-cycling-jerseys/?cat=Bike&subcat=Women's Cycling Jerseys">Women's Cycling Jerseys</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/bike/womens-cycling-jerseys/womens-cycling-jerseys-sleeveless">Women's Cycling Jerseys - Sleeveless</a><br/>-->
            <a href="<?php echo $baseURL; ?>/group/bike/womens-shorts/womens-cycling-shorts/?cat=Bike&subcat=Women's Shorts&group=Women's Cycling Shorts">Women's Cycling Shorts</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/womens-jackets/?cat=Bike&subcat=Women's Jackets">Women's Cycling Jackets</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/bike/womens-cycling-jerseys/womens-cycling-jerseys-long-sleeve">Women's Cycling Jerseys - Long Sleeve</a><br/>-->
            <a href="<?php echo $baseURL; ?>/category/bike" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/bike/bike-helmets-protection/?cat=Bike&subcat=Bike Helmets">Bike Helmets &amp; Protection</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/bike/bike-helmets-protection/body-armor/?cat=Bike&subcat=Bike Helmets&group=Body Armor">Body Armor</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/bike-helmets-protection/?cat=Bike&subcat=Bike Helmets">Full-Face Helmets</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/bike-helmets-protection/?cat=Bike&subcat=Bike Helmets">Mountain Bike Helmets</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/bike-helmets-protection/?cat=Bike&subcat=Bike Helmets">Road Bike Helmets</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/bike-helmets-protection/?cat=Bike&subcat=Bike Helmets" class="more">More...</a></p>
          <h3><a href="<?php echo $baseURL; ?>/subcat/bike/?cat=Bike&subcat=Bike Tools">Bike Accessories</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/subcat/bike/bike-electronics-lighting/?cat=Bike&subcat=Bike Electronics & Lighting">Bike Electronics &amp; Lighting</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/subcat/bike/bags-bike-cases/?cat=Bike&subcat=Bike Tools">Bags &amp; Bike Cases</a><br/>-->
            <a href="<?php echo $baseURL; ?>/subcat/bike/bike-tools/?cat=Bike&subcat=Bike Tools">Bike Tools</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/bike-locks/?cat=Bike&subcat=Bike Locks">Bike Locks</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/bike-pumps-inflation/?cat=Bike&subcat=Bike Pumps & Inflation">Bike Pumps &amp; Inflation</a><br/>
            <a href="<?php echo $baseURL; ?>/category/bike" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/bike/complete-bikes/?cat=Bike&subcat=Complete Bikes">Complete Bikes</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/bike/complete-bikes/downhill-freeride-bikes/?cat=Bike&subcat=Complete Bikes&group=Road Bikes">Road Bikes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/bike/complete-bikes/all-mountain-trail-bikes/?cat=Bike&subcat=Complete Bikes&group=All-Mountain & Trail Bikes">All-Mountain &amp; Trail Bikes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/bike/complete-bikes/downhill-freeride-bikes/?cat=Bike&subcat=Complete Bikes&group=Downhill & Freeride Bikes">Downhill & Freeride Bikes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/bike/complete-bikes/hardtail-xc-bikes/?cat=Bike&subcat=Complete Bikes&group=Hardtail XC Bikes">Hardtail XC Bikes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/bike/complete-bikes/full-suspension-xc-bikes/?cat=Bike&subcat=Complete Bikes&group=Full-Suspension XC Bikes">Full-Suspension XC Bikes</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/complete-bikes/?cat=Bike&subcat=Complete Bikes" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/category/bike">Bike Parts</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/subcat/bike/forks/?cat=Bike&subcat=Forks">Forks</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/handlebars-stems/?cat=Bike&subcat=Handlebars">Handlebars &amp; Stems</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/tires-tubes/?cat=Bike&subcat=Tires">Tires &amp; Tubes</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/saddles-seatposts/?cat=Bike&subcat=Saddles">Saddles &amp; Seatposts</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/brakes/?cat=Bike&subcat=Brakes">Brakes</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/wheel-parts-accessories/?cat=Bike&subcat=Wheel Parts">Wheel Parts &amp; Accessories</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/wheels-wheelsets/?cat=Bike&subcat=Wheels">Wheels &amp; Wheelsets</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/bike/forks">Forks</a><br/>-->
            <a href="<?php echo $baseURL; ?>/subcat/bike/pedals/?cat=Bike&subcat=Pedals">Pedals</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/bike/headsets/?cat=Bike&subcat=Headsets">Headsets</a><br/>
            <a href="<?php echo $baseURL; ?>/category/bike" class="more">More...</a></p>
        </div>
      </div>
    </li>
    <li style="width:105px;"> <a href="<?php echo $baseURL; ?>/category/hiking-camping-gear" style="">Hike/Camp</a>
      <div style="width: 860px;z-index:100;background:#666;">
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/sleeping-bags/?cat=Hiking & Camping Gear&subcat=Sleeping Bags">Sleeping Bags</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sleeping-bags/55-to-30-degree-down-bags/?cat=Hiking & Camping Gear&subcat=Sleeping Bags&group=55 to 30 Degree Down Bags">55 to 30 Degree Down Bags</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sleeping-bags/55-to-30-degree-synthetic-bags/?cat=Hiking & Camping Gear&subcat=Sleeping Bags&group=55 to 30 Degree Synthetic Bags">55 to 30 Degree Synthetic Bags</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sleeping-bags/25-to-5-degree-synthetic-bags/?cat=Hiking & Camping Gear&subcat=Sleeping Bags&group=25 to 5 Degree Synthetic Bags">25 to 5 Degree Synthetic Bags</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sleeping-bags/25-to-5-degree-synthetic-bags/?cat=Hiking & Camping Gear&subcat=Sleeping Bags&group=25 to 5 Degree Down Bags">25 to 5 Degree Down Bags</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sleeping-bags/25-to-5-degree-synthetic-bags/?cat=Hiking & Camping Gear&subcat=Sleeping Bags&group=0 to -40 Degree Synthetic Bags">0 to -40 Degree Synthetic Bags</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sleeping-bags/25-to-5-degree-synthetic-bags/?cat=Hiking & Camping Gear&subcat=Sleeping Bags&group=0 to -40 Degree Down Bags">0 to -40 Degree Down Bags</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sleeping-bags/stuff-and-compression-sacks/?cat=Hiking & Camping Gear&subcat=Sleeping Bags&group=Stuff and Compression Sacks">Stuff and Compression Sacks</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/sleeping-pads/?cat=Hiking & Camping Gear&subcat=Sleeping Pads">Sleeping Pads</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sleeping-bags/sleeping-bag-liners/?cat=Hiking & Camping Gear&subcat=Sleeping Bags&group=">Sleeping Bag Liners</a><br/>-->
            <a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/sleeping-bags/?cat=Hiking & Camping Gear&subcat=Sleeping Bags" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/tents/?cat=Hiking & Camping Gear&subcat=Tents">Tents</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/tents/3season-tents/?cat=Hiking & Camping Gear&subcat=Tents&group=3-Season Tents">3-Season Tents</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/tents/4season-tents/?cat=Hiking & Camping Gear&subcat=Tents&group=4-Season Tents">4-Season Tents</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/tents/solo-tents/?cat=Hiking & Camping Gear&subcat=Tents&group=Family Camping Tents">Family Camping Tents</a><br/>-->
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/tents/bivy-sacks/?cat=Hiking & Camping Gear&subcat=Tents&group=Bivy Sacks">Bivy Sacks</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/tents/footprints/?cat=Hiking & Camping Gear&subcat=Tents&group=Footprints">Footprints</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/tents/?cat=Hiking & Camping Gear&subcat=Tents" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/backpacks/?cat=Hiking & Camping Gear&subcat=Backpacks">Backpacks</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/backpacks/school-backpacks/?cat=Hiking & Camping Gear&subcat=Backpacks&group=School Backpacks">School Backpacks</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/backpacks/daypacks/?cat=Hiking & Camping Gear&subcat=Backpacks&group=Daypacks">Daypacks</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/backpacks/daypacks-technical/?cat=Hiking & Camping Gear&subcat=Backpacks&group=Winter Packs">Winter Packs</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/backpacks/laptop-packs-and-bags/?cat=Hiking & Camping Gear&subcat=Backpacks&group=Laptop Packs and Bags">Laptop Packs and Bags</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/backpacks/expedition-packs-5000-cu-in/?cat=Hiking & Camping Gear&subcat=Backpacks&group=Expedition Packs (5000+ cu in)">Expedition Packs (5000+ cu in)</a><br/>-->
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/backpacks/hydration-packs-small/?cat=Hiking & Camping Gear&subcat=Backpacks&group=Overnight Backpacks (2000 - 2999 cu in)">Overnight Backpacks (2000 - 2999 cu in)</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/backpacks/hydration-packs-large/?cat=Hiking & Camping Gear&subcat=Backpacks&group=Weekend Packs (3000-4500 cu in)">Weekend Packs (3000-4500 cu in)</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/backpacks/hydration-packs-large/?cat=Hiking & Camping Gear&subcat=Backpacks&group=Weeklong Packs (Over 4500 cu in)">Weeklong Packs (Over 4500 cu in)</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/backpacks/?cat=Hiking & Camping Gear&subcat=Backpacks" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/sunglasses/?cat=Hiking & Camping Gear&subcat=Sunglasses">Sunglasses</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sunglasses/lifestyle-sunglasses/?cat=Hiking & Camping Gear&subcat=Sunglasses&group=Lifestyle Sunglasses">Lifestyle Sunglasses</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sunglasses/polarized-lifestyle-sunglasses/?cat=Hiking & Camping Gear&subcat=Sunglasses&group=Polarized Lifestyle Sunglasses">Polarized Lifestyle Sunglasses</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sunglasses/womens-sunglasses/?cat=Hiking & Camping Gear&subcat=Sunglasses&group=Women's Sunglasses">Women's Sunglasses</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sunglasses/polarized-sport-sunglasses/?cat=Hiking & Camping Gear&subcat=Sunglasses&group=Polarized Sport Sunglasses">Polarized Sport Sunglasses</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sunglasses/polarized-interchangeable-sunglasses/?cat=Hiking & Camping Gear&subcat=Sunglasses&group=Polarized Interchangeable Sunglasses">Polarized Interchangeable Sunglasses</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sunglasses/polarized-sport-sunglasses/?cat=Hiking & Camping Gear&subcat=Sunglasses&group=Sport Sunglasses">Sport Sunglasses</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/sunglasses/womens-polarized-sunglasses/?cat=Hiking & Camping Gear&subcat=Sunglasses&group=Women's Polarized Sunglasses">Women's Polarized Sunglasses</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/sunglasses/?cat=Hiking & Camping Gear&subcat=Sunglasses" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3>Hike/Camp Other</h3>
          <p><a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/lighting/?cat=Hiking & Camping Gear&subcat=Lighting">Lighting</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/lighting/?cat=Hiking & Camping Gear&subcat=Stoves">Stoves</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/cookware/?cat=Hiking & Camping Gear&subcat=Cookware">Cookware</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/summer-accessories/trekking-poles/?cat=Hiking & Camping Gear&subcat=Summer Accessories&group=Trekking Poles">Trekking Poles</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/camping-furniture/?cat=Hiking & Camping Gear&subcat=Camping Furniture">Camping Furniture</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/watches/?cat=Hiking & Camping Gear&subcat=Watches">Watches</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/summer-accessories/water-bottles/?cat=Hiking & Camping Gear&subcat=Summer Accessories&group=Water Bottles">Water Bottles</a><br/>
            <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/summer-accessories/knives/?cat=Hiking & Camping Gear&subcat=Summer Accessories&group=Knives">Knives</a><br/>
          </p>
        </div>
      </div>
    </li>
    <li> <a href="<?php echo $baseURL; ?>/category/shoes" style="">Shoes</a>
      <div style="width: 420px;z-index:100;background:#666;">
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/shoes/mens-footwear/?cat=Shoes&subcat=Men's Footwear">Men's Footwear</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/shoes/mens-footwear/mens-casual-shoes/?cat=Shoes&subcat=Men's Footwear&group=Men's Casual Shoes">Men's Casual Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/mens-footwear/mens-skate-shoes/?cat=Shoes&subcat=Men's Footwear&group=Men's Skate Shoes">Men's Skate Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/mens-footwear/mens-winter-boots-and-shoes/?cat=Shoes&subcat=Men's Footwear&group=Men's Winter Boots and Shoes">Men's Winter Boots and Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/mens-footwear/mens-trail-run-shoes/?cat=Shoes&subcat=Men's Footwear&group=Men's Trail Run Shoes">Men's Trail Run Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/mens-footwear/mens-hiking-shoes/?cat=Shoes&subcat=Men's Footwear&group=Men's Hiking Shoes">Men's Hiking Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/mens-footwear/mens-backpacking-boots/?cat=Shoes&subcat=Men's Footwear&group=Men's Backpacking Boots">Men's Backpacking Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/mens-footwear/mens-approach-shoes/?cat=Shoes&subcat=Men's Footwear&group=Men's Hiking Shoes">Men's Hiking Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/mens-footwear/mens-approach-shoes/?cat=Shoes&subcat=Men's Footwear&group=Men's Hiking Boots">Men's Hiking Boots</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/climb/mens-footwear/?cat=Climb&subcat=Men's Footwear&group=Men's Mountaineering Boots">Men's Mountaineering Boots</a><br/>-->
            <a href="<?php echo $baseURL; ?>/group/climb/mens-footwear/?cat=Climb&subcat=Men's Footwear&group=Men's Approach Shoes">Men's Approach Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/climb/rock-climbing-shoes/?cat=Climb&subcat=Rock Climbing Shoes">Rock Climbing Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/shoes/mens-footwear/?cat=Shoes&subcat=Men's Footwear" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/shoes/womens-footwear/?cat=Shoes&subcat=Women's Footwear&group=">Women's Footwear</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/shoes/womens-footwear/womens-winter-boots-and-shoes/?cat=Shoes&subcat=Women's Footwear&group=Women's Winter Boots and Shoes">Women's Winter Boots and Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/womens-footwear/womens-apres-boots/?cat=Shoes&subcat=Women's Footwear&group=Women's Casual Boots">Women's Casual Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/womens-footwear/womens-trail-run-shoes/?cat=Shoes&subcat=Women's Footwear&group=Women's Trail Run Shoes">Women's Trail Run Shoes</a><br/>
            <br />
            <a href="<?php echo $baseURL; ?>/group/shoes/womens-footwear/womens-trail-run-shoes/?cat=Shoes&subcat=Women's Footwear&group=Women's Running Shoes">Women's Running Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/womens-footwear/womens-casual-shoes/?cat=Shoes&subcat=Women's Footwear&group=Women's Casual Shoes">Women's Casual Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/womens-footwear/womens-hiking-shoes/?cat=Shoes&subcat=Women's Footwear&group=Women's Hiking Shoes">Women's Hiking Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/womens-footwear/womens-hiking-boots/?cat=Shoes&subcat=Women's Footwear&group=Women's Hiking Boots">Women's Hiking Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/womens-footwear/womens-clogs/?cat=Shoes&subcat=Women's Footwear&group=Women's Clogs">Women's Clogs</a><br/>
            <a href="<?php echo $baseURL; ?>/group/shoes/womens-footwear/womens-flip-flops/?cat=Shoes&subcat=Women's Footwear&group=Women's Flip Flops">Women's Flip Flops</a><br/>
            <a href="<?php echo $baseURL; ?>/group/climb/rock-climbing-shoes/?cat=Climb&subcat=Rock Climbing Shoes&group=Women's Climbing Shoes">Women's Climbing Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/shoes/womens-footwear/?cat=Shoes&subcat=Women's Footwear" class="more">More...</a></p>
        </div>
      </div>
    </li>
    <li style="width:95px;"><a href="<?php echo $baseURL; ?>/category/climb" style="">Climb</a>
      <div style="width: 300px;z-index:100;background:#666;">
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/category/climb">Climbing Gear</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/subcat/climb/rock-climbing-shoes/?cat=Climb&subcat=Rock Climbing Shoes">Rock Climbing Shoes</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/climb/climbing-accessories-and-training/?cat=Climb&subcat=Climbing Accessories and Training">Climbing Accessories and Training</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/climb/climbing-packs-and-bags/?cat=Climb&subcat=Backpacks">Climbing Packs and Bags</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/climb/climbing-packs-and-bags/?cat=Climb&subcat=Carabiners">Carabiners</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/climb/mountaineering/?cat=Climb&subcat=Mountaineering">Mountaineering</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/climb/mountaineering/?cat=Climb&subcat=Ice Climbing">Ice Climbing</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/climb/harnesses-and-climbing-helmets/?cat=Climb&subcat=Harnesses and Climbing Helmets">Harnesses and Climbing Helmets</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/climb/climbing-ropes-and-bouldering-pads/?cat=Climb&subcat=Climbing Ropes and Bouldering Pads">Climbing Ropes and Bouldering Pads</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/climb/mountaineering/?cat=Climb&subcat=Men's Footwear">Men's Climbing Footwear</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/climb/mountaineering/?cat=Climb&subcat=Women's Footwear">Women's Climbing Footwear</a><br/>
            <a href="<?php echo $baseURL; ?>/category/climb" class="more">More...</a></p>
        </div>
      </div>
    </li>
    <!-- ****** SKI ****** -->
    <li style="width:75px;"> <a href="<?php echo $baseURL; ?>/category/ski" style="">Ski</a>
      <div style="width: 780px;z-index:100;background:#666;">
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/ski/alpine-skiing/?cat=Ski&subcat=Alpine Skiing">Alpine Skiing</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/mens-ski-boots/?cat=Ski&subcat=Alpine Skiing&group=Men's Ski Boots">Men's Ski Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/womens-ski-boots/?cat=Ski&subcat=Alpine Skiing&group=Women's Ski Boots">Women's Ski Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/ski-poles/?cat=Ski&subcat=Alpine Skiing&group=Ski Poles">Ski Poles</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/alpine-fat-skis/?cat=Ski&subcat=Alpine Skiing&group=Alpine Fat Skis">Alpine Fat Skis</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/all-mountain-skis/?cat=Ski&subcat=Alpine Skiing&group=All Mountain Skis">All Mountain Skis</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/alpine-park-and-pipe-skis/?cat=Ski&subcat=Alpine Skiing&group=Alpine Park and Pipe Skis ">Alpine Park and Pipe Skis</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/alpine-ski-bindings/?cat=Ski&subcat=Alpine Skiing&group=Alpine Ski Bindings">Alpine Ski Bindings</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/ski/alpine-skiing/?cat=Ski&subcat=Alpine Skiing" class="more">More...</a></p>
          <h3><a href="<?php echo $baseURL; ?>/group/ski/snowboard-accessories/helmets?cat=Ski&subcat=Snowboard Accessories&group=Helmets">Ski Helments</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/ski/snowboard-accessories/helmets?cat=Ski&subcat=Snowboard Accessories&group=Helmets">Helmets</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/snowboard-accessories/helmet-audio-accessories/?cat=Ski&subcat=Snowboard Accessories&group=Helmet Audio Accessories">Helmet Audio</a><br/>
          </p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/category/ski">Skis</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/alpine-fat-skis/?cat=Ski&subcat=Alpine Skiing&group=Alpine Fat Skis">Alpine Fat Skis</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/alpine-park-and-pipe-skis/?cat=Ski&subcat=Alpine Skiing&group=Alpine Park and Pipe Skis">Alpine Park and Pipe Skis</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/big-mountain-freeride-skis/?cat=Ski&subcat=Alpine Skiing&group=Big Mountain Freeride Skis">Big Mountain Freeride Skis</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/womens-park-and-pipe-skis/?cat=Ski&subcat=Alpine Skiing&group=Women's Park and Pipe Skis">Women's Park and Pipe Skis</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/womens-fat-skis/?cat=Ski&subcat=Alpine Skiing&group=Women's Fat Skis">Women's Fat Skis</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/kids-alpine-skis-ski-bindings-ski-poles">Kids' Alpine Skis - Ski Bindings - Ski Poles</a><br/>-->
            <a href="<?php echo $baseURL; ?>/category/ski/alpine-skiing/?cat=Ski&subcat=Alpine Skiing" class="more">More...</a></p>
          <h3><a href="<?php echo $baseURL; ?>/group/ski/goggles-and-accessories/goggles?cat=Ski&subcat=Goggles And Accessories&group=Goggles">Goggles</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/ski/goggles-and-accessories/goggles?cat=Ski&subcat=Goggles And Accessories&group=Goggles">Ski Goggles</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/goggles-and-accessories/goggles?cat=Ski&subcat=Goggles And Accessories&group=Goggle Replacement Lenses">Goggle Replacement Lenses</a><br/>
          </p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/mens-ski-boots/?cat=Ski&subcat=Alpine Skiing&group=Men's Ski Boots">Ski Boots</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/mens-ski-boots/?cat=Ski&subcat=Alpine Skiing&group=Men's Ski Boots">Men's Ski Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/womens-ski-boots/?cat=Ski&subcat=Alpine Skiing&group=Women's Ski Boots">Women's Ski Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/telemark-skiing/telemark-ski-boots/?cat=Ski&subcat=Telemark Skiing&group=Telemark Ski Boots">Telemark Ski Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/cross-country-skiing/classic-boots/?cat=Ski&subcat=Cross Country Skiing&group=Classic Boots">Classic Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/cross-country-skiing/skate-boots/?cat=Ski&subcat=Cross Country Skiing&group=Skate Boots">Skate Boots</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/ski/alpine-skiing/kids-ski-boots">Kids' Ski Boots</a><br/>-->
            <a href="<?php echo $baseURL; ?>/category/ski/alpine-skiing/?cat=Ski&subcat=Alpine Skiing" class="more">More...</a></p>
          <div style="float:left;padding:10px;">
            <h3><a href="<?php echo $baseURL; ?>/subcat/ski/avalanche-safety/?cat=Ski&subcat=Avalanche Safety">Avalanche Safety</a></h3>
            <p> <a href="<?php echo $baseURL; ?>/group/hiking-camping-gear/backpacks/winter-packs/?cat=Hiking And Camping Gear&subcat=Backpacks&group=Winter Packs">Winter Packs</a><br/>
              <a href="<?php echo $baseURL; ?>/group/ski/avalanche-safety/shovels/?cat=Ski&subcat=Avalanche Safety&group=Shovels">Shovels</a><br/>
              <a href="<?php echo $baseURL; ?>/group/ski/telemark-skiing/climbing-skins/?cat=Ski&subcat=Telemark Skiing&group=Climbing Skins">Climbing Skins</a><br/>
              <a href="<?php echo $baseURL; ?>/subcat/ski/avalanche-safety/?cat=Ski&subcat=Avalanche Safety" class="more">More...</a></p>
          </div>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/ski/telemark-skiing/?cat=Ski&subcat=Telemark Skiing">Telemark Skiing</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/ski/telemark-skiing/telemark-skis-and-alpine-touring-skis/?cat=Ski&subcat=Telemark Skiing&group=Telemark Skis and Alpine Touring Skis">Telemark Skis and Alpine Touring Skis</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/telemark-skiing/telemark-and-alpine-touring-skis-womens/?cat=Ski&subcat=Telemark Skiing&group=Telemark and Alpine Touring Skis - Women's">Telemark and Alpine Touring Skis - Women's</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/telemark-skiing/telemark-ski-boots/?cat=Ski&subcat=Telemark Skiing&group=Telemark Ski Boots">Telemark Ski Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/telemark-skiing/climbing-skins/?cat=Ski&subcat=Telemark Skiing&group=Climbing Skins">Climbing Skins</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/ski/telemark-skiing/?cat=Ski&subcat=Telemark Skiing" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/ski/cross-country-skiing/?cat=Ski&subcat=Cross Country Skiing">Cross Country Skiing</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/ski/cross-country-skiing/touringbackcountry-ski-boots/?cat=Ski&subcat=Cross Country Skiing&group=Touring/Backcountry Ski Boots">Touring/Backcountry Ski Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/cross-country-skiing/touringbackcountry-skis/?cat=Ski&subcat=Cross Country Skiing&group=Touring/Backcountry Skis">Touring/Backcountry Skis</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/cross-country-skiing/skate-boots/?cat=Ski&subcat=Cross Country Skiing&group=Skate Boots">Skate Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/ski/cross-country-skiing/?cat=Ski&subcat=Cross Country Skiing" class="more">More...</a></p>
        </div>
      </div>
    </li>
    <li style="width:95px;"> <a href="<?php echo $baseURL; ?>/category/snowboard" style="">Snowboard</a>
      <div style="width: 850px;z-index:100;background:#666;">
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/snowboard/snowboards/?cat=Snowboard&subcat=Snowboards">Snowboards</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/snowboard/snowboards/freestyle-snowboards/?cat=Snowboard&subcat=Snowboards&group=Freestyle Snowboards">Freestyle Snowboards</a><br/>
            <a href="<?php echo $baseURL; ?>/group/snowboard/snowboards/powder-snowboards/?cat=Snowboard&subcat=Snowboards&group=Powder Snowboards">Powder Snowboards</a><br/>
            <a href="<?php echo $baseURL; ?>/group/snowboard/snowboards/wide-snowboards/?cat=Snowboard&subcat=Snowboards&group=Wide Snowboards">Wide Snowboards</a><br/>
            <a href="<?php echo $baseURL; ?>/group/snowboard/snowboards/all-mountain-snowboards/?cat=Snowboard&subcat=Snowboards&group=All Mountain Snowboards">All Mountain Snowboards</a><br/>
            <a href="<?php echo $baseURL; ?>/group/snowboard/snowboards/womens-freestyle-snowboards/?cat=Snowboard&subcat=Snowboards&group=Women's Freestyle Snowboards">Women's Freestyle Snowboards</a><br/>
            <a href="<?php echo $baseURL; ?>/group/snowboard/snowboards/womens-all-mountain-snowboards/?cat=Snowboard&subcat=Snowboards&group=Women's All Mountain Snowboards">Women's All Mountain Snowboards</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/snowboard/snowboards/?cat=Snowboard&subcat=Snowboards" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/snowboard/snowboard-boots/?cat=Snowboard&subcat=Snowboard Boots">Snowboard Boots</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/snowboard/snowboard-boots/mens-lace-snowboard-boots/?cat=Snowboard&subcat=Snowboard Boots&group=Men's Lace Snowboard Boots">Men's Lace Snowboard Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/snowboard/snowboard-boots/womens-lace-snowboard-boots/?cat=Snowboard&subcat=Snowboard Boots&group=Women's Lace Snowboard Boots">Women's Lace Snowboard Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/snowboard/snowboard-boots/mens-boa-snowboard-boots/?cat=Snowboard&subcat=Snowboard Boots&group=Men's Boa Snowboard Boots">Men's Boa Snowboard Boots</a><br/>
            <a href="<?php echo $baseURL; ?>/group/snowboard/snowboard-boots/womens-boa-snowboard-boots/?cat=Snowboard&subcat=Snowboard Boots&group=Women's Boa Snowboard Boots">Women's Boa Snowboard Boots</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/snowboard/snowboard-boots/kids-snowboard-boots">Kids' Snowboard Boots</a><br/>-->
            <a href="<?php echo $baseURL; ?>/subcat/snowboard/snowboard-boots/?cat=Snowboard&subcat=Snowboard Boots" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/snowboard/snowboard-bindings-and-accessories/?cat=Snowboard&subcat=Snowboard Bindings and Accessories">Snowboard Bindings</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/snowboard/snowboard-bindings-and-accessories/snowboard-bindings/?cat=Snowboard&subcat=Snowboard Bindings and Accessories&group=Snowboard Bindings">Snowboard Bindings</a><br/>
            <a href="<?php echo $baseURL; ?>/group/snowboard/snowboard-bindings-and-accessories/womens-snowboard-bindings/?cat=Snowboard&subcat=Snowboard Bindings and Accessories&group=Women's Snowboard Bindings">Women's Snowboard Bindings</a><br/>
            <a href="<?php echo $baseURL; ?>/group/snowboard/snowboard-bindings-and-accessories/snowboard-binding-accessories/?cat=Snowboard&subcat=Snowboard Bindings and Accessories&group=Snowboard Binding Accessories">Snowboard Binding Accessories</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/snowboard/snowboard-bindings-and-accessories/?cat=Snowboard&subcat=Snowboard Bindings and Accessories" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/snowboard/snowboard-accessories/?cat=Snowboard&subcat=Snowboard Accessories">Snowboard Accessories</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/ski/snowboard-accessories/helmet-audio-accessories/?cat=Ski&subcat=Snowboard Accessories&group=Helmet Audio Accessories">Headphones</a><br/>
            <a href="<?php echo $baseURL; ?>/group/mens-clothing/gloves/snowboard-gloves/?cat=Men's Clothing&subcat=Gloves&group=Snowboard Gloves">Snowboard Gloves</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/snowboard-accessories/helmets/?cat=Ski&subcat=Snowboard Accessories&group=Helmets">Helmets</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/snowboard-accessories/impact-clothing/?cat=Ski&subcat=Snowboard Accessories&group=Impact Clothing">Impact Clothing</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/snowboard/luggage/?cat=Snowboard&subcat=Luggage">Snowboard Bags</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/snowboard/snowboard-accessories/?cat=Snowboard&subcat=Snowboard Accessories" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/subcat/ski/goggles-and-accessories/?cat=Ski&subcat=Goggles and Accessories">Goggles and Accessories</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/group/ski/goggles-and-accessories/goggles?cat=Ski&subcat=Goggles And Accessories&group=Goggles">Goggles</a><br/>
            <!--<a href="<?php echo $baseURL; ?>/group/snowboard/goggles-and-accessories/womens-goggles/?cat=Snowboard&subcat=Goggles And Accessories&group=">Women's Goggles</a><br/>-->
            <a href="<?php echo $baseURL; ?>/group/ski/goggles-and-accessories/?cat=Ski&subcat=Goggles And Accessories&group=Goggle Replacement Lenses">Goggle Replacement Lenses</a><br/>
            <a href="<?php echo $baseURL; ?>/group/ski/goggles-and-accessories/goggles?cat=Ski&subcat=Goggles And Accessories&group=Goggles" class="more">More...</a></p>
        </div>
      </div>
    </li>
    <li style="width:75px;"> <a href="<?php echo $baseURL; ?>/category/climb" style="">Other</a>
      <div style="width: 350px;z-index:100;background:#666;">
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/category/surf">Surf</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/subcat/surf/wetsuits/?cat=Surf&subcat=Wetsuits">Wetsuits</a><br/>
            <a href="<?php echo $baseURL; ?>/category/surf" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/category/paddle">Paddle</a></h3>
          <p>
            <a href="<?php echo $baseURL; ?>/subcat/paddle/kayaks/?cat=Paddle&subcat=Kayaks">Kayaks</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/paddle/kayak-accessories/?cat=Paddle&subcat=Kayak Accessories">Kayak Accessories</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/paddle/kayak-clothing/?cat=Paddle&subcat=Kayak Clothing">Kayak Clothing</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/paddle/stand-up-paddle/?cat=Paddle&subcat=Stand-Up Paddle">Stand-Up Paddle</a><br/>
            <a href="<?php echo $baseURL; ?>/group/paddle/stand-up-paddle/stand-up-paddleboards/?cat=Paddle&subcat=Stand-Up Paddle&group=Stand-Up Paddleboards">Stand-Up Paddleboards</a><br/>
            <a href="<?php echo $baseURL; ?>/category/paddle" class="more">More...</a></p>
          <h3><a href="<?php echo $baseURL; ?>/category/snowshoe">Snowshoe</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/subcat/snowboard/snowshoes/?cat=Snowboard&subcat=Snowshoes">Snowshoes</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/ski/avalanche-safety/?cat=Ski&subcat=Avalanche Safety">Avalanche Safety</a><br/>
            <a href="<?php echo $baseURL; ?>/category/snowshoe" class="more">More...</a></p>
        </div>
        <div style="float:left;padding:10px;">
          <h3><a href="<?php echo $baseURL; ?>/category/travel">Travel</a></h3>
          <p> <a href="<?php echo $baseURL; ?>/subcat/travel/luggage/?cat=Travel&subcat=Luggage">Luggage</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/travel/car-racks/?cat=Travel&subcat=Car Racks">Car Racks</a><br/>
            <a href="<?php echo $baseURL; ?>/subcat/hiking-camping-gear/backpacks/?cat=Hiking & Camping Gear&subcat=Backpacks">Backpacks</a><br/>
            <a href="<?php echo $baseURL; ?>/category/travel" class="more">More...</a></p>
        </div>
      </div>
    </li>
    <li style="width:133px;"> <a href="<?php echo $baseURL; ?>/brand/the-north-face">SHOP BY BRAND</a>
      <div style="width: 550px;z-index:100;background:#666;">
        <div style="float:left;padding:10px;">
          <h3>Camp</h3>
          <p> <a href="<?php echo $baseURL; ?>/brand/arcteryx">Arc'teryx</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/big-agnes">Big Agnes</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/black-diamond">Black Diamond</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/columbia">Columbia</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/gregory">Gregory</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/mammut">Mammut</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/marmot">Marmot</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/mountain-hardwear">Mountain Hardwear</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/outdoor-research">Outdoor Research</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/sierra-designs">Sierra Designs</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/the-north-face">The North Face</a><br/>
          </p>
        </div>
        <div style="float:left;padding:10px;">
          <h3>Hike</h3>
          <p><a href="<?php echo $baseURL; ?>/brand/asolo">Asolo</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/golite">GoLite</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/keen">KEEN</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/lowa">Lowa</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/la-sportiva">La Sportiva</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/merrell">Merrell</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/montrail">Montrail</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/patagonia">Patagonia</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/scarpa">Scarpa</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/teva">Teva</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/teva">Vasque</a><br/>
          </p>
        </div>
        <div style="float:left;padding:10px;">
          <h3>Bike</h3>
          <p> <a href="<?php echo $baseURL; ?>/brand/camelbak">CamelBak</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/castelli">Castelli</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/easton">Easton</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/honey-stinger">Honey Stinger</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/fox">Fox</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/giordana">Giordana</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/louis-garneau">Louis Garneau</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/pearl-izumi">Pearl Izumi</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/sram">Sram</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/shimano">Shimano</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/thule">Thule</a><br/>
        </div>
        <!--<div style="float:left;padding:10px;">
          <h3>Surf/Skate</h3>
          <p> <a href="<?php echo $baseURL; ?>/brand/billabong">Billabong</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/dvs">DVS</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/es">eS</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/etnies">etnies</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/kr3w">KR3W</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/matix">Matix</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/ocean-earth">Ocean &amp; Earth</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/quiksilver">Quiksilver</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/rip-curl">Rip Curl</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/supra">Supra</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/surftech">Surftech</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/vans">Vans</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/xcel-hawaii-inc">XCEL HAWAII, INC</a><br/>
          </p>
        </div>-->
        <div style="float:left;padding:10px;">
          <h3>Ski</h3>
          <p> <a href="<?php echo $baseURL; ?>/brand/atomic">Atomic</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/dynastar">Dynastar</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/head-skis-usa">Head Skis USA</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/k2">K2</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/lange">Lange</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/marker">Marker</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/nordica">Nordica</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/salomon">Salomon</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/scarpa">Scarpa</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/scott">Scott</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/rossignol">Rossignol</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/tecnica">Tecnica</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/volkl">Volkl</a><br/>
          </p>
        </div>
        <div style="float:left;padding:10px;">
          <h3>Snowboard</h3>
          <p><a href="<?php echo $baseURL; ?>/brand/686">686</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/billabong">Billabong</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/bonfire">Bonfire</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/burton">Burton</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/DAKINE">DAKINE</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/foursquare">Foursquare</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/k2-snowboards">K2</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/nitro">Nitro</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/ride">Ride</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/rome">Rome</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/quiksilver">Quicksilver</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/sessions">Sessions</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/special-blend">Special Blend</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/thirtytwo">ThirtyTwo</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/lange">Lange</a><br/>
            <a href="<?php echo $baseURL; ?>/brand/salomon-snowboards">Salomon</a><br/>
          </p>
        </div>
      </div>
    </li>
  </ul>
  <!--MegaMenu Ends-->
</div>
<!-- menu-->
<div style="clear:both;"></div>
<div id="prod_container">
