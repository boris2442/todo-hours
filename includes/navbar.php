
<header class="bg-blue-700 text-white py-4 shadow-md dark:bg-gray-800 dark:text-gray-200">
  <div class="max-w-6xl mx-auto px-4 flex items-center justify-between">
    <h2 class="text-2xl font-bold tracking-wide">TimeHours</h2>

    <!-- Menu (de base visible sur écrans larges) -->
    <ul class="hidden md:flex space-x-6">
      <li>
        <a href="index" class="hover:underline hover:text-gray-200 transition duration-200">Home</a>
      </li>
      <li>
        <a href="form" class="hover:underline hover:text-gray-200 transition duration-200">Add Project</a>
      </li>
    </ul>

    <!-- Menu burger visible sur petits écrans -->
    <div class="md:hidden">
      <button id="menu-toggle" class="text-white focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
  </div>

  <!-- Menu burger (caché par défaut, apparaîtra sur petits écrans) -->
  <ul id="mobile-menu" class="md:hidden bg-blue-700 text-white p-4 space-y-4 hidden">
    <li>
      <a href="index" class="block hover:underline hover:text-gray-200 transition duration-200">Home</a>
    </li>
    <li>
      <a href="form" class="block hover:underline hover:text-gray-200 transition duration-200">Add Project</a>
    </li>
  </ul>
</header>

<!-- Script pour toggler le menu sur petits écrans -->
<script>
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>
