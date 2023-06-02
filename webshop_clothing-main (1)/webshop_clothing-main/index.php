<?php include "config.php";?>
<?php 
include_once 'cart.class.php'; 
$cart = new Cart;


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['ime']);
    header("location: index.php");
  }
?>

<!DOCTYPE html>
<html>
    <head>
          <meta charset="UTF-8">
        <title>Dobrodošli u Fashry</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="/js/homeslideshow.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
         crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
         crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          .lol{
            height:45px;
    width:145px;
    background-color:#6d5454;
    color:white;
    border: 1px solid #FFFFFF;
    text-align:center;
    cursor: pointer;
    font-size: 17px;
    border-radius: 16px;
    font-weight: bold;
    text-decoration: none;
          }
        </style>
  </head>
  <div class="content">
      <!-- notification message -->
       <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
   <?php endif ?>
  
   </div>
    <body>
    <header>
         <div class="homepageheader"> 
         <?php if( isset($_SESSION['ime']) && !empty($_SESSION['ime']) )
           {
          ?>
          <button class="logout" style="color:white;"><a href="index.php?logout='1'" style="color:white;">Odjava</a></button>
	  <button class="logout" style="color:white;"><a href="viewCart.php" style="color:white;">Košarica</a></button>
            <?php }else{ ?>
          <button class="signin" style="color:white;"><a href="signin.php" style="color:white;">Registracija</a></button>
          <button class="login" style="color:white;"><a href="login.php" style="color:white;">Prijava</a></button>
           
            
             <?php } ?>    
         <div class="logo">
             <a href="index.php">
                  <img style=" height: 75px; width: 130px;" src="slike/Fashry.png">
              </a>
          </div>

          <nav clas="izb">
              <ul>
                  <li><a href="index.php" ><i class="fa fa-home"></i> Naslovnica</a></li>
                  <li><a href="#proizvodi" ><i class="fas fa-caret-right"></i> Kategorije</a></li>
                  <li><a href="#onama" ><i class="fab fa-adn"></i> O nama</a></li>
                  <li><a href="#kontakt" ><i class="fa fa-envelope"></i> Kontakt</a></li>
                  <li><a href="adminlogin.php" ><i class="fa fa-gear"></i> Admin</a></li>

              </ul>
            </nav>
      </header>
        
      </div>
       
       
         
       
        <div class="home-welcome">
            <div class="home-welcome-text" style="background-image: url(slike/slika6.png); height: 380px; ">
                <h1 style="margin: 0px;">Dobrodošli u Fashry</h1>
                <h2>Prodaja odjeće</h2>
            </div>
        </div>

        <div class="onama" id="onama"></br></br></br></br>
       
        <div class="row">
              <div class = "column">
                       <div class= "column-left">
                           <img style =" width:400px; height: 550px;" src="slike/plava1a.jpg"></br></br></br></br></br></br>
                          
                        </div>
                        
                             
                 </div>
            <div class="row">
            <div class="column-right">
                <h3 style="text-align:center;" >O nama</h3>
                <p class="anthos">Fashry je robna marka poznata po svojim trendovskim stilovima uz pristupačne cijene. Crpeći inspiraciju iz najnovijih trendova, od uličnog stila do piste, Fashry nudi niz stilova koji odgovaraju djevojkama koje vole modu. Od radne odjeće do uličnog stila, noćnih izlazaka. Kupujte najnoviju kolekciju odjeće iz Fashry.
                Fashry tim je ponosan na isporuku kvalitetne i elegantne odjeće za žene. Kako bismo našim kupcima mogli ponuditi najbolje po najpovoljnijim cijenama, partneri smo s nekoliko vrhunskih marki.
                Fashry robna marka za svaki ukus: haljine, traperice, vojnički stil, kožna odjeća ... Shvaćamo da je ključ našeg uspjeha sretan i zadovoljan kupac. Zato želimo da vaše iskustvo kupovine na našoj web stranici bude ugodno i jednostavno.
                Kvaliteta i stil jako su nam važni Fashry-u, zbog čega velik dio svog vremena posvećujemo pronalaženju pravih proizvoda koje ćemo ponuditi svojim kupcima. Biramo koje su stavke dobre kvalitete kako Vi ne bi morali.
                S našom shemom preporuka u Fashry-u stalno nagrađujemo vjernost kupaca. Nastojimo biti brand koji ćete s ponosom preporučiti svojim prijateljima.
                Želite li biti u stilu bez napora? Ne tražite dalje. Fashry odjeća je za Vas.
                </p>
               </div>
                        
               </div>
        </div>
        <div class="home-prodlist">
        <div class = "kontakt-area" id = "proizvodi">
                
                <div class = "col2-tekst">
                   </br></br>
                    <h2>KATEGORIJE:</h2>
                    <button class="lol" style="color:white;"><a href="majica.php" style="color:white;">Majice</a></button>
          <button class="lol" style="color:white;"><a href="hlace.php" style="color:white;">Hlače</a></button>
                </div>
      </div> 

  <?php if( isset($_SESSION['ime']) && !empty($_SESSION['ime']) )
  
           {?>
          <div class="row">
          <?php
           $result = $con->query("SELECT * FROM proizvod WHERE id>=1 && id<=3 ORDER BY id ASC"); 
           if($result->num_rows > 0){  
               while($row = $result->fetch_assoc()){ 
          ?>
          
          <div class="col-md-3">
          <form method="post" style="margin:auto 200px;">
          <div class="products">
          <img src="<?php echo $row["slika"] ?>" class="img-responsive"style="width:250px; height:300px;">
          <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary" style="background-color:#6d5454; border:none;width:172px; height:44px;line-height:30px;">Dodaj u košaricu</a>
          </div>
          </form>
      </div>
  <?php 
               }
            }
        ?>
        
        </div> 
            <?php }else{ 
          ?>
<div class="row1">
            <div class="column1">
               <img src='slike/sarena1.jpg' alt="Tonik" style="width:100%">
               <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal1">Majica s slikom</button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Majica sa slikom</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                            <div class="rowmod">
                               <div class = "columnmod">
                                  <div class= "columnmod-left">
                                    <img style =" width:150px; height: 300px;" src="slike/sarena1.jpg"></br></br></br></br></br></br>
                          
                                    </div>
                        
                             
                                 </div>
                             
                              <div class="rowmod">
                                 <div class="columnmod-right">
                              
                                   <p class="columnmod-tekst">
                                     <ul>
                                       <li>
                                         <h2 style="font-size:13px">Opis:</h2>
                                         <span style="font-size:12px">-Majica s natpisom.</br> 
                                        - Dugih rukava, okrugli urez.
                                        </span>
                                       </li>
                                       <br>
                                       <li>
                                          </br>
                                         <h2 style="font-size:13px">Cijena:</h2>
                                         <span style="font-size:12px">45.00KM</span>
                                       </li>
                                     </ul>

                                   </p>
                                   </div>
                        
                               </div>
                            </div>
                          </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          <script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
                          <button type="button" class="btn btn-secondary" style="background-color:#6d5454; width:88px;
    height:44px; border-radius:0;" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Morate se registrirati/prijaviti">
                          <i class="fa fa-shopping-cart"></i> Kupi</button>
                          
                       </div>
                       </div>
                     </div>
                   </div>
            </div>
            <div class="column1">
                <img src="slike/kosulja1.jpg" alt="Dnevna" style="width:100%">
                <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal2">Denim košulja</button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Denim košulja</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                       <div class="rowmod">
                               <div class = "columnmod">
                                  <div class= "columnmod-left">
                                    <img style =" width:150px; height: 300px;" src="slike/kosulja1.jpg"></br></br></br></br></br></br>
                          
                                  </div>                           
                                 </div>
                             
                              <div class="rowmod">
                                 <div class="columnmod-right">
                              
                                   <p class="columnmod-tekst">
                                     <ul>
                                       <li>
                                         <h2 style="font-size:13px">Opis:</h2>
                                         <span style="font-size:12px">-Kosulja dugih rukava s preklopnim ovratnikom.<br>
                                          -Iskrizani donji rub. <br>-Kopcanje gumbima sprijeda.
                                           </span>
                                       </li>

                                       <li>
                                          </br>
                                         <h2 style="font-size:13px">Cijena:</h2>
                                         <span style="font-size:12px">37.00KM</span>
                                       </li>
                                     </ul>

                                   </p>
                                   </div>
                        
                               </div>
                            </div>
                       </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          <script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
                          <button type="button" class="btn btn-secondary" style="background-color:#6d5454; width:88px;
    height:44px; border-radius:0;" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Morate se registrirati/prijaviti">
                          <i class="fa fa-shopping-cart"></i> Kupi</button>
                       </div>
                       </div>
                     </div>
                   </div>
            </div>
            <div class="column1">
                <img src="slike/lila1.jpg" alt="Nocna" style="width:100%">
                <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal3">Jakna</button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Jakna</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                       <div class="rowmod">
                               <div class = "columnmod">
                                  <div class= "columnmod-left">
                                    <img style =" width:150px; height: 300px;" src="slike/lila1.jpg"></br></br></br></br></br></br>
                          
                                  </div>                           
                                 </div>
                             
                              <div class="rowmod">
                                 <div class="columnmod-right">
                              
                                   <p class="columnmod-tekst">
                                     <ul>
                                       <li>
                                         <h2 style="font-size:13px">Opis:</h2>
                                         <span style="font-size:12px">-Vodootporna jakna<br>
                                         -Obrezana jakna s visokim ovratnikom<br>
                                         -Boja: ljubičasta/lila.
                                           </span>
                                       </li>
                                       <br>
                                       <li>
                                          </br>
                                         <h2 style="font-size:13px">Cijena:</h2>
                                         <span style="font-size:12px">40.00KM</span>
                                       </li>
                                     </ul>

                                   </p>
                                   </div>
                        
                                   </div>
                            </div>
                       </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          <script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
                          <button type="button" class="btn btn-secondary" style="background-color:#6d5454; width:88px;
    height:44px; border-radius:0;" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Morate se registrirati/prijaviti">
                          <i class="fa fa-shopping-cart"></i> Kupi</button>
                       </div>
                       </div>
                     </div>
                   </div>
                </div>
                  <?php   } ?> 
       </div>
       </br></br>
        
        <div >
            <div class = "kontakt-area" id = "kontakt">
                
                       <div class = "col2-tekst">
                          </br></br>
                           <h2>KONTAKTIRAJTE NAS</h2>
                           <p>Obratite nam se za bilo kakve informacije.</p>
                       </div>
             </div>

           <div class="row2">
              <div class = "column2">
                       <div class= "column2-left">
                           <img style=" height: 75px; width: 130px;" src="slike/Fashry.png">
                           <p> Znamo pružiti najbolju moguću uslugu ikad. Kupci su razlog zašto svi radimo</br>100% Originalni proizvodi</p>
                        </div>
                        
                             
            </div>
            <div class="row2">
                   <div class="column2-right">
                     <h3></br>FASHRY robna marka</h3>
                     <div class= "kont-podaci">
                              <ul>
                                  <li>
                                     <div class="podaci">
                                         <i class="fa fa-home"></i>
                                         <h4>Adresa</h4>
                                         <span>Dubrovačka ulica bb.,Mostar,BIH</span>
                                      </div> 
                                   </li>
                                    </br>
                                  <li>
                                     <div class="podaci">
                                         <i class="fa fa-plane"></i>
                                         <h4>Email</h4>
                                         <span> info@fashry.com</span>
                                      </div> 
                                   </li>
                                   </br>
                                  <li>
                                     <div class="podaci">
                                         <i class="fa fa-phone"></i>
                                         <h4>Telefon</h4>
                                         <span> +999888 </span>
                                     </div> 
                                   </li>   
                                   </br>

                                </ul> 
                         </div>
                  
                    </div>
               </div>
            </div>
            




        </div> 
        <hr class=h>
          <div class="footer">
             <p> Ivona Škobić, Ivona Lozić, Matea Vukšić</p>
          </div>
  
                
    </body>
</html>