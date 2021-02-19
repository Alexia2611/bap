<?php

function affichageTitreIndex()
{
    echo '<div class="row">
            <div class="titre align-items-center justify-content-center">
            <h1>Berth Allocation Problem</h1>
            
            
            <div class="justify-content-center">
            <div class="row py-2">
                  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #457B9D;">
                    <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav navigation align-items-center justify-content-center">
                      <li><a class="nav-item nav-link active" href="index.php">Accueil<span class="sr-only">(current)</span></a></li>
                      <li><a class="nav-item nav-link" href="comparaison.php"><navtype>Comparaison des méthodes de tri</navtype></a></li>
                      <li><a class="nav-item nav-link" href="instances.php"><navtype>Contenu des instances</navtype></a></li>
                      <li><a class="nav-item nav-link" href="resultats.php"><navtype>Résultats finaux</navtype></a></li>
                    </div>
                    </div>
                    </div>
                  </nav>
          </div>
        </div>
        </div>
   </div>';

}
function affichageTitreComparaison()
{
    echo '<div class="row">
            <div class="titre align-items-center justify-content-center">
            <h1>Berth Allocation Problem</h1>
            
            
            <div class="justify-content-center">
            <div class="row py-2">
                  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #457B9D;">
                    <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav navigation align-items-center justify-content-center">
                      <li><a class="nav-item nav-link" href="index.php">Accueil</a></li>
                      <li><a class="nav-item nav-link active" href="comparaison.php">Comparaison des méthodes de tri<span class="sr-only">(current)</span></a></li>
                      <li><a class="nav-item nav-link" href="instances.php"><navtype>Contenu des instances</navtype></a></li>
                      <li><a class="nav-item nav-link" href="resultats.php"><navtype>Résultats finaux</navtype></a></li>
                    </div>
                    </div>
                    </div>
                  </nav>
          </div>
        </div>
        </div>
   </div>';

}
function affichageTitreInstances()
{
    echo '<div class="row">
            <div class="titre align-items-center justify-content-center">
            <h1>Berth Allocation Problem</h1>
            
            
            <div class="justify-content-center">
            <div class="row py-2">
                  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #457B9D;">
                    <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav navigation align-items-center justify-content-center">
                      <li><a class="nav-item nav-link" href="index.php">Accueil</a></li>
                      <li><a class="nav-item nav-link" href="comparaison.php">Comparaison des méthodes de tri</a></li>
                      <li><a class="nav-item nav-link active" href="instances.php">Contenu des instances<span class="sr-only">(current)</span></a></li>
                      <li><a class="nav-item nav-link" href="resultats.php"><navtype>Résultats finaux</navtype></a></li>
                    </div>
                    </div>
                    </div>
                  </nav>
          </div>
        </div>
        </div>
   </div>';

}

function affichageTitreResultats()
{
    echo '<div class="row">
            <div class="titre align-items-center justify-content-center">
            <h1>Berth Allocation Problem</h1>
            
            
            <div class="justify-content-center">
            <div class="row py-2">
                  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #457B9D;">
                    <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav navigation align-items-center justify-content-center">
                      <li><a class="nav-item nav-link" href="index.php">Accueil</a></li>
                      <li><a class="nav-item nav-link" href="comparaison.php">Comparaison des méthodes de tri</a></li>
                      <li><a class="nav-item nav-link" href="instances.php">Contenu des instances</a></li>
                      <li><a class="nav-item nav-link active" href="resultats.php">Résultats finaux<span class="sr-only">(current)</span></a></li>
                    </div>
                    </div>
                    </div>
                  </nav>
          </div>
        </div>
        </div>
   </div>';

}


