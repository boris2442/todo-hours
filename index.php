<?php
require_once "database/database.php";
$sql = "SELECT*FROM   `projets` ";
$requete = $db->prepare($sql);
$requete->execute();
$projets = $requete->fetchAll(PDO::FETCH_ASSOC);

?>
<?php
require_once "includes/header.php";
?>

<div class="max-w-4xl mx-auto p-6 ">
  <h1 class="text-3xl font-bold text-center text-blue-700 mb-8">Listes des projets...</h1>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-[20px]">
    <?php foreach ($projets as $projet): ?>
      <div class="bg-white shadow-lg rounded-xl p-4 hover:shadow-lg transition duration-300 ">
        <h3 class="text-xl font-semibold text-gray-800 mb-2"><?= htmlspecialchars($projet['title']) ?></h3>
        <p class="text-gray-600"><?= htmlspecialchars($projet['projet']) ?></p>
        <div class="flex flex-col gap-2 ">
          <div id="chrono" class="text-3xl font-bold text-center">00 : 00 :00</div>
          <button id='start' class="w-full bg-blue-500 p-1 text-white rounded">play</button>
          <button id='reset' class="w-full bg-blue-500 p-1 text-white rounded">reset</button>
          <button id="stop" class="w-full bg-blue-500 p-1 text-white rounded">stop</button>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<script src="javascript/script.js"></script>
<?php
require_once "includes/footer.php";
?>