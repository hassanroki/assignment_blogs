<section class="py-16">
    <div class="container mx-auto">
        <div class="max-w-xl mx-auto bg-blue-50 rounded-xl text-center p-10 shadow-lg">
            <h2 class="text-3xl font-bold mb-4">Stay Inspired</h2>
            <p class="text-gray-600 mb-6">Join our community of curious minds. Get weekly insights, stories, and
                exclusive content delivered to your inbox.</p>
            <form id="newsletterForm" class="flex flex-col sm:flex-row gap-4 justify-center">
                @csrf
                <input type="email" name="email" id="email" placeholder="Enter your email"
                    class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <button type="submit"
                    class="px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">Subscribe</button>
            </form>
        </div>
    </div>
</section>

<!-- Toastify CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    document.getElementById('newsletterForm').addEventListener('submit', function(e) {
        e.preventDefault(); // page reload বন্ধ করবে

        let email = document.getElementById('email').value;
        let token = document.querySelector('input[name="_token"]').value;

        fetch("{{ route('newsletter.store') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            body: JSON.stringify({ email: email })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Toastify({
                    text: data.message,
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#4caf50"
                }).showToast();
                document.getElementById('newsletterForm').reset();
            } else {
                Toastify({
                    text: data.message,
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#f44336"
                }).showToast();
            }
        })
        .catch(error => {
            Toastify({
                text: "Something went wrong!",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "#f44336"
            }).showToast();
            console.error(error);
        });
    });
</script>
