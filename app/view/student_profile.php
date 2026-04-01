<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Student Profile | Taghazout Surf Expo</title>
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
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }

    .editorial-shadow {
      box-shadow: 0 24px 48px -12px rgba(27, 28, 28, 0.05);
    }

    .frosted-glass {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(20px);
    }

    .premium-grain {
      position: relative;
    }

    .premium-grain::before {
      content: "";
      position: absolute;
      inset: 0;
      opacity: 0.02;
      pointer-events: none;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
    }
  </style>
  <style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>

<body class="bg-surface font-body text-on-surface antialiased premium-grain min-h-screen">
  <main class="pt-24 pb-32 px-6 max-w-5xl mx-auto">
    <!-- Student Identity Section (Editorial Asymmetry) -->
    <section class="flex flex-col md:flex-row gap-8 items-start mb-16">
      <div class="relative w-full md:w-1/3 aspect-[4/5] overflow-hidden rounded-xl bg-surface-container-low group">
        <img alt="Student Profile"
          class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
          data-alt="candid portrait of a young woman surfer standing on a beach holding a surfboard, soft morning coastal light, editorial photography style"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHTzjd0ANmPG39BA3HL0eXJWyIIBJAOhf2XMHc1gaLF0OaFEHsynyFtuzlYp2nBMAn8rX0xKuBlExp6Eykl4z5QfsE0TcrSEs_vPGIf-QraNjaP9-oviPR1G1Ae4eFC2MPCCEnFX36pWXOOA4XemzIUj3YpKa9gIoXoX8f13q4gSrbtZTWMsQ3_YZBmoEBWOfx4PSyksRxHiU-rad-V-M8hIdpQUhZHVxJmREgqHj2JqA6FB68vDbU49eJqA9Ldbs21IfQv3nqxcM" />
        <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent"></div>
      </div>
      <div class="flex-1 pt-4">
        <div class="flex flex-wrap items-center gap-4 mb-2">
          <span
            class="bg-primary-fixed text-on-primary-fixed px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest font-label">Active
            Student</span>
          <span class="text-on-surface-variant flex items-center gap-1 text-sm font-medium">
            <span class="material-symbols-outlined text-base" data-icon="location_on">location_on</span>
            Norway
          </span>
        </div>
        <h2 class="font-headline text-5xl md:text-6xl font-extrabold text-primary tracking-tighter mb-6 leading-none">
          Ingrid<br />Lundqvist</h2>
        <div class="grid grid-cols-2 gap-8 py-8 border-y border-outline-variant/15">
          <div>
            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-on-surface-variant mb-1 font-label">Current
              Level</p>
            <div class="flex items-center gap-2">
              <span class="material-symbols-outlined text-secondary" data-icon="waves" data-weight="fill"
                style="font-variation-settings: 'FILL' 1;">waves</span>
              <span class="font-headline font-bold text-xl text-primary">Intermediate</span>
            </div>
          </div>
          <div>
            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-on-surface-variant mb-1 font-label">Total
              Lessons</p>
            <p class="font-headline font-bold text-xl text-primary">12 Sessions</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Pedagogical Update (Focus Component) -->
    <section class="mb-16">
      <div class="bg-surface-container-lowest frosted-glass p-8 rounded-3xl editorial-shadow">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
          <div class="max-w-md">
            <h3 class="font-headline text-2xl font-bold text-primary mb-2">Update Skill Level</h3>
            <p class="text-on-surface-variant text-sm leading-relaxed">Assess the student's performance from today's
              session at Anchor Point. This will update their training roadmap.</p>
          </div>
          <div class="flex flex-col sm:flex-row items-center gap-4">
            <div class="relative w-full sm:w-48">
              <select
                class="appearance-none w-full bg-surface-container-low border-none rounded-xl py-4 px-5 pr-10 text-primary font-bold text-sm focus:ring-2 focus:ring-primary/20 cursor-pointer">
                <option>Beginner</option>
                <option selected="">Intermediate</option>
                <option>Advanced</option>
                <option>Elite</option>
              </select>
              <span
                class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-primary"
                data-icon="expand_more">expand_more</span>
            </div>
            <button
              class="w-full sm:w-auto bg-gradient-to-br from-primary to-primary-container text-white px-8 py-4 rounded-xl font-bold text-sm hover:opacity-90 transition-all active:scale-95">
              Update Progress
            </button>
          </div>
        </div>
        <!-- Progress Indicator -->
        <div class="mt-10">
          <div
            class="flex justify-between text-[10px] font-bold uppercase tracking-widest text-on-surface-variant mb-3 font-label">
            <span>Beginner</span>
            <span>Intermediate</span>
            <span>Advanced</span>
          </div>
          <div class="h-1.5 w-full bg-surface-container-highest rounded-full overflow-hidden">
            <div class="h-full bg-primary rounded-full" style="width: 65%;"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Lesson History (Bento-lite) -->
    <section>
      <div class="flex justify-between items-end mb-8">
        <h3 class="font-headline text-3xl font-extrabold text-primary tracking-tight">Lesson History</h3>
        <button
          class="text-primary font-bold text-sm underline decoration-2 underline-offset-4 hover:opacity-70 transition-opacity">View
          Archive</button>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Card 1 -->
        <div
          class="bg-surface-container-low p-6 rounded-2xl flex gap-6 hover:bg-surface-container-high transition-colors group cursor-default">
          <div class="w-16 h-16 rounded-xl overflow-hidden flex-shrink-0 bg-surface">
            <img alt="Lesson Location"
              class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
              data-alt="aerial view of crashing waves at a rocky point break with deep blue water and white foam"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJKMiKtX7l1PqBfvcKrdTUrvx6hvt-dJN1-9OR2PcpsY8g4dp3cO8CRnY4byUsJ3YImiX6MFvU8M5D0Mfed4NdWVpoWnEgxSGSJ_hVHKduW5trcMcRTVoQ0sU7fSMiZEiY18SFKhz9jbK0kRpq1efRaQfG-_X79LJE_xXiE_RAT-wBb_-oubhqeEyBxd45liV9HAO3umaFadF7Qg4I1AVjC7kRSVIreJNOl3Ry1acFjnp8idFZZdpa0mJMaJmHSt-B12EGQ6qCfqY" />
          </div>
          <div class="flex-1">
            <div class="flex justify-between items-start mb-1">
              <h4 class="font-bold text-primary">Sunset Session</h4>
              <span class="text-[10px] font-bold text-on-surface-variant font-label uppercase">Oct 14</span>
            </div>
            <p class="text-xs text-on-surface-variant mb-3">La Source • Chest-high waves</p>
            <div class="flex gap-2">
              <span
                class="text-[9px] font-bold bg-secondary-container/50 text-on-secondary-container px-2 py-0.5 rounded">Paddling</span>
              <span
                class="text-[9px] font-bold bg-secondary-container/50 text-on-secondary-container px-2 py-0.5 rounded">Stance</span>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div
          class="bg-surface-container-low p-6 rounded-2xl flex gap-6 hover:bg-surface-container-high transition-colors group cursor-default">
          <div class="w-16 h-16 rounded-xl overflow-hidden flex-shrink-0 bg-surface">
            <img alt="Lesson Location"
              class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
              data-alt="morning light hitting a sandy beach with long rolling waves and distant surfers"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5ROKn3eYQ3HV_KJCKDIltPXjUR_CRqpg1MjWL8NyHzvk0NTc5tQ1MOkwdIxq2yKWyXRC1Rgn0TgXfIsvOUFw6Frw1GqScSkZdVz4L62rbF1vLOAiZ4r6-l10__QldPEXjAf-P-gdj3jDWtAVY8r5lCAhvS58lu-mfBrogdGSif6AyYQrc58PAcxFJm4fXGpEMJiGF0-KopKCO-BPZ5BbRFdd2q5-OXviN_Z7KnxO-r18AFyURLfKwO_YI_Yxi2DUSaNTC-kmg0LE" />
          </div>
          <div class="flex-1">
            <div class="flex justify-between items-start mb-1">
              <h4 class="font-bold text-primary">Technique Drill</h4>
              <span class="text-[10px] font-bold text-on-surface-variant font-label uppercase">Oct 12</span>
            </div>
            <p class="text-xs text-on-surface-variant mb-3">Panoramas • Glassy conditions</p>
            <div class="flex gap-2">
              <span
                class="text-[9px] font-bold bg-secondary-container/50 text-on-secondary-container px-2 py-0.5 rounded">Bottom
                Turn</span>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div
          class="bg-surface-container-low p-6 rounded-2xl flex gap-6 hover:bg-surface-container-high transition-colors group cursor-default">
          <div class="w-16 h-16 rounded-xl overflow-hidden flex-shrink-0 bg-surface">
            <img alt="Lesson Location"
              class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
              data-alt="close-up of a surfboard fin slicing through clear ocean water with droplets in focus"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAISRHsf0ipUg1Pw1tKwcosRG59DenY3sesPXLcZ-rF5v3_kR6zWntUypDes2bHYWEaKzV_bhxgb7gI76jBn3RnygfUEuTwpL8kwwTTuUwbJHgtY6ASW4Kj0JCDgBranA1jjXvH0928xDc8907IGcDbsHrGS02M_Qrbsy1-5h2mBHdPXnP2UnszVIBJgbM2AxqJDnIMDL-jfwmFZ01Yy8AMuO-XZxn-1CI4DlZ31WXwd-SH-w1PL1Ih9cHZeRYyagMfD4fi4UGsEpE" />
          </div>
          <div class="flex-1">
            <div class="flex justify-between items-start mb-1">
              <h4 class="font-bold text-primary">Intro to Reef</h4>
              <span class="text-[10px] font-bold text-on-surface-variant font-label uppercase">Oct 09</span>
            </div>
            <p class="text-xs text-on-surface-variant mb-3">Anchor Point • Moderate swells</p>
            <div class="flex gap-2">
              <span
                class="text-[9px] font-bold bg-secondary-container/50 text-on-secondary-container px-2 py-0.5 rounded">Safety</span>
              <span
                class="text-[9px] font-bold bg-secondary-container/50 text-on-secondary-container px-2 py-0.5 rounded">Take-off</span>
            </div>
          </div>
        </div>
        <!-- Card 4 (Asymmetric empty state or CTA) -->
        <div
          class="border-2 border-dashed border-outline-variant/30 p-6 rounded-2xl flex items-center justify-center group hover:border-primary/30 transition-colors cursor-pointer">
          <div class="text-center">
            <span
              class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors mb-2 block"
              data-icon="add_circle">add_circle</span>
            <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant font-label">Schedule Next
              Session</p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- BottomNavBar -->
  <nav
    class="fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-6 pt-3 bg-white/85 dark:bg-[#1b1c1c]/85 backdrop-blur-xl shadow-[0_-4px_24px_rgba(27,28,28,0.05)] z-50 rounded-t-3xl border-none">
    <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff] transition-all"
      href="student_dashboard.php">
      <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
      <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest mt-1">Dashboard</span>
    </a>
    <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff] transition-all"
      href="add_session.php">
      <span class="material-symbols-outlined" data-icon="surfing">surfing</span>
      <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest mt-1">Lessons</span>
    </a>
    <a class="flex flex-col items-center justify-center bg-[#001e40] dark:bg-[#d5e3ff] text-white dark:text-[#001e40] rounded-xl px-4 py-2 transition-all duration-300 scale-90"
      href="student_dashboard.php">
      <span class="material-symbols-outlined" data-icon="group" data-weight="fill"
        style="font-variation-settings: 'FILL' 1;">group</span>
      <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest mt-1">Students</span>
    </a>
    <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff] transition-all"
      href="student_dashboard.php">
      <span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
      <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest mt-1">Agenda</span>
    </a>
    <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff] transition-all"
      href="student_profile.php">
      <span class="material-symbols-outlined" data-icon="person">person</span>
      <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest mt-1">Profile</span>
    </a>
  </nav>
  <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>