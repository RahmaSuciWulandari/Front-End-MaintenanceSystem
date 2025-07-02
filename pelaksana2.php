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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
 </head>
 <body class="min-h-screen flex bg-white">
  <!-- Sidebar -->
  <aside class="flex flex-col w-56 bg-gradient-to-b from-blue-800 to-blue-400 text-white">
   <div class="flex items-center gap-3 px-6 py-6 border-b border-white/30">
    <img alt="Maintenance system icon with house and wrench symbol in white on blue background" class="w-8 h-8" height="32" src="https://storage.googleapis.com/a1aa/image/014f25d4-8033-4152-2906-68f5e666c771.jpg" width="32"/>
    <div class="font-semibold text-lg leading-tight">
     Maintenance
     <br/>
     System
    </div>
   </div>
   <div class="border-b border-white/30 mx-6">
   </div>
   <nav class="flex flex-col mt-6 space-y-6 px-6 text-white text-base font-normal">
    <a class="flex items-center gap-3 hover:text-white/90 transition-colors duration-200" href="#">
     <i class="fas fa-home text-lg">
     </i>
     Dashboard
    </a>
    <a class="flex items-center gap-3 hover:text-white/90 transition-colors duration-200" href="#">
     <i class="far fa-calendar-alt text-lg">
     </i>
     Jadwal
    </a>
   </nav>
  </aside>
  <!-- Main content -->
  <div class="flex-1 flex flex-col">
   <!-- Top bar -->
   <header class="flex items-center justify-between bg-blue-800 px-6 py-3">
    <div class="flex-1 max-w-md mx-auto w-full">
     <div class="relative">
      <input class="w-full rounded-full py-2 px-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Cari" type="search"/>
      <i class="fas fa-search absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
      </i>
     </div>
    </div>
    <div class="flex items-center gap-3 text-white text-sm font-semibold">
     <span>
      Pelaksana
     </span>
     <div class="w-8 h-8 rounded-full bg-purple-300 flex items-center justify-center text-purple-700">
      <i class="fas fa-user-circle text-xl">
      </i>
     </div>
    </div>
   </header>
   <!-- Content -->
   <main class="flex-1 p-8 max-w-7xl mx-auto w-full">
    <h1 class="text-black text-xl font-semibold mb-8 tracking-wide">
     DAFTAR JADWAL
    </h1>
    <table class="w-full max-w-5xl border-collapse rounded-md overflow-hidden">
     <thead>
      <tr class="bg-blue-800 text-white text-center text-sm font-normal">
       <th class="py-3 px-4 border-r border-blue-700 w-14">
        No
       </th>
       <th class="py-3 px-4 border-r border-blue-700">
        Nama Jadwal
       </th>
       <th class="py-3 px-4 border-r border-blue-700 w-32">
        Status
       </th>
       <th class="py-3 px-4 border-blue-700 w-32">
        Aksi
       </th>
      </tr>
     </thead>
     <tbody>
      <tr class="border-t border-blue-300 text-center text-blue-800 text-lg">
       <td class="py-3 px-4 border-r border-blue-300">
       </td>
       <td class="py-3 px-4 border-r border-blue-300">
       </td>
       <td class="py-3 px-4 border-r border-blue-300">
       </td>
       <td class="py-3 px-4 border-l border-blue-300 flex justify-center gap-6">
        <i class="fas fa-eye cursor-pointer">
        </i>
        <i class="fas fa-check-square cursor-pointer">
        </i>
       </td>
      </tr>
     </tbody>
    </table>
   </main>
  </div>
 </body>
</html>