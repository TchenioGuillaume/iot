<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form method="POST" action='./notification/create.php?token=$2y$09$jQo3kfKavGADKScASuNqDeMbI9jdI7EY8WNEAmwqZRcHQXkTdy7P.'>
        <table>
            <tr>
                <td><p><i>id_rasp</i> :</p></td>
                <td><input type='text' id='id_rasp' name='id_rasp' placeholder="Insérer l'ID de la machine'." required /></td>
            </tr>
            <tr>
                <td><p>url :</p></td>
                <td><input type='text' id='url' name='url' placeholder="URL du flux vidéo." required /></td>
            </tr>
            <tr>
                <td colspace="2"><input type="submit" value="Créer le Contact."></td>
            </tr>
        </table>
    </form>
</body>
</html>

<!-- isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['id_rasp']) && isset($_POST['id_user']) -->