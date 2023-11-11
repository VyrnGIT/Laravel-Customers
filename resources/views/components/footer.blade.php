<footer class="bg-purple-500 text-white p-6">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <!-- Footer Menu -->
                <ul class="flex space-x-4">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
                <!-- Year Display -->
                <p>&copy; <span id="currentYear"></span> Laravel PHP!</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript to Update Year -->
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>