function affichageContenu()
{
    echo "<div id =\"contenu\">
    <br>
    <form method=\"post\" action=\"index.php\">
     <p>
        <h2>Choix de la méthode de tri : </h2>
        <div class=\"form-check form-check-inline\">
          <input class=\"form-check-input\" type=\"radio\" name=\"choixtri\" id=\"inlineRadio1\" value=\"nontriee\" checked>
          <label class=\"form-check-label\" for=\"inlineRadio1\">Instance non triée</label>
        </div>
        <div class=\"form-check form-check-inline\">
          <input class=\"form-check-input\" type=\"radio\" name=\"choixtri\" id=\"inlineRadio2\" value=\"triA\">
          <label class=\"form-check-label\" for=\"inlineRadio2\">Tri selon l'ordre d'arrivée</label>
        </div>
        <div class=\"form-check form-check-inline\">
          <input class=\"form-check-input\" type=\"radio\" name=\"choixtri\" id=\"inlineRadio3\" value=\"triT\">
          <label class=\"form-check-label\" for=\"inlineRadio3\">Tri selon la durée de traitement</label>
        </div>
        <div class=\"form-check form-check-inline\">
          <input class=\"form-check-input\" type=\"radio\" name=\"choixtri\" id=\"inlineRadio3\" value=\"triL\">
          <label class=\"form-check-label\" for=\"inlineRadio3\">Tri selon la taille du bateau</label>
        </div>

    </p>
    <br><br><br>
    <p>
        <h2>Choix de la méthode de résolution: </h2>
        <div class=\"form-check form-check-inline\">
          <input class=\"form-check-input\" type=\"radio\" name=\"choixmethode\" id=\"inlineRadio1\" value=\"hc\" checked>
          <label class=\"form-check-label\" for=\"inlineRadio1\">Heuristique de construction</label>
        </div>
        <div class=\"form-check form-check-inline\">
          <input class=\"form-check-input\" type=\"radio\" name=\"choixmethode\" id=\"inlineRadio2\" value=\"ho\">
          <label class=\"form-check-label\" for=\"inlineRadio2\">Heuristique d'ordonnancement</label>
        </div>
    </p>
    <br><br><br>
     <p>
        <h2>Choix de la méthode d'optimisation (seulement pour le tri selon l'ordre d'arrivée) : </h2>
        <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"choixopti\" id=\"inlineRadio2\" value=\"aucune\">
            <label class=\"form-check-label\" for=\"inlineRadio2\">Aucune</label>
        </div>
        <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"choixopti\" id=\"inlineRadio2\" value=\"ds\">
            <label class=\"form-check-label\" for=\"inlineRadio2\">Descente stochastique</label>
        </div>
        <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"choixopti\" id=\"inlineRadio3\" value=\"grasp\">
            <label class=\"form-check-label\" for=\"inlineRadio3\">GRASPxELS</label>
        </div>
     </p>
    <br><br><br>
    <li><h2>Choix de l'instance à tester :</h2></li>
    <li> <select class=\"form-select\" aria-label=\"Default select example\" name=\"instances\">
      <option selected>Veuillez choisir une instance</option>
      <option value=\"1\">Ernst_16_1_2c_Noon_3c_0</option>
      <option value=\"2\">Ernst_16_1_2c_Uniform_3c_0</option>
      <option value=\"3\">Ernst_16_1_Uniform_Noon_5_0</option>
      <option value=\"4\">Ernst_16_1_Uniform_Noon_16_0</option>
      <option value=\"5\">Ernst_16_1_Uniform_Uniform_5_0</option>
      <option value=\"6\">Ernst_18_1_2c_Noon_3c_0</option>
      <option value=\"7\">Ernst_18_1_2c_Uniform_3c_0</option>
      <option value=\"8\">Ernst_18_1_Uniform_Noon_5_0</option>
      <option value=\"9\">Ernst_18_1_Uniform_Noon_16_0</option>
      <option value=\"10\">Ernst_18_1_Uniform_Uniform_5_0</option>
    </select></li>
            <br>
            <br>
            <br>
            <div class=\"row justify-content-center align-items-center\">
            <button type=\"submit\" class=\"btn btn-outline-dark\">Calcul du Makespan</button>
            </div>
           </form>
    
    </div>";
}

