@include('partials.header')


@if(!request()->cookie('cookie_consent'))
<div id="cookieConsent" class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white p-4 flex justify-between items-center z-50">
    <span>We use cookies to improve your experience. By using our site, you agree to our <a href="#" class="underline">privacy policy</a>.</span>
    <button onclick="acceptCookies()" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">Accept</button>
</div>

<script>
    function acceptCookies() {
        fetch('{{ route("cookie.accept") }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({})
        }).then(() => {
            document.getElementById('cookieConsent').remove();
        });
    }
</script>
@endif


@include('partials.footer')