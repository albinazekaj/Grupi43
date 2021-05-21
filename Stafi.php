<?php include('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/mainPage.css">

<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
}
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
    padding: 2px 16px;
}
#admin {
    margin: 5%;
    border: 1px solid gray;
    padding: 8px;
}
h1 {
    text-align: center;
    text-transform: uppercase;
    opacity: 0.9;
    color: #088A4B;
}
p {
    letter-spacing: 3px;
}
#formstyle{
    height: 50px;
    width: 500px;
    background-color: #ccc;
    color: #2e2e2e;
    font-size: 22px;
    text-align: center;
    font-family: 'Teko', sans-serif;
}
.personeli{
    font-size: 14px;
    background-color: white;

}
</style>


   <script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>

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

                    <li>
                        <a href="Depertamentet.php">DEPARTAMENTET</a>
                    </li>
                    <li>
                        <a href="Rrethnesh.php">RRETH NESH</a>
                    </li>
                    <li class="active">
                        <a href="Stafi.php">STAFI</a>
                    </li>
                </ul>
            </nav>


        <div class="maintop1">
            <div class="maintop2">
                <h1 id="logo" title="Crystalized Mind">FAKULTETI I INXHINIERISE ELEKTRIKE DHE KOMPJUTERIKE</h1>
                <p><u>FIEK STUDENTS</u></p>
            </div>
        </div>
    </div>
    <br>
</div>
    <section class="small-banner partners-banner">
       
    <section class="our-costumers text-center section-padding grey-background">
        <div class="container">
             <section class="our-team-section text-center">
                    <div class="container">
                        <h1 class="main-title">Ky eshte stafi yne</h1>
                        <p class="about-us-p">Ne kemi nje staf te shkelqyer dhe shum te suksesshem</p>
                        <div class="our-team">

                             <div class="team-member text-center">
                                <div class="member-image">
                                    <img src="Images/shqipelohaj.png">
                                </div>
                                <div class="member-info">
                                    <h4>Shqipe Lohaj</h4>
                                    <p class="position">Profesoreshe e asocuar</p>
                                </div>
                            </div>

                            <div class="team-member text-center">
                                <div class="member-image">
                                    <img src="Images/qefseredokogjonbalaj.png">
                                </div>
                                <div class="member-info">
                                    <h4>Qefsere DOKO Gjonbalaj</h4>
                                    <p class="position">Profesoreshe e asocuar</p>
                                </div>
                            </div>

                             <div class="team-member text-center">
                                <div class="member-image">
                                    <img src="Images/isakshabani.png">
                                </div>
                                <div class="member-info">
                                    <h4>Isak Shabani</h4>
                                    <p class="position">Profesor i asocuar</p>
                                </div>
                            </div>

                           
                              <div class="team-member text-center">
                                <div class="member-image">
                                    <img src="Images/valonraca.png">
                                </div>
                                <div class="member-info">
                                    <h4>Valon Raca</h4>
                                    <p class="position">Asistent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


        </div>
<div id="admin">
<form>
<select name="users" id="formstyle" onchange="showUser(this.value)">
<option class="personeli" value="">𝑶𝒖𝒓 𝑺𝒕𝒂𝒇𝒇:</option>
<option class="personeli" value="1000">Shqipe Lohaj</option>
<option class="personeli" value="1001">Qefsere DOKO Gjonbalaj</option>
<option class="personeli" value="1002">Isak Shabani</option>
<option class="personeli" value="1003">Valon Raca</option>


</select>
</form>
<br>
<div id="txtHint"><b>Ketu mund te gjeni informacionet ne lidhje me stafin tone</b></div>
</div>
</center>


<!-- </section> -->
</main>
 <?php include('footer.php');?>
</body>
</html>
