<?php
/*
Template Name: szablon tarcza-prawna
*/

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<link href="<?php bloginfo('template_directory'); ?>/style/client.css" rel="stylesheet" type="text/css" title="style">
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

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

<body style="background: #f0f0f0;" cz-shortcut-listen="true">



<div id="main_div">
	<div class="tlo2">
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
					<h3 style="" class="show">Darmowa pomoc prawna dla zadłużonych</h3>
					<div class="zostawkontakt">Zostaw swój kontakt a nasza doradca prawny oddzwoni do Ciebie z propozycją rozwiązań</div>
				</div>
				
			</div>
			<div class="kontakt2 kontakt ">
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
	<div class="thirddiv2 tdcdiv2">
			<div class="wrapper1">
				<div class='specjalizujemy'>
						Dobrze, że tutaj jesteś
				</div>
				<div class="przedstawiamy">
							Przedstawiamy Ci jedyną skuteczną tarczę w dzisiejszych ciężkich czasach
				</div>
				<div class="miliony">
					<div class="mobraz1">
							<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/shield-dobrze-ze-jestes-1.png">
					</div>
					<div class="mnapis1">
						<div class="k1">
							Specjalnie dla milionów zadłlużonych Polaków stworzyliśmy Tarczę Prawną, która uchroni także Ciebie w tarapatach finansowych i prawnych.
						</div>
					</div>
				</div>
				<div class="problemy">
					<div class="pobraz1">
							<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/shield-dobrze-ze-jestes-2.png">
					</div>
					<div class="pnapis1">
						<div class="l1">
							Masz problem ze spłatą zobowiązań ? Straszy Cię windykacja ? <br> Chętnie służymy pomocą i to za DARMO
						</div>
					</div>
				</div>
			</div>
		
			<div class="wrapper3">
				<div class="carousel1">
					<div class="s1">
							<div class="i1">
								<img class="o1" src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p14.png">
							</div>
							<div class="z1">
								<div class="t1">
								Działamy na terenie całego kraju
								</div>
							</div>
							<div class="belka">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p24.png">
							</div>
							<div class="podpis">
								<div>
									JULITA Z BARLINKA
								</div>
							</div>
					</div>
					<div class="s2">
							<div div class="i2">
								<img class="o2" src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p15.png">
							</div>
							<div class="z2">
								<div class="t2">
								Darmowa pomoc prawna
								</div>
							</div>
							<div class="belka">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p24.png">
							</div>
							<div class="podpis">
								<div>
									JULITA Z BARLINKA
								</div>
							</div>
					</div>
					<div class="s3">
							<div div class="i3">
								<img class="o3" src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p16.png">
							</div>
							<div class="z3">
								<div class="t3">
								Poleca nas 9/10 klientów
								</div>
							</div>
							<div class="belka">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p24.png">
							</div>
							<div class="podpis">
								<div>
									JULITA Z BARLINKA
								</div>
							</div>
					</div>
					<div class="s4">
						<div div class="i4">
							<img class="o4" src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p17.png">
						</div>
							<div class="z4">
								<div class="t4">
								Finansowanie i konsolidacja
								</div>
							</div>
							<div class="belka">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p24.png">
							</div>
							<div class="podpis">
								<div>
									JULITA Z BARLINKA
								</div>
							</div>

					</div>
					<div class="s5">
							<div div class="i5">
								<img class="o5" src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p18.png">
							</div>
							<div class="z5">
								<div class="t5">
								Zwroty prowizji i poprawa zdolności kredytowej
								</div>
							</div>
							<div class="belka">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p24.png">
							</div>
							<div class="podpis">
								<div>
									JULITA Z BARLINKA
								</div>
							</div>
					</div>
				</div>
			</div>
			<div class="wrapperoszusci">
				<div class="owrapper">
					<div class="opodpis">
							Masz dość nieuczciwych doradców kredytowych, którzy wcisnęli Ci kredyty z lichwiarskimi marżami i opłatami ?
					</div>
					<div class="oopis">
							Po drodze spotkałeś pseudodoradców, którzy obiecywali wiele, a odchodzili z Twoimi pieniędzmi ?
					</div>

					<div class="opictures">
							<div class="op1"> 
								<div class="oimg1">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p33.png">
								</div>
								<div class="ot1">
									<div>
										Oszczędzaj pieniądze
									</div>
								</div>
							</div>
							<div class="op2"> 
								<div class="oimg2">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p34.png">
								</div>
								<div class="ot2">
									<div>
										Skuteczne rozwiązania prawne
									</div>
								</div>
							</div>
							<div class="op3"> 
								<div class="oimg3">
									<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p35.png">
								</div>
								<div class="ot3">
									<div>
										kompleksowa opieka i bezpieczeństwo
									</div>
								</div>
							</div>
					</div>
					<div class="opisyoszusci">
						<div class="oo1">
							Jako jedyna e-kancelaria na rynku oferujemy Ci bezpłatną pomoc prawną. <br>
							Poznaj nas. Zobacz jak działamy i co robimy. Jesteśmy przekonani, że zdobędziemy Twoje zaufanie i zostaniesz z nami aż do ostatecznego rozwiązania Twoich problemów prawnych i finansowych.
						</div>
						<div class="oo2">
							Już teraz skorzystaj z pierwszego miesiąca Tarczy prawnej. Zawsze możesz zrezygnować bez ukrytych kosztów !
						</div>

					</div>
				</div>

			</div>
			
	</div>

	<div class="wrapperDlaczego">
				<div class="dwrapper1">
					<div class="dopis1">

							Dlaczego Tarcza Prawna?
					</div>
					<div class="dmedals1">
							<div class="dgrupa1">
								<div class="dg1">
									<div class="dgi1">
										<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p6.png">
									</div>
									<div class="dgo1">
										<div>Jedyna darmowa oferta pomocy na rynku.</div> 
									</div>
								</div>
								<div class="dg2">
									<div class="dgi2">
										<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p6.png">
									</div>

									<div class="dgo2">
										<div>Doświadczeni prawnicy po TWOJEJ stronie.</div>
									</div>
								</div>
								<div class="dg3">
									<div class="dgi3">
										<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p6.png">
									</div>

									<div class="dgo3">
										<div>Nielimitowany dostęp do osobistego doradcy prawnego</div> 	
									</div>
								</div>
								<div class=dg4>
									<div class="dgi4">
										<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p6.png">
									</div>

									<div class="dgo4">
										<div>Oferta dostosowana do twoich potrzeb</div>
									</div>
								</div>
							</div>
							<div class="dgrupa2">
								<div class="dg5">
									<div class="dgi5">
										<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p6.png">
									</div>

									<div class="dgo5">
										<div>Pomoc na etapie polubownym i sądowym</div>
									</div>
								</div>
								<div class="dg6">
									<div class="dgi6">
										<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p6.png">
									</div>

									<div class="dgo6">
										<div>Skuteczne działania antywindykacyjne</div>
									</div>
								</div>
								<div class="dg7">
									<div class="dgi7">
										<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p6.png">
									</div>

									<div class="dgo7">
										<div>Usuwanie negatywnych wpisów w raportach</div>
									</div>
								</div>
								<div class=dg8>
									<div class="dgi8">
										<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/11/p6.png">
									</div>

									<div class="dgo8">
										<div>Profesjonalna ochrona przed windykacją i egzekucją komorniczą</div>
									</div>
								</div>							

							</div>

						
					</div>
					<div class="dopis2">
								<div class="dopisWrapper">
									<div class="dopis1podpis">
										<div class="dopis2img">
											<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p36.png">
										</div>
										<div class="dopis2txt">
											Naszą misją jest pomoc klientom w problemach ze spłatą zobowiązań. Chcemy podać Ci pomocną dłoń. Służyć wiedzą i doświadczeniem. Tak abyś spłacił swoje zobowiązania z godnością, na raty i bez egzekucji komorniczych i utraty majątku.
										</div>
									</div>
									<div class="dopispodpis">
										<div class="dopisimg">
											<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p36.png">
										</div>
										<div class="dopisimg2">
											<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p37.png">
										</div>
										<div class="dopiszarzad">
											ZARZĄD TARCZY PRAWNEJ
										</div>

									</div>
								</div>
							</div>
				</div>
				<div class="tarcza">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/shield-dlaczego-tarcza-prawna-crop.png">
				</div>

			</div>
			<div class="wrappertarczato">
				<div class="tarczato1">
					<div class="napisto">
							Tarcza Prawna to:
					</div>
				</div>
				<div class="starcza">
					<div class="set1">
							<div class="kw1">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p39.png">
								<div class="kwtxt1">
									Nielimitowany dostęp do osobistego opiekuna prawnego
								</div>
							</div>
							<div class="kw2">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p38.png">
								<div class="kwtxt2">
									Analiza prawna i finansowa sytuacji
								</div>
							</div>
							<div class="kw3">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p40.png">
								<div class="kwtxt3">
									Skuteczne działania restrukturyzacyjne i mediacje na drodze polubownej
								</div>
							</div>
					</div>
					<div class="set2">
							<div class="kw4">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p41.png"> 
								<div class="kwtxt4">
									Profesjonalna pomoc prawnika w sprawach związanych z zadłużeniem
								</div>
							</div>
							<div class="kw5">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p42.png">
								<div class="kwtxt5">
									Profesjonalna reprezentacja na etepie sądowym 
								</div>	
							</div>
							<div class="kw6">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p43.png"> 
								<div class="kwtxt5">
									Skuteczne działania antywindykacyjne
								</div> 
							</div>
					</div>
					<div class="set3">
							<div class="kw7">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p44.png">
								<div class="kwtxt6">
									Ochrona twojego majątku
								</div>
							</div>
					</div>
				</div>
				<div class="podtarcza">
					<div class="ptarcza">
							<div class="pt1">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p46.png">
								<div clas=ptxt1>
									Działania sądowe
								</div>
							</div>
							<div class="ptb1">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p49.png"> 
							</div>
							<div class="pt2">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p47.png">
								<div class="ptxt2">
									Ochrona majątku
								</div>
							</div>
							<div class="ptb2">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p49.png">
							</div>
							<div class="pt3">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p48.png"> 
								<div class="ptxt3">
									Osobisty opiekun klienta
								</div>
							</div>
					</div>

				</div>
			</div>
			<div class="powody">
				<div class="opowody">
					<div class="napispowody">
							9 powodów<br> dla których warto być z nami
					</div>
				</div>
				<div class="potarcza">
					<div class="set21">
							<div class="kw21">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p50.png">
								<div class="kwtxt21">
									Działając z nami masz pewność, że Twoje problemy finansowe zostaną rozwiązane na drodze prawnej, bez egzekucji komorniczej a co za tym idzie taniej i spokojniej. <br> Ponad 78 % klientów do nas trafiających uzyskuje satysfakcjonujące ugody na drodze polubownej i sądowej. 
								</div>
							</div>
							<div class="kw22">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p51.png">
								<div class="kwtxt22">
									Jak wynika z naszych wieloletnich doświadczeń, osoby zadłużone, które zapewniły sobie opiekę prawną, śpią spokojnie. Ich problemy finansowe tak bardzo nie kładą się cieniem na życie prywatne i rodzinne. Nasi klieni są zdrowsi, spokojniejsi i lepiej śpią. My zadbamy odpowiednio o Twoje bezpieczeństwo finansowe. A tobie życzymy świętego spokoju
								</div>
							</div>
							<div class="kw23">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p52.png">
								<div class="kwtxt23">
									Części naszych klientów zaproponujemy rozwiązania refinansowe i konsolidacyjne co pozwoli zakończyć okres życia od "pierwszego" do "pierwszego". Niższe raty to więcej pieniędzy w Twoim portfelu 
								</div>
							</div>
					</div>
					<div class="set22">
							<div class="kw24">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p53.png"> 
								<div class="kwtxt24">
									Opieka za darmo. Zanim zaczniemy współpracę długoterminową, oferujemy Ci bezpłatny pakiet pomocy* <br> Nasz doradca pomoże Ci uporządkować Twoje sprawy finansowe i dokona analizy Twojej bieżącej sytuacji. Jesteśmy po twojej stronie - zrobimy wszystko byś odzyskał finansowy spokój

								</div>
							</div>
							<div class="kw25">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p54.png">
								<div class="kwtxt25">
									Tarcza dla Ciebie to zespół doświadczonych prawników i finansistów, którzy z pasją podchodzą do swojej pracy. To dla Ciebie gwarancja rzetelnie wykonanej usługi na najwyższym poziomie
								</div>	
							</div>
							<div class="kw26">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p55.png"> 
								<div class="kwtxt25">
									Warto być z nami od początku problemów z zadłużeniem aż do szczęśliwego rozwiązania wszystkich Twoich zmartwień. Podstawą skutecznego oddłużania jest systematyczne działanie na każdym etapie kondycji Twoich zobowiązań
								</div> 
							</div>
					</div>
					<div class="set23">
							<div class="kw27">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p56.png"> 
								<div class="kwtxt27">
									Warto nas wybrać bo zapewniamy dyskrecję i zachowujemy w tajemnicy zawodowej wszystkie przekazane nam informacje. Nikogo nie oceniamy - skupiamy się tylko i wyłącznie na finansowej i prawnej stronie twoich kłopotów

								</div>
							</div>
							<div class="kw28">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p57.png">
								<div class="kwtxt28">
								Działamy na terenie całego kraju. Dzięki nowoczesnym technologiom jesteś pod naszą opieką, bez względu na to gdzie się znajdujesz. Twoimi sprawami chętnie zajmiemy się także wtedy, gdy przebywasz za granicami Polski
								</div>	
							</div>
							<div class="kw29">
								<img src="https://tarczadlaciebie.pl/wp-content/uploads/2021/12/p58.png"> 
								<div class="kwtxt29">
									Poza pomocą prawną, u nas zyskasz zawsze zrozumienie, profesjonalizm, zaufanie i pomoc. Nie oceniamy, nie poddajemy się, wierzymy że zawsze jest wyjście nawet z bardzo trudnej sytuacji
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