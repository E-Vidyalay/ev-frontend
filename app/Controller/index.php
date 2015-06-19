<!doctype html>
<?php
	$connect=$mysqli = new mysqli('localhost', 'learndrx_rakesh', 'rakeshelectricals', 'learndrx_rakesh');
	
?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="img/re.png" type="image/x-icon">
	<link rel="icon" href="img/re.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rakesh Electricals</title>
	<link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/foundation-icons.css" />
    <script src="js/vendor/modernizr.js"></script>
	<script src="js/menuV2.js" type="text/javascript"></script>
  </head>
 <body style="background-image:url('img/backg.png');">
 <style type="text/css">
 	.ev-alert{
		top:80px;
		right:20px;
		position: absolute;
		z-index: 8000;
	}
 </style>
 <div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small hide-for-large hide-for-large-up hide-for-xxlarge-up">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>
		 <section class="hide-for-large hide-for-xlarge-only hide-for-xlarge-only hide-for-xxlarge-only">
			<center>Rakesh Electricals</center>
      </section>
       
		<section class="hide-for-medium hide-for-small">
		<div data-magellan-expedition="fixed" class="rk-mg">
		  <dl class="sub-nav">
			<div class="row">
			<div class="small-3 columns"><dd><img src="img/logo.png" style="height:3.5em;"></dd></div>
			<div class="right" style="padding-top:0.5em;">
			<dd data-magellan="build" style="padding-top:4px;"><a href="index.php"><span class="fi-home icon"></span>Home</a></dd>
			<dd data-magellan="js" style="padding-top:4px;"><a href="#" data-reveal-id="about"><span class="fi-info"></span>About Us</a></dd>
			
			<dd data-magellan="js" style="padding-top:4px;"><a href="#" data-reveal-id="contact"><span class="fi-mail"></span>Contact Us</a></dd>
			<dd style="padding-top:4px;"><a href="#" data-reveal-id="terms"><span class="fi-list"></span>Privacy Policy</a></dd>
			<dd><form action="" method="post" ><input list="products" placeholder=" Search products" style="height:1.8em;border-radius:3px;margin-top:3px" name="product_s"/></form></dd>
			<dd><img src="img/Search.png" style="height:1.5em;" id="s1"/></dd>
			</div>
		  </dl>
		</div>
		</section>
		

<datalist id="products">
  <?php
  	$query7="SELECT * FROM product";
  	$result7=mysqli_query($connect,$query7);
  	if(mysqli_num_rows($result7)>0){
  		while($r1=mysqli_fetch_array($result7)){
  			echo "<option value='".$r1['name']."'>";
  		}
  	}
  	else{
  		echo "<option value='No products found'>";
  	}
  ?>
