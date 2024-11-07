<?php
$services = [
      "communication" => [
          "nom" => "Dupont",
          "prenom" => "Marie",
          "email" => "marie.dupont@entreprise.com"
      ],
      "rh" => [
          "nom" => "Martin",
          "prenom" => "Jean",
          "email" => "jean.martin@entreprise.com"
      ],
      "logistique" => [
          "nom" => "Bernard",
          "prenom" => "Lucie",
          "email" => "lucie.bernard@entreprise.com"
      ], 
      "technique" => [
          "nom" => "Bernard",
          "prenom" => "Lucie",
          "email" => "lucie.bernard@entreprise.com"
      ]
  ];

?>

<!DOCTYPE html>
<!-- saved from url=(0320)https://file.notion.so/f/f/57e9685d-be14-4b02-bb2a-66cd5e12bc73/e308f032-083b-4fd2-813b-35839c8c547e/index.html?table=block&id=1373a840-d5f2-8045-a752-ef993d469a58&spaceId=57e9685d-be14-4b02-bb2a-66cd5e12bc73&expirationTimestamp=1731067200000&signature=UtdoCnlDw_BiBEmdAiQzoKOQu32On2WongE5emuI-DM&downloadName=index.html -->
<html lang="fr">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Formulaire de Candidature</title>
      <link href="./Formulaire de Candidature_files/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body cz-shortcut-listen="true">

      <div class="container my-5">
            <h2 class="mb-4">Formulaire de Candidature</h2>
            <form action="https://file.notion.so/submit-application" method="post" enctype="multipart/form-data">

                  <!-- Prénom et Nom -->
                  <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required="">
                  </div>

                  <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required="">
                  </div>

                  <!-- Email -->
                  <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required="">
                  </div>

                  <!-- Téléphone -->
                  <div class="mb-3">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" required="">
                  </div>

                  <!-- Préférence de réception de CV -->
                  <div class="mb-3">
                        <label for="service" class="form-label">Service de transmission du CV</label>
                        <select class="form-select" id="service" name="service" required="">
                              <option value="communication">Service communication</option>
                              <option value="rh">Service ressources humaines</option>
                              <option value="logistique">Service logistique</option>
                              <option value="technique">Service technique</option>
                        </select>
                  </div>

                  <!-- CV Upload -->
                  <div class="mb-3">
                        <label for="cv" class="form-label">CV (format PDF)</label>
                        <input type="file" class="form-control" id="cv" name="cv" accept=".pdf" required="">
                  </div>

                  <!-- Message de motivation -->
                  <div class="mb-3">
                        <label for="message" class="form-label">Message de motivation</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Parlez-nous de vous, de vos motivations, et de ce qui vous attire dans ce poste." required=""></textarea>
                  </div>



                  <!-- LinkedIn -->
                  <div class="mb-3">
                        <label for="linkedin" class="form-label">Lien LinkedIn (optionnel)</label>
                        <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="https://linkedin.com/in/votreprofil">
                  </div>

                  <!-- Portfolio -->
                  <div class="mb-3">
                        <label for="portfolio" class="form-label">Lien vers votre portfolio (optionnel)</label>
                        <input type="url" class="form-control" id="portfolio" name="portfolio" placeholder="https://votreportfolio.com">
                  </div>

                  <!-- Disponibilité -->
                  <div class="mb-3">
                        <label for="disponibilite" class="form-label">Disponibilité</label>
                        <input type="date" class="form-control" id="disponibilite" name="disponibilite" required="">
                  </div>

                  <!-- Bouton de soumission -->
                  <button type="submit" class="btn btn-primary">Envoyer la Candidature</button>
            </form>
      </div>

      <script src="./Formulaire de Candidature_files/bootstrap.bundle.min.js"></script>


</body></html>