<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form method="POST" action='./contact/create.php'>
        <table>
            <tr>
                <td><p>Prénom :</p></td>
                <td><input type='text' id='firstname' name='firstname' placeholder='Insérer le prénom du contact.' required/></td>
            </tr>
            <tr>
                <td><p>Nom :</p></td>
                <td><input type='text' id='lastname' name='lastname' placeholder="Insérer le nom du contact." required /></td>
            </tr>
            <tr>
                <td><p><i>id_rasp</i> :</p></td>
                <td><input type='text' id='id_rasp' name='id_rasp' placeholder="Insérer l'ID de la machine'." required /></td>
            </tr>
            <tr>
                <td><p><i>id_user</i> :</p></td>
                <td><input type='text' id='id_user' name='id_user' placeholder="Insérer l'ID de l'émetteur du contact." required /></td>
            </tr>
            <tr>
                <td colspace="2"><input type="submit" value="Créer le Contact."></td>
            </tr>
        </table>
    </form>
</body>
</html>

<!-- isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['id_rasp']) && isset($_POST['id_user']) -->