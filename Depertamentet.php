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
							        <p>Inxhinieri kompjuterike e quajtur gjithashtu edhe si Inxhinieria e sistemeve kompjuterike, ??sht?? nj?? disiplin?? q?? integron disa fusha t?? inxhinieris?? elektrike dhe shkencat kompjuterike, t?? nevojshme p??r t?? zhvilluar sistemet kompjuterike.Kryesisht kjo deg?? merret me studimin dhe zhvillimin e metodave p??r prodhimin, dizajnimin e pajisjeve kompjuterike. E ka marr?? emrin inxhinieri p??r vet?? faktin se k??tu jan?? p??rmbledhur nj??koh??sisht njohuri p??r hardware-in po ashtu edhe p??r software-in.</p>
						</div>
						</h2>
						<h1  style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:620px;position: absolute;" id="div2"><a name="edyta">ELEKTRONIKA</div></h1>
						</br>
						<h2>
						<div class="rendi1">
							<img src="Images\elektronike.png" class="foto">
							<ul class="ul">
								 <p>Inxhinieria Elektrike shpesh e quajtur Inxhinieria Elektrike dhe Elektronike, ??sht?? nj?? fush?? e inxhinieris?? q?? n?? p??rgjith??si merret me studimin dhe aplikimin e elektricitetit, elektronik??s dhe elektromagnetizmit. ??sht?? nj?? fushe shum?? e gjer?? q?? p??rfshin projektimin dhe studimin e sistemeve t?? ndryshme elektrike dhe elektronike, si?? jan?? qarku elektrik-gjenerator??t elektrik, motor??t elektrik, transformator??t, pajisjet magnetike dhe materialet, pajisjet elektromagnetike dhe elektromekanike, pajisjet elektronike, qarqet elektronike, sistemet elektrike t?? fuqis??, materialet elektronike, fibrat optike, sistemet kompjuterike, radion, televizionin, telefonin??, telekomunikimin, teknologjin?? pa tela, sistemet mikrovale, telefonin?? e l??vizshme, radar??t, komunikimin e t?? dh??nave, rrjetet kompjuterike, nanoteknologjin??, sistemet fotonike, sistemet mikroelektromekanike etj.</p>
						</ul>
					</div>
					</h2>
					<h1  style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:660px;position: absolute;" id="div3"><a name="treta">TELEKOMUNIKACION</a></div></h1>
					</br>
					<h2>
					<div class="rendi1">
						<img src="Images\telekomunikacion.png" class="foto">
						<ul class="ul">
							        <p>Telekomunikacioni ??sht?? transmetimi i informacionit n?? distanca t?? konsiderueshme p??r t?? komunikuar. N?? t?? kaluar??n, telekomunikacioni p??rfshinte p??rdorimin e sinjaleve vizuale, t?? tilla si fener??, sinjale tymi, dhe heliograf optike, apo mesazhe audio n??p??rmjet r??nive t?? daulleve n?? m??nyr?? t?? koduar, dhe shembuj t?? tjer?? t?? ngjajshme. N?? koh??n moderne t?? energjis?? elektrike dhe elektronik??s, telekomunikacioni tani p??rfshin edhe p??rdorimin e pajisjeve elektrike t?? tilla si telegrafi, telefoni, dhe teleshkruesi, p??rdorimin e radio si dhe fibrat optik?? dhe elektronika e tyre e lidhjes, plus p??rdorimin e satelit??ve dhe Interneti.</p>
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
