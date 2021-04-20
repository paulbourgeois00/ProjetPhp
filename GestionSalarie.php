<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>

	<h2>Bienvenue sur la page de gestion des salariés</h2>

	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Pour ajouter un salarié, cliquez ici !</button>

	<div id="id01" class="modal">
  		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  		<form class="modal-content" action="/action_page.php">
    		<div class="container">
      			<h1>Ajout de salarié</h1>
 	     		<p>Merci de compléter les informations suivantes :</p>
    	  		<hr>
                
                        <label for="nom"><b>Nom</b></label>
      			<input type="text" placeholder="Entrez le nom" name="nom" required>
                
                        <label for="prenom"><b>Prénom</b></label>
      			<input type="text" placeholder="Entrez le prénom" name="prenom" required>
                
                        <label for="email"><b>Email</b></label>
      			<input type="text" placeholder="Entrez l'Email" name="email" required>
                
                        <label for="tel"><b>Telephone</b></label>
      			<input type="text" placeholder="Entrez le numéro de téléphone" name="tel" required>
                
      			
			<label for="Fonction"><b>Fonction</b></label></br>
  	  		<input type="radio" id="Enseignant" name="Enseignant" >
                        <label for="Enseignant">Enseignant</label><br>
                        <input type="radio" id="Personnel Administratif" name="Administratif" >
                        <label for="Administratif">Personnel Administratif</label></br></br>
                           
                        <label for="dEmbauche"><b>Date d'embauche</b></br></label>
                        <input type="date" id="birthday" name="dEmbauche"></br></br>
                       
                        <label for="Contrat"><b>Si l'employé est en CDD, veuillez préciser la durée de son contrat, sinon laissez le champ vide</b></label></b></br>
      			<input type="int" placeholder="Durée du CDD" name="Contrat" required></br>
                        
      			<div class="clearfix">
        			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
        			<button type="submit" class="signupbtn">Enregistrer</button>
      			</div>
                
    		</div>
            
		</form>
        
	</div>
        
        </br></br>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                                                    <!-- Liste des salarié --> 
        
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Pour afficher la liste des salariés, cliquez ici !</button>

	<div id="id02" class="modal">
  		<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  		<form class="modal-content" action="/action_page.php">
    		<div class="container">
      			<h1>Liste des salariés</h1>
 	     		
    	  		<table>
                            <tr>
                                <th>Identifiant numéro :</th>
                                <th>Adresse Mail</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Poste</th>
                                <th>Type de contrat</th>
                                
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <br>
                            </tr>

                        </table>
                
                      
                        
      			<div class="clearfix">
        			<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Fermer</button>
        			
      			</div>
                
    		</div>
            
		</form>
        
	</div>
        </br>        
                
                
                
                
                
        
                                             <!-- Supprimer un salarié -->                               
                                                            
        <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Pour supprimer un salarié, cliquez ici !</button>
	<div id="id03" class="modal">
  		<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
  		<form class="modal-content" action="/action_page.php">
    		<div class="container">
      			<h1>Suppression d'un salarié</h1>
                        <p>Merci de saisir l'identifiant du salarié que vous souhaitez supprimer.</br> Vous trouverez l'identifiant correspondant à l'employé en cliquant sur le bouton "Liste des salariés" sur la page précédente</p>
    	  		<hr>
                

                        
                   
                       
                        <label for="IdSalarie"><b>Identifiant du salarié à supprimer de la base :</b></label></b></br>
      			<input type="int" placeholder="Identifiant" name="IdSalarie" required></br>
                        
      			<div class="clearfix">
        			<button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Annuler</button>
        			<button type="submit" class="signupbtn">Effacer de la base</button>
      			</div>
                
    		</div>
            
		</form>
        
	</div>
                
	<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
    	if (event.target == modal) {
    		modal.style.display = "none";
  		}
	}
	</script>

</body>
</html>
