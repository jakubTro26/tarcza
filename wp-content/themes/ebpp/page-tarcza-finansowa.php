<?php
/*
Template Name: szablon tarcza-finansowa
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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
    <title>Tarcza finansowa - Jak Wyjść z Długów</title>
    
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
	<div class="tlo3">
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
					<h3 style="" class="show">Pomoc w uzyskaniu kredytu</h3>
					<div class="zostawkontakt">Nie zwlekaj i skorzystaj z oferty tarczy już teraz!<br> Zamów kontakt a nasz doradca oddzwoni niezwłocznie</div>
				</div>
				
			</div>
			<div class="kontakt3 kontakt ">
				<div class="ozdoba">
						<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p8.png">
						<div class="opisformularz">
							<div class="fooopis1">
									FORMULARZ KONTAKTOWY
							</div>
							<div class="fooopis2">
								*Pola obowiązkowe oznaczono gwiazdką
							</div>
						</div>
				</div>
			<?php echo do_shortcode('[contact-form-7 id="97" title="Formularz 1"]'); ?>
			</div>
		</div>
	</div>
	<div class="trzecidiv">
			<div class="wrapperfinanse wf1">
				<div class='tfinansowa'>
						Tarcza finansowa dla Ciebie
				</div>
				<div class="spec2">
					<div>Przedstawiamy Ci jedyną skuteczną tarczę w dzisiejszych ciężkich czasach</div>

				</div>
				<div class="sa1">
					
				
					<div class="sawrapper">

							<div class="imgsakwa">
								<img class="sakwa"  src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/photo-tarcza-finansowa-dla-ciebie-1.png">
							</div>
							<div class="sakwanapis">
								<div class="sanapis">
									Szukasz kredytu ze słabą zdolnośćią? Wierzysz, że jak zasypiesz wszystkie banki zapytaniami, to któryś wkońcu zdecuduję się udzielić Ci nowego kredytu na spłatę zobowiązań? <br>Niestety to droga do nikąd, już po trzechm złożonych zapytaniach system bankowy zablokuje możliwosć udzielenia pożyczki.<br> Nie działąj na własną rękę i "na czuja".<br> My wiemy gdzie i kiedy. Wiemy który bank woli konsolidować kredyty, a który chwiliówki. Wiemy gdzie hotelarz a gdzie pielęgniarka najszybciej i najłatwiej otrzyma kredyt. Bez zapytań i bez strzelania na oślep.<br> Tak właśnie wyglądają finanse skrojone na miarę.

								</div>

							</div>
						
						
					</div>
				
				</div>
			</div>
			<div class="wrapperfinanse wf2">
				
				<div class="sa1">
					
				
					<div class="sawrapper">

							<div class="sakwanapis">
								<div class="sanapis">
									Wspieramy rozwój firm zapewniająć kapitał do rozwoju.<br> Jestemśmy jak świeży prąd dostarczony do maszyny, jak sportowe paliwo dla wyczynowego silnika. Sprawdzone finansowanie to szansa na wielki, wspólny krok naprzód.<br> Stawiamy na długofalową współpracę z Klientem i wspólny rozwój. Plan finansowy tworzony jest dla Ciebie po wnikliwej analizie potrzeb, z poszanowaniem kosztów i ekspresowo jak przelew BLIK. Jako miłośnicy idei pieniądza, działając w branży finansowej od lat wiemy, że szybkie decyzje biznesowe potrzebują szybkiego finansowania. Na potrzeby tworzonych planów finansowych doradzamy i podpowiadamy rozwiązania niezbędne do finansowania na rozwój przedsiębiorstwa.

								</div>

							</div>

							
							<div class="imgsakwa">
								<img class="sakwa"  src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/photo-2-tarcza-finansowa.png">
							</div>
						
						
					</div>
				
				</div>
			</div>
			<div class="podtarcza">
					<div class="ptarcza">
							<div class="pt1">
								<div class="pt1img">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p59.png">
									<img class="bullet1" src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p62.png">
								</div>
								
								<div clas=ptxt1>
									Działania sądowe
								</div>
							</div>
							<div class="ptb1">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p49.png"> 
							</div>
							<div class="pt2">
								
								<div class="pt2img">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p60.png">
									<img class="bullet2" src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p62.png">
								</div>
								
								<div class="ptxt2">
									Ochrona majątku
								</div>
							</div>
							<div class="ptb2">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p49.png">
							</div>
							<div class="pt3">
								<div class="pt3img">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p61.png"> 
									<img class="bullet3" src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p62.png">
								</div>
								
								<div class="ptxt3">
									Osobisty opiekun klienta
								</div>
							</div>
					</div>

				</div>
				<div class="wrappertarczato tarczafinansowa">
					<div class="tarczato1">
						<div class="napisto">
								Tarcza Prawna to:
						</div>
					</div>
					<div class="starcza">
						<div class="set1">
								<div class="kw1">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p63.png">
									<div class="kwtxt1">
										Nielimitowany dostęp do osobistego opiekuna prawnego
									</div>
								</div>
								<div class="kw2">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p64.png">
									<div class="kwtxt2">
										Analiza prawna i finansowa sytuacji
									</div>
								</div>
								<div class="kw3">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p65.png">
									<div class="kwtxt3">
										Skuteczne działania restrukturyzacyjne i mediacje na drodze polubownej
									</div>
								</div>
						</div>
						<div class="set2">
								<div class="kw4">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p66.png"> 
									<div class="kwtxt4">
										Profesjonalna pomoc prawnika w sprawach związanych z zadłużeniem
									</div>
								</div>
								<div class="kw5">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p67.png">
									<div class="kwtxt5">
										Profesjonalna reprezentacja na etepie sądowym 
									</div>	
								</div>
								<div class="kw6">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p68.png"> 
									<div class="kwtxt6">
										Skuteczne działania antywindykacyjne
									</div> 
								</div>
						</div>
						<div class="set3">
								<div class="kw7">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p69.png"> 
									<div class="kwtxt7">
										Profesjonalna pomoc prawnika w sprawach związanych z zadłużeniem
									</div>
								</div>
								<div class="kw8">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p70.png">
									<div class="kwtxt8">
										Profesjonalna reprezentacja na etepie sądowym 
									</div>	
								</div>
								<div class="kw9">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p71.png"> 
									<div class="kwtxt9">
										Skuteczne działania antywindykacyjne
									</div> 
								</div>
						</div>
					</div>
			
			</div>
			<div class="footer foothistoria">
				<div class="footerflex footerhistoria">
					<div class="flex50">
						<div class="tarczadlacb">
										<div>
											<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p1-1.png">
										</div>
						</div>
					</div>
					<div class="flex502">
						<div class="warunki">
										<div class="w1">
											Polityka prywatnościi
										</div>
										<div class="w2">
											Regulamin serwisu
										</div>
										<div class="w3">
											Warunki
										</div>
						</div>
						<div class="Kontaktfooter">
										<div class="Telefon">
											Telefon
										</div>
										<div class="Email">
											E-mail
										</div>
										<div class="konsultant">
											Konsultant ONLINE
										</div>
										<div class="kontaktw">
											Kontakt
										</div>
						</div>
						<div class="społecznosc">
										<div class="Facebook">
											Facebook
										</div>
										<div class="Google+">
											Google+
										</div>
										<div class="Twitter">
											Twitter
										</div>
										<div class="wspolecznosc">
											Społecznosc
										</div>
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


// wp_footer();


?>
</body>
</html>