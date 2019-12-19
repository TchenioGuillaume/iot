<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form method="POST" action='./user/create.php'>
        <table>
            <tr>
                <td><p>Login :</p></td>
                <td><input type='text' id='login' name='login' placeholder='Insérer Login.' required/></td>
            </tr>
            <tr>
                <td><p>Mot de passe :</p></td>
                <td><input type='password' id='pass' name='pass' placeholder="Insérer mot de passe." required /></td>
            </tr>
            <tr>
                <td><p>E-mail :</p></td>
                <td><input type='text' id='mail' name='mail' placeholder="Insérer adresse mail." required /></td>
            </tr>
            <tr>
                <td><p><i>idrasp :</i></p></td>
                <td><input type='text' id='id_rasp' name='id_rasp' placeholder="ID du raspberry." required /></td>
            </tr>
            <tr>
                <td colspace="2"><input type="submit" value="Créer l'utilisateur."></td>
            </tr>
        </table>
    </form>
</body>
</html>