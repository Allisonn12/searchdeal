<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login — SearchADeal</title>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#0f172a',
            accent:  '#E23E3E',
          },
          fontFamily: {
            heading: ['DM Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            body:    ['Inter',   'ui-sans-serif', 'system-ui', 'sans-serif'],
          }
        }
      }
    }
  </script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 flex items-center justify-center font-body">

<div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

  {{-- Logo --}}
  <div class="mb-8 text-center">
    <a href="{{ route('index') }}" class="font-heading font-bold text-2xl tracking-tighter text-primary hover:text-accent transition-colors">
      SearchADeal
    </a>
    <p class="mt-1 text-sm text-slate-500">Admin Portal</p>
  </div>

  {{-- Validation errors --}}
  @if ($errors->any())
    <div class="mb-4 rounded-lg bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
      {{ $errors->first() }}
    </div>
  @endif

  <form method="POST" action="{{ route('admin.login') }}" novalidate>
    @csrf

    {{-- Email --}}
    <div class="mb-5">
      <label for="email" class="block mb-1.5 text-sm font-medium text-slate-700">
        Email address
      </label>
      <input
        id="email"
        type="email"
        name="email"
        value="{{ old('email') }}"
        required
        autocomplete="email"
        class="w-full rounded-lg border @error('email') border-red-400 bg-red-50 @else border-slate-300 @enderror px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-accent/50 focus:border-accent transition"
      />
    </div>

    {{-- Password --}}
    <div class="mb-6">
      <label for="password" class="block mb-1.5 text-sm font-medium text-slateate-700">
        Password
      </label>
      <input
        id="password"
        type="password"
        name="password"
        required
        autocomplete="current-password"
        class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-accent/50 focus:border-accent transition"
      />
    </div>

    {{-- Remember me --}}
    <div class="mb-6 flex items-center gap-2">
      <input id="remember" type="checkbox" name="remember" class="w-4 h-4 rounded accent-accent cursor-pointer" />
      <label for="remember" class="text-sm text-slate-600 cursor-pointer">Remember me</label>
    </div>

    <button
      type="submit"
      class="w-full rounded-lg bg-primary text-white text-sm font-semibold py-3 hover:bg-accent transition-colors"
    >
      Sign in
    </button>
  </form>

</div>

</body>
</html>

