<?php
/*
Template Name: szablon polityka
*/

?>

<?php get_header(); ?>


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
	<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/sluchawka.png" alt="zadzwoń do nas"></a>
</div>

<script language="javascript">
	//$("#side_contact_icon").appendTo("BODY");
</script>


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
			<a href="https://tarczadlaciebie.pl/#zamow_kontakt_na_tle_div"><h3 class="tekst">FORMULARZ</h3></a>
		</div>

	</div>
</div>



<?php get_footer() ?>