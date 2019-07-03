<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>etudiant non boursier</title>
</head>
<body>

<h1 class="ml8">
  <span class="letters-container">
    <span class="letters letters-left">Dalal ak jamm</span>
    <span class="letters bang">!</span>
  </span>
  <span class="circle circle-white"></span>
  <span class="circle circle-dark"></span>
  <span class="circle circle-container"><span class="circle circle-dark-dashed"></span></span>
</h1>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
anime.timeline({loop: true})
  .add({
    targets: '.ml8 .circle-white',
    scale: [0, 3],
    opacity: [1, 0],
    easing: "easeInOutExpo",
    rotateZ: 360,
    duration: 1100
  }).add({
    targets: '.ml8 .circle-container',
    scale: [0, 1],
    duration: 1100,
    easing: "easeInOutExpo",
    offset: '-=1000'
  }).add({
    targets: '.ml8 .circle-dark',
    scale: [0, 1],
    duration: 1100,
    easing: "easeOutExpo",
    offset: '-=600'
  }).add({
    targets: '.ml8 .letters-left',
    scale: [0, 1],
    duration: 1200,
    offset: '-=550'
  }).add({
    targets: '.ml8 .bang',
    scale: [0, 1],
    rotateZ: [45, 15],
    duration: 1200,
    offset: '-=1000'
  }).add({
    targets: '.ml8',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1400
  });

anime({
  targets: '.ml8 .circle-dark-dashed',
  rotateZ: 360,
  duration: 8000,
  easing: "linear",
  loop: true
});
</script>
<style>
h1.ml8 {
  font-weight: 900;
  font-size: 4.5em;
  color: #fff;
  width: 3em;
  height: 3em;
}

.ml8 .letters-container {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  bottom: 0;
  height: 1em;
}

.ml8 .letters {
  position: relative;
  z-index: 2;
  display: inline-block;
  line-height: 0.7em;
  right: -0.12em;
  top: -0.2em;
}

.ml8 .bang {
  font-size: 1.4em;
  top: auto;
  left: -0.06em;
}

.ml8 .circle {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 0;
  bottom: 0;
}

.ml8 .circle-white {
  width: 3em;
  height: 3em;
  border: 2px dashed white;
  border-radius: 2em;
}

.ml8 .circle-dark {
  width: 2.2em;
  height: 2.2em;
  background-color: #4f7b86;
  border-radius: 3em;
  z-index: 1;
}

.ml8 .circle-dark-dashed {
  border-radius: 2.4em;
  background-color: transparent;
  border: 2px dashed #4f7b86;
  width: 2.3em;
  height: 2.3em;
}
</style>
<style>

</style>

    <style>
    .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 3px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
    </style>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Formulaire des Étudiants non boursiers</h3>
  <br>

</div>
<div class="container">

<hr>





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">BIENVENUE</h4>
	<p class="text-center">DALAL AK JAMM</p>
	<p>


<br/>

		<a href="etudiantboursier.php" class="btn btn-block btn-twitter"> </i>   Accéder aux étudiants boursier</a>
		<a href="etudiantnonboursier.php" class="btn btn-block btn-facebook"> </i>   Accéder aux étudiants non boursier</a>
        <a href="delete.php" class="btn btn-block btn-twitter"> </i>   Supprimer</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OU</span>
    </p>
	
    <form action="etudiantnonboursier.php" method="POST">
	<div class="form-group input-group">
		<div class="input-group-prepend">

          

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="adresse" class="form-control" placeholder="adresse" type="text">
    </div> <!-- form-group// -->

		 </div>
         <div>
        <input name="matricule" class="form-control" placeholder="matricule" type="number">
        
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="nom" class="form-control" placeholder="nom" type="text">
    </div> <!-- form-group// -->

   

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="prenom" class="form-control" placeholder="prenom" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>email
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+221</option>

		</select>
    	<input name="telephone" class="form-control" placeholder="Numéro de téléphone" type="number">
    </div> <!-- form-group// -->
   
    </div> <!-- form-group// -->                                  
    <div class="form-group">
        <button name="ENVOIE" type="submit" class="btn btn-primary btn-block"> Enregistrer </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Vous etes déja inscrit? <a href="">Identifiez-vous</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>

<br><br>
</article>
</body>
</html>
<?php
echo 'nous sommes le' .date("d/m/Y"). '<br/>';
echo 'il est actuelement' .date("  H:i:s"). '<br/>';
setlocale(LC_TIME,'fr_FR');
echo 'On est le ' .strftime(" %A  %d  %B  %Y"). '<br/>';
$value=0;

ini_set("display_errors",1);
$heure_connexion =17;
if ($heure_connexion<18){
    echo"Passez une bonne journée";
}
else{
    echo"Passez une bonne soirée";
}



$serveur="localhost";
$login="root";
$pass="NOEL2007";

$pdo=new PDO ("mysql:host=$serveur;dbname=Unniversitee",$login,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
echo'Connexion réussie';
// Requête pour tester la connexion

$query = $pdo->query("SELECT * FROM `Etudiantsnonboursiers` ");

$resultat = $query->fetchAll();

//Afficher le résultat dans un tableau

print("<table border=\"1\">");

foreach ($resultat as $key => $variable)
{
print("<tr>");

print("<td>".$resultat[$key]['adresse']."</td>");
print("<td>".$resultat[$key]['matricule']."</td>");
print("<td>".$resultat[$key]['nom']."</td>");
print("<td>".$resultat[$key]['prenom']."</td>");
print("<td>".$resultat[$key]['email']."</td>");
print("<td>".$resultat[$key]['telephone']."</td>");
print("<tr>");
}

print("</table>");
//récupérations des valeurs saisies dans le formulaire
if (isset($_POST['ENVOIE'])){
   

    $adresse=$_POST['adresse'];
    $matricule=$_POST['matricule'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST["email"];
    $telephone=$_POST["telephone"];




//insertion dans la base de données()

$req=$pdo->prepare("INSERT INTO Etudiantsnonboursiers(adresse,matricule,nom,prenom,email,telephone) VALUES(?,?,?,?,?,?)");

$req->execute(array($adresse,$matricule,$nom,$prenom,$email,$telephone));


}
?>