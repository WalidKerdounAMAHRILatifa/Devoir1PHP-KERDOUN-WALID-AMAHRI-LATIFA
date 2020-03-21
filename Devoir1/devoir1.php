

                                                <!-- BINOME : KERDOUN WALID && AMAHRI LATIFA -->



                                                        <!-- /////Exercise 1///////// -->
<!DOCTYPE html>
<head>
    <title> Exercise 1,2,3 Devoir1</title>
</head>
<style>

        * {
    box-sizing: border-box;
    }
    .row {
    display: flex;
    }
    .column {
    flex: 33.33%;
    padding: 5px;
    }
    h1{
        text-align: center;
    }
    table, td {
        margin: auto;
        text-align: center;
        border: 1px solid black;
    }
    th{
        margin: auto;
        text-align: center;
        border: 1px solid black;
        background-color: #CCCAFE;
    }

</style>
<body>
    <br><br> <h1 style="text-align:center;"> Delice des Fruits et Legumes </h1> <br><br><br><br><br><br><br><br>   

    <div class="row">
        <div class="column">
        <?php
            $delice = ["Fruit_Legumes/deliceFruits2.jpg","Fruit_Legumes/deliceFruits3.jpg","Fruit_Legumes/deliceFruits4.jpg","Fruit_Legumes/deliceLegumes1.jpg","Fruit_Legumes/deliceLegumes2.jpg","Fruit_Legumes/deliceLegumes3.jpg"];
            for($i=0; $i<3; $i++)
            {
                shuffle($delice);         
                echo '<img src="'.$delice[$i].'" style="width:33%; height:60%;">'." ";  
            }
        ?>
        </div>
    </div><br><br><br>

                                                        <!-- ////// Exercise 2 ///////// -->
    <h1> Recuperation des Champs Depuis un Fichier .txt</h1><br><br>
    <table>
        <?php
            $fp = fopen("ligneCommande.txt","r");
            $tab=array();
            $i=0;
            while( !feof($fp) )
            {
                $tab[$i]=fgets($fp);
                $i++;
            }
            foreach ($tab as $ligne) {
                echo '<tr>';
                echo '<td>'.$ligne.'</td>';
                echo '</tr>';
            }
        ?>
    </table><br><br><br><br><br><br><br><br><br>


                                                            <!-- ////// Exercise 3 ///////// -->
    <h1 style="text-align: left;"> Centrale d'achats</h1>
    <h2> Commande Clients</h2><br><br>
    <table>
        <tr>
            <th> Numero de Commande </th>
            <th> Numero de Client </th>
            <th> Date de Commande </th>
            <th> Designation Article </th>
            <th> Quantite (PAL) </th>
            <th> Prix Unitaire (DH) </th>
            <th> Date de Livraison </th>
            <th> Adresse Client </th>
        </tr>
        <?php
            $fp1 = fopen("ligneCommandes.txt","r");
            while( $ligne1 = fgets($fp1) )
            {
                $tab1 = explode('|',$ligne1);

                echo '<tr>';
                    echo '<td>'.$tab1[0].'</td>';
                    echo '<td>'.$tab1[1].'</td>';
                    echo '<td>'.$tab1[2].'</td>';
                    echo '<td>'.$tab1[3].'</td>';
                    echo '<td>'.$tab1[4].'</td>';
                    echo '<td>'.$tab1[5].'</td>';
                    echo '<td>'.$tab1[6].'</td>';
                    echo '<td>'.$tab1[7].'</td>';
                echo '</tr>';
            }
        ?>
    </table><br><br>
</body>
</html>