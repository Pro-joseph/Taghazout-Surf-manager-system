<nav class="fixed top-0 w-full z-50 bg-white/70 backdrop-blur-md shadow-sm shadow-sky-900/5">
<?php
    $isPublic = str_contains($_SERVER['PHP_SELF'], '/public/');
    $isAppView = str_contains($_SERVER['PHP_SELF'], '/app/view/');
    $homeUrl = $isPublic ? 'index.php' : ($isAppView ? '../public/index.php' : '../public/index.php');
    $loginUrl = $isPublic ? '../app/view/auth/login.php' : 'login.php';
    $registerUrl = $isPublic ? '../app/view/auth/register.php' : 'register.php';
    $dashboardUrl = $isPublic ? '../app/view/student_dashboard.php' : 'student_dashboard.php';
    $lessonsUrl = $isPublic ? '../app/view/add_session.php' : 'add_session.php';
    $profileUrl = $isPublic ? '../app/view/student_profile.php' : 'student_profile.php';
?>
<div class="flex justify-between items-center px-8 py-4 max-w-screen-2xl mx-auto">
<div class="text-2xl font-bold tracking-tighter text-sky-950 font-headline"><a href="<?= $homeUrl ?>">Taghzaought Surf</a></div>
<div class="hidden md:flex items-center space-x-8">
<a class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold text-slate-500 hover:text-sky-800 transition-colors" href="<?= $dashboardUrl ?>">Dashboard</a>
<a class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold text-slate-500 hover:text-sky-800 transition-colors" href="<?= $lessonsUrl ?>">Lessons</a>
<a class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold text-slate-500 hover:text-sky-800 transition-colors" href="<?= $profileUrl ?>">Profile</a>
<a class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold text-slate-500 hover:text-sky-800 transition-colors" href="#">Journal</a>
</div>
<div class="flex items-center space-x-4">
<button class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold text-slate-500 hover:text-sky-800 transition-colors"><a href="<?= $loginUrl ?>">Login</a></button>
<button class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold bg-primary text-on-primary px-5 py-2 rounded transition-all hover:opacity-80 active:scale-95"><a href="<?= $registerUrl ?>">Register</a></button>
</div>
</div>
</nav>