<?php $pageTitle = 'Modifier le niveau'; ?>
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="form-page">
    <h1>Modifier le niveau de <?= htmlspecialchars($student['name']) ?></h1>

    <p>Pays : <?= htmlspecialchars($student['country']) ?><br>
    Niveau actuel : <strong><?= htmlspecialchars($student['level']) ?></strong></p>

    <?php if ($error !== ''): ?>
        <p class="alert alert-error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <?php if ($success !== ''): ?>
        <p class="alert alert-success"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="form-group">
            <label for="level">Nouveau niveau</label>
            <select id="level" name="level" required>
                <option value="Débutant"      <?= $student['level'] === 'Débutant'      ? 'selected' : '' ?>>Débutant</option>
                <option value="Intermédiaire" <?= $student['level'] === 'Intermédiaire' ? 'selected' : '' ?>>Intermédiaire</option>
                <option value="Avancé"        <?= $student['level'] === 'Avancé'        ? 'selected' : '' ?>>Avancé</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="/php chalenges/surfo/dashboard.php" class="btn btn-secondary">Retour</a>
    </form>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
