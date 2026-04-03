<?php $pageTitle = 'Inscription'; ?>
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="form-page">
    <h1>Créer mon profil</h1>

    <?php if ($error !== ''): ?>
        <p class="alert alert-error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <?php if ($success !== ''): ?>
        <p class="alert alert-success"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="form-group">
            <label for="name">Nom complet</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="country">Pays</label>
            <input type="text" id="country" name="country" required>
        </div>

        <div class="form-group">
            <label for="level">Niveau auto-évalué</label>
            <select id="level" name="level" required>
                <option value="">-- Choisir --</option>
                <option value="Débutant">Débutant</option>
                <option value="Intermédiaire">Intermédiaire</option>
                <option value="Avancé">Avancé</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Créer mon compte</button>
    </form>

    <p class="form-link">Déjà un compte ? <a href="/php chalenges/surfo/login.php">Se connecter</a></p>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
