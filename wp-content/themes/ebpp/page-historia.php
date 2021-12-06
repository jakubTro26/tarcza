<?php
/*
Template Name: szablon historie
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
    <title>Tarcza dla Ciebie - historie klientów </title>
    
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

<body style="background: #f0f0f0;" cz-shortcut-listen="true">


<div id="main_div">
	<div class="tlo5">
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
		<div id="seconddiv" >
			<div class="top_napisy">
				<div class="grupa1">
					<h3 style="" class="show">Opieka prawna na najwyższym poziomie</h3>
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
			<div class="kontakt">
				<div class="ozdoba">
						<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p8.png">
				</div>
			<?php echo do_shortcode('[contact-form-7 id="97" title="Formularz 1"]'); ?>
			</div>
		</div>
	</div>
	<div class="wrapperfinanse2">
			
				<div class="sa1">
					
				
					<div class="wrapperhistoria">
							<div class="historianapis2">
								<div>
									Tam i z powrotem, czyli historia szukania pożyczki nie za miliony
								</div>
							</div>
							<div class="historiapodpis">
								<div class="podpisdiv">
									<div>
										<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p37.png">
										<div class="historiapodpis">
											RAFAŁ B. - PRZEDSIĘBIORCA Z GOŁDAPII
										</div>
									</div>
								</div>

							</div>
						
							<div class="historianapis">
								<div class="nhistory">
									Firma, którą prowadzę zaczęła nieźle zarabiać i przynosić coraz lepsze zyski. W styczniu 2020 roku zdecydowałem się kupić zespół zaniedbanych obiektów przemysłowych i fabrycznych i przekształcić je na powierzchnie biurowe i mieszkalne. Inwestycja ruszyła z kopyta i już niebawem zaniedbane budynki zaczęły odzyskiwać dawny blask. Na placu budowy roiło się od fachowców, a moje marzenia na dobry zysk z inwestycji zaczęły się materializować. Niestety wybuchła pandemia. Świat stanął na głowie. Roboty stanęły, rozpoczęły się spory z podwykonawcami. Fundusze zaczęły topnieć. Do tego jeszcze mój bank wycofał się z dalszego finansowania przedsięwzięcia. W sekundę z raju stoczyłem się do finansowego piekła. Rozpocząłem gorączkowe poszukiwanie finansowania. Do pełnego zakońćzenia i oddania inwestycji brakowało mi około 500 000 zł przy już zainwestowanych przeze mnie prawie dwóch milionach złotych. Przez tydzień szukałem kontatku po wszystkich stronach i firmach oferujących finansowanie. Ostatecznie udało mi się wstępnie uzyskać promesę kredytową w banku. Z tym, że była to raczej oferta "pogrzebowa". Za 500 00 zł pożyczki i to udzielonej na mnie prywatnie przez Bank sam doradca finansowy zażądał prowizji w wysokości niemal 75 000 zł !!! Do tego prawie 20 proc prowizji bankowej, chore ubezpieczenie za prawie i maksymalne odsetki! Gdybym ten kredyt zaciągnął dostałbym 400 000 zł do ręki, a do spłaty miałbym w 10 lat prawie 1 000 000 zł !!! <br><br><br> Otrzymałem również ofertę firmy z Wrocławia, która zgodziła się finansować moje inwestycje. Warunki finansowe były słabe - ale w mojej sytuacji, akceptowalne. Inaczej zaciąga się kredyt gdy masz kryształową sytuację - wtedy wszyscy całują cię po rękach i obcinają tu procencik, tu prowizję, tu odstępują od zabezpieczeń. Niestety firma w zamian za udzielenie rocznej pożyczki pod zastaw nieruchmości zażądała przewłaszczenia całej realizowanej przeze mnie inwestycji w dobro firmy finansująćej: jedna niespłacona rata i mógłbym stracić wszystko. Tym bardziej, że Pożyczkodawca upierał się również na zabezpieczenie pożyczki również na moim prywatnym domu. Mój prawnik, obsługujący firmę na co dzień, polecił mi skontaktować się z Tarczą dla Ciebie, która oferuję pożyczkę RESTART-19.

								</div>

							</div>
						
						
					</div>
				
				</div>
		</div>
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
</script>



<script language="javascript">
	//$("#side_contact_icon").appendTo("BODY");
</script>





<?php
// if ( have_posts() ) :
// while ( have_posts() ) : the_post(229);
// ?>
 <?php
// the_content();
// endwhile; endif;
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












<?php

//  wp_footer(); 
 ?>
</body>
</html>