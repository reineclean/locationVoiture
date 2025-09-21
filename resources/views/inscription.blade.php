<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Inscription</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
</head>
<body class="bg-light">

  <div
    class="container d-flex justify-content-center align-items-center"
    style="min-height: 100vh"
  >
    <div
      class="p-5 rounded shadow bg-light"
      style="width: 100%; max-width: 500px; min-width: 280px"
    >
      <h3 class="text-center mb-4">Inscription</h3>

      <form>

        <!-- Nom -->
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input
            type="text"
            class="form-control"
            id="nom"
            placeholder="Votre nom"
            required
          />
        </div>

        <!-- Prénom -->
        <div class="mb-3">
          <label for="prenom" class="form-label">Prénom</label>
          <input
            type="text"
            class="form-control"
            id="prenom"
            placeholder="Votre prénom"
            required
          />
        </div>

        <!-- Téléphone avec indicatif -->
        <div class="mb-3">
          <label class="form-label">Numéro de téléphone</label>
          <div class="input-group">
            <select class="form-select" style="max-width: 120px;" required>
              <option selected disabled>Indicatif</option>
              <option value="+33">🇫🇷 +33 (France)</option>
              <option value="+225">🇨🇮 +225 (Côte d'Ivoire)</option>
              <option value="+229">🇧🇯 +229 (Bénin)</option>
              <option value="+237">🇨🇲 +237 (Cameroun)</option>
              <option value="+1">🇺🇸 +1 (USA)</option>
            </select>
            <input
              type="tel"
              class="form-control"
              placeholder="Numéro de téléphone"
              required
            />
          </div>
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Adresse e-mail</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="exemple@mail.com"
            required
          />
        </div>

        <!-- Mot de passe -->
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input
            type="password"
            class="form-control"
            id="password"
            placeholder="Votre mot de passe"
            required
          />
        </div>

        <!-- Confirmation mot de passe -->
        <div class="mb-4">
          <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
          <input
            type="password"
            class="form-control"
            id="confirmPassword"
            placeholder="Répétez le mot de passe"
            required
          />
        </div>

        <!-- Bouton Valider -->
        <div class="d-grid">
          <button type="submit" class="btn btn-success">Valider</button>
        </div>

      </form>

      <p class="text-center mt-3 mb-0">
        vous avez déjà un compte ? <a href="#">Se connecter</a>
      </p>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>
