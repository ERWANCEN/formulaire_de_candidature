<?php
phpinfo();
require 'session.php';
include 'messages_erreur.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      include 'envoi_email.php';
  }

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
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Formulaire de Candidature</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

      <div class="container my-5">
            <h2 class="mb-4">Formulaire de Candidature</h2>
            <form action="" method="post">

                  <!-- Prénom et Nom -->
                  <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                        <p><?php if(isset($errors['prenom'])) {
                              echo $errors['prenom'];
                        } ?></p>
                  </div>

                  <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                        <p><?php if(isset($errors['nom'])) {
                              echo $errors['nom'];
                        } ?></p>
                  </div>

                  <!-- Email -->
                  <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                  </div>

                  <!-- Téléphone -->
                  <div class="mb-3">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" required>
                  </div>

                  <!-- Préférence de réception de CV -->
                  <div class="mb-3">
                        <label for="service" class="form-label">Service de transmission du CV</label>
                        <select class="form-select" id="service" name="service" required>
                              <option value="communication">Service communication</option>
                              <option value="rh">Service ressources humaines</option>
                              <option value="logistique">Service logistique</option>
                              <option value="technique">Service technique</option>
                        </select>
                  </div>

                  <!-- CV Upload -->
                  <div class="mb-3">
                        <label for="cv" class="form-label">CV (format PDF)</label>
                        <input type="file" class="form-control" id="cv" name="cv" accept=".pdf" required>
                  </div>

                  <!-- Message de motivation -->
                  <div class="mb-3">
                        <label for="message" class="form-label">Message de motivation</label>
                        <textarea class="form-control" id="message" name="message" rows="5"
                              placeholder="Parlez-nous de vous, de vos motivations, et de ce qui vous attire dans ce poste."
                              required></textarea>
                  </div>



                  <!-- LinkedIn -->
                  <div class="mb-3">
                        <label for="linkedin" class="form-label">Lien LinkedIn (optionnel)</label>
                        <input type="url" class="form-control" id="linkedin" name="linkedin"
                              placeholder="https://linkedin.com/in/votreprofil">
                  </div>

                  <!-- Portfolio -->
                  <div class="mb-3">
                        <label for="portfolio" class="form-label">Lien vers votre portfolio (optionnel)</label>
                        <input type="url" class="form-control" id="portfolio" name="portfolio"
                              placeholder="https://votreportfolio.com">
                  </div>

                  <!-- Disponibilité -->
                  <div class="mb-3">
                        <label for="disponibilite" class="form-label">Disponibilité</label>
                        <input type="date" class="form-control" id="disponibilite" name="disponibilite" required>
                  </div>

                  <!-- Bouton de soumission -->
                  <button type="submit" class="btn btn-primary" method="post">Envoyer la Candidature</button>
            </form>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>