</datalist>
    </nav>

    <aside class="left-off-canvas-menu hide-for-xlarge-only hide-for-xlarge-only hide-for-xxlarge-only">
      <ul class="off-canvas-list">
			<li><label>Rakesh Electricals</label></li>
			<li><a href="index.php">Home</a></li>
			<li><a href="#" data-reveal-id="about">About us</a></li>
			<li><a href="#" data-reveal-id="terms">Privacy Policy</a></li>
			<li><a href="#" data-reveal-id="contact">Contact Us</a></li>
			<li><a>Products</a>
			<ul>
			<?php
				
					$query1="SELECT * FROM category";
					$result1=mysqli_query($connect,$query1);
					$query2="SELECT * FROM sub_category";
					$result2=mysqli_query($connect,$query2);
					$query3="SELECT * FROM sub_sub_category";
					$result3=mysqli_query($connect,$query3);
					$cat=array();$sub_cat=array();$sub_sub_cat=array();
					while($row1=mysqli_fetch_array($result1)){
						array_push($cat, $row1);
					}
					while($row2=mysqli_fetch_array($result2)){
						array_push($sub_cat, $row2);
					}
					while($row3=mysqli_fetch_array($result3)){
						array_push($sub_sub_cat, $row3);
					}
					$f=0;
					for($i=0;$i<sizeof($cat);$i++){
						echo "<li ><a class='ajax' id='cat-".$cat[$i]['id']."' style='font-size:16px'>".$cat[$i]['name']."</a><ul>";
							for($y=0;$y<sizeof($sub_cat);$y++){
								if($cat[$i]['id']==$sub_cat[$y]['cat_id']){
									echo "<li ><a class='ajax2' id='sub_cat-".$cat[$i]['id']."-".$sub_cat[$y]['id']."' style='font-size:14px;'>".$sub_cat[$y]['name']."</a><ul>";
										for($z=0;$z<sizeof($sub_sub_cat);$z++){
											if($cat[$i]['id']==$sub_sub_cat[$z]['cat_id'] && $sub_cat[$y]['id']==$sub_sub_cat[$z]['sub_cat_id']){

												echo "<li ><a class='ajax3' id='sub_sub_cat-".$cat[$i]['id']."-".$sub_cat[$y]['id']."-".$sub_sub_cat[$z]['id']."' style='font-size:12px;'>".$sub_sub_cat[$z]['name']."</a></li>";
											}
										}

									echo "</ul></li>";
								}
							}	
						echo "</ul></li>";
					}

				?>
			</li>
		</ul>
    			
      </ul>
    </aside>

   

    <section class="main-section">
	

	<br/>
	<br/>
	
	<div class="row">
		<div class="ev-alert">
		<?php
		if(isset($_GET['mailed'])){
			if($_GET['mailed']==1){

				echo '<div class="success alert-box radius">Thank you for contacting us, we will get back to you soon</div>';
			}
			else{
				echo '<div class="alert alert-box radius">Sorry there was some technical fault, please try again!</div>';
			}
		}
		?>
	</div>
	<div class="large-12 columns">
		<div class="main-wrapper">
		<ul class="example-orbit" data-orbit>
  <li >
    <img src="img/slider2.jpg" alt="slide 1" />
    <div class="orbit-caption">
      Enlighten your home from our wide range of lights
      
    </div>
  </li>
  <li class="active">
    <img src="img/slider1.jpg"  alt="slide 2" />
    <div class="orbit-caption">
      Brightening your Pathways with our energy efficient lighting 
    </div>
  </li>
  <li>
    <img src="img/slider3.jpg"  alt="slide 3"/>
    <div class="orbit-caption">
     Lighting the city in a economic and efficient manner
    </div>
  </li>
