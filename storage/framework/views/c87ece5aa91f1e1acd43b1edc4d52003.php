<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<?php if(!request()->cookie('cookie_consent')): ?>
<div id="cookieConsent" class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white p-4 flex justify-between items-center z-50">
    <span>We use cookies to improve your experience. By using our site, you agree to our <a href="#" class="underline">privacy policy</a>.</span>
    <button onclick="acceptCookies()" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">Accept</button>
</div>

<script>
    function acceptCookies() {
        fetch('<?php echo e(route("cookie.accept")); ?>', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({})
        }).then(() => {
            document.getElementById('cookieConsent').remove();
        });
    }
</script>
<?php endif; ?>


<?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hlabi/Desktop/work/searchadeal/resources/views/cookie-consent.blade.php ENDPATH**/ ?>