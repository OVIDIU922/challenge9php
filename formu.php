<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>
    <h1>Contactez-nous</h1>
    <form action="thanks.php" method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="telephone">Téléphone :</label>
        <input type="tel" id="telephone" name="telephone" required><br>

        <label for="sujet">Sujet :</label>
        <select id="sujet" name="sujet">
            <option value="Vente">Vente</option>
            <option value="Support">Support</option>
            <option value="Autre">Autre</option>
        </select><br>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>



   