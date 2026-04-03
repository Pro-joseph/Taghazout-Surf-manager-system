<?php $pageTitle = 'Créer un cours'; ?>
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="form-page">
    <h1>Créer un nouveau cours</h1>

    <?php if ($error !== ''): ?>
        <p class="alert alert-error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <?php if ($success !== ''): ?>
        <p class="alert alert-success"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="form-group">
            <label for="title">Titre du cours</label>
            <input type="text" id="title" name="title" placeholder="Ex : Session débutants matin" required>
        </div>

        <div class="form-group">
            <label for="coach">Nom du coach</label>
            <input type="text" id="coach" name="coach" placeholder="Ex : Karim" required>
        </div>

        <div class="form-group">
            <label for="date_time">Date et heure</label>
            <input type="datetime-local" id="date_time" name="date_time" required>
        </div>

        <button type="submit" class="btn btn-primary">Créer le cours</button>
        <a href="/php chalenges/surfo/dashboard.php" class="btn btn-secondary">Annuler</a>
    </form>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