</ul>
	
	
	
		<div class="row">
		<div class="large-3 columns hide-for-small hide-for-medium">
			<div class="panel" style="text-align:center;color:#dd1a07;font-weight:bold">
					Our Products
				</div>
			<ul id="menuV2">
				<?php
				
					
					for($i=0;$i<sizeof($cat);$i++){
						echo "<li ><a class='ajax' id='cat-".$cat[$i]['id']."'>".$cat[$i]['name']."</a><ul>";
							for($y=0;$y<sizeof($sub_cat);$y++){
								if($cat[$i]['id']==$sub_cat[$y]['cat_id']){
									echo "<li ><a class='ajax2' id='sub_cat-".$cat[$i]['id']."-".$sub_cat[$y]['id']."'>".$sub_cat[$y]['name']."</a><ul>";
										for($z=0;$z<sizeof($sub_sub_cat);$z++){
											if($cat[$i]['id']==$sub_sub_cat[$z]['cat_id'] && $sub_cat[$y]['id']==$sub_sub_cat[$z]['sub_cat_id']){

												echo "<li ><a class='ajax3' id='sub_sub_cat-".$cat[$i]['id']."-".$sub_cat[$y]['id']."-".$sub_sub_cat[$z]['id']."'>".$sub_sub_cat[$z]['name']."</a></li>";
											}
										}

									echo "</ul></li>";
								}
							}	
						echo "</ul></li>";
					}

				?>
    		
			</ul>
		</div>
		<div class="large-8 columns">	
		<div class="panel" style="text-align:center;color:#dd1a07;font-weight:bold" id="prod-panel">
			Popular Products
		</div>
		<div class="products" id="p11" >

			<?php
				$query4="SELECT * FROM product WHERE trend=1";
				$result4=mysqli_query($connect,$query4);
				
				while($row4=mysqli_fetch_array($result4)){
					echo "<li>";
				
				echo '<a href="#" data-reveal-id="p-'.$row4['id'].'"><img src="admin/adminpanel/resources/images/project/'.$row4['image'].'" style="height:120px;width:150px;" /></a>
				<div class="img-info"><div><a href="#" data-reveal-id="p-'.$row4['id'].'">'.$row4['name'].'</a></div></div>';
				echo '<div class="reveal-modal medium" id="p-'.$row4['id'].'" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
					<h2>Details of '.$row4['name'].'</h2>
					<br/>
					<br/>
					<div class="row">
						<div class="large-8 columns">

							<img src="admin/adminpanel/resources/images/project/'.$row4['image'].'" style="height:200px;width:200px;text-align:center;border-radius:2px;border:2px solid #000;"/>
						</div>
						<div class="large-3 columns">
						<br/>
						<br/>
							<h3>Price</h3>
							<p style="color:#dd1a07;font-size:16px;font-weight:bold"> Rs. '.$row4['price'].'</p>
							(Excluding Tax)
						</div>
					</div>
					<br/>
					<br/>

					<h3>Description</h3>

					<p>
						'.$row4['description'].'
					</p>
					<a class="close-reveal-modal" aria-label="Close">&#215;</a>
					</div>';
			echo "</li>";
				}
				?>
				<?php
				if(isset($_POST['product_s'])){
				$query5="SELECT * FROM product WHERE name='".$_POST['product_s']."'";
				$result5=mysqli_query($connect,$query5);
				$a="";
				if(mysqli_num_rows($result5)>0){
				while($row5=mysqli_fetch_array($result5)){

					$a.= "<li>";
					$a.="<a href='#' data-reveal-id='p-".$row5['id']."'><img src='admin/adminpanel/resources/images/project/".$row5['image']."'' style='height:120px;width:150px;'' /></a>";
					$a.="<div class='img-info'><div><a href='#' data-reveal-id='p-".$row5['id']."''>".$row5['name']."</a></div></div>";
					$a.="<div class='reveal-modal medium' id='p-".$row5['id']."' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>";

					
					$a.="<h2>Details of ".$row5['name']."</h2>";
					$a.="<br/>";
					$a.="<br/>";
					$a.="<div class='row'>";
					$a.="<div class='large-8 columns'>";
					$a.="<img src='admin/adminpanel/resources/images/project/".$row5['image']."' style='height:90%;width:auto;text-align:center;border-radius:2px;border:2px solid #000;'/>";
					$a.="</div>";
					$a.="<div class='large-3 columns'>";
					$a.="<br/><br/>";
					$a.="<center><h4>Price</h4></center>";
					$a.="<p style='color:#dd1a07;font-size:16px;font-weight:bold;text-align:center'> Rs. ".$row5['price']."</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Excluding Tax)";
					$a.="</div></div>";
					$a.="<br/><br/>";
					$a.="<h3>Description</h3>";
					$a.="<p>".$row5['description']."</p>";
					$a.="<a class='close-reveal-modal' aria-label='Close'>&#215;</a>";
					$a.="</div>";
					$a.="</li>";

						
					?>
							
			<?php
				}
				}
				else{
					$a="Sorry, no such product found :(";
				
			?>
				
			<?php
				
				}
			?>
			<script>
					document.getElementById('prod-panel').innerHTML='Searched Product';
					document.getElementById('p11').innerHTML="<?php echo $a; ?>"
				</script>
			<?php
			
			}
			?>
		</div>
	</div>
