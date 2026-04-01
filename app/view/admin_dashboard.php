<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Taghazout Surf Expo - Manager Dashboard</title>
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

    .glass-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(20px);
    }
  </style>
  <style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>

<body class="bg-surface font-body text-on-surface">
  <main class="pt-24 pb-32 px-6 max-w-7xl mx-auto">
    <!-- Hero Editorial Section -->
    <section class="mb-12">
      <h2 class="font-headline text-primary text-4xl md:text-6xl font-extrabold tracking-tight mb-4">Atlantic Overview
      </h2>
      <p class="text-on-surface-variant max-w-xl text-lg leading-relaxed">Managing the pulse of the shore. Tracking
        student progress and session rhythms across the Moroccan coast.</p>
    </section>
    <!-- Stats Bento Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
      <!-- Stat Card: Total Students -->
      <div
        class="bg-surface-container-lowest p-8 rounded-xl flex flex-col justify-between aspect-square md:aspect-auto shadow-[0_4px_24px_rgba(27,28,28,0.02)]">
        <div>
          <span class="material-symbols-outlined text-primary mb-4 block" data-icon="group">group</span>
          <h3 class="font-label text-on-surface-variant font-semibold uppercase tracking-widest text-xs">Total Students
          </h3>
        </div>
        <div class="mt-8">
          <span class="font-headline text-5xl font-bold text-primary">1,284</span>
          <p class="text-secondary font-medium text-sm mt-2">+12% from last month</p>
        </div>
      </div>
      <!-- Stat Card: Lessons -->
      <div class="bg-primary p-8 rounded-xl flex flex-col justify-between aspect-square md:aspect-auto text-white">
        <div>
          <span class="material-symbols-outlined text-primary-fixed mb-4 block" data-icon="surfing">surfing</span>
          <h3 class="font-label text-primary-fixed opacity-80 font-semibold uppercase tracking-widest text-xs">Upcoming
            Lessons</h3>
        </div>
        <div class="mt-8">
          <span class="font-headline text-5xl font-bold">24</span>
          <p class="text-primary-fixed-dim font-medium text-sm mt-2">Scheduled for today</p>
        </div>
      </div>
      <!-- Stat Card: Occupancy -->
      <div class="bg-secondary-container p-8 rounded-xl flex flex-col justify-between aspect-square md:aspect-auto">
        <div>
          <span class="material-symbols-outlined text-on-secondary-container mb-4 block"
            data-icon="analytics">analytics</span>
          <h3 class="font-label text-on-secondary-container font-semibold uppercase tracking-widest text-xs">Session
            Occupancy</h3>
        </div>
        <div class="mt-8">
          <span class="font-headline text-3xl font-bold text-on-secondary-container leading-tight">Moyenne de 5 élèves
            par session</span>
          <div class="w-full bg-white/30 h-1.5 rounded-full mt-4 overflow-hidden">
            <div class="bg-on-secondary-container h-full w-[70%]"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Today's Schedule Section -->
    <section class="bg-surface-container-low rounded-3xl p-8">
      <div class="flex items-end justify-between mb-10">
        <div>
          <h2 class="font-headline text-primary text-3xl font-bold mb-2">Today's Sessions</h2>
          <p class="text-on-surface-variant font-medium">Monday, 24 October 2023</p>
        </div>
        <button
          class="bg-primary text-white px-6 py-3 rounded-xl font-semibold flex items-center gap-2 transition-transform active:scale-95 shadow-lg shadow-primary/10">
          <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
          New Lesson
        </button>
      </div>
      <!-- Custom List Design (No Borders) -->
      <div class="space-y-4">
        <!-- Lesson Item 1 -->
        <div
          class="group flex flex-col md:flex-row md:items-center justify-between p-6 bg-surface-container-lowest rounded-2xl transition-all hover:translate-x-1">
          <div class="flex items-center gap-6">
            <div class="w-16 h-16 rounded-xl overflow-hidden bg-surface-container">
              <img alt="Lesson" class="w-full h-full object-cover"
                data-alt="aerial drone photography of rolling atlantic waves crashing on a sandy beach with turquoise water"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAvzGeZ0puoXgsIJEWvjMVUoWJR1GHYphH7D4gKfwGsaZmJD7hfXzkR0_DmGUmFUKpUHnmwzlhIdjutgKMB7xgNfgfcPY6PL73tXaAYHAPpOUoFNOBPOrfWSgzf6w9haOJClxjgMsYQ65mGrcIrVTAmiIigvVk8hSchLNQHMCC1bgfH1PJ5un36vouthg2Ksa_aHUaN2MSL_lwAXvzwMe__VbPgbSl6hNlWH4csyPGM1KlzWbQUicsB0f5yEnHFvpThE-sCUYdqdlU" />
            </div>
            <div>
              <h4 class="font-headline text-xl font-bold text-primary">Advanced Point Break</h4>
              <div class="flex items-center gap-4 mt-1">
                <span class="flex items-center gap-1 text-on-surface-variant text-sm font-medium">
                  <span class="material-symbols-outlined text-xs" data-icon="person">person</span>
                  Coach Yassine
                </span>
                <span class="flex items-center gap-1 text-on-surface-variant text-sm font-medium">
                  <span class="material-symbols-outlined text-xs" data-icon="schedule">schedule</span>
                  08:30 AM
                </span>
              </div>
            </div>
          </div>
          <div class="mt-4 md:mt-0 flex items-center gap-4">
            <span
              class="bg-primary-fixed text-on-primary-fixed px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest">Paid</span>
            <span class="material-symbols-outlined text-outline cursor-pointer hover:text-primary"
              data-icon="more_vert">more_vert</span>
          </div>
        </div>
        <!-- Lesson Item 2 -->
        <div
          class="group flex flex-col md:flex-row md:items-center justify-between p-6 bg-surface-container-lowest rounded-2xl transition-all hover:translate-x-1">
          <div class="flex items-center gap-6">
            <div class="w-16 h-16 rounded-xl overflow-hidden bg-surface-container">
              <img alt="Lesson" class="w-full h-full object-cover"
                data-alt="close-up of a surfboard standing in the sand at sunset with golden light and soft shadows"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmnietPiL1m0HuJea_fVg5FEt3FhmfeTieFg5gF1Skt7-15bB9sI0vgwC7eLHkVp8iuELuNd-MkzkOQ6XXcMogaQtE2fsxkUlSBy0r3kPe4InU-MD1NtpYCSC-FGjkuSHUUqKppI_pKlyFsHMtij33gnY3hycv0bPr7N09BVzQh-XiH17O5ZcbreMQ5SfE-q1ONNgaHNIZFSUOt_HYWJIJS21DyIvWpgni4Qirsemf4pgOQ_2Br118rZCw92BX_OJp-KnlTmJvYkE" />
            </div>
            <div>
              <h4 class="font-headline text-xl font-bold text-primary">Beginner Fundamentals</h4>
              <div class="flex items-center gap-4 mt-1">
                <span class="flex items-center gap-1 text-on-surface-variant text-sm font-medium">
                  <span class="material-symbols-outlined text-xs" data-icon="person">person</span>
                  Coach Amine
                </span>
                <span class="flex items-center gap-1 text-on-surface-variant text-sm font-medium">
                  <span class="material-symbols-outlined text-xs" data-icon="schedule">schedule</span>
                  10:00 AM
                </span>
              </div>
            </div>
          </div>
          <div class="mt-4 md:mt-0 flex items-center gap-4">
            <span
              class="bg-surface-container-highest text-on-surface-variant px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest">Pending</span>
            <span class="material-symbols-outlined text-outline cursor-pointer hover:text-primary"
              data-icon="more_vert">more_vert</span>
          </div>
        </div>
        <!-- Lesson Item 3 -->
        <div
          class="group flex flex-col md:flex-row md:items-center justify-between p-6 bg-surface-container-lowest rounded-2xl transition-all hover:translate-x-1">
          <div class="flex items-center gap-6">
            <div class="w-16 h-16 rounded-xl overflow-hidden bg-surface-container">
              <img alt="Lesson" class="w-full h-full object-cover"
                data-alt="wide shot of a tranquil moroccan coastal town with white buildings and blue ocean at dawn"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRLVHwZEcaCPSu1WaLipTmqT9D-94rYySG8STF9NvUI1tTwN4DkYlX5m6NuovXZWbXUCRSkX0wGEkAcY2MPI0A30mj-Gzes72JWNZgTkmGgZ5_OWhfoGjYyfekirL6kDZI-B6iLeGaqbdGOZ3HO_ugd018a6wpuTgKZlRyXoE9WSlG-03wDRhMyn50mIOIGof9lKL3hRE6YZCfQnSrASyT-uvdbELxo56SgOtQ55szsG6OFyTMTHFlkToocBplp4Z7LZlGcAd3SvI" />
            </div>
            <div>
              <h4 class="font-headline text-xl font-bold text-primary">Sunset Expression Session</h4>
              <div class="flex items-center gap-4 mt-1">
                <span class="flex items-center gap-1 text-on-surface-variant text-sm font-medium">
                  <span class="material-symbols-outlined text-xs" data-icon="person">person</span>
                  Coach Sarah
                </span>
                <span class="flex items-center gap-1 text-on-surface-variant text-sm font-medium">
                  <span class="material-symbols-outlined text-xs" data-icon="schedule">schedule</span>
                  05:30 PM
                </span>
              </div>
            </div>
          </div>
          <div class="mt-4 md:mt-0 flex items-center gap-4">
            <span
              class="bg-primary-fixed text-on-primary-fixed px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest">Paid</span>
            <span class="material-symbols-outlined text-outline cursor-pointer hover:text-primary"
              data-icon="more_vert">more_vert</span>
          </div>
        </div>
      </div>
    </section>
    <!-- Informational Card / Asymmetric Layout -->
    <section class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <div class="relative group">
        <div
          class="absolute -inset-4 bg-secondary/10 rounded-[2rem] -z-10 transform -rotate-2 group-hover:rotate-0 transition-transform duration-500">
        </div>
        <img alt="Coast" class="rounded-3xl shadow-xl w-full aspect-[4/3] object-cover"
          data-alt="minimalist architectural shot of a moroccan courtyard with clay walls and shadows cast by palm leaves"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrAW0BpQQFxfpT87WHY9pQNh7kvyOVA3Mwn6z8tWYN1cT6K_m-LIRc8jaRDO4Z4HeOyVqU5U8qKYBT9V3axYT104GdHcMKVNZNEtohnnsmjJkvr1X9OhodacBgyjQBeEYAHvPgSetEcJ1f51ogQ7GYGCaWFgn1NcdEp4B3m02UsY_u2ziJoq7_Z-Jky-qbb4sBn39z3VkEukk-RZvsioj4qppF6AnlJgDATaAHi-_DIRwXjG2U-I7PsqBslnCEOp42kAutMauhZXc" />
      </div>
      <div class="space-y-6">
        <h3 class="font-headline text-3xl font-bold text-primary leading-tight">Optimizing the flow of your surf
          academy.</h3>
        <p class="text-on-surface-variant text-lg leading-relaxed">The Taghazout Surf Expo Manager Dashboard provides
          real-time visibility into your team's performance and student engagement. Leverage our coastal analytics to
          scale your operations.</p>
        <div class="flex gap-4">
          <button
            class="bg-secondary text-white px-8 py-3 rounded-xl font-semibold transition-opacity hover:opacity-90">View
            Reports</button>
          <button
            class="border-b-2 border-primary text-primary px-2 py-3 font-bold hover:bg-primary/5 transition-colors">Team
            Access</button>
        </div>
      </div>
    </section>
  </main>
  <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>