<?php include('header.php');?>
<link rel="stylesheet" type="text/css" href="css/Depertamentet.css">

		<script>
		$(document).ready(function(){
		$("h2").click(function(){
		$(this).hide();
		});
		});
		$(document).ready(function(){
		$("#button1").click(function(){
			$("#div1").animate({right: '30px'});
		});
		});
		$(document).ready(function(){
		$("#button2").click(function(){
		$("#div2").animate({right: '30px'});
		});
		});
		$(document).ready(function(){
		$("#button3").click(function(){
		$("#div3").animate({right: '30px'});
		});
		});
		</script>
	</head>
	<body>






<!-- ****************************************2************************************************* -->

<main>

    <div class="container">

        <div class="main-top">
            <nav>
                <ul>
                    <li>
                        <a href="MainPage.php">
                            HOME
                        </a>
                    </li>

                    <li  class="active">
                        <a href="Depertamentet.php">DEPERTAMENTET</a>
                    </li>
                    <li>
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

				<h1 class="box2" style="margin-left: 15px; padding-top:10px" ><div style="background:#ff0000 ;height:50px;width:1112px; margin-left:20px">DEPERTAMENTET</div></h1>
				<div style="padding: 30px">
					<button id="button1"><a href="#epara" style="text-decoration:none">
						</br><p class="box1">INXHINIERI KOMPJUTERIKE &#9658;</p></a>
						</button>
						<button id="button2"><a href="#edyta" style="text-decoration:none">
							</br><p class="box1a">ELEKTRONIKE &#9658;</p></a>
							</button>
							<button id="button3"><a href="#treta" style="text-decoration:none">
								</br><p class="box1b">TELEKOMUNIKACION &#9658;</p></a>
								</button>
							</div>
							<h1  style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:620px;position: absolute; "  id="div1"><a  name="epara">INXHINIERIKE KOMPJUTERIKE</a></div></h1>
							</br>
							<h2>
							<div class="rendi1">
								<img src="Images\inxhinierikompjuterike.png" class="foto">
								<ul class="ul">
							        <p>Inxhinieri kompjuterike e quajtur gjithashtu edhe si Inxhinieria e sistemeve kompjuterike, është një disiplinë që integron disa fusha të inxhinierisë elektrike dhe shkencat kompjuterike, të nevojshme për të zhvilluar sistemet kompjuterike.Kryesisht kjo degë merret me studimin dhe zhvillimin e metodave për prodhimin, dizajnimin e pajisjeve kompjuterike. E ka marrë emrin inxhinieri për vetë faktin se këtu janë përmbledhur njëkohësisht njohuri për hardware-in po ashtu edhe për software-in.</p>
						</div>
						</h2>
						<h1  style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:620px;position: absolute;" id="div2"><a name="edyta">ELEKTRONIKA</div></h1>
						</br>
						<h2>
						<div class="rendi1">
							<img src="Images\elektronike.png" class="foto">
							<ul class="ul">
								 <p>Inxhinieria Elektrike shpesh e quajtur Inxhinieria Elektrike dhe Elektronike, është një fushë e inxhinierisë që në përgjithësi merret me studimin dhe aplikimin e elektricitetit, elektronikës dhe elektromagnetizmit. Është një fushe shumë e gjerë që përfshin projektimin dhe studimin e sistemeve të ndryshme elektrike dhe elektronike, siç janë qarku elektrik-gjeneratorët elektrik, motorët elektrik, transformatorët, pajisjet magnetike dhe materialet, pajisjet elektromagnetike dhe elektromekanike, pajisjet elektronike, qarqet elektronike, sistemet elektrike të fuqisë, materialet elektronike, fibrat optike, sistemet kompjuterike, radion, televizionin, telefoninë, telekomunikimin, teknologjinë pa tela, sistemet mikrovale, telefoninë e lëvizshme, radarët, komunikimin e të dhënave, rrjetet kompjuterike, nanoteknologjinë, sistemet fotonike, sistemet mikroelektromekanike etj.</p>
						</ul>
					</div>
					</h2>
					<h1  style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:660px;position: absolute;" id="div3"><a name="treta">TELEKOMUNIKACION</a></div></h1>
					</br>
					<h2>
					<div class="rendi1">
						<img src="Images\telekomunikacion.png" class="foto">
						<ul class="ul">
							        <p>Telekomunikacioni është transmetimi i informacionit në distanca të konsiderueshme për të komunikuar. Në të kaluarën, telekomunikacioni përfshinte përdorimin e sinjaleve vizuale, të tilla si fenerë, sinjale tymi, dhe heliograf optike, apo mesazhe audio nëpërmjet rënive të daulleve në mënyrë të koduar, dhe shembuj të tjerë të ngjajshme. Në kohën moderne të energjisë elektrike dhe elektronikës, telekomunikacioni tani përfshin edhe përdorimin e pajisjeve elektrike të tilla si telegrafi, telefoni, dhe teleshkruesi, përdorimin e radio si dhe fibrat optikë dhe elektronika e tyre e lidhjes, plus përdorimin e satelitëve dhe Interneti.</p>
					</ul>
				</div>
				</h2>
			<?php
			include ('FileReader.php');
			$emrifile = 'FileReader.txt';
      		$File=new FileReader( $emrifile);
      		$File->shtoTekst("FileReader.txt","Ne jemi grupi qe ka krijuar Website per FAKULTETIN E INXHINIERISE ELEKTRIKE DHE KOMPJUTERIKE");
			?>
			</main>
			<?php include('footer.php');?>
			</body>
		</html>
