<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form method="POST" action='./rasp/create.php'>
        <table>
            <tr>
                <td><p>Nom :</p></td>
                <td><input type='text' id='name' name='name' placeholder='Insérer le nom de la machine.' required/></td>
            </tr>
            <tr>
                <td><p>Ip :</p></td>
                <td><input type='text' id='ip' name='ip' placeholder="Insérer l'adresse IP." required /></td>
            </tr>
            <tr>
                <td colspace="2"><input type="submit" value="Créer le Raspberry."></td>
            </tr>
        </table>
    </form>
</body>
</html>