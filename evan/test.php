<?php
echo "<h1 class='hey'>Bonjour, ${_POST['Name']} " . $_POST['lastName'] . "</h1>";

echo "Vous qui habitez au  ${_POST['Ville']} ( ${_POST['Postal']} ) ";

echo "Venant tout droit de la région ${_POST['Région']} ";

echo "<br> Votre Pays est le / la ${_POST['Pays']} " ; 

echo "<br> Votre Numéro de téléphone est le ${_POST['Numéro']} " ;

echo "<br> Et votre Adresse E-Mail est : ${_POST['email']} " ;

echo "<br> Vous avez fait une demande de ceci : ${_POST['Description']}" ;

?>