</div>
		</div>
      </div>
      </div>
      
	<br/>
	<br/>
	<div class="rs-footer hide-for-large-only hide-for-xlarge-only hide-for-xxlarge-only" id="foot-2">
		<div class="row">
			<div class="small-4 columns">
				<img src="img/logo.png" style="height:1.5em;margin-top:3%;"/>
			</div>
			<div class="small-5 columns">
			<div class="head" style="text-align:center;margin-top:1%;"><b>Location</b></div>
				<hr/>
				<div class="head" style="font-size:10px">
					
					190, Mangal Bazaar<br/>
						Vadodara, Gujarat, <br/>
						India-390001<br/>
						<br/>
						<br/>
						<b>Contact Details:</b><br/><br/>
						<span class="fi-telephone" style="color:#dd1a07;"></span>(O):+91 265 243 6614<br/>
						<span class="fi-mail" style="color:#dd1a07;"></span>:info@rakeshelectricals.co.in<br/>
						<br/>
					<br/>
				</div></div>
			<div class="small-3 columns">
				<div class="head" style="text-align:center;margin-top:1%;"><b>Authorized Dealers For:</b></div>
				<hr/>
				<div class="head" style="font-size:30px;text-align:center">
					
					<ul style="font-size:10px">
					<li>Polycab<li>
					<li>Finolex</li>
					<li>Anchor</li>
					<li>Straco</li>
					<li>And many more...</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="rs-footer hide-for-small hide-for-medium">
		<div class="row">
			<div class="small-3 columns">
				<img src="img/logo.png" style="height:4em;padding:0.3em;margin-top:25%;">
				<b style="color:red"> <small> - Powered By Rakesh Electricals</small></b>
			</div>
			<div class="small-3 columns">
				<br>
				<div class="head" style="text-align:center">Navigation</div>
				<hr/>
				<ul style="list-style:none;font-size:11px;padding-left:5em;">
					<li><a href="index.php">Home</a></li>
					<li><a href="#" data-reveal-id="about">About us</a></li>
							
					<li><a href="#" data-reveal-id="terms">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="small-3 columns">
				<br>
				<div class="head" style="text-align:center">Location</div>
				<hr/>
				<div class="head" style="font-size:10px">
					
						190, Mangal Bazaar<br/>
						Vadodara, Gujarat, <br/>
						India-390001<br/>
						<br/>
						<br/>
						<b>Contact Details:</b><br/><br/>
						<span class="fi-telephone" style="color:#dd1a07;"></span>(O):+91 265 243 6614<br/>
						<span class="fi-mail" style="color:#dd1a07;"></span>:info@rakeshelectricals.co.in<br/>
						<br/>
					<br/>
				
					
				</div>
			</div>
			<div class="small-3 columns">
					<br>
				<div class="head" style="text-align:center">Authorized Dealers For:</div>
				<hr/>
				<div class="head" style="font-size:10px;text-align:center">
					
					
					<ul style="font-size:10px">
					<li>Polycab<li>
					<li>Finolex</li>
					<li>Anchor</li>
					<li>Straco</li>
					<li>And many more...</li>
				</ul>
				</div>
			</div>
		</div>
		
	</div>
    </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>
<div id="about" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h4 id="modalTitle">About Rakesh Electricals</h4>
  <hr/>
  <p style="text-align:justify">Rakesh Electricals, "King of Electrical Goods" started by Rakesh shah in 1983, Mangal Bazaar, Vadodara 

have a vision to provide complete range of housing electrical and lighting products to its customer. By 

complete range it means we sell everything related to lighting that is used right from the beginning of 

construction of a house to its very end from nails to Chandeliers, making this a single stop experience. 

Hence the motto "King of Electrical Goods" has spread all over the local electrical market. 
</p>
<p style="text-align:justify">
Our feature products include Switches, Fan's, CFL's, Bulb's, MCB's, Home Decoration lighting, Festival 

lighting, LED's, Hanging, Wall lights, Chandelier and many more items. What's special about our products 

is that Rakesh Shah has cultivated the list of current products carefully over 31 years in business. With 

the collaboration of Praganesh Parikh, showroom director, we strive to provide the most productive and 

pleasurable experience to each customer. 
</p>
<p style="text-align:justify">
At Rakesh Electricals customers are our highest priority. As a small business, every customer matters to 

us. We know you have many options as to where to buy lighting and electrical products. Therefore we 

work hard to be sure our price is lower than the market price.
</p>
<p style="text-align:justify">

Come visit our website or visit our store in the city and check for yourself why we are the Best lighting 

