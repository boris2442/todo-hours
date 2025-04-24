<?php
require_once "database/database.php";
if (isset($_POST['submit'])) {
    $errors = [];

    if (empty($_POST['title'])) {
        $errors[] = 'Le titre est obligatoire';
    } elseif (strlen($_POST['title']) > 50) {
        $errors[] = 'Le titre est trop long (max 50 caractères)';
    } else {
        $title = htmlspecialchars($_POST['title']);
    }

    if (empty($_POST['projet'])) {
        $errors[] = 'le commentaire du projet est obligatoire';
    } elseif (strlen($_POST['title']) > 200) {
        $errors[] = 'taille trop longue';
    } else {
        $projet = htmlspecialchars($_POST['projet']);
    }

    if (empty($errors)) {
        $sql = "INSERT INTO `projets`(title, projet) VALUES(:title, :projet)";
        $requete = $db->prepare($sql);
        $requete->bindValue(':title', $title);
        $requete->bindValue(':projet', $projet);
        $requete->execute();
    }
}




?>
<?php require_once 'includes/header.php'; ?>

<form action="" method="post" class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-lg space-y-5 mt-10">
    <h2 class="text-2xl font-bold text-center text-blue-700">Ajouter un projet</h2>

    <div class="form-group">
        <label for="title" class="block text-gray-700 font-medium mb-1">Titre :</label>
        <input type="text" name="title" id="title" required
            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="form-group">
        <label for="projet" class="block text-gray-700 font-medium mb-1">Projet :</label>
        <textarea name="projet" id="projet" required rows="5"
            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
    </div>

    <div class="form-group text-center">
        <button type="submit" name="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-lg font-semibold transition duration-200">
            Ajouter
        </button>
    </div>
</form>

<?php require_once "includes/footer.php"; ?>