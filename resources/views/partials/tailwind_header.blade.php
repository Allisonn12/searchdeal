@include('partials.flash')
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-WX9J0BVDQC"></script> <script> window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-WX9J0BVDQC'); </script>

    <!-- Facebook Pixel Code -->
    <script nonce="4BUkMtdd">
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

      fbq('init', '1322182192366880');
      fbq('set','agent','tmgoogletagmanager', '1322182192366880');
      fbq('track', "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1322182192366880&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="insurance, cheap insurance, best insurance, compare insurance, affordable insurance, insurance deals, insurance discount" name="keywords" />
    <meta content="SearchADeal helps you find the best insurance deals! Compare quotes for car, medical, life and many more insurances from top providers. Save money with affordable rates and exclusive discounts. Get your free quote today!" name="description" />

    <title>SearchADeal</title>

    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#0f172a',
              background: '#f8fafc',
              white: '#ffffff',
              accent: '#f59e0b',
              muted: '#64748b',
              border: '#e2e8f0',
              insurance: '#1e40af',
              tracker: '#065f46',
              loans: '#92400e'
            },
            fontFamily: {
              heading: ['DM Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
              body: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
            }
          }
        }
      }
    </script>
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    <style>
        .text-accent  { color: #F59E0B; }
        .orange-bg    { background: #F59E0B; }
        .black-button,
        .black-bg     { background: #0F172A; }
        .black-button:hover { background: #F59E0B; }
        .grey-bg      { background: #F8FAFC; }
        .light-orange { color: #312002; }
        .blue-bg     { background: #0F172A; }
    </style>


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-NWN5MH94');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="min-h-screen flex flex-col relative bg-white">


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWN5MH94"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


{{-- ── Header — identical to tracker1 ── --}}
<header class="fixed top-0 left-0 right-0 h-[58px] px-[14.5px] md:px-[58px] flex items-center justify-between z-50 bg-background/90 backdrop-blur-sm">
    <div class="font-heading font-bold text-xl tracking-tighter">SearchADeal</div>

    <button
            type="button"
            aria-label="Open Menu"
            class="md:hidden inline-flex items-center justify-center w-9 h-9 rounded-md border border-primary text-primary hover:bg-background/60"
            onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>

    <nav class="hidden md:flex items-center gap-8 font-heading text-[10px] font-medium uppercase tracking-wider">
        <a href="{{ route('index') }}"         class="nav-item nav-link {{ Route::is('index')         ? 'active' : '' }}">Home</a>
        <a href="{{ route('car-insurance') }}"  class="nav-item nav-link {{ Route::is('car-insurance') ? 'active' : '' }}">Car Insurance</a>
        <a href="{{ route('tracker1') }}"       class="nav-item nav-link {{ Route::is('tracker1')      ? 'active' : '' }}">Car Trackers</a>
        <a href="{{ route('tracker.loan') }}"   class="hover:text-accent transition-colors">Personal Loans</a>
        <a href="{{ route('how-it-works') }}"   class="nav-item nav-link {{ Route::is('how-it-works')   ? 'active' : '' }}">How It Works</a>
    </nav>

</header>

{{-- Mobile menu drawer --}}
<div id="mobile-menu" class="md:hidden hidden fixed top-[58px] inset-x-0 z-40 bg-white border-b border-border shadow-sm float-end">
    <div class="px-4 py-3 flex flex-col gap-3 font-heading text-[12px] uppercase">
        <a href="{{ route('index') }}"         class="py-2">Home</a>
        <a href="{{ route('car-insurance') }}" class="py-2">Car Insurance</a>
        <a href="{{ route('tracker1') }}"      class="py-2">Car Trackers</a>
        <a href="{{ route('tracker.loan') }}"  class="py-2">Personal Loans</a>
        <a href="{{ route('how-it-works') }}"  class="py-2">How It Works</a>
    </div>
</div>
