

<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Sign Up | Coastal Management</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Manrope:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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

    .editorial-text-shadow {
      text-shadow: 0 4px 12px rgba(0, 30, 64, 0.08);
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(20px);
    }
  </style>
</head>

<body class="bg-surface text-on-surface font-body selection:bg-primary-fixed selection:text-on-primary-fixed">
  <main class="min-h-screen flex flex-col md:flex-row pt-20 md:pt-0">
    <!-- Image Side (Atmospheric Editorial) -->
    <section class="w-full md:w-1/2 lg:w-3/5 h-[409px] md:h-screen sticky top-0 overflow-hidden">
      <div class="absolute inset-0 bg-primary/10 z-10"></div>
      <img alt="Deep blue Atlantic swell" class="w-full h-full object-cover"
        data-alt="Cinematic wide shot of a powerful deep blue Atlantic ocean swell peaking under a hazy Moroccan golden hour sky with misty sea spray"
        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVnYpIkz9Y5eLpaYpjre2yuzGZE9QZFvuPMi6jGO0_0xwEO3n1MDs7Kj1wM0RVhf_2hetzUzCR_w8VteSszkwwlOSPHd-FKVIEUT8FgcbrhDCKkBDOpXPBb2ngtW_moN3HcsTQil89-iO_wJeo3KBVkV7W6CZu9no1jFYvvbfrJz22uJJvf2__W6s3z1_XnM6H-JOQts1U8og-IkILiLwWU4I0O_24vrk_S39vNrAoC2QAtDbL_h924LWO7eT6xHQZF8yvYV6Gl3c" />
      <!-- Floating Editorial Caption -->
      <div class="absolute bottom-12 left-12 z-20 hidden lg:block">
        <h2
          class="font-headline text-5xl font-extrabold text-white editorial-text-shadow leading-tight tracking-tighter">
          THE RAW<br />ATLANTIC.
        </h2>
        <div class="h-1 w-24 bg-secondary-fixed mt-6"></div>
        <p class="mt-4 text-white/80 font-medium tracking-wide max-w-xs">
          Curated surf experiences for the modern explorer along the Moroccan coast.
        </p>
      </div>
    </section>
    <!-- Form Side -->
    <section class="w-full md:w-1/2 lg:w-2/5 flex items-center justify-center p-8 md:p-16 bg-surface">
      <div class="w-full max-w-md">
        <header class="mb-12">
          <span class="text-secondary font-headline font-bold text-xs uppercase tracking-[0.2em] mb-3 block">Join Atlas
            Swell</span>
          <h1 class="text-4xl font-headline font-extrabold text-primary tracking-tighter">Create Account</h1>
        </header>
        <form action="../../../public/index.php?action=register" method="POST" class="space-y-8">
          <!-- Full Name -->
          <div class="relative group">
            <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2"
              for="name" name="name">Full Name</label>
            <input
              class="w-full bg-surface-container-low border-none p-4 text-on-surface placeholder:text-outline/50 focus:ring-2 focus:ring-primary rounded-none transition-all"
              id="name" placeholder="Elias Vance" type="text" />
          </div>
          <!-- Email -->
          <div class="relative group">
            <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2"
              for="email" name="email">Email Address</label>
            <input
              class="w-full bg-surface-container-low border-none p-4 text-on-surface placeholder:text-outline/50 focus:ring-2 focus:ring-primary rounded-none transition-all"
              id="email" placeholder="elias@atlantic.com" type="email" />
          </div>
          <!-- Password Grid -->
          <div class="grid grid-cols-1 gap-8">
            <div>
              <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2"
                for="password" name="password">Password</label>
              <input
                class="w-full bg-surface-container-low border-none p-4 text-on-surface placeholder:text-outline/50 focus:ring-2 focus:ring-primary rounded-none transition-all"
                id="password" placeholder="••••••••" type="password" />
            </div>
            <div>
              <label class="block text-xs font-headline font-bold text-on-surface-variant uppercase tracking-wider mb-2"
                for="confirm-password" name="confirm-password">Confirm Password</label>
              <input
                class="w-full bg-surface-container-low border-none p-4 text-on-surface placeholder:text-outline/50 focus:ring-2 focus:ring-primary rounded-none transition-all"
                id="confirm-password" placeholder="••••••••" type="password" />
            </div>
          </div>
          <div class="pt-4">
            <button name="register"
              class="w-full bg-gradient-to-br from-primary to-primary-container text-white py-5 px-8 font-headline font-bold tracking-tight text-lg shadow-xl shadow-primary/10 hover:shadow-primary/20 transition-all active:scale-[0.98]"
              type="submit">
              Create Account
            </button>
          </div>
        </form>
        <footer class="mt-12 text-center">
          <p class="text-on-surface-variant font-medium">
            Already have an account?
            <a class="text-primary font-bold underline underline-offset-4 hover:text-primary-container transition-colors ml-1"
              href="login.php">Sign In</a>
          </p>
          <!-- Subtle Terms -->
          <p class="mt-12 text-[10px] text-outline uppercase tracking-widest leading-relaxed">
            By creating an account, you agree to our <br />
            <a class="hover:text-on-surface transition-colors" href="#">Privacy Policy</a> &amp; <a
              class="hover:text-on-surface transition-colors" href="#">Membership Terms</a>
          </p>
        </footer>
      </div>
    </section>
  </main>
  <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>