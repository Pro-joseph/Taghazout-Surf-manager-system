<?php $pageTitle = 'Mes cours'; ?>
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<h1>Mes cours à venir</h1>

<?php if (empty($lessons)): ?>
    <p>Vous n'êtes inscrit à aucun cours pour le moment.</p>
<?php else: ?>
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Coach</th>
                    <th>Date / Heure</th>
                    <th>Paiement</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lessons as $lesson): ?>
                <tr>
                    <td><?= htmlspecialchars($lesson['title']) ?></td>
                    <td><?= htmlspecialchars($lesson['coach']) ?></td>
                    <td><?= htmlspecialchars(date('d/m/Y H:i', strtotime($lesson['date_time']))) ?></td>
                    <td>
                        <span class="badge <?= $lesson['payment_status'] === 'Payé' ? 'badge-paye' : 'badge-attente' ?>">
                            <?= htmlspecialchars($lesson['payment_status']) ?>
                        </span>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
