<?php $pageTitle = 'Dashboard'; ?>
<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<h1>Tableau de bord</h1>

<div class="stat-box">
    <span class="stat-number"><?= htmlspecialchars($avgStudents) ?></span>
    <span class="stat-label">élève(s) en moyenne par session</span>
</div>

<section>
    <h2>Tous les élèves (<?= count($students) ?>)</h2>

    <?php if (empty($students)): ?>
        <p>Aucun élève enregistré.</p>
    <?php else: ?>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Pays</th>
                        <th>Niveau</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= htmlspecialchars($student['name']) ?></td>
                        <td><?= htmlspecialchars($student['country']) ?></td>
                        <td><span class="badge badge-<?= strtolower($student['level']) ?>"><?= htmlspecialchars($student['level']) ?></span></td>
                        <td><a href="/php chalenges/surfo/student_edit.php?id=<?= $student['id'] ?>">Modifier niveau</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</section>

<section>
    <div class="section-title-row">
        <h2>Tous les cours (<?= count($lessons) ?>)</h2>
        <a href="/php chalenges/surfo/lesson_create.php" class="btn btn-primary">+ Nouveau cours</a>
    </div>

    <?php if (empty($lessons)): ?>
        <p>Aucun cours créé.</p>
    <?php else: ?>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Coach</th>
                        <th>Date / Heure</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lessons as $lesson): ?>
                    <tr>
                        <td><?= htmlspecialchars($lesson['title']) ?></td>
                        <td><?= htmlspecialchars($lesson['coach']) ?></td>
                        <td><?= htmlspecialchars(date('d/m/Y H:i', strtotime($lesson['date_time']))) ?></td>
                        <td><a href="/php chalenges/surfo/lesson_enroll.php?id=<?= $lesson['id'] ?>">Inscrire élèves</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</section>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
