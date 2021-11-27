<?php
/*
Template Name: szablon tarcza-prawna
*/

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php bloginfo('template_directory'); ?>/style/client.css" rel="stylesheet" type="text/css" title="style">
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
    <title>Tarcza Prawna - Jak Wyjść z Długów</title>
    
    <link rel="stylesheet" href="https://webfonts.creativecloud.com/c/2fa3f0/1w;montserrat,1,2cm5Ph:W:n4/l" media="all"><script src="https://webfonts.creativecloud.com/montserrat:n4:all.js" type="text/javascript"></script>
	<script src="https://use.typekit.net/ik/aFCKBWwF-yiS47-ar95vpBIVZJusF1idpbs1IeC7wxSfe73ffFV16MJPH2bkw2SuFDBLwAZyjRgcFDycwR9tjQIawD4yFcJtjAwUZc4KFe4KFRS-G3I7OcmKSYM0Se3CZA43Sfo3dfUTdc4kdaiDZW48Ze8X-Ao1OcBqdh48OcFzdPUTdc4kdaiDZW48Ze8X-Ao1OcuuShm3ScmkZAU8jWF8OcFzdPUaiaS0ZA43Sfo3dfUaiaS0-AoKScNaShmkZAsTie80ZkoyZeNKZPoRdhXCiaiaOc80j14ziaF8Scmq-WsTdcS0dWmDZWgkZW48demySh90jhNlJ6sCjWszH6qJhWGbMg6YJMI7fbRipyMMeMw6MPG4fFlEIMMj2PMgH6qJaYGbMg6IJMI7f6KXCbIbMg6BJMI7f6KhCbIbMg6eJMBHgIuuShAbMLW9nSGB.js" type="text/javascript"></script>
	  <!-- Other scripts -->
	  <style type="text/css">@font-face{font-family:lato;src:url(https://use.typekit.net/af/220823/000000000000000000015231/27/l?subset_id=1&fvd=n7&v=3) format("woff2"),url(https://use.typekit.net/af/220823/000000000000000000015231/27/d?subset_id=1&fvd=n7&v=3) format("woff"),url(https://use.typekit.net/af/220823/000000000000000000015231/27/a?subset_id=1&fvd=n7&v=3) format("opentype");font-weight:700;font-style:normal;font-display:auto;}@font-face{font-family:lato;src:url(https://use.typekit.net/af/a2df1e/00000000000000000001522a/27/l?subset_id=1&fvd=n3&v=3) format("woff2"),url(https://use.typekit.net/af/a2df1e/00000000000000000001522a/27/d?subset_id=1&fvd=n3&v=3) format("woff"),url(https://use.typekit.net/af/a2df1e/00000000000000000001522a/27/a?subset_id=1&fvd=n3&v=3) format("opentype");font-weight:300;font-style:normal;font-display:auto;}@font-face{font-family:lato;src:url(https://use.typekit.net/af/845de0/00000000000000000001522b/27/l?subset_id=1&fvd=i3&v=3) format("woff2"),url(https://use.typekit.net/af/845de0/00000000000000000001522b/27/d?subset_id=1&fvd=i3&v=3) format("woff"),url(https://use.typekit.net/af/845de0/00000000000000000001522b/27/a?subset_id=1&fvd=i3&v=3) format("opentype");font-weight:300;font-style:italic;font-display:auto;}@font-face{font-family:lato;src:url(https://use.typekit.net/af/180254/00000000000000000001522c/27/l?subset_id=1&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/180254/00000000000000000001522c/27/d?subset_id=1&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/180254/00000000000000000001522c/27/a?subset_id=1&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;font-display:auto;}@font-face{font-family:lato;src:url(https://use.typekit.net/af/a18530/00000000000000000001522e/27/l?subset_id=1&fvd=n5&v=3) format("woff2"),url(https://use.typekit.net/af/a18530/00000000000000000001522e/27/d?subset_id=1&fvd=n5&v=3) format("woff"),url(https://use.typekit.net/af/a18530/00000000000000000001522e/27/a?subset_id=1&fvd=n5&v=3) format("opentype");font-weight:500;font-style:normal;font-display:auto;}@font-face{font-family:lato;src:url(https://use.typekit.net/af/28ba4b/000000000000000000015226/27/l?subset_id=1&fvd=n6&v=3) format("woff2"),url(https://use.typekit.net/af/28ba4b/000000000000000000015226/27/d?subset_id=1&fvd=n6&v=3) format("woff"),url(https://use.typekit.net/af/28ba4b/000000000000000000015226/27/a?subset_id=1&fvd=n6&v=3) format("opentype");font-weight:600;font-style:normal;font-display:auto;}</style><script type="text/javascript">
	   try {Typekit.load();} catch(e) {}
	</script>

	
	
	<script language="javascript">
	
	</script>
	

<?php wp_head(); ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1527878994231932');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1527878994231932&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body style="min-width: fit-content;background: #f0f0f0;" cz-shortcut-listen="true">

<div id="main_div">
	<div class="menu_info">
		<div class="topinfo">
			<div class="mobile">
				<div class="logo">
					<a href="https://tarczadlaciebie.pl/"><img alt="Tarcza dla Ciebie - Jak Wyjść z Długów - pomoc w zadłużeniach" id="top_logo" src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p1-1.png"></a>
				</div>
				<div class="dane">
					<div class="koperta">
						<a href="mailto:"><img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p2.png"></a>
						<p>biuro@tarczadlaciebie.pl</p>
					</div>
					<div class="telefon">
						<a href=""><img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p3.png"></a>
						<p>791092092</p>
					</div>
				</div>
			</div>
		</div>
	
	</div>
    <div id="top_div">

        
        <div id="upper_menu_div">
                <?php wp_nav_menu( array(
    				'menu' => 'menu1',
    				'container' => 'nav',
    				'menu_class' => 'upper_menu_item',
				) ); ?>
            </div><!--menu--> 
    </div>

	<div id="main_page_picture_div" style="height: 550px; background: #002f5d;">		
		<div class="top_napisy">
			<div class="grupa1">
				<h3 style="text-align: left;letter-spacing: 1px; width: 220px;font-size: 28px; color: #fff; text-shadow: 2px 2px #000;" class="show mobile">Opieka prawna na najwyższym poziomie</h3>
				<div class="niezwlekaj">Nie zwlekaj i skorzystaj z oferty tarczy już teraz! Zamów kontakt a nasz doradca oddzwoni niezwłocznie.</div>
			</div>
			<div class="grupa2">
				<div class="dostep">
					<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p4.png">
					<div>
						<div class="napis1">Nielimitowany dostęp do opiekuna prawnego</div>
					</div>
				</div>
				<div class="finansowanie">
					<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p5.png">
					<div>
						<div class="napis2">Finansowanie bez zbędnych formalności</div>
					</div>
				</div>
			</div>
		</div>		
	</div>		

	



</div></div><div id="text_content">
<h4> </h4>
<h4> </h4>
<h4> </h4>
<h4> </h4>
<h4> </h4>
<h4> </h4>
<h4> </h4>
<h4> </h4>
<h4> </h4>
<h4> </h4></div>
</div>


	


<script language="javascript">
	//$("#procent99").appendTo("#main_page_picture_div");
	$("#zamow_kontakt_na_tle_div").appendTo("#main_page_picture_div");
	

	function SendKontakt2()
		{
			
			$.ajax({
           type: "POST",
           url: "https://tarczadlaciebie.pl/sendemail.php",
           data: $("#kontaktForm2").serialize(), // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
			   $("#thanx").show(200)
window.location='https://tarczadlaciebie.pl/dziekujemy'
           }
         });

			
		}

</script>


<script language="javascript">
	var visibleH1=0;
	var H1_size=0;
	$("#image_page_content H1" ).each(function( index ) {
		if(($(this).html()).trim()!="")
		{					
			H1_size++;
		}				
	});

	function ToggleH1()
	{		
		if(H1_size<=1)
			return;

		var i=0;
		$("#image_page_content H1").hide();
		$("#image_page_content H1").each(function( index ) {
			if(($(this).html()).trim()!="")
			{						
				if(i==visibleH1)
				{
					$(this).fadeIn(800);
				}
				i++;
			}				
		});
		visibleH1++;

		if(visibleH1>=H1_size)
			visibleH1=0;

		setTimeout(function(){ ToggleH1()}, 2000);		
	}

	ToggleH1();
</script><div id="side_contact_icon">
	<a href="https://tarczadlaciebie.pl/kontakt/"><img src="<?php bloginfo('template_directory'); ?>/images/sluchawka.png" alt="zadzwoń do nas"></a>
</div>

<script language="javascript">
	//$("#side_contact_icon").appendTo("BODY");
</script>
<div id="zamow_kontakt_na_tle_div">
<a name="form"></a>

<center>
<div id="zamow_kontakt_main_div">


<div id="zamow_kontakt_top">zamów kontakt</div>
<div id="zamow_kontakt_top_formularz">
<div id="zamow_kontakt_top_formularz_inner">
<?php echo do_shortcode('[contact-form-7 id="97" title="Formularz 1"]'); ?>
</div>
</div>
</div>

</div></center>

<hr style="width: 100%; background: #fff; color: #fff; box-shadow: 1px 2px 6px #000;">


<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post(229);
?>
<?php
the_content();
endwhile; endif;
?>




<script language="javascript">
	function FlipElements_czy_wiesz_ze()
	{
		if(elementInView($("#button3_div")))
			{
				setTimeout(function(){ 
				$('.czy_wiesz_ze_item img').addClass('animated flipInX');
				$('#czy_wiesz_ze #button3').addClass('animated flipInX');
				},1000)
			}
	}

	$( document ).ready(function() {
		$(window).scroll(function() {
			FlipElements_czy_wiesz_ze();
		});
		//FlipElements_czy_wiesz_ze();
	});
	
	
	
</script>



<script language="javascript">

</script>






<script language="javascript">
		
</script>



<script language="javascript">
	setTimeout(function(){ 
	$("#image_page_content H2").toggleClass('show');
	$("#image_page_content H3").toggleClass('show');
	$("#image_page_content H4").toggleClass('show');
	},500)
</script>

 
<script language="javascript">

</script>


<div id="top_bar_kontakt">
	<div id="inner_top_bar_kontakt">
		<a href="https://tarczadlaciebie.pl/kontakt"><h3 id="skontaktuj_top">SKONTAKTUJ SIĘ Z NAMI JUŻ TERAZ!</h3></a>

		<div id="formularz_button">

			<a href="https://tarczadlaciebie.pl/kontakt"><img src="<?php bloginfo('template_directory'); ?>/images/skonatkt-ads.png"></a>
			<div id="top_bar_kontakt_telefon">791 092 092</div>
			<a href="#zamow_kontakt_na_tle_div"><h3 class="tekst">FORMULARZ</h3></a>
		</div>

	</div>
</div>



<footer>
<div id="stopka_div">

		<div id="stopka_logo">
			<img alt="Tarcza dla Ciebie - pomoc w zadłużeniach" src="<?php bloginfo('template_directory'); ?>/images/logo2.png" width="160" height="130">
			
		
			<div id="stopka_logo_year">©2021</div>
		</div>
		<center>
		<div id="stopka_menus">
							
							<div class="stopka_menu_group">
								<div class="stopka_menu_group_title">Warunki</div>
									<div class="stopka_menu_item">
											<a href="https://tarczadlaciebie.pl/polityka-prywatnosci/">Polityka prywatności</a></div>
										<div class="stopka_menu_item">
											<a href="https://tarczadlaciebie.pl/regulamin/">Regulamin serwisu</a></div>
										</div>
																
														
							<div class="stopka_menu_group">
							<div class="stopka_menu_group_title">Kontakt</div>
							<div><div class="stopka_menu_item"><a href="https://tarczadlaciebie.pl/kontakt/">Telefon</a></div><div class="stopka_menu_item"><a href="https://tarczadlaciebie.pl/kontakt/">E-mail</a></div><div class="stopka_menu_item"><a href="#kontakt">Konsultant ONLINE</a></div></div></div>							<div class="stopka_menu_group">
							<div class="stopka_menu_group_title">Społeczność</div>
							<div><div class="stopka_menu_item"><a target="blank" href="https://facebook.com">Facebook</a></div><div class="stopka_menu_item"><a target="blank" href="https://google.com">Google+</a></div><div class="stopka_menu_item"><a target="blank" href="https://twitter.com/home">Twiter</a></div></div></div></div>
		</center>
	</div>

</footer>

	




<?php wp_footer(); ?>
</body>
</html>