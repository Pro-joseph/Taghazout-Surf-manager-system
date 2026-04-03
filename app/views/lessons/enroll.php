<?php $pageTitle = 'Inscrire des élèves'; ?>
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<h1>Inscrire un élève — <?= htmlspecialchars($lesson['title']) ?></h1>
<p>Coach : <?= htmlspecialchars($lesson['coach']) ?> | <?= htmlspecialchars(date('d/m/Y H:i', strtotime($lesson['date_time']))) ?></p>

<?php if ($error !== ''): ?>
    <p class="alert alert-error"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<?php if ($success !== ''): ?>
    <p class="alert alert-success"><?= htmlspecialchars($success) ?></p>
<?php endif; ?>

<section>
    <h2>Inscrire un élève disponible</h2>

    <?php if (empty($availableStudents)): ?>
        <p>Tous les élèves sont déjà inscrits à ce cours.</p>
    <?php else: ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="student_id">Choisir un élève</label>
                <select id="student_id" name="student_id" required>
                    <option value="">-- Choisir --</option>
                    <?php foreach ($availableStudents as $s): ?>
                        <option value="<?= $s['id'] ?>">
                            <?= htmlspecialchars($s['name']) ?> (<?= htmlspecialchars($s['level']) ?>)
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Inscrire</button>
        </form>
    <?php endif; ?>
</section>

<section>
    <h2>Élèves déjà inscrits (<?= count($enrolledStudents) ?>)</h2>

    <?php if (empty($enrolledStudents)): ?>
        <p>Aucun élève inscrit pour l'instant.</p>
    <?php else: ?>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Niveau</th>
                        <th>Paiement</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($enrolledStudents as $s): ?>
                    <tr>
                        <td><?= htmlspecialchars($s['name']) ?></td>
                        <td><?= htmlspecialchars($s['level']) ?></td>
                        <td>
                            <span class="badge <?= $s['payment_status'] === 'Payé' ? 'badge-paye' : 'badge-attente' ?>">
                                <?= htmlspecialchars($s['payment_status']) ?>
                            </span>
                        </td>
                        <td>
                            <a href="/php chalenges/surfo/payment_edit.php?lesson_id=<?= $lesson['id'] ?>&student_id=<?= $s['student_id'] ?>">
                                Modifier paiement
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</section>

<a href="/php chalenges/surfo/dashboard.php" class="btn btn-secondary">Retour au dashboard</a>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
