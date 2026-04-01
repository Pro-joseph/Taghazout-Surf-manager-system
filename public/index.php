<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Taghazout Surf Expo | Atlas Swell</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Manrope:wght@400;500;600;700&amp;display=swap"
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
                        "on-primary-fixed-variant": "#1f477b",
                        "on-primary": "#ffffff",
                        "inverse-surface": "#303030",
                        "on-primary-fixed": "#001b3c",
                        "primary-container": "#003366",
                        "on-tertiary-fixed-variant": "#454747",
                        "surface-dim": "#dbd9d9",
                        "surface-container-low": "#f5f3f3",
                        "on-surface-variant": "#43474f",
                        "on-secondary-container": "#765f3d",
                        "surface-tint": "#3a5f94",
                        "on-primary-container": "#799dd6",
                        "tertiary": "#1d1f1f",
                        "surface": "#fbf9f8",
                        "on-tertiary-fixed": "#1a1c1c",
                        "secondary-container": "#fbdbb0",
                        "error-container": "#ffdad6",
                        "outline": "#737780",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#1b1c1c",
                        "secondary-fixed-dim": "#e1c299",
                        "secondary-fixed": "#feddb3",
                        "on-error": "#ffffff",
                        "primary-fixed": "#d5e3ff",
                        "on-secondary": "#ffffff",
                        "background": "#fbf9f8",
                        "surface-container-highest": "#e4e2e2",
                        "on-secondary-fixed": "#281801",
                        "inverse-primary": "#a7c8ff",
                        "on-error-container": "#93000a",
                        "surface-container": "#efeded",
                        "secondary": "#725a39",
                        "inverse-on-surface": "#f2f0f0",
                        "tertiary-container": "#323434",
                        "outline-variant": "#c3c6d1",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#e2e2e2",
                        "surface-bright": "#fbf9f8",
                        "primary": "#001e40",
                        "surface-variant": "#e4e2e2",
                        "error": "#ba1a1a",
                        "on-tertiary-container": "#9b9c9c",
                        "tertiary-fixed-dim": "#c6c6c7",
                        "on-secondary-fixed-variant": "#584324",
                        "primary-fixed-dim": "#a7c8ff",
                        "on-background": "#1b1c1c",
                        "surface-container-high": "#eae8e7"
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
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .editorial-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 1.5rem;
        }

        .frosted-glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
        }

        .text-gradient {
            background: linear-gradient(135deg, #001e40 0%, #003366 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .primary-cta-gradient {
            background: linear-gradient(135deg, #001e40 0%, #003366 100%);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
    <?php include __DIR__ . '/../app/includes/header.php'; ?>
    <div class="hidden md:flex items-center space-x-8">
        <a class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold text-slate-500 hover:text-sky-800 transition-colors"
            href="#">Destinations</a>
        <a class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold text-slate-500 hover:text-sky-800 transition-colors"
            href="#">Lessons</a>
        <a class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold text-slate-500 hover:text-sky-800 transition-colors"
            href="#">Coaches</a>
        <a class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold text-slate-500 hover:text-sky-800 transition-colors"
            href="#">Journal</a>
    </div>
    <div class="flex items-center space-x-4">
        <a class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold text-slate-500 hover:text-sky-800 transition-colors"
            href="../app/view/login.php">Login</a>
        <a class="font-['Plus_Jakarta_Sans'] tracking-tight text-sm font-semibold bg-primary text-on-primary px-5 py-2 rounded transition-all hover:opacity-80 active:scale-95"
            href="../app/view/register.php">Register</a>
    </div>
    </div>
    </nav>
    <main class="pt-24">
        <!-- Hero Section -->
        <section class="relative min-h-[870px] flex items-center px-8 overflow-hidden">
            <div class="max-w-7xl mx-auto w-full editorial-grid relative z-10">
                <div class="col-span-12 md:col-span-7 flex flex-col justify-center">
                    <span class="font-label text-secondary font-bold tracking-[0.2em] uppercase text-xs mb-6">The
                        Atlantic Archive</span>
                    <h1
                        class="font-headline text-display-lg text-6xl md:text-8xl font-extrabold text-primary tracking-tighter leading-[0.9] mb-8">
                        Ride the Atlantic Flow.
                    </h1>
                    <p class="font-body text-xl text-on-surface-variant max-w-xl leading-relaxed mb-10">
                        Transitioning surf education into the digital age. Manage lessons, track progress, and catch
                        more waves with Taghazout's premier management ecosystem.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a class="primary-cta-gradient inline-flex items-center justify-center text-on-primary px-8 py-4 rounded-lg font-headline font-bold text-sm tracking-wide uppercase transition-all hover:shadow-xl active:scale-95"
                            href="../app/view/register.php">
                            Get Started
                        </a>
                        <a class="bg-secondary-container inline-flex items-center justify-center text-on-secondary-container px-8 py-4 rounded-lg font-headline font-bold text-sm tracking-wide uppercase transition-all hover:bg-opacity-80 active:scale-95"
                            href="../app/view/student_dashboard.php">
                            View Schedule
                        </a>
                    </div>
                </div>
                <div class="hidden md:block col-span-5 relative h-full min-h-[500px]">
                    <div
                        class="absolute inset-0 bg-surface-container-low rounded-2xl overflow-hidden transform rotate-3 shadow-2xl">
                        <img alt="Professional surfer on a clean barrel wave" class="w-full h-full object-cover"
                            data-alt="high-end editorial shot of a clean blue atlantic wave curling with a surfer in silhouette against golden morning light"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrUbW9CsHFCZ-Vo3xRiPnSHiMaqb5g6Lo68Ok4qOsK-Vte18W-IN6iZQfI6mgntMmUKdGN2HTGbSZmAYM8wwoxl0AZkGlRUrWRjc2-43E3-uHNsuYZL5JUAqVDUkywJHDhyupAbQpCONnxWi_FV-gsJuaRtK1YltMyX2eOml1nChlf5RKBbmXzHGcNfEXGm2pcEKlYkVq0dgMFY0LeysW4-MV-EplLl2BP-y9uSQ5SgXI7dbARrHxubh3No_SBfb5uABjUyK26GPI" />
                    </div>
                </div>
            </div>
            <!-- Decorative Grain Overlay -->
            <div
                class="absolute inset-0 opacity-[0.02] pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/natural-paper.png')]">
            </div>
        </section>
        <!-- The Project: Transition -->
        <section class="py-24 px-8 bg-surface-container-low">
            <div class="max-w-7xl mx-auto">
                <div class="editorial-grid">
                    <div class="col-span-12 md:col-span-4">
                        <h2 class="font-headline text-4xl font-bold text-primary tracking-tight leading-none mb-8">The
                            Project</h2>
                    </div>
                    <div class="col-span-12 md:col-span-8">
                        <p
                            class="font-body text-2xl text-on-surface-variant leading-relaxed mb-12 border-l-4 border-secondary pl-8">
                            We are redefining the Moroccan surf experience. By moving from legacy paper-based logs to a
                            seamless digital archive, Atlas Swell preserves the heritage of Taghazout while empowering
                            the next generation of riders.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <div>
                                <h3 class="font-headline text-xl font-bold text-primary mb-4">Legacy to Cloud</h3>
                                <p class="text-on-surface-variant">Digitizing decades of coastal knowledge into an
                                    accessible, high-performance platform for coaches and athletes.</p>
                            </div>
                            <div>
                                <h3 class="font-headline text-xl font-bold text-primary mb-4">Sustainable Growth</h3>
                                <p class="text-on-surface-variant">Reducing environmental impact through paperless
                                    operations while maximizing student wave count and safety.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Gateway: Two Cards -->
        <section class="py-24 px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- For Surfers -->
                    <div
                        class="group relative bg-surface-container-lowest p-12 rounded-xl transition-all hover:translate-y-[-8px]">
                        <div class="mb-8">
                            <span class="material-symbols-outlined text-4xl text-secondary"
                                data-icon="surfing">surfing</span>
                        </div>
                        <h2 class="font-headline text-3xl font-extrabold text-primary mb-4">For Surfers</h2>
                        <p class="text-on-surface-variant mb-10 leading-relaxed text-lg">
                            Join the community, register your profile, and track your agenda. Access personalized wave
                            reports and coach feedback in real-time.
                        </p>
                        <a class="inline-flex items-center font-headline font-bold text-primary group-hover:underline"
                            href="../app/view/register.php">
                            Register Now <span class="material-symbols-outlined ml-2"
                                data-icon="arrow_forward">arrow_forward</span>
                        </a>
                        <div
                            class="absolute bottom-0 right-0 w-32 h-32 bg-secondary/5 rounded-tl-full transition-all group-hover:scale-110">
                        </div>
                    </div>
                    <!-- For Managers -->
                    <div
                        class="group relative bg-primary text-on-primary p-12 rounded-xl transition-all hover:translate-y-[-8px] overflow-hidden">
                        <div class="mb-8">
                            <span class="material-symbols-outlined text-4xl text-on-secondary-container"
                                data-icon="dashboard">dashboard</span>
                        </div>
                        <h2 class="font-headline text-3xl font-extrabold mb-4">For Managers</h2>
                        <p class="text-primary-fixed-dim mb-10 leading-relaxed text-lg">
                            Oversee the shore, plan sessions, and monitor student growth. A complete command center for
                            surf school operations and staff logistics.
                        </p>
                        <a class="inline-flex items-center font-headline font-bold text-on-primary group-hover:underline"
                            href="../app/view/login.php">
                            Dashboard Login <span class="material-symbols-outlined ml-2" data-icon="login">login</span>
                        </a>
                        <div class="absolute -top-12 -right-12 w-48 h-48 bg-white/5 rounded-full"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Core Features: Bento Grid -->
        <section class="py-24 px-8 bg-surface">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <span class="font-label text-secondary font-bold tracking-widest uppercase text-xs">Ecosystem
                        Power</span>
                    <h2 class="font-headline text-5xl font-bold text-primary mt-4">Management Redefined</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Feature 1 -->
                    <div
                        class="bg-surface-container-low p-8 rounded-lg flex flex-col justify-between aspect-square md:aspect-auto h-[320px]">
                        <span class="material-symbols-outlined text-3xl text-primary"
                            data-icon="calendar_today">calendar_today</span>
                        <div>
                            <h3 class="font-headline text-xl font-bold text-primary mb-2">Dynamic Scheduling</h3>
                            <p class="text-sm text-on-surface-variant">Intelligent session planning based on tide charts
                                and coach availability.</p>
                        </div>
                    </div>
                    <!-- Feature 2 -->
                    <div
                        class="bg-primary-container text-on-primary p-8 rounded-lg flex flex-col justify-between h-[320px] md:mt-12">
                        <span class="material-symbols-outlined text-3xl text-on-primary-container"
                            data-icon="trending_up">trending_up</span>
                        <div>
                            <h3 class="font-headline text-xl font-bold mb-2">Progress Tracking</h3>
                            <p class="text-sm text-primary-fixed-dim">Visual breakdown of skill acquisition from
                                beginner basics to advanced carving.</p>
                        </div>
                    </div>
                    <!-- Feature 3 -->
                    <div class="bg-surface-container-low p-8 rounded-lg flex flex-col justify-between h-[320px]">
                        <span class="material-symbols-outlined text-3xl text-primary"
                            data-icon="payments">payments</span>
                        <div>
                            <h3 class="font-headline text-xl font-bold text-primary mb-2">Payment Status</h3>
                            <p class="text-sm text-on-surface-variant">Automated invoicing and real-time verification of
                                session credits.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Stats Section -->
        <section class="py-20 bg-primary">
            <div class="max-w-7xl mx-auto px-8 flex flex-wrap justify-between items-center gap-12">
                <div class="flex flex-col">
                    <span class="text-4xl font-headline font-extrabold text-on-primary">12k+</span>
                    <span class="text-xs font-label uppercase tracking-widest text-primary-fixed-dim mt-2">Lessons
                        Logged</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-4xl font-headline font-extrabold text-on-primary">850</span>
                    <span class="text-xs font-label uppercase tracking-widest text-primary-fixed-dim mt-2">Active
                        Surfers</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-4xl font-headline font-extrabold text-on-primary">45</span>
                    <span class="text-xs font-label uppercase tracking-widest text-primary-fixed-dim mt-2">Elite
                        Coaches</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-4xl font-headline font-extrabold text-on-primary">14</span>
                    <span class="text-xs font-label uppercase tracking-widest text-primary-fixed-dim mt-2">Coastline
                        Spots</span>
                </div>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../app/includes/footer.php'; ?>
</body>

</html>