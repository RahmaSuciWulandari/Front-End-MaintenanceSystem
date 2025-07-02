<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Maintenance System - Jadwal
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   /* Custom scrollbar for sidebar if needed */
    ::-webkit-scrollbar {
      width: 6px;
    }
    ::-webkit-scrollbar-thumb {
      background-color: rgba(255, 255, 255, 0.3);
      border-radius: 3px;
    }
  </style>
 </head>
 <body class="min-h-screen flex bg-white font-sans">
  <!-- Sidebar -->
  <aside class="flex flex-col w-56 bg-gradient-to-b from-[#0057B8] to-[#7DB9E8] text-white select-none">
   <div class="flex items-center gap-3 px-6 py-6">
    <img alt="White icon of a house with wrench and screwdriver around it representing maintenance" class="w-8 h-8" height="32" src="https://storage.googleapis.com/a1aa/image/f917e0f5-ea20-4f44-5911-328fc2db25ea.jpg" width="32"/>
    <div class="font-semibold text-lg leading-tight">
     <div>
      Maintenance
     </div>
     <div>
      System
     </div>
    </div>
   </div>
   <hr class="border-white/50 mx-6"/>
   <nav class="mt-6 flex flex-col gap-6 px-6 text-white text-base font-normal">
    <a class="flex items-center gap-3 hover:text-white/80 transition-colors" href="#">
     <i class="fas fa-home text-lg">
     </i>
     <span>
      Dashboard
     </span>
    </a>
    <a class="flex items-center gap-3 hover:text-white/80 transition-colors" href="#">
     <i class="fas fa-calendar-alt text-lg">
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
   <header class="flex items-center justify-between bg-[#0057B8] px-6 py-4 text-white select-none">
    <form class="flex-1 max-w-lg mx-auto relative">
     <input class="w-full rounded-full py-2 px-4 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Cari" type="search"/>
     <button aria-label="Search" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-200" type="submit">
      <i class="fas fa-search">
      </i>
     </button>
    </form>
    <div class="flex items-center gap-2">
     <span class="font-semibold text-sm select-text">
      Manager
     </span>
     <div aria-label="User avatar" class="w-8 h-8 rounded-full bg-[#C4B9F7] flex items-center justify-center text-[#5A4DB2]">
      <i class="fas fa-user">
      </i>
     </div>
    </div>
   </header>
   <!-- Content area -->
   <main class="flex-1 overflow-auto p-8">
    <h1 class="text-center font-semibold text-xl mb-8 select-text">
     JADWAL XXXXXXX
    </h1>
    <form class="max-w-5xl mx-auto mb-8 flex items-center gap-2 text-base select-text">
     <label class="w-20" for="lokasi">
      Lokasi
     </label>
     <span>
      :
     </span>
     <select class="flex-1 rounded-md border border-gray-300 py-2 px-3 text-base focus:outline-none focus:ring-2 focus:ring-[#0057B8]" id="lokasi" name="lokasi">
      <option disabled="" selected="" value="">
      </option>
     </select>
    </form>
    <div class="max-w-5xl mx-auto overflow-x-auto">
     <table class="w-full border-collapse border border-[#0057B8] text-center text-sm">
      <thead>
       <tr class="bg-[#0057B8] text-white select-text">
        <th class="border border-[#0057B8] px-3 py-2 min-w-[48px]">
         No
        </th>
        <th class="border border-[#0057B8] px-3 py-2 min-w-[96px]">
         Bulan
        </th>
        <th class="border border-[#0057B8] px-3 py-2 min-w-[96px]">
         Aset
        </th>
        <th class="border border-[#0057B8] px-3 py-2 min-w-[96px]">
         Lokasi
        </th>
        <th class="border border-[#0057B8] px-3 py-2 min-w-[96px]">
         Status
        </th>
        <th class="border border-[#0057B8] px-3 py-2 min-w-[48px]">
         Aksi
        </th>
       </tr>
      </thead>
      <tbody>
       <tr class="bg-[#add8e6]/60 h-12">
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8] text-[#0057B8] cursor-pointer">
         <i class="fas fa-eye">
         </i>
        </td>
       </tr>
       <tr class="bg-[#add8e6]/60 h-12">
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
       </tr>
       <tr class="bg-[#add8e6]/60 h-12">
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
       </tr>
       <tr class="bg-[#add8e6]/60 h-12">
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
       </tr>
       <tr class="bg-[#add8e6]/60 h-12">
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
        <td class="border border-[#0057B8]">
        </td>
       </tr>
      </tbody>
     </table>
    </div>
   </main>
  </div>
 </body>
</html>