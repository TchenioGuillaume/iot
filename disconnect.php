<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form method="GET" action='./user/disconnect.php'>
        <table>
            <tr>
                <td><p>Insérer le token à déconnecter :</p></td>
                <td><input type='text' id='token' name='token' placeholder='Insérer le Token.' value="<?php if(isset($_GET['token'])){echo($_GET['token']); }?>" required/></td>
            </tr>
            <tr>
                <td colspace="2"><input type="submit" value="Déconnecter la session."></td>
            </tr>
        </table>
    </form>
</body>
</html>