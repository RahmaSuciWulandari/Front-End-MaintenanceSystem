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
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
 </head>
 <body class="flex min-h-screen bg-white">
  <!-- Sidebar -->
  <aside class="flex flex-col w-64 bg-gradient-to-b from-blue-800 to-blue-400 text-white p-6">
   <div class="flex items-center space-x-3 mb-8">
    <img alt="White icon of a house with wrench and screwdriver around it" class="w-10 h-10" height="40" src="https://storage.googleapis.com/a1aa/image/62437a2f-03bc-432c-9757-f8c6416d1e08.jpg" width="40"/>
    <div class="font-semibold text-lg leading-tight">
     <div>
      Maintenance
     </div>
     <div>
      System
     </div>
    </div>
   </div>
   <hr class="border-white border-opacity-40 mb-8"/>
   <nav class="flex flex-col space-y-6 text-lg font-normal">
    <a class="flex items-center space-x-3 hover:text-blue-200 transition-colors" href="#">
     <i class="fas fa-home text-white text-xl">
     </i>
     <span>
      Dashboard
     </span>
    </a>
    <a class="flex items-center space-x-3 hover:text-blue-200 transition-colors" href="#">
     <i class="far fa-calendar-alt text-white text-xl">
     </i>
     <span>
      Jadwal
     </span>
    </a>
   </nav>
  </aside>
  <!-- Main content -->
  <div class="flex-1 flex flex-col">
   <!-- Top bar -->
   <header class="flex items-center justify-between bg-blue-800 px-6 py-3">
    <form class="flex-1 max-w-lg mx-auto">
     <label class="sr-only" for="search">
      Cari
     </label>
     <div class="relative">
      <input class="w-full rounded-full py-2 px-4 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400" id="search" placeholder="Cari" type="search"/>
      <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
      </i>
     </div>
    </form>
    <div class="flex items-center space-x-2 text-white font-semibold ml-auto">
     <span class="hidden sm:inline">
      pelaksana
     </span>
     <div aria-label="User avatar" class="w-8 h-8 rounded-full bg-purple-300 flex items-center justify-center text-purple-700 text-lg font-semibold">
      <i class="fas fa-user-circle">
      </i>
     </div>
    </div>
   </header>
   <!-- Content -->
   <main class="flex-1 p-10 overflow-auto">
    <h1 class="text-center text-xl font-semibold mb-8 tracking-wide">
     JADWAL XXXXXXX
    </h1>
    <div class="overflow-x-auto">
     <table class="mx-auto border-collapse border border-blue-700 w-full max-w-6xl">
      <thead>
       <tr class="bg-blue-800 text-white text-center text-sm">
        <th class="border border-blue-700 px-4 py-2 rounded-l-md w-12">
         No
        </th>
        <th class="border border-blue-700 px-4 py-2">
         Tanggal
        </th>
        <th class="border border-blue-700 px-4 py-2">
         Aset
        </th>
        <th class="border border-blue-700 px-4 py-2">
         Lokasi
        </th>
        <th class="border border-blue-700 px-4 py-2">
         Tanggal Pelaksanaan
        </th>
        <th class="border border-blue-700 px-4 py-2 rounded-r-md w-16">
         Aksi
        </th>
       </tr>
      </thead>
      <tbody class="text-center text-blue-900 text-sm font-normal">
       <tr class="bg-blue-200 border border-blue-700">
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 border-r border-blue-700 px-4 py-3">
         <a class="inline-block text-blue-700 hover:text-blue-900" href="#">
          <i class="fas fa-pen">
          </i>
         </a>
        </td>
       </tr>
       <tr>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 border-r border-blue-700 px-4 py-3">
         <a class="inline-block text-blue-700 hover:text-blue-900" href="#">
          <i class="fas fa-pen">
          </i>
         </a>
        </td>
       </tr>
       <tr class="bg-blue-200 border border-blue-700">
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 border-r border-blue-700 px-4 py-3">
         <a class="inline-block text-blue-700 hover:text-blue-900" href="#">
          <i class="fas fa-pen">
          </i>
         </a>
        </td>
       </tr>
       <tr>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 border-r border-blue-700 px-4 py-3">
         <a class="inline-block text-blue-700 hover:text-blue-900" href="#">
          <i class="fas fa-pen">
          </i>
         </a>
        </td>
       </tr>
       <tr class="bg-blue-200 border border-blue-700">
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 border-r border-blue-700 px-4 py-3">
         <a class="inline-block text-blue-700 hover:text-blue-900" href="#">
          <i class="fas fa-pen">
          </i>
         </a>
        </td>
       </tr>
       <tr>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 px-4 py-3">
        </td>
        <td class="border-l border-blue-700 border-r border-blue-700 px-4 py-3">
         <a class="inline-block text-blue-700 hover:text-blue-900" href="#">
          <i class="fas fa-pen">
          </i>
         </a>
        </td>
       </tr>
      </tbody>
     </table>
    </div>
   </main>
  </div>
 </body>
</html