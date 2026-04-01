<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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

    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }

    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>
  <style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>

<body class="bg-surface text-on-surface font-body min-h-screen">
  <main class="pt-24 pb-32 px-6 max-w-5xl mx-auto">
    <!-- Header Section -->
    <div class="mb-12">
      <h2 class="font-headline text-5xl font-extrabold text-primary tracking-tight mb-2">Create Session</h2>
      <p class="text-on-surface-variant body-lg max-w-2xl">Plan a new surfing experience. Organize coaches, schedules,
        and student rosters in one editorial view.</p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
      <!-- Session Details Form -->
      <div class="lg:col-span-7 space-y-10">
        <section class="bg-surface-container-lowest p-8 rounded-xl shadow-sm">
          <h3 class="font-headline text-xl font-bold text-primary mb-8 border-b border-outline-variant/15 pb-4">
            Essential Details</h3>
          <div class="space-y-8">
            <!-- Session Title -->
            <div class="group">
              <label class="block text-[10px] font-bold uppercase tracking-[0.2em] text-on-surface-variant mb-2">Session
                Title</label>
              <input
                class="w-full bg-surface-container-low border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary transition-all text-primary font-medium placeholder:text-outline-variant"
                placeholder="e.g. Sunset Longboard Clinic" type="text" />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <!-- Coach Selection -->
              <div>
                <label class="block text-[10px] font-bold uppercase tracking-[0.2em] text-on-surface-variant mb-2">Lead
                  Coach</label>
                <div class="relative">
                  <select
                    class="w-full bg-surface-container-low border-none rounded-xl py-4 px-5 appearance-none focus:ring-2 focus:ring-primary transition-all text-primary font-medium">
                    <option>Select Coach</option>
                    <option>Yassine B.</option>
                    <option>Amine K.</option>
                    <option>Sarah L.</option>
                  </select>
                  <span
                    class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant"
                    data-icon="expand_more">expand_more</span>
                </div>
              </div>
              <!-- Date & Time -->
              <div>
                <label
                  class="block text-[10px] font-bold uppercase tracking-[0.2em] text-on-surface-variant mb-2">Schedule</label>
                <div class="flex gap-2">
                  <div class="relative flex-1">
                    <input
                      class="w-full bg-surface-container-low border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary transition-all text-primary font-medium"
                      type="date" />
                  </div>
                  <div class="relative w-32">
                    <input
                      class="w-full bg-surface-container-low border-none rounded-xl py-4 px-5 focus:ring-2 focus:ring-primary transition-all text-primary font-medium"
                      type="time" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Action Bar -->
        <div class="flex items-center justify-between pt-4">
          <button
            class="text-primary font-bold uppercase tracking-widest text-sm hover:underline transition-all decoration-2 underline-offset-8">Cancel
            Draft</button>
          <button
            class="bg-gradient-to-br from-primary to-primary-container text-white px-10 py-4 rounded-xl font-bold uppercase tracking-widest shadow-xl shadow-primary/20 active:scale-95 transition-all">Save
            Session</button>
        </div>
      </div>
      <!-- Student Management -->
      <div class="lg:col-span-5">
        <aside class="sticky top-28 space-y-6">
          <div class="bg-surface-container-low rounded-xl p-6">
            <div class="flex items-center justify-between mb-6">
              <h3 class="font-headline text-lg font-bold text-primary">Student Roster</h3>
              <span class="bg-primary-fixed text-on-primary-fixed text-[10px] font-bold px-3 py-1 rounded-full">0/8
                CAPACITY</span>
            </div>
            <!-- Level Filter Tabs -->
            <div class="flex gap-2 mb-6 overflow-x-auto no-scrollbar pb-2">
              <button
                class="bg-primary text-white px-4 py-2 rounded-full text-xs font-bold whitespace-nowrap">All</button>
              <button
                class="bg-surface-container-highest text-on-surface-variant px-4 py-2 rounded-full text-xs font-bold whitespace-nowrap hover:bg-outline-variant/30 transition-colors">Beginner</button>
              <button
                class="bg-surface-container-highest text-on-surface-variant px-4 py-2 rounded-full text-xs font-bold whitespace-nowrap hover:bg-outline-variant/30 transition-colors">Intermediate</button>
              <button
                class="bg-surface-container-highest text-on-surface-variant px-4 py-2 rounded-full text-xs font-bold whitespace-nowrap hover:bg-outline-variant/30 transition-colors">Advanced</button>
            </div>
            <!-- Student List -->
            <div class="space-y-3">
              <!-- Student Card -->
              <div class="bg-surface-container-lowest p-4 rounded-xl flex items-center justify-between group">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-lg bg-secondary-container flex items-center justify-center">
                    <span class="text-on-secondary-container font-bold text-sm">JS</span>
                  </div>
                  <div>
                    <p class="font-bold text-sm text-primary">Julian Smith</p>
                    <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider">Intermediate</p>
                  </div>
                </div>
                <button
                  class="w-8 h-8 rounded-full bg-surface-container-low text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                  <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                </button>
              </div>
              <!-- Student Card -->
              <div class="bg-surface-container-lowest p-4 rounded-xl flex items-center justify-between group">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center">
                    <span class="text-on-surface-variant font-bold text-sm">ML</span>
                  </div>
                  <div>
                    <p class="font-bold text-sm text-primary">Maria Lopez</p>
                    <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider">Beginner</p>
                  </div>
                </div>
                <button
                  class="w-8 h-8 rounded-full bg-surface-container-low text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                  <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                </button>
              </div>
              <!-- Student Card (Added state) -->
              <div
                class="bg-primary-fixed/30 p-4 rounded-xl flex items-center justify-between border-2 border-primary/10">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center">
                    <span class="font-bold text-sm">AK</span>
                  </div>
                  <div>
                    <p class="font-bold text-sm text-primary">Adam Khan</p>
                    <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider">Advanced</p>
                  </div>
                </div>
                <button
                  class="w-8 h-8 rounded-full bg-error-container text-error flex items-center justify-center hover:bg-error hover:text-white transition-all">
                  <span class="material-symbols-outlined text-sm" data-icon="remove">remove</span>
                </button>
              </div>
            </div>
            <!-- Search/Filter Input -->
            <div class="mt-8 pt-6 border-t border-outline-variant/15">
              <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant"
                  data-icon="search">search</span>
                <input
                  class="w-full bg-surface border-none rounded-full py-3 pl-12 pr-4 text-xs font-medium focus:ring-1 focus:ring-primary"
                  placeholder="Quick search students..." type="text" />
              </div>
            </div>
          </div>
          <!-- Informational Card -->
          <div class="bg-secondary-container p-6 rounded-xl relative overflow-hidden">
            <div class="relative z-10">
              <h4 class="font-headline font-bold text-on-secondary-container mb-1">Ocean Note</h4>
              <p class="text-xs text-on-secondary-container/80 leading-relaxed">High tide is at 17:45. Perfect for
                longboarding sessions at the Point.</p>
            </div>
            <span
              class="material-symbols-outlined absolute -right-4 -bottom-4 text-8xl text-on-secondary-container/10 rotate-12"
              data-icon="water_drop">water_drop</span>
          </div>
        </aside>
      </div>
    </div>
  </main>
  <!-- BottomNavBar -->
  <nav
    class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-6 pt-3 bg-white/85 dark:bg-[#1b1c1c]/85 backdrop-blur-xl shadow-[0_-4px_24px_rgba(27,28,28,0.05)] z-50 rounded-t-3xl">
    <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff]"
      href="#">
      <span class="material-symbols-outlined mb-1" data-icon="dashboard">dashboard</span>
      <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest">Dashboard</span>
    </a>
    <a class="flex flex-col items-center justify-center bg-[#001e40] dark:bg-[#d5e3ff] text-white dark:text-[#001e40] rounded-xl px-4 py-2 transition-all duration-300 active:scale-90 duration-200"
      href="#">
      <span class="material-symbols-outlined mb-1" data-icon="surfing">surfing</span>
      <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest">Lessons</span>
    </a>
    <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff]"
      href="#">
      <span class="material-symbols-outlined mb-1" data-icon="group">group</span>
      <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest">Students</span>
    </a>
    <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff]"
      href="#">
      <span class="material-symbols-outlined mb-1" data-icon="calendar_today">calendar_today</span>
      <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest">Agenda</span>
    </a>
    <a class="flex flex-col items-center justify-center text-[#43474f] dark:text-[#c3c6d1] px-4 py-2 hover:text-[#001e40] dark:hover:text-[#d5e3ff]"
      href="#">
      <span class="material-symbols-outlined mb-1" data-icon="person">person</span>
      <span class="font-['Manrope'] text-[10px] font-semibold uppercase tracking-widest">Profile</span>
    </a>
  </nav>
  <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>