<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Surfer Agenda - Taghazout Surf Expo</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;family=Manrope:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary-container": "#765f3d",
                        "surface-dim": "#dbd9d9",
                        "secondary-fixed": "#feddb3",
                        "on-tertiary-fixed": "#1a1c1c",
                        "inverse-on-surface": "#f2f0f0",
                        "on-primary-fixed-variant": "#1f477b",
                        "on-error": "#ffffff",
                        "surface-bright": "#fbf9f8",
                        "surface-variant": "#e4e2e2",
                        "primary-container": "#003366",
                        "on-surface-variant": "#43474f",
                        "on-surface": "#1b1c1c",
                        "surface-container-highest": "#e4e2e2",
                        "outline-variant": "#c3c6d1",
                        "surface-container": "#efeded",
                        "inverse-primary": "#a7c8ff",
                        "on-tertiary-container": "#9b9c9c",
                        "surface": "#fbf9f8",
                        "primary": "#001e40",
                        "on-error-container": "#93000a",
                        "error": "#ba1a1a",
                        "surface-tint": "#3a5f94",
                        "on-primary-container": "#799dd6",
                        "surface-container-low": "#f5f3f3",
                        "tertiary": "#1d1f1f",
                        "secondary": "#725a39",
                        "error-container": "#ffdad6",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#d5e3ff",
                        "secondary-fixed-dim": "#e1c299",
                        "on-secondary-fixed": "#281801",
                        "on-background": "#1b1c1c",
                        "inverse-surface": "#303030",
                        "on-secondary": "#ffffff",
                        "outline": "#737780",
                        "on-tertiary": "#ffffff",
                        "primary-fixed-dim": "#a7c8ff",
                        "surface-container-high": "#eae8e7",
                        "tertiary-fixed": "#e2e2e2",
                        "tertiary-container": "#323434",
                        "on-secondary-fixed-variant": "#584324",
                        "secondary-container": "#fbdbb0",
                        "on-primary-fixed": "#001b3c",
                        "tertiary-fixed-dim": "#c6c6c7",
                        "on-tertiary-fixed-variant": "#454747",
                        "background": "#fbf9f8",
                        "on-primary": "#ffffff"
                    },
                    fontFamily: {
                        "headline": ["Plus Jakarta Sans"],
                        "body": ["Manrope"],
                        "label": ["Plus Jakarta Sans"]
                    },
                    borderRadius: { "DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem" },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24
        }

        .grain-overlay {
            background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuDsNeuEt3Y5u6UOjJAg4l0T8-gnFPnYYj-wUGl4sB9GhHO2XhNirKkSMHJSrHV7UBZUOxKYgEZc8hqca6p7no0-XgfilV_u0mnllCZRZ3S9Vye90j6lq2JH84xV_8TrC-feGGvuMTQ7C5BA7uUYFkwD-2HnkI37RJOgtNEGsinqGmuqmWx9n_Stycmo53p6mL9YsdXAa4tF2CNBqa9vt1inKtYqoNJmnXbXs-zN0ggSnDkgFAtaD4NbX8EvRjJCdm3JopjbNJSR7Ng);
            opacity: 0.03;
            pointer-events: none
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface antialiased min-h-screen pb-32">

    <main class="pt-24 px-6 max-w-5xl mx-auto">
        <!-- Welcome Header -->
        <section class="mb-12">
            <p class="font-label text-secondary font-bold uppercase tracking-[0.2em] text-xs mb-2">Atlantic Archive —
                User View</p>
            <h2 class="font-headline text-primary text-5xl md:text-6xl font-extrabold tracking-tight">Welcome back,
                Sarah</h2>
            <div class="mt-4 flex items-center gap-6 text-on-surface-variant">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm" data-icon="location_on">location_on</span>
                    <span class="text-sm font-semibold tracking-wide uppercase">Anchor Point, Taghazout</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm" data-icon="water_drop">water_drop</span>
                    <span class="text-sm font-semibold tracking-wide uppercase">Water 21°C</span>
                </div>
            </div>
        </section>
        <!-- Agenda Section -->
        <section>
            <div class="flex items-baseline justify-between mb-8">
                <h3 class="font-headline text-2xl font-bold text-primary">Your Upcoming Sessions</h3>
                <span class="text-sm font-label font-bold text-on-surface-variant uppercase tracking-widest">3 Lessons
                    Scheduled</span>
            </div>
            <!-- Bento-style Grid for Agenda -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- Primary Highlight Card (Today's Lesson) -->
                <div
                    class="md:col-span-8 group relative overflow-hidden rounded-xl bg-surface-container-lowest p-8 shadow-sm transition-all hover:shadow-md">
                    <div class="absolute top-0 right-0 w-1/2 h-full opacity-10 pointer-events-none">
                        <span class="material-symbols-outlined text-[12rem] absolute -right-8 -bottom-8 rotate-12"
                            data-icon="surfing">surfing</span>
                    </div>
                    <div class="relative z-10 flex flex-col h-full justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-6">
                                <span
                                    class="bg-primary text-white text-[10px] font-bold uppercase tracking-[0.2em] px-3 py-1 rounded-full">Coming
                                    up next</span>
                                <div
                                    class="bg-primary-fixed text-on-primary-fixed px-4 py-1.5 rounded-full flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                    <span class="text-xs font-bold uppercase tracking-wider">Paid</span>
                                </div>
                            </div>
                            <h4 class="font-headline text-3xl font-bold text-primary mb-2">Sunset Point Break Session
                            </h4>
                            <p class="text-on-surface-variant font-medium flex items-center gap-2">
                                <span class="material-symbols-outlined text-lg"
                                    data-icon="calendar_today">calendar_today</span>
                                Today, Oct 24 • 17:30 - 19:30
                            </p>
                        </div>
                        <div class="mt-12 flex items-center gap-4">
                            <div class="flex -space-x-3">
                                <img alt="Instructor" class="w-10 h-10 rounded-full border-2 border-white object-cover"
                                    data-alt="professional surf instructor with blonde hair and wetsuit smiling"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0Kj7pQ_aXIS0fRMTSLTd8AnIDHoVIlChaNVViUpStCfLt8UqSNIcpK4qRPUCLTwgiyhZ34-j5nzsPtKD_CNSFThG9kBhUWaiXp62cNIrYg2oKeFHWugTwPXCkfevTiP_YTQ0BPkMBPNp1Bg9hK-cOkBaz4k99ehg-mWD3RDW6dXdX9uRvQituLVWLXf1aQLgsX8DzQwklrXr-9WyjBO0Gy7QhO3Iu5mcRuIaAYESAKkijvQsvDMiFSa5tZh-0q4CqOhoWioTkXI8" />
                            </div>
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-widest text-secondary">Instructor</p>
                                <p class="text-sm font-bold text-primary">Omar El Mansouri</p>
                            </div>
                            <button
                                class="ml-auto bg-primary text-white font-bold py-3 px-8 rounded-xl text-sm transition-transform active:scale-95 shadow-lg shadow-primary/20">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Secondary Info Card -->
                <div class="md:col-span-4 bg-secondary-container rounded-xl p-8 flex flex-col justify-between">
                    <div>
                        <span class="material-symbols-outlined text-on-secondary-container text-4xl mb-4"
                            data-icon="waves">waves</span>
                        <h4 class="font-headline text-xl font-bold text-on-secondary-container leading-tight">Swell
                            Forecast for your Session</h4>
                        <p class="text-on-secondary-container/80 text-sm mt-2">Perfect 1.2m glass waves expected at
                            Anchor Point.</p>
                    </div>
                    <div class="mt-8 border-t border-on-secondary-container/10 pt-6">
                        <div class="flex justify-between items-end">
                            <span
                                class="text-xs font-bold uppercase tracking-widest text-on-secondary-container">Difficulty</span>
                            <span class="text-lg font-bold text-on-secondary-container">Intermediate</span>
                        </div>
                    </div>
                </div>
                <!-- Standard Lesson Cards -->
                <div class="md:col-span-6 bg-surface-container-lowest rounded-xl p-6 shadow-sm flex items-center gap-6">
                    <div class="w-24 h-24 rounded-lg overflow-hidden shrink-0">
                        <img alt="Location" class="w-full h-full object-cover"
                            data-alt="wide shot of ocean waves crashing on rocky Moroccan coast with warm earthy tones"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIiCfs2DYvX03R_bzQhDSS-k-noYt4e1EP5AaoOUmYT3RqyW5fjpq38jS-J1xBFOpMGV328yjbBuVDjR1SYLm5Vm_IRDqphOxltBrzAQ7-DnUruPsFlWFQT6jjjeahJ1qQ3RjQsUCpnNwrX0BxbXpvLGpemhPQPXNoEU5FYU7j8a5tbWBI-btcw6H7cX94pReCxfWIM9LR5_LccackqdO7rAt07aWEPJ5FgmDmTT5Vw2ERMbTcL8srWHJjOKrh2QLtKiwdeY_W6WA" />
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <h4 class="font-headline font-bold text-primary">Advanced Carving Clinic</h4>
                            <div
                                class="bg-surface-container-highest text-on-surface-variant px-3 py-1 rounded-full flex items-center gap-2">
                                <span class="text-[10px] font-bold uppercase tracking-wider">Pending</span>
                            </div>
                        </div>
                        <p class="text-sm text-on-surface-variant mt-1">Friday, Oct 26 • 09:00 AM</p>
                        <div class="mt-4 flex gap-4">
                            <button
                                class="text-xs font-bold text-primary underline underline-offset-4 decoration-primary/30 hover:decoration-primary">Pay
                                Now</button>
                            <button class="text-xs font-bold text-on-surface-variant">Reschedule</button>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-6 bg-surface-container-lowest rounded-xl p-6 shadow-sm flex items-center gap-6">
                    <div class="w-24 h-24 rounded-lg overflow-hidden shrink-0">
                        <img alt="Location" class="w-full h-full object-cover"
                            data-alt="close up of surfboards leaning against a white textured wall in bright sunlight"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB41-oFG1XJStf25btcfO0U7dYyrV_Ig7yPKR0i9tCrrxuGSy5eUC4HhS8DzuC9jDUsiGVifYmyWhA9yT63di0eL__rccKLmxcmLn4nxFQf2pnzWLgWNP3fztzwJ5abcjebHq5Q6H_uxdMfqxPq3RxTs34MeRNYhHSUDjJOY6LNDDQ3C-kd4VOVe4W_hJh-OIqQdPbcHku-NSTpxHdzSFGHDjplc_dwTgMmf1Tr8HEMtxkSbCOA9TeY8gB7JmRyLuaZ33h5DYEoa5k" />
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <h4 class="font-headline font-bold text-primary">Morning Tide Workshop</h4>
                            <div
                                class="bg-primary-fixed text-on-primary-fixed px-3 py-1 rounded-full flex items-center gap-2">
                                <span class="text-[10px] font-bold uppercase tracking-wider">Paid</span>
                            </div>
                        </div>
                        <p class="text-sm text-on-surface-variant mt-1">Sunday, Oct 28 • 07:30 AM</p>
                        <div class="mt-4">
                            <button
                                class="text-xs font-bold text-primary underline underline-offset-4 decoration-primary/30 hover:decoration-primary">Gear
                                List</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Past Progress Subtle Callout -->
        <section class="mt-16 bg-surface-container-low rounded-2xl p-10 text-center">
            <h4 class="font-headline text-xl font-bold text-primary mb-2">Track Your Growth</h4>
            <p class="text-on-surface-variant max-w-md mx-auto mb-8">You've completed 12 sessions this month. You're 3
                sessions away from reaching Advanced Level II.</p>
            <div class="w-full max-w-lg mx-auto bg-surface-container-highest h-1 rounded-full overflow-hidden">
                <div class="bg-primary h-full w-[80%] rounded-full"></div>
            </div>
            <div class="flex justify-between max-w-lg mx-auto mt-2">
                <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Intermediate
                    III</span>
                <span class="text-[10px] font-bold uppercase tracking-widest text-primary">Advanced II</span>
            </div>
        </section>
    </main>
    <!-- BottomNavBar -->
    <nav
        class="fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-6 pt-3 bg-white/85 dark:bg-[#1b1c1c]/85 backdrop-blur-xl z-50 shadow-[0_-4px_24px_rgba(27,28,28,0.05)] md:hidden">
        <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff]"
            href="student_dashboard.php">
            <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
            <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest mt-1">Dashboard</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff]"
            href="add_session.php">
            <span class="material-symbols-outlined" data-icon="surfing">surfing</span>
            <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest mt-1">Lessons</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff]"
            href="student_dashboard.php">
            <span class="material-symbols-outlined" data-icon="group">group</span>
            <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest mt-1">Students</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-[#001e40] dark:bg-[#d5e3ff] text-white dark:text-[#001e40] rounded-xl px-4 py-2 transition-all duration-300"
            href="student_dashboard.php">
            <span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
            <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest mt-1">Agenda</span>
        </a>
        <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff]"
            href="student_profile.php">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest mt-1">Profile</span>
        </a>
    </nav>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
    <!-- Desktop Sidebar/Nav Mockup (Hidden on mobile) -->
    <div class="hidden md:block fixed right-8 top-1/2 -translate-y-1/2 space-y-8 z-40">
        <div class="flex flex-col gap-6 items-center">
            <div class="w-1.5 h-1.5 rounded-full bg-outline-variant"></div>
            <div class="w-1.5 h-1.5 rounded-full bg-outline-variant"></div>
            <div class="w-3 h-3 rounded-full bg-primary ring-4 ring-primary-fixed"></div>
            <div class="w-1.5 h-1.5 rounded-full bg-outline-variant"></div>
            <div class="w-1.5 h-1.5 rounded-full bg-outline-variant"></div>
        </div>
    </div>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>