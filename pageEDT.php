<?php
// Vérification si les cookies existent
if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
    $login = $_COOKIE['login'];
    $u_password = $_COOKIE['password'];

    // Identifiants corrects à comparer
    $login1 = "alexandre.dulas";
    $password1 = "23122005";

    // Vérification si les cookies correspondent aux identifiants valides
    if ($login == $login1 && $u_password == $password1) {
        // Connexion réussie, l'utilisateur reste connecté
        echo "Bienvenue, $login. Voici votre emploi du temps.";
    } else {
        // Si les identifiants des cookies ne correspondent pas, redirige vers la page de connexion
        echo "Identifiants invalides. Veuillez vous reconnecter.";
        header('Location: PageConnexion.php');
        exit();
    }
} else {
    // Si les cookies n'existent pas, redirige vers la page de connexion
    echo "Veuillez vous connecter pour accéder à votre emploi du temps.";
    header('Location: PageConnexion.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Emploi du temps</title>
    <link rel="stylesheet" href="styleEDT.css" />
</head>
<body>

<form action="traitement.php" method="post">
    <a class="bouton"  href="pageDeconnexion.php">Deconnexion</a>
    <a class="home"  href="PageEDT.php"><img src="Images/logoHome.png" width=60px ></a>
    <h1 class="titre">Emploi du temps de ""</h1>

    <?php if (!empty($versions)): ?>
        <ul>
            <?php foreach ($versions as $version): ?>
                <p class="info-ver">Version : <?= htmlspecialchars($version['version']) ?></p>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucune version trouvée.</p>
    <?php endif; ?>

    <?php if (!empty($dateversions)): ?>
        <ul>
            <?php foreach ($dateversions as $dateversion): ?>
                <p class="info-ver">Date de version : <?= htmlspecialchars($dateversion['timestamp']) ?></p>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucune date de version trouvée.</p>
    <?php endif; ?>
    <div class = "EDT">
        <table>
            <tbody>
            <tr>
                <th class="vide"></th>
                <th class="H">8h00-9h30</th>-
                <th class="H">9h30-11h00</th>
                <th class="H">11h00-12h30</th>
                <th class="H">12h30-14h00</th>
                <th class="H">14h00-15h30</th>
                <th class="H">15h30-17h00</th>
                <th class="H">17h00-18h30</th>
            </tr>
            <tr>
                <td class="tit">Lundi<br><p class="date">01/01</p></td>
                <td></td>
                <td></td>
                <td></td>
                <th class="pause">Pause méridienne</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="tit">Mardi<br><p class="date">01/01</p></td>
                <td></td>
                <td></td>
                <td></td>
                <th class="pause">Pause méridienne</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="tit">Mercredi<br><p class="date1">01/01</p></td>
                <td></td>
                <td></td>
                <td></td>
                <th class="pause">Pause méridienne</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="tit">Jeudi<br><p class="date1">01/01</p></td>
                <td></td>
                <td></td>
                <td></td>
                <th class="pause">Pause méridienne</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="tit">Vendredi<br><p class="date1">01/01</p></td>
                <td></td>
                <td></td>
                <td></td>
                <th class="pause">Pause méridienne</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="tit">Samedi<br><p class="date1">01/01</p></td>
                <td></td>
                <td></td>
                <td></td>
                <th class="pause">Pause méridienne</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <a class="imagedroit"  href="pageDeconnexion.php"><img src="Images/flecheDroite.png" width=30px ></a>
        <a class="imagegauche"  href="pageDeconnexion.php"><img src="Images/flecheGauche.png" width=30px ></a>
    </div>

</form>
</body>
</html>
