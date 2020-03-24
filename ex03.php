//Amine EJJORFI

<!DOCTYPE html>
<html>
<head>
	<title>Centrale d'achats</title>
</head>
<body>
	<table border="1px" align="center" >
		<tr align="center">
			<th>Numero de commande</th>
			<th>Numero Client</th>
			<th>Date de commande</th>
			<th>Designation article</th>
			<th>Quantite (Pal)</th>
			<th>Prix unitaire(DH)</th>
			<th>Date de livraison</th>
			<th>Adresse Client</th>
		</tr>	
		 <?php
            $f=fopen("t.txt","r+");
            while($tmp=fgets($f)){
                echo "<tr>";
                foreach(explode(" | ",$tmp) as $a)
                echo "<td>$a</td>";
                echo "</tr>";
            }
        ?>
	</table>
</body>
</html>
