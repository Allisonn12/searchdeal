

{{-- ── Footer — identical to tracker1 ── --}}
<footer class="relative min-h-[40vh] md:min-h-[60vh] flex items-end mt-12 md:mt-20">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&q=80&w=1600" alt="Abstract Background" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
    </div>

    <div class="relative z-10 w-full max-w-[1400px] mx-auto bg-white p-5 md:p-[58px] pb-[22px]">
        <div class="mb-8 md:mb-12 p-4 md:p-6 bg-background rounded-[3px] border border-border">
            <h5 class="font-heading text-[10px] md:text-[11px] font-bold uppercase tracking-wider text-primary mb-2 md:mb-4">Important Disclosure</h5>
            <p class="font-body text-[12px] text-muted leading-relaxed">
                SearchADeal is not a registered financial services provider, insurer, or credit provider. We operate as an affiliate comparison platform connecting consumers with registered providers. All insurance decisions, terms, premiums, and approvals remain subject to each insurer&rsquo;s independent underwriting assessment.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 mb-12 md:mb-16">
            <div class="md:col-span-4 flex flex-col items-start">
                <div class="font-heading font-bold text-2xl md:text-3xl tracking-tighter mb-6 md:mb-8">SearchADeal</div>
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-6 md:px-8 py-3 rounded-full border border-primary font-heading text-[14px] md:text-[15px] hover:bg-primary hover:text-white transition-colors text-center">
                    Contact us
                </a>
            </div>

            <div class="md:col-span-8 grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-8">
                <div class="flex flex-col gap-3 md:gap-4">
                    <h5 class="font-heading text-[10px] md:text-[11px] font-bold uppercase tracking-wider text-primary mb-1 md:mb-2">Services</h5>
                    <a href="{{ route('car-insurance') }}" class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">Car Insurance</a>
                    <a href="{{ route('tracker1') }}"       class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">Car Trackers</a>
                    <a href="{{ route('tracker.loan') }}"   class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">Personal Loans</a>
                </div>
                <div class="flex flex-col gap-3 md:gap-4">
                    <h5 class="font-heading text-[10px] md:text-[11px] font-bold uppercase tracking-wider text-primary mb-1 md:mb-2">Company</h5>
                    <a href="{{ route('how-it-works') }}"  class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">How It Works</a>
                    <a href="{{ route('contact') }}"  class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">Contact</a>
                    <a href="{{ route('policy') }}"   class="font-heading text-[14px] md:text-[15px] text-primary hover:text-accent transition-colors">Privacy</a>
                </div>
                <div class="flex flex-col items-start md:items-end gap-4">
                    <a href="#" class="w-10 md:w-12 h-10 md:h-12 rounded-full border border-primary flex items-center justify-center hover:bg-primary hover:text-white transition-colors group" aria-label="LinkedIn">
                        <i data-lucide="linkedin" class="w-[18px] md:w-[20px] h-[18px] md:h-[20px] text-primary group-hover:text-white transition-colors"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="pt-6 md:pt-8 border-t border-border flex flex-col md:flex-row justify-between items-center gap-3 md:gap-4 font-body text-[12px] md:text-[13px] text-muted">
            <div class="flex flex-wrap justify-center gap-4 md:gap-6">
                <a href="{{ route('policy') }}" class="hover:text-primary transition-colors">Privacy Policy</a>
                <a href="{{ route('terms') }}"  class="hover:text-primary transition-colors">Terms of Use</a>
                <a href="{{ route('policy') }}" class="hover:text-primary transition-colors">POPIA Compliance</a>
            </div>
            <span>&copy; <span id="current-year"></span> SearchADeal</span>
        </div>
    </div>
</footer>
@include('cookie-consent::index')

{{-- Lucide icon init — identical to tracker1 --}}
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  document.getElementById('current-year').textContent = new Date().getFullYear()
  if (window.lucide && typeof window.lucide.createIcons === 'function') {
    window.lucide.createIcons()
  }

  // ── FAQ Accordion — toggle panel visibility on button click ──
  document.querySelectorAll('[data-faq-toggle]').forEach(function (button) {
    button.addEventListener('click', function () {
      const item    = button.closest('[data-faq-item]')
      const panel   = item.querySelector('[data-faq-panel]')
      const minus   = button.querySelector('[data-faq-icon="minus"]')
      const plus    = button.querySelector('[data-faq-icon="plus"]')
      const isOpen  = button.getAttribute('aria-expanded') === 'true'

      // Toggle the answer panel
      panel.classList.toggle('hidden', isOpen)

      // Swap the +/- icons
      minus.classList.toggle('hidden', isOpen)
      plus.classList.toggle('hidden', !isOpen)

      // Keep aria-expanded in sync for accessibility
      button.setAttribute('aria-expanded', String(!isOpen))
    })
  })
</script>
</body>
</html>