function affichageContenuComparaison()
{
    echo '<div id="contenu2"> 
    <br>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
        <p> Résultats pour l\'heuristique de construction</p>
        <img src="graphe%20HC.png" width="95%">
        </div>
        <div class="col-lg-6 col-sm-12">
        <p> Résultats pour l\'heuristique d\'ordonnancement</p>
        <img src="graphe%20HO.png" width="95%">
        </div>
    </div>
    </div>';
    echo'<br>
    
    <div id="tableau1">
    <br>
    <div class="row align-items-center justify-content-center">
        <p>Comparaison du Makespan Moyen en fonction de la méthode de tri et de l\'heuristique utilisée</p>
        <table>
            <tr style="background-color: #457B9D">
                <td>Heuristique</td>
                <td>Instance non triée</td>
                <td>Tri selon l\'ordre d\'arrivée</td>
                <td>Tri selon le temps de traitement</td>
                <td>Tri selon la taille des bateaux</td>
                <td>Makespan total moyen</td>
            </tr>
            <tr style="background-color: #77ABBD">
                <td>De construction</td>
                <td>247</td>
                <td>212,4</td>
                <td>257,1</td>
                <td>279,5</td>
                <td>249</td>
            </tr>
            <tr style="background-color: #90C3CD">
                <td> D\'ordonnancement</td>
                <td>240,2</td>
                <td>209,2</td>
                <td>256,3</td>
                <td>279,9</td>
                <td>246,5</td>
            </tr>
        </table>
        <br>
        <h3>On peut ainsi en déduire que la méthode de tri la plus efficace est celle de tri selon l\'ordre d\'arrivée. <br>
        Ensuite on peut remarquer que l\'heuristique d\'ordonnancenement donne de meilleurs résultats sur toutes les méthodes de tri que l\'heuristique de construction.
        </h3>
</div>
</div>
<br>';
}

function affichageContenuInstances()
{
    echo '<div id="contenu3"> 
<div id="tableau2">
    <br>
    <div class="row align-items-center justify-content-center">
        <p>Le quai a une longueur de 3 unités.</p>
        <br>
        <table>
            <tr style="background-color: #457B9D">
                <td>Instances</td>
                <td>Nombre de bateaux</td>
                <td>Format des dates d\'arrivée</td>
                <td>Format des durées de traitement</td>
                <td >Format des tailles des bateaux</td>
            </tr>
            <tr style="background-color: #77ABBD">
                <td>Ernst_16_1_2c_Noon_3c_0 </td>
                <td>16</td>
                <td>entiers</td>
                <td>entiers</td>
                <td>flottants</td>
            </tr>
             <tr style="background-color: #77ABBD">
                <td>Ernst_16_1_2c_Uniform_3c_0  </td>
                <td>16</td>
                <td>flottants</td>
                <td>entiers</td>
                <td>flottants</td>
            </tr>
            <tr style="background-color: #77ABBD">
                <td>Ernst_16_1_Uniform_Noon_5_0   </td>
                <td>16</td>
                <td>entiers et 1 flottant</td>
                <td>flottants</td>
                <td>flottants</td>
            </tr>
             <tr style="background-color: #77ABBD">
                <td>Ernst_16_1_Uniform_Noon_16_0    </td>
                <td>16</td>
                <td>entiers et 1 flottant</td>
                <td>flottants</td>
                <td>flottants</td>
            </tr>
            <tr style="background-color: #77ABBD">
                <td>Ernst_16_1_Uniform_Uniform_5_0  </td>
                <td>16</td>
                <td>flottants</td>
                <td>flottants</td>
                <td>flottants</td>
            </tr>
            
            <tr style="background-color: #90C3CD">
                <td>Ernst_18_1_2c_Noon_3c_0 </td>
                <td>18</td>
                <td>entiers</td>
                <td>entiers</td>
                <td>flottants</td>
            </tr>
            <tr style="background-color: #90C3CD">
                <td>Ernst_18_1_2c_Uniform_3c_0  </td>
                <td>18</td>
                <td>flottants et 1 entier</td>
                <td>entiers</td>
                <td>flottants</td>
            </tr>
            <tr style="background-color: #90C3CD">
                <td>Ernst_18_1_Uniform_Noon_5_0 </td>
                <td>18</td>
                <td>entiers</td>
                <td>flottants</td>
                <td>flottants</td>
            </tr>
            <tr style="background-color: #90C3CD">
                <td>Ernst_18_1_Uniform_Noon_16_0    </td>
                <td>18</td>
                <td>entiers</td>
                <td>flottants</td>
                <td>flottants</td>
            </tr>
            <tr style="background-color: #90C3CD">
                <td>Ernst_16_1_Uniform_Uniform_5_0:    </td>
                <td>18</td>
                <td>flottants</td>
                <td>flottants</td>
                <td>flottants</td>
            </tr>
        </table>
        <br>
        </div>
</div>
</div>';
}

