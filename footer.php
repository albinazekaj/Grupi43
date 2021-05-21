
<footer>

  <div class="footer">
    <div class="widthi">
      <div class="aboutus">
        <p style="margin-top: auto;" class="position">FIEK</p>
        <img src="Images/logo.png" width="215px" height="90px" class="imgborder" >
        <p class="p1">
         Fakulteti i Inxhinierisë Elektrike dhe Kompjuterike  (FIEK) është ngritur mbi themelet e Shkollës së Lartë Teknike, e cila ka filluar të punojë në Prishtinë si institucion profesional për drejtimin e Ndërtimtarisë, Elektroteknikës dhe Makinerisë, më 20 tetor 1961. Më 1965, Këshilli Ekzekutiv i Kosovës miratoi Ligjin për themelimin e Fakultetit Teknik me Seksionin e Ndërtimtarisë. Fakulteti ia filloi punës më 9 dhjetor 1965. 
        </p>
      </div>
    </div>
    <div class="widthi">
      <div class="quick">
        <p class="position">KETU MUND T'I BLENI KETO LIBRA</p>
        <a href="https://www.amazon.de/-/en/Y-Daniel-Liang/dp/0136520154/ref=sr_1_1?dchild=1&keywords=introduction+to+java+programming&qid=1620868507&sr=8-1" target="_blank">&raquo; MATEMATIKA 1</a>
        <hr class="viza">
        <a href="https://www.amazon.de/-/en/Y-Daniel-Liang/dp/0136520154/ref=sr_1_1?dchild=1&keywords=introduction+to+java+programming&qid=1620868507&sr=8-1" target="_blank">&raquo; MATEMATIKA 2</a>
        <hr class="viza">
        <a href="https://www.amazon.com/Toysmith-331-Deluxe-Zen-Garden/dp/B00005OUHD?ref_=fsclp_pl_dp_3" target="_blank">&raquo; MATEMATIKA 3K</a>
        <hr class="viza">
        <a href="https://www.amazon.de/-/en/Y-Daniel-Liang/dp/0136520154/ref=sr_1_1?dchild=1&keywords=introduction+to+java+programming&qid=1620868507&sr=8-1" target="_blank">&raquo; ALGORITME DHE STRUKTURA E TE DHENAVE</a>
        <hr class="viza">
        <a href="https://www.amazon.de/-/en/Y-Daniel-Liang/dp/0136520154/ref=sr_1_1?dchild=1&keywords=introduction+to+java+programming&qid=1620868507&sr=8-1" target="_blank">&raquo; FIZIKA 1 </a>
        <hr class="viza">
        <a href="https://www.amazon.de/-/en/Y-Daniel-Liang/dp/0136520154/ref=sr_1_1?dchild=1&keywords=introduction+to+java+programming&qid=1620868507&sr=8-1" target="_blank">&raquo; FIZIKA 2</a>
        <hr class="viza">
        <a href="https://www.amazon.de/-/en/Y-Daniel-Liang/dp/0136520154/ref=sr_1_1?dchild=1&keywords=introduction+to+java+programming&qid=1620868507&sr=8-1" target="_blank">&raquo; MENAXHIMI I PROJEKTEVE</a>
        <hr class="viza">
        <a href="https://www.amazon.de/-/en/Y-Daniel-Liang/dp/0136520154/ref=sr_1_1?dchild=1&keywords=introduction+to+java+programming&qid=1620868507&sr=8-1" target="_blank">&raquo;  INTRODUCTION TO JAVA PROGRAMMING</a>
        <hr class="viza">
        <a href="https://www.amazon.de/-/en/Y-Daniel-Liang/dp/0136520154/ref=sr_1_1?dchild=1&keywords=introduction+to+java+programming&qid=1620868507&sr=8-1" target="_blank">&raquo; QARQET DIGJITALE </a>
        <hr class="viza">
        <a href="https://www.amazon.de/-/en/Y-Daniel-Liang/dp/0136520154/ref=sr_1_1?dchild=1&keywords=introduction+to+java+programming&qid=1620868507&sr=8-1" target="_blank">&raquo; PHP INTRODUCTION BOOK</a>
        <hr class="viza">
      </div>
    </div>
    <br>
    <div class="widthi">
      <div class="blogpost">
        <p class="position">DATAT E RENDESISHME<p>
          <h3 style="margin-bottom: 0px;"><b>17 Shkurti</b></h3>
          <address class="admin">Dta e Pavarsise se Kosoves<br>
          Monday,17th February 2008</address>
          <p>Kjo eshte dita kur eshte shpalluar Pavarsia e Kosoves me 17 Shkurt te vitit 2008 dhe per kete arsye kjo eshte dite pushimi ne fakultetin tone</p>
          <h3 style="margin-bottom: 0px;"><b>Seminari i parë shkencor në Fakultetin e Inxhinierisë Elektrike dhe Kompjuterike (FIEK)</b></h3>
         
          <br> Friday,28th December  2020</address>
          <p>Qëllimi i këtij seminari shkencorë ishte që të kontribuojë në ndërkombëtarizimin e studimeve dhe hulumtimeve që ofrohen në kuadër të FIEK, krijimin e urave lidhëse me shtetet dhe universitetet prestigjioze botërore gjë që është edhe një obligim kombëtar, për të mbështetur studimet e inxhinierisë elektrike dhe kompjuterike.</p>
        </div>
      </div>
        <?php
        include ('email.php');
        ?>
      <div class="widthi cFrm">
        <div class="contact">
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p class="position">CONTACT US</p>
            <input type="text" name="Person" placeholder="Your name" class="name"><br>
            <input type="text" name="Email" placeholder=" filanfisteku@student.uni-pr.edu" class="email"><br>
            <input type="text" name="Subject" placeholder="subject" class="subject"><br>
            <textarea type="textarea" rows="10" name="comment" placeholder="Message" class="message"></textarea><br>
            <input type="submit" name="submit" value="SUBMIT" class="submit"><br><br>

           </form>
        </div>
      </div>
    </div>
  </footer>

  <div class="copy">
    <div class="container">
      <p>&copy;Copyright FIEK's world - All rights reserved </p>
    </div>
  </div>
