<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>fromulaire d incription</title>
</head>
<body>
    <div class="content">
        <h1>Sign Up</h1>

        <form action="./requet.php" method="post">
            <div class="nom_prenom">
                <input type="text" name="nom"  placeholder="Nom" required>
                <input type="text" name="prenom" placeholder="Prenom" required>
            </div>
            <div class="email">
                <input type="email" name="email"  placeholder="email" required>
            </div>
            <div class="password">
                <input type="password" name="mot_de_passe"  placeholder="mot_de_passe" required>
            </div>
            <div class="checkbox">
                <input type="checkbox"><span>I Agree with Privaty and policy</span>
            </div>
            <div class="submit">
                <input type="submit" value="Sign Up">
            </div>
            <p>Deja un compte ? <a href="#">Sign in</a></p>
        </form>
    </div>
    
</body>
</html>
