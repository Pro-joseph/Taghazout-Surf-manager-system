<?php $pageTitle = 'Modifier le paiement'; ?>
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="form-page">
    <h1>Statut de paiement</h1>

    <p>Cours : <strong><?= htmlspecialchars($enrollment['title']) ?></strong></p>
    <p>Élève : <strong><?= htmlspecialchars($enrollment['name']) ?></strong></p>
    <p>Statut actuel :
        <span class="badge <?= $enrollment['payment_status'] === 'Payé' ? 'badge-paye' : 'badge-attente' ?>">
            <?= htmlspecialchars($enrollment['payment_status']) ?>
        </span>
    </p>

    <?php if ($error !== ''): ?>
        <p class="alert alert-error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <?php if ($success !== ''): ?>
        <p class="alert alert-success"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="form-group">
            <label for="payment_status">Nouveau statut</label>
            <select id="payment_status" name="payment_status" required>
                <option value="Payé"       <?= $enrollment['payment_status'] === 'Payé'       ? 'selected' : '' ?>>Payé</option>
                <option value="En attente" <?= $enrollment['payment_status'] === 'En attente' ? 'selected' : '' ?>>En attente</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="/php chalenges/surfo/lesson_enroll.php?id=<?= $lessonId ?>" class="btn btn-secondary">Retour</a>
    </form>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