function affichageContenuResultats()
{
    echo '<div id="contenu2"> 
    <br>
    <div class="row">
        
        <h2> Comparaison des résultats obtenu selon les différentes méthodes</h2>
        <img src="comparaison%20bfs%20moyens.png" width="95%">
        <p>On peut aisément remarquer que l\'heuristique d\'ordonnancement (en rouge) donne de bien meilleurs résultats que l\'heuristique de construction. Ensuite, nous pouvons en conclure que le GRASPxELS améliore les résultats obtenus précédemment comme cela était prévu.</p>
        <br><br>
        
        <h2> Evolution de nos résultats</h2>
        <img src="Evolution%20de%20nos%20résultats.png" width="95%">
        <p>Ce graphe montre bien qu\'au fur et à mesure de l\'avancement du projet nous obtenons de meilleurs résultats</p>
         <br><br>
         
        <h2>Taux d\'amélioration sur chaque instance (entre l\'heuristique d\'ordonnancement avec GRASPxELS et l\'heuristique de construction simple)</h2>
        <img src="taux%20damelioration%20par%20instance.png" width="95%">
        <p>Nous avons pu remarqué, lors des différentes exécutions, que les algorithmes d\'optimisation donnent de meilleurs résultats sur certaines instances que d\'autres.</p>
        <br><br>
        
        <h2> Comparaison avec les résultats optimaux</h2>
        <img src="graphe%20comparaison%20valeurs%20optimales.png" width="95%">
        <p>Même si nous avons des résultats parfois éloignés à 30% des résultats optimaux, notre courbe de résultats à la même allure que celle optimale</p>
        
    </div>
    </div>
    <br>';

}


function affichagePiedDePage()
{
    echo '<div id ="row">
            <div class="pied_de_page align-items-center justify-content-center">
             <p>Projet ISIMA ZZ2 - Alexia PHILIP & Gabriel VALVIN - 2021</p>
            </div>
          </div>';
}

function affichageMakespan()
{
    $hc_nt=array(312,278,249,205,196,320,315,185,212,198);
    $hc_a=array(208,234,185,221,188,221,268,184,258,157);
    $hc_t=array(296,319,284,213,211,361,327,150,212,198);
    $hc_l=array(312,319,275,229,290,361,335,198,241,235);

    $ho_nt=array(288,278,252,187,196,311,315,200,187,188);
    $ho_a=array(208,234,195,212,181,221,268,185,234,156);
    $ho_t=array(296,319,284,212,211,361,327,143,212,198);
    $ho_l=array(312,319,263,224,296,361,335,198,253,238);

    $ds_hc=array(218.4,229.8,178.8,207.8,199,221.6,275.4,201,234.4,181);
    $ds_ho=array(203.2,232,194.4,209.6,156.2,223.4,268.2,183.2,234.6,151.2);
    $grasp_hc=array(215.8,233,200.8,221.4,188.6,225.8,286.2,190.8,247,158.8);
    $grasp_ho=array(206.2,232.6,195.6,214.2,195.4,223.4,248.2,183.8,243.4,151.2);

    echo '<div id ="row">
            <div class="makespan align-items-center justify-content-center">';
    echo ' ';


    if ($_POST['choixmethode']=='hc')
    {
        if($_POST['choixopti']=='ds')
        {
            echo $ds_hc[$_POST['instances'] - 1];
        }
        elseif ($_POST['choixopti']=='grasp')
        {
            echo $grasp_hc[$_POST['instances'] - 1];
        }
        else
            {
                switch ($_POST['choixtri']) {
                    case 'nontriee':
                        echo $hc_nt[$_POST['instances'] - 1];
                        break;

                    case  'triA':
                        echo $hc_a[$_POST['instances'] - 1];
                        break;

                    case 'triT':
                        echo $hc_t[$_POST['instances'] - 1];
                        break;

                    case 'triL':
                        echo $hc_l[$_POST['instances'] - 1];
                }
            }


    }
    elseif ($_POST['choixmethode']=='ho')
    {
        if($_POST['choixopti']=='ds')
        {
            echo $ds_ho[$_POST['instances'] - 1];
        }
        elseif ($_POST['choixopti']=='grasp')
        {
            echo $grasp_ho[$_POST['instances'] - 1];
        }
        else {
            switch ($_POST['choixtri']) {
                case 'nontriee':
                    echo $ho_nt[$_POST['instances'] - 1];
                    break;

                case  'triA':
                    echo $ho_a[$_POST['instances'] - 1];
                    break;

                case 'triT':
                    echo $ho_t[$_POST['instances'] - 1];
                    break;

                case 'triL':
                    echo $ho_l[$_POST['instances'] - 1];
            }
        }
    }
    echo '    
            </div>
          </div>';
}

?>

