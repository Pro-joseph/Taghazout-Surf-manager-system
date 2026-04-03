<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Surfo') ?> — Taghazout Surf Expo</title>
    <link rel="stylesheet" href="/php chalenges/surfo/public/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="header-inner">
        <a href="<?= isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin' ? '/php chalenges/surfo/dashboard.php' : '/php chalenges/surfo/my_lessons.php' ?>" class="logo">
            🏄 Surfo
        </a>

        <?php if (isset($_SESSION['user_id'])): ?>
        <nav class="main-nav">
            <?php if ($_SESSION['user_role'] === 'admin'): ?>
                <a href="/php chalenges/surfo/dashboard.php">Dashboard</a>
                <a href="/php chalenges/surfo/students.php">Élèves</a>
                <a href="/php chalenges/surfo/lessons.php">Cours</a>
            <?php else: ?>
                <a href="/php chalenges/surfo/my_lessons.php">Mes cours</a>
            <?php endif; ?>
            <a href="/php chalenges/surfo/logout.php" class="btn-logout">Déconnexion</a>
        </nav>
        <?php endif; ?>
    </div>
</header>

<main class="main-content">
