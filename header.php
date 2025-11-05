<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="https://www.deurdouwers.com/favicon/apple-touch-icon.png">
  <title>C.V De Deurdouwers</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">

  <!-- Custom font -->
  <style>
    body {
      font-family: "Madimi One", sans-serif;
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-900">
<header class="bg-gradient-to-r from-green-600 to-yellow-400 shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
    <!-- Logo -->
    <a href="index.php" class="flex items-center space-x-3">
      <img src="https://www.deurdouwers.com/images/common/Deurdouwers-Logo-Sas-van-Gent.svg" alt="Logo" class="w-16 h-16 rounded-full">
      <span class="text-xl font-bold text-white">De Deurdouwers</span>
    </a>

    <!-- Desktop navigatie -->
    <nav class="hidden md:flex space-x-3">
      <a href="index.php" class="px-5 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-green-600 text-white font-semibold shadow hover:opacity-90 transition">Home</a>
      <a href="over.php" class="px-5 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-green-600 text-white font-semibold shadow hover:opacity-90 transition">Over ons</a>
      <a href="evenementen.php" class="px-5 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-green-600 text-white font-semibold shadow hover:opacity-90 transition">Evenementen</a>
      <a href="galerij.php" class="px-5 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-green-600 text-white font-semibold shadow hover:opacity-90 transition">Galerij</a>
      <a href="contact.php" class="px-5 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-green-600 text-white font-semibold shadow hover:opacity-90 transition">Contact</a>
    </nav>

    <!-- Hamburger knop -->
    <button id="menu-btn" class="md:hidden flex flex-col justify-center items-center space-y-1 z-50 relative">
      <span class="block w-7 h-1 bg-white rounded transition-all"></span>
      <span class="block w-7 h-1 bg-white rounded transition-all"></span>
      <span class="block w-7 h-1 bg-white rounded transition-all"></span>
    </button>
  </div>

  <!-- Mobiel menu (onder navbar) -->
  <nav id="mobile-menu"
       class="absolute left-0 w-full bg-gradient-to-b from-green-700 to-yellow-400 text-white transform scale-y-0 origin-top transition-transform duration-300 ease-in-out md:hidden shadow-lg">
    <div class="flex flex-col items-center space-y-4 py-6 relative">
      <!-- Sluitknop boven menu -->
      <button id="close-btn" class="absolute top-2 right-4 text-white text-2xl font-bold">&times;</button>

      <a href="index.php" class="px-3 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-green-600 font-semibold text-sm shadow hover:opacity-90 transition text-center w-3/4">Home</a>
      <a href="over.php" class="px-3 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-green-600 font-semibold text-sm shadow hover:opacity-90 transition text-center w-3/4">Over ons</a>
      <a href="evenementen.php" class="px-3 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-green-600 font-semibold text-sm shadow hover:opacity-90 transition text-center w-3/4">Evenementen</a>
      <a href="galerij.php" class="px-3 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-green-600 font-semibold text-sm shadow hover:opacity-90 transition text-center w-3/4">Galerij</a>
      <a href="contact.php" class="px-3 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-green-600 font-semibold text-sm shadow hover:opacity-90 transition text-center w-3/4">Contact</a>
    </div>
  </nav>
</header>

<script>
  const menuBtn = document.getElementById('menu-btn');
  const closeBtn = document.getElementById('close-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  let menuOpen = false;

  menuBtn.addEventListener('click', () => {
    menuOpen = true;
    mobileMenu.classList.remove('scale-y-0');
  });

  closeBtn.addEventListener('click', () => {
    menuOpen = false;
    mobileMenu.classList.add('scale-y-0');
  });
</script>

<main class="min-h-screen">