showroom in Vadodara.
</p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<div id="terms" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h4 id="modalTitle">Privacy Policy</h4>
<p>
<b>Personal Information that Rakesh Electricals May Collect</b><br/>

Rakesh Electricals collects the following types of personal information: names, postal and e-mail addresses, phone 

and facsimile numbers, and inquiry information. Rakesh Electricals may also collect business information from sole 

proprietorships some of which might constitute personal information, as well as personal information from 

individuals acting solely in their business capacity.

.
<br/>
<br/>

<b>How Rakesh Electricals May Use Personal Information</b><br/>

Unless you consent, Rakesh Electricals will use your personal information for the purpose for which it was 

submitted such as to reply to inquiries, handle your complaints and process billing and business requests, and we 

will use such information to provide operational notices, and in program recordkeeping and to conduct research on 

industry marketplace practices. Our research will not result in the reporting or publication of any personal 

information provided to us.
<br/>
<br/>
<b>How Your Information May Be Shared</b><br/>

Consumer inquiries may be forwarded by email, and consumers should recognize that this method of transmission 

may not be secure. Rakesh Electricals may also use your personal information to research industry marketplace 

practices. Just as in any research we may do, Rakesh Electricals research will not result in the reporting or 

publication of any personal information.
<br/><br/>

<b>Computer Tracking and Cookies</b><br/>

Our web site is not set up to track, collect or distribute personal information not entered by its visitors. Our site logs 

do generate certain kinds of non-identifying site usage data, such as the number of hits and visits to our site. This 

information is used for internal purposes by technical support staff to provide better services to the public and may 

also be provided to others, but again, the statistics contain no personal information and cannot be used to gather such 

information.
<br/>
<br/>
A cookie is a small amount of data that is sent to your browser from a Web server and stored on your computer's 

hard drive. Rakesh Electricals uses non-identifying cookies to provide easier site navigation and access to forms. 

You can still use Rakesh Electricals site if your browser is set to reject cookies. Our cookies do not generate 

personal data, do not read personal data from your machine and are never tied to anything that could be used to 

identify you.
<br/><br/>
<b>Problems</b><br/>

If you have a complaint about rakeshelectricals.co.in's compliance with this privacy policy, please contact us.
</p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<div id="contact" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <div class="row">
	<div class="small-6 columns">
		<h3>Contact Details</h3>
		<br/>
		<br/>
		<b>Address:</b><br/><br/>
		190, Mangal Bazaar<br/>
		Vadodara, Gujarat, <br/>
		India-390001<br/>
		<br/>
		<br/>
		<b>Contact Details:</b><br/><br/>
		<span class="fi-telephone" style="color:#dd1a07;"></span>(O):+91 265 243 6614<br/>
		<span class="fi-mail" style="color:#dd1a07;"></span>:info@rakeshelectricals.co.in<br/>
		<br/>

		<b>Authorized Dealers For:</b>
		<ul>
			<li>Polycab<li>
			<li>Finolex</li>
			<li>Anchor</li>
			<li>Straco</li>
			<li>And many more...</li>
		</ul>
	</div>
	<div class="small-6 columns">
		<h3>Inquiry</h3>
		<br/>
		<form action="inquiry.php" method="post">
			<label>Name</label>
			<input type="text" placeholder="Enter your name" id="name" name="name" class="radius" required="required"/>		
			<label>Email</label>
			<input type="email" placeholder="Enter your email address" id="email" name="email" class="radius" required="required"/>
			<label>Mobile</label>
			<input type="number" placeholder="Enter your mobile number" id="no" name="no" class="radius"/>
			<label>Enquiry Details</label>
			<textarea style="height:150px;" placeholder="Enquiry Details" class="radius" name="msg" id="msg" required="required">
			
			</textarea>
			<input type="submit" class="button tiny radius alert" id="su-btn"/>
		</form>
	</div>
	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
    <script src="js/vendor/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
    	//$(document).ready(function(){
    		$(document).foundation();
    	//})
      	$(document).ready(function(){
			setTimeout(function(){
				$('.alert-box').fadeOut(800);
			},2000);
      	});
    </script>
  </body>
</html>