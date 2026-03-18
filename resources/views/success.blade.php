<!DOCTYPE html>

<html lang="en"><head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Success! - Mission Accomplished</title>
  <!-- Tailwind CSS v3 with plugins -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <style data-purpose="typography">
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@700&display=swap');

    body {
      font-family: 'Inter', sans-serif;
    }

    .heading-font {
      font-family: 'Playfair Display', serif;
    }
  </style>
  <style data-purpose="animations">
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }
    .animate-float {
      animation: float 3s ease-in-out infinite;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-in-up {
      animation: fadeIn 0.8s ease-out forwards;
    }
  </style>
</head>
<body class="bg-[#f3f4f6] min-h-screen flex items-center justify-center p-6">
<!-- BEGIN: SuccessContainer -->
<main class="max-w-2xl w-full text-center fade-in-up" data-purpose="success-page-container">
  <section class="space-y-4" data-purpose="success-message-text">
    <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 tracking-tight heading-font">
      SUCCESSFUL
    </h1>
    <p class="text-lg md:text-xl text-gray-600 max-w-lg mx-auto leading-relaxed">
      Mission Accomplished! Your action was completed successfully.
    </p>
  </section>
  <!-- END: ContentSection -->
  <!-- BEGIN: ActionButtons -->
  <section class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4" data-purpose="navigation-actions">
    <!-- Primary Action -->
    <a class="w-full sm:w-auto px-8 py-4 bg-[#27ae60] hover:bg-[#219150] text-white font-semibold rounded-lg transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 active:scale-95 text-lg" data-purpose="return-home-button" href="/">
      Return Home
    </a>
  </section>
  <!-- END: ActionButtons -->
  <!-- BEGIN: FooterSubtext -->
  <footer class="mt-16 text-gray-400 text-sm" data-purpose="page-footer">
    <p>© @php
            echo date('Y');
              @endphp SEARCHADEAL. All rights reserved.</p>
  </footer>
  <!-- END: FooterSubtext -->
</main>
<!-- END: SuccessContainer -->
<!-- BEGIN: InteractiveParticleScript -->
<script data-purpose="confetti-background">
  // Optional: Minor interactivity to simulate celebration if needed
  console.log("Success page loaded successfully.");
</script>
<!-- END: InteractiveParticleScript -->
</body></html>
