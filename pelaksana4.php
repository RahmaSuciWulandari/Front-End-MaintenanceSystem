<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Form Inspeksi
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: "Inter", sans-serif;
    }
   /* Make the border lines in the radio button cells full height */
   td.border-full-height {
     border-left-width: 1px !important;
     border-right-width: 1px !important;
   }
   /* Ensure the radio input is vertically centered and the cell fills height */
   td.border-full-height > input[type="radio"] {
     vertical-align: middle;
   }
  </style>
 </head>
 <body class="min-h-screen flex flex-col">
  <div class="flex flex-1 min-h-0">
   <!-- Sidebar -->
   <aside class="w-72 flex flex-col bg-gradient-to-b from-blue-700 to-blue-400 text-white">
    <div class="flex items-center gap-3 px-6 py-6 border-b border-white/30">
     <img alt="Maintenance system icon with house and wrench" class="w-8 h-8" height="32" src="logo.png" width="32"/>
     <div class="font-semibold text-lg leading-tight">
      Maintenance
      <br/>
      System
     </div>
    </div>
    <hr class="border-white/50 mx-6"/>
    <nav class="mt-6 flex flex-col gap-6 px-6 text-base font-normal">
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
   <!-- Main content -->
   <main class="flex-1 bg-white p-8 overflow-auto">
    <div class="max-w-6xl mx-auto">
     <h1 class="text-center text-xl font-semibold mb-8">
      FORM INSPEKSI
     </h1>
     <form class="space-y-6 max-w-4xl mx-auto">
      <div class="flex items-center gap-4">
       <label class="w-40 text-right text-base font-normal leading-6" for="tanggal">
        Dibuat tanggal
       </label>
       <span class="mr-2">
        :
       </span>
       <input class="flex-1 border border-gray-300 rounded-md px-4 py-2 text-base leading-6" id="tanggal" name="tanggal" type="date"/>
      </div>
      <div class="flex items-center gap-4">
       <label class="w-40 text-right text-base font-normal leading-6" for="unit">
        Unit
       </label>
       <span class="mr-2">
        :
       </span>
       <input class="flex-1 border border-gray-300 rounded-md px-4 py-2 text-base leading-6" id="unit" name="unit" type="text" value="xxxxxx"/>
      </div>
      <div class="flex items-center gap-4">
       <label class="w-40 text-right text-base font-normal leading-6" for="scanner">
        Type scanner
       </label>
       <span class="mr-2">
       </span>
       <input class="flex-1 border border-gray-300 rounded-md px-4 py-2 text-base leading-6" id="scanner" name="scanner" type="text" value=": xxxxxx"/>
      </div>
      <table class="w-full border border-black border-collapse rounded-md overflow-hidden">
<thead>
  <tr class="bg-blue-500 text-black text-center text-sm font-normal">
    <th class="border border-black w-12 py-3 align-middle" rowspan="2">NO</th>
    <th class="border border-black w-72 align-middle" rowspan="2">Jenis Pemeliharaan</th>
    <th class="border border-black" colspan="2">Kondisi</th>
    <th class="border border-black w-72 align-middle" rowspan="2">Catatan</th>
  </tr>
  <tr class="bg-blue-500 text-black text-center text-sm font-normal">
    <th class="border border-black py-2 px-4">Baik</th>
    <th class="border border-black py-2 px-4">Buruk</th>
  </tr>
</thead>

       <tbody>
        <tr class="text-sm text-left">
         <td class="border border-black text-center align-top py-6">
          1
         </td>
         <td class="border border-black px-4 py-6 align-top">
          Mengecek roll karet penarik kertas
         </td>
         <td class="border border-black border-full-height text-center align-top py-6" style="width: 10%">
          <input checked="" class="w-5 h-5 text-black" name="check1" type="radio"/>
         </td>
         <td class="border border-black border-full-height text-center align-top py-6" style="width: 10%">
          <input class="w-5 h-5 text-black" name="check1" type="radio"/>
         </td>
         <td class="border border-black align-top">
         </td>
        </tr>
       </tbody>
      </table>
      <div class="flex justify-end mt-6">
       <button class="bg-blue-600 text-white px-5 py-2 rounded-md text-sm font-normal hover:bg-blue-700 transition-colors" type="submit">
        Simpan
       </button>
      </div>
     </form>
    </div>
   </main>
  </div>
  <header class="fixed top-0 left-72 right-0 h-14 bg-blue-700 flex items-center justify-end px-6 text-white">
   <div class="flex items-center gap-3">
    <span class="text-sm font-normal">
     Pelaksana
    </span>
    <div class="w-8 h-8 rounded-full bg-purple-300 flex items-center justify-center text-purple-700">
     <i class="fas fa-user">
     </i>
    </div>
   </div>
  </header>
 </body>
</html>