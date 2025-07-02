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
 <body class="bg-white">
  <div class="flex min-h-screen">
   <!-- Sidebar -->
   <aside class="flex flex-col bg-gradient-to-b from-[#0057B8] to-[#8FC9F0] w-64 p-6 text-white">
    <div class="flex items-center mb-8">
     <img alt="White maintenance icon with house and wrench" class="w-10 h-10 mr-3" height="40" src="https://storage.googleapis.com/a1aa/image/90e0cda9-c121-4efc-3e83-3e15659d16a6.jpg" width="40"/>
     <div class="font-semibold text-lg leading-tight">
      <div>
       Maintenance
      </div>
      <div>
       System
      </div>
     </div>
    </div>
    <hr class="border-white border-opacity-50 mb-8"/>
    <nav class="flex flex-col space-y-6 text-lg">
     <a class="flex items-center space-x-3 hover:underline" href="#">
      <i class="fas fa-home text-white text-xl">
      </i>
      <span>
       Dashboard
      </span>
     </a>
     <a class="flex items-center space-x-3 hover:underline" href="#">
      <i class="far fa-calendar-alt text-white text-xl">
      </i>
      <span>
       Jadwal
      </span>
     </a>
    </nav>
   </aside>
   <!-- Main content -->
   <main class="flex-1 flex flex-col">
    <!-- Top bar -->
    <header class="flex items-center justify-between bg-[#0057B8] px-6 py-4">
     <form class="flex items-center w-full max-w-md mx-auto">
      <input class="w-full rounded-full py-2 px-4 text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="Cari" type="text"/>
      <button class="ml-2 text-gray-400 hover:text-gray-200" type="submit">
       <i class="fas fa-search">
       </i>
      </button>
     </form>
     <div class="flex items-center space-x-3 ml-auto text-white text-sm font-semibold">
      <span>
       PIC UNIT
      </span>
      <div class="w-8 h-8 rounded-full bg-purple-300 flex items-center justify-center">
       <i class="far fa-user text-purple-700">
       </i>
      </div>
     </div>
    </header>
    <!-- Content -->
    <section class="flex-1 p-10">
     <h1 class="text-center text-black text-xl font-semibold mb-10 tracking-wide">
      JADWAL XXXXXXX
     </h1>
     <div class="overflow-x-auto">
      <table class="w-full border-collapse border border-[#0057B8] text-center">
       <thead>
        <tr class="bg-[#0057B8] text-white">
         <th class="py-3 px-4 border-l border-[#0057B8] border-t border-b">
          No
         </th>
         <th class="py-3 px-4 border-l border-[#0057B8] border-t border-b">
          Bulan
         </th>
         <th class="py-3 px-4 border-l border-[#0057B8] border-t border-b">
          Aset
         </th>
         <th class="py-3 px-4 border-l border-[#0057B8] border-t border-b">
          Lokasi
         </th>
         <th class="py-3 px-4 border-l border-[#0057B8] border-t border-b">
          Status
         </th>
         <th class="py-3 px-4 border-l border-r border-[#0057B8] border-t border-b">
          Aksi
         </th>
        </tr>
       </thead>
       <tbody>
        <tr class="h-12 border border-[#0057B8]">
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-r border-[#0057B8] border-t border-b flex justify-center items-center space-x-4 text-[#0057B8] text-lg bg-white">
          <i class="far fa-eye cursor-pointer">
          </i>
          <i class="fas fa-check-square cursor-pointer">
          </i>
         </td>
        </tr>
        <tr class="h-12 border border-[#0057B8]">
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-r border-[#0057B8] border-t border-b flex justify-center items-center space-x-4 text-[#0057B8] text-lg bg-white">
          <i class="far fa-eye cursor-pointer">
          </i>
          <i class="fas fa-check-square cursor-pointer">
          </i>
         </td>
        </tr>
        <tr class="h-12 border border-[#0057B8]">
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-r border-[#0057B8] border-t border-b flex justify-center items-center space-x-4 text-[#0057B8] text-lg bg-white">
          <i class="far fa-eye cursor-pointer">
          </i>
          <i class="fas fa-check-square cursor-pointer">
          </i>
         </td>
        </tr>
        <tr class="h-12 border border-[#0057B8]">
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-r border-[#0057B8] border-t border-b flex justify-center items-center space-x-4 text-[#0057B8] text-lg bg-white">
          <i class="far fa-eye cursor-pointer">
          </i>
          <i class="fas fa-check-square cursor-pointer">
          </i>
         </td>
        </tr>
        <tr class="h-12 border border-[#0057B8]">
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-[#0057B8] bg-white">
         </td>
         <td class="border-l border-r border-[#0057B8] border-t border-b flex justify-center items-center space-x-4 text-[#0057B8] text-lg bg-white">
          <i class="far fa-eye cursor-pointer">
          </i>
          <i class="fas fa-check-square cursor-pointer">
          </i>
         </td>
        </tr>
       </tbody>
      </table>
     </div>
    </section>
   </main>
  </div>
 </body>
</html>