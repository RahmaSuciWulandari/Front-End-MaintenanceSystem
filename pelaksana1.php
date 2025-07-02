<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Maintenance System
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: "Poppins", sans-serif;
    }
  </style>
 </head>
 <body class="min-h-screen flex flex-col">
  <div class="flex flex-1 min-h-0">
   <!-- Sidebar -->
   <aside class="flex flex-col w-56 bg-gradient-to-b from-[#0D4DA1] to-[#7EC1F6] text-white select-none">
    <div class="flex items-center gap-3 px-6 py-6 border-b border-white/30">
     <img alt="Maintenance system icon with house and wrench" class="w-8 h-8" height="32" src="https://storage.googleapis.com/a1aa/image/44247a68-9e87-4a40-ee2b-39ee9098ba2c.jpg" width="32"/>
     <div class="font-semibold text-base leading-tight">
      Maintenance
      <br/>
      System
     </div>
    </div>
    <hr class="border-white/30 mx-6"/>
    <nav class="flex flex-col mt-6 space-y-4 px-6 text-sm font-normal">
     <a class="flex items-center gap-3 hover:text-white transition-colors duration-200" href="#">
      <i class="fas fa-home text-lg">
      </i>
      Dashboard
     </a>
     <a class="flex items-center gap-3 hover:text-white transition-colors duration-200" href="#">
      <i class="fas fa-calendar-alt text-lg">
      </i>
      Jadwal
     </a>
    </nav>
   </aside>
   <!-- Main contentt -->
   <main class="flex-1 bg-white overflow-auto flex flex-col">
    <!-- Top bar -->
    <header class="flex justify-between items-center bg-[#0D4DA1] text-white select-none" style="padding: 0.75rem 1.5rem; margin-top: 0;">
     <div>
     </div>
     <div class="flex items-center gap-2 text-sm font-semibold lowercase">
      pelaksana
      <div class="w-8 h-8 rounded-full bg-[#C9C1F5] flex items-center justify-center text-[#4B3B8A]">
       <i class="fas fa-user-circle text-xl">
       </i>
      </div>
     </div>
    </header>
    <!-- Content below header -->
    <section class="mt-10 max-w-4xl p-8">
     <!-- Jadwal card -->
     <div class="bg-gradient-to-b from-[#E9F3FB] to-[#A9CDE8] rounded-lg border border-[#BCA3A3] shadow-[8px_8px_6px_rgba(0,0,0,0.15)] p-6 max-w-md">
      <h2 class="font-semibold text-base mb-3">
       Jadwal
      </h2>
      <div class="flex items-center gap-2 mb-2 text-xs">
       <div aria-hidden="true" class="w-3 h-3 rounded-full bg-[#0D4DA1] flex-shrink-0">
       </div>
       <span>
        Terlaksana
       </span>
      </div>
      <div class="flex justify-center">
       <svg class="w-36 h-36" fill="none" viewbox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
        <circle cx="60" cy="60" r="50" stroke="#0D4DA1" stroke-opacity="0.2" stroke-width="12">
        </circle>
        <circle cx="60" cy="60" r="50" stroke="#0D4DA1" stroke-dasharray="314" stroke-dashoffset="104" stroke-linecap="round" stroke-width="12" transform="rotate(-90 60 60)">
        </circle>
        <text fill="#0D4DA1" font-family="Poppins, sans-serif" font-size="18" text-anchor="middle" x="60" y="68">
         67%
        </text>
       </svg>
      </div>
      <div class="text-sm text-right mt-3">
       Bulan ini
      </div>
     </div>
     <!-- Notifikasi -->
     <div class="mt-12">
      <h3 class="font-semibold text-base mb-3">
       Notifikasi
      </h3>
      <div class="border border-[#0D4DA1] rounded-lg py-3 px-4 text-sm w-[900px] max-w-full">
       Jadwal xxxxx menunggu persetujuan anda
      </div>
     </div>
    </section>
   </main>
  </div>
 </body>
</html>