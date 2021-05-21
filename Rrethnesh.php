<?php include('header.php');?>
	<link rel="stylesheet" type="text/css" href="css/Rrethnesh.css">
		<script>

	$(document).ready(function(){
		  $("#learn").click(function(){
		    $("#show").slideToggle("slow");
		  });
		});
		</script>

		<style type="text/css">
		#learn {
			font-family: aries;
			font-style: italic;
			max-height: 20px;
			width: 100px;
		padding: 5px;
		text-align: center;
			text-decoration: none;
			font-size: 12px;
		background-color: #e5eecc;
		border-radius:2px;
		margin-left: 60%;
			margin-bottom: 8px;
		}
		#learn:hover {
			font-family: aries;
			height: 20px;
			width: 100px;
			padding: 5px;
			text-align: center;
			text-decoration: none;
			font-size: 12px;
			font-weight: bold;
			background-color: #e5eecc;
			margin-bottom: 8px;
			border-radius:2px;
			margin-left: 60%;
		}
		#show {
			max-width: 1050px;
		padding-left:55px;
		padding-top: 50px;
		display: none;
			text-decoration: none;
			font-size: 1em;
			font-family: arial;
		}
		.hero-text {
			margin-left:700px; 
			margin-bottom:0px;
		}
		#weather {
			padding:5px;
			border-bottom:1px solid gray;
			border-radius:5px;
		}
		#weather:focus{
			outline:none;
		}
		#text {
			padding:5px;
			border-bottom:1px solid #fff;
			border-radius:5px;
		}
</style>

<main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(function($){
	$("#weather").click(function(){
		var city = $("#text").val();
		var key = "27c122470871f6daabe5927910f6da88";
		$.ajax({
			url: 'http://api.openweathermap.org/data/2.5/weather',
			dataType: 'json',
			type: 'GET',
			data: {q: city, appid: key, units: 'metric'},

			success: function(data){
				var x = '';
				$.each(data.weather, function(index, val){
					x += '<p><b>' + data.name + "</b><img src=Images/" + val.icon + ".png></p>" + data.main.temp
					+ '&deg;C' + ' | ' + val.main + ", " + val.description;
				});
				$("#show_weather").html(x);
			}
		});
	});
});
</script>
    <div class="container">

        <div class="main-top">

            <nav>
                <ul>
                    <li>
                        <a href="MainPage.php">
                            HOME
                        </a>
                    </li>
                    <li>
                        <a href="Depertamentet.php">DEPERTAMENTET</a>
                    </li>

                    <li class="active">

                        <a href="Rrethnesh.php">RRETH NESH</a>
                    </li>
                    <li>
                        <a href="Stafi.php">STAFI</a>
                    </li>



                </ul>

            </nav>
        </div>
        <!-- ==================================2========================================= -->

        <!-- **********************************3***************************************** -->
        <div class="maintop1">

            <div class="maintop2">
                <h1 id="logo" title="FAKULTETI I INXHINIERISE ELEKTRIKE DHE KOMPJUTERIKE">FAKULTETI I INXHINIERISE ELEKTRIKE DHE KOMPJUTERIKE</h1>
                <p>
                    <u>FIEK STUDENTS</u>
                </p>
            </div>


        </div>

</div></main>
				
				<!-- ===========================================this webs part====================================== -->
  				<div class="hero-text">
  			  	

   					 <input type="text" id="text" name="text">
   					 <button id="weather">Kerko</button>
  				  <div id="show_weather"></div>
				  </div>
				  <img class="fotoja1" src="Images/fiek.png" alt="tastiere" height="460px" width="1200px" >

				<section class="shkrimi">
					<h3><b>Misioni</b></h3>
					<p>Misioni i FIEK buron nga misioni themelor i Universitetit të Prishtinës “Hasan Prishtina (UP) ”(Neni 6 i Statutit të UP-së, 2012, si institucion publik autonom i arsimit të lartë, që zhvillon arsimim akademik, kërkime shkencore, krijime artistike, këshillime profesionale dhe fusha të tjera të veprimtarive akademike). Bazuar në këtë, FIEK ka definuar misionin e tij në shkollimin e të rinjve në fushën e Inxhinierisë Elektrike dhe Kompjuterike.</p>
					
					</section>
				</div>
			</div>
				<div class="krejtlista">
					<div class="ourservices">
						<h3><i>Sherbimet</i></h3>
					</div>
					<ul list-style="none" id="lista1" >
						<li>Mesim efektiv </li>
						<li>Pune praktike </li>
						<li>Bashkpunim</li>
						<li>Argetim dhe <abbr title="mindfulness">mesim</abbr></li>
					</ul>
					<br><br>
					<div class="comunication">
						<h3><i>Komunikimi me stafin<i></h3>
					</div>
					<ul id="lista2">
						<li>Staf komunikues</li>
						<li>Profesor te njohur nderkombetar</li>
						<li>Staf profesional</li>
						<li>Staf suportues</li>
					</ul>
				</div>
				<canvas id="katrorat" width="50" height="50"></canvas>
				<div class="warranty">
					<figure>
						<img src="Images/students.png" width="480" height="247.5">
						<figcaption>FIEK</figcaption>
					</figure>
					<article>
						<h4>Objektivat</h4>
						<p>Objektivat për zhvillimin e FIEK 2021-2024<br>	
						Sigurimi i cilësisë dhe plotësimi i standardeve akademike, për të fituar akreditimin për të gjitha programet e studimit të ciklit të parë (Bachelor), të ciklit të dytë (Master) dhe të ciklit të tretë të përbashkët (Doktoratës) që do të ofrohen nga FIEK.
                        Mbështetje për zhvillimin dhe fuqizimin e të gjitha departamenteve me profilet përkatëse të stidimeve dhe hulumtimeve. 
						<div id="learn" style="min-height: 20px">Learn more</div>
						<div id="show">
							<p> &raquo These are some of the products that we have a warranty policy for. There are a lot more, but just to give you an idea, refer to the table below.</p><br>		
						</div>
					</article>
				</div>

				
				
			<p></p>


			</main>
			<?php include('footer.php');?>
			
			</body>
		</html>
