<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style type="text/css">
         @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

         nav{
    margin-left:-2%;
    margin-top: -2%;
    margin-bottom: 2%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    background-color: #ffffff;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2);
    padding: 0px 5%;
}
nav ul{
    display: flex;
}
 nav ul li{
    margin: 30px;
    font-family:sans-serif;
    color: #505050;
    font-size: 17px;
    font-weight: 700;
 }
 .active{
     font-weight: bold;
     color:#2d2a2a;
    }
nav ul li a {
  color: black;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
  
}
nav ul li a.active,
nav ul li a:hover{
  color: #111;
  background: #9b7eeb;
} 


nav .menu-btn i{
  color: black;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
.logo{
   margin-left: -35px
   
}

/* The dropdown container */
.dropdown {
  margin-top: 20px;
  float: left;
  overflow: hidden;
  font-family:sans-serif;

}

/* Dropdown button */
.dropdown .dropbtn {
  color: black;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 4px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
  border:none!important;
  background-color: white!important;
  font-family:Poppins!important;
  
}
.dropbtn:hover{
  color: #111;
  background: #9b7eeb!important;
} 

/* Dropdown content (hidden by default) */
.dropdown-content {
  color:black;
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
      </style>
   </head>
   <body>
      <nav>
         <div  class="logo">
         <a href="menu.php"><img src="img/logo.jpg"></a>
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
         <li><a href="./menu.php">Menu</a></li>
                <li><a href="./livros.php"> Livros</a></li>
                <li><a href="./leitores.php" > Leitores </a></li>
                <li><a href="./emprestimo.php" title="">Empréstimo</a></li>
               <br>
               <br>
               <div>
                 <div class="dropdown">
                   <button class="dropbtn">Lista</button>
                   <div class="dropdown-content">
                    <a href="./lista_livros.php">Lista de livros</a>
                    <a href="./lista_leitores.php">Lista de leitores</a>
                    <a href="./lista_emprestimos.php">Lista de empréstimos</a>
                    </div>
                  </div>
</div>
                
                <li><a href="./login.php" title="">Sair</a></li>
         </ul>
      </nav>
      
   </body>
</html>