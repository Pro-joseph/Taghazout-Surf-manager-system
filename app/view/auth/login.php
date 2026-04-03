














<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Manrope:wght@400;500;600&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "surface-container-low": "#f5f3f3",
            "on-secondary-fixed-variant": "#584324",
            "on-surface-variant": "#43474f",
            "surface-tint": "#3a5f94",
            "on-primary": "#ffffff",
            "on-background": "#1b1c1c",
            "surface-container-highest": "#e4e2e2",
            "surface": "#fbf9f8",
            "on-secondary-fixed": "#281801",
            "on-secondary": "#ffffff",
            "surface-bright": "#fbf9f8",
            "secondary-container": "#fbdbb0",
            "primary-fixed": "#d5e3ff",
            "inverse-surface": "#303030",
            "on-error": "#ffffff",
            "outline-variant": "#c3c6d1",
            "surface-dim": "#dbd9d9",
            "secondary-fixed": "#feddb3",
            "tertiary": "#1d1f1f",
            "primary-fixed-dim": "#a7c8ff",
            "surface-container-lowest": "#ffffff",
            "secondary-fixed-dim": "#e1c299",
            "outline": "#737780",
            "inverse-on-surface": "#f2f0f0",
            "on-tertiary-fixed-variant": "#454747",
            "on-error-container": "#93000a",
            "tertiary-container": "#323434",
            "on-secondary-container": "#765f3d",
            "background": "#fbf9f8",
            "on-primary-fixed": "#001b3c",
            "tertiary-fixed": "#e2e2e2",
            "on-tertiary-fixed": "#1a1c1c",
            "on-surface": "#1b1c1c",
            "inverse-primary": "#a7c8ff",
            "error": "#ba1a1a",
            "on-primary-container": "#799dd6",
            "on-tertiary": "#ffffff",
            "surface-container-high": "#eae8e7",
            "on-tertiary-container": "#9b9c9c",
            "tertiary-fixed-dim": "#c6c6c7",
            "surface-variant": "#e4e2e2",
            "surface-container": "#efeded",
            "secondary": "#725a39",
            "primary-container": "#003366",
            "on-primary-fixed-variant": "#1f477b",
            "primary": "#001e40",
            "error-container": "#ffdad6"
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
      box-shadow: 0 8px 32px 0 rgba(27, 28, 28, 0.05);
    }

    .glass-panel {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(20px);
    }
  </style>
</head>

<body
  class="bg-surface text-on-surface font-body selection:bg-secondary-container selection:text-on-secondary-container">

  <main class="min-h-screen flex flex-col md:flex-row pt-24 md:pt-0">
    <!-- Visual Anchor: Atmospheric Imagery -->
    <section class="w-full md:w-1/2 h-[409px] md:h-screen relative overflow-hidden">
      <div class="absolute inset-0 bg-primary/10 z-10"></div>
      <img alt="Atlantic Break" class="w-full h-full object-cover"
        data-alt="dramatic wide shot of a powerful dark blue atlantic ocean wave breaking near a rocky moroccan coastline at dawn with misty atmosphere"
        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAvFEPgD9xDcx1A3E-ueKVTw9ERfklXoAYY5d_xEyYOCjGaQVGCtlt931FKQDI-aGp9XLyNn0S37OGNApporSB8qO1a1vPIYODmlwn-tKwD9Ir5Y6P16nXcQag7XxpyRKK9kkRPuwwHiavd0t9g7LPRXhrBBuXF2lSbbONtNZFF9nXaQqgnZKE625YZ1X59QwdExusDeh-qRWqrZ3E4ymZ23TB_fbT2-4uhRclBEtGUHjy95w-jbZZX19Ffh9tXat4sdCfYaAHxOOg" />
      <div class="absolute bottom-12 left-12 z-20 max-w-md hidden md:block">
        <h1 class="text-on-primary font-headline font-extrabold text-5xl tracking-tighter leading-none mb-4">
          The Archive<br />of Movement.
        </h1>
        <p class="text-on-primary/80 font-body text-lg leading-relaxed">
          Access the Atlantic's most refined swell data and instructor-led coastal expeditions.
        </p>
      </div>
    </section>
    <!-- Form Canvas -->
    <section class="w-full md:w-1/2 flex items-center justify-center p-8 md:p-24 bg-surface">
      <div class="w-full max-w-md">
        <header class="mb-12">
          <span class="font-label text-xs font-bold tracking-[0.2em] text-secondary uppercase block mb-4">Welcome
            Back</span>
          <h2 class="font-headline font-bold text-4xl tracking-tight text-primary">Atlas Swell</h2>
        </header>
        <form action="../../../public/index.php?action=login" method="POST" class="space-y-8">
          <div class="space-y-6">
            <!-- Email Field -->
            <div class="group">
              <label class="block font-label text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-2"
                for="email">Email Address</label>
              <input
                class="w-full bg-surface-container-low border-none focus:ring-1 focus:ring-primary py-4 px-0 border-b border-outline-variant/30 text-primary font-body placeholder:text-outline transition-all"
                id="email" name="email" placeholder="name@archive.com" type="email" />
            </div>
            <!-- Password Field -->
            <div class="group">
              <div class="flex justify-between items-center mb-2">
                <label class="block font-label text-xs font-bold text-on-surface-variant uppercase tracking-widest"
                  for="password">Password</label>
                <a class="text-xs font-label font-bold text-secondary hover:text-primary transition-colors"
                  href="#">Forgot Password</a>
              </div>
              <input
                class="w-full bg-surface-container-low border-none focus:ring-1 focus:ring-primary py-4 px-0 border-b border-outline-variant/30 text-primary font-body placeholder:text-outline transition-all"
                id="password" name="password" placeholder="••••••••" type="password" />
            </div>
          </div>
          <div class="pt-4 space-y-6">
            <button
              class="w-full py-5 bg-gradient-to-br from-primary to-primary-container text-on-primary font-headline font-extrabold tracking-widest uppercase text-sm rounded-DEFAULT shadow-lg hover:shadow-xl active:scale-[0.98] transition-all"
              type="submit">
              Sign In
            </button>
            <div class="text-center">
              <p class="text-on-surface-variant font-body text-sm">
                New to the archive?
                <a class="text-primary font-bold hover:underline underline-offset-4 ml-1" href="register.php">Create an
                  Account</a>
              </p>
            </div>
          </div>
        </form>
        <div class="mt-16 pt-8 border-t border-outline-variant/10">
          <div class="flex items-center gap-6 opacity-40 grayscale hover:grayscale-0 transition-all duration-500">
            <span
              class="text-[10px] font-label font-bold tracking-widest uppercase text-on-surface-variant">Partnerships</span>
            <div class="h-[1px] flex-grow bg-outline-variant/20"></div>
          </div>
          <div class="mt-4 flex gap-8">
            <span class="material-symbols-outlined text-on-surface-variant" data-icon="waves">waves</span>
            <span class="material-symbols-outlined text-on-surface-variant" data-icon="sailing">sailing</span>
            <span class="material-symbols-outlined text-on-surface-variant" data-icon="explore">explore</span>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>