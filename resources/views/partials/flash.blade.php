@if(session('success') || session('error'))
<div
  id="flash-container"
  style="
    position: fixed;
    top: 72px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 99999;
    width: min(calc(100% - 2rem), 540px);
    font-family: inherit;
  "
>

  {{-- ── Success toast ──────────────────────────────── --}}
  @if(session('success'))
  <div
    id="flash-success"
    role="alert"
    aria-live="polite"
    style="
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 14px 18px;
      background: #f0fdf4;
      border: 1px solid #4ade80;
      border-left: 4px solid #16a34a;
      border-radius: 4px;
      box-shadow: 0 4px 16px rgba(0,0,0,.12);
      margin-bottom: 8px;
      transition: opacity .4s ease;
    "
  >
    {{-- Checkmark icon --}}
    <svg style="width:20px;height:20px;flex-shrink:0;margin-top:2px;color:#16a34a" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
    </svg>
    <p style="flex:1;margin:0;font-size:14px;font-weight:500;color:#15803d;line-height:1.5">
      {{ session('success') }}
    </p>
    <button
      onclick="dismissFlash('flash-success')"
      aria-label="Dismiss"
      style="background:none;border:none;cursor:pointer;padding:0;font-size:22px;line-height:1;color:#16a34a;font-weight:700;flex-shrink:0"
    >&times;</button>
  </div>
  @endif

  {{-- ── Error toast ────────────────────────────────── --}}
  @if(session('error'))
  <div
    id="flash-error"
    role="alert"
    aria-live="assertive"
    style="
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 14px 18px;
      background: #fef2f2;
      border: 1px solid #f87171;
      border-left: 4px solid #dc2626;
      border-radius: 4px;
      box-shadow: 0 4px 16px rgba(0,0,0,.12);
      transition: opacity .4s ease;
    "
  >
    {{-- Warning icon --}}
    <svg style="width:20px;height:20px;flex-shrink:0;margin-top:2px;color:#dc2626" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
    </svg>
    <p style="flex:1;margin:0;font-size:14px;font-weight:500;color:#b91c1c;line-height:1.5">
      {{ session('error') }}
    </p>
    <button
      onclick="dismissFlash('flash-error')"
      aria-label="Dismiss"
      style="background:none;border:none;cursor:pointer;padding:0;font-size:22px;line-height:1;color:#dc2626;font-weight:700;flex-shrink:0"
    >&times;</button>
  </div>
  @endif

</div>

{{-- Auto-dismiss + fade-out helper --}}
<script>
  function dismissFlash(id) {
    var el = document.getElementById(id)
    if (!el) return
    el.style.opacity = '0'
    // Remove from DOM after CSS transition completes
    setTimeout(function () { el.remove() }, 400)
  }

  // Auto-dismiss both toasts after 6 seconds
  ;['flash-success', 'flash-error'].forEach(function (id) {
    var el = document.getElementById(id)
    if (el) setTimeout(function () { dismissFlash(id) }, 30000)
  })
</script>
@endif
