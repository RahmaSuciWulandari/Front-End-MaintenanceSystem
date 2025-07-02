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
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap');
  body {
    font-family: 'Inter', sans-serif;
  }
  </style>
 </head>
 <body class="min-h-screen bg-white">
  <div class="flex flex-col min-h-screen">
   <header class="bg-[#0B57A0] flex items-center justify-between px-6 h-14">
    <div class="flex items-center space-x-2">
     <img alt="Maintenance System logo icon" class="w-6 h-6" height="24" src="logo.png" width="24"/>
     <span class="text-white font-semibold text-sm leading-5 select-none">
      Maintenance System
     </span>
    </div>
    <div class="flex items-center space-x-4 text-white text-xs font-semibold select-none">
     <span>
      PIC UNIT
     </span>
     <div class="w-7 h-7 rounded-full bg-[#A3B1C6] flex items-center justify-center">
      <i class="fas fa-user text-white text-sm">
      </i>
     </div>
    </div>
   </header>
   <div class="flex flex-1">
    <nav class="flex flex-col bg-gradient-to-b from-[#2B6CB0] to-[#9BC9F5] w-48 min-w-[12rem] py-6 px-4 space-y-4 text-white text-xs">
     <a class="flex items-center space-x-2 hover:underline cursor-pointer select-none" href="#">
      <i class="fas fa-tachometer-alt text-sm">
      </i>
      <span>
       Dashboard
      </span>
     </a>
     <a class="flex items-center space-x-2 hover:underline cursor-pointer select-none" href="#">
      <i class="fas fa-calendar-alt text-sm">
      </i>
      <span>
       Jadwal
      </span>
     </a>
    </nav>
    <main class="flex-1 p-6">
     <h2 class="text-sm font-semibold text-[#1F2937] mb-2 select-none">
      Notifikasi
     </h2>
     <div>
      <input class="w-[1050px] max-w-full text-[9px] font-normal text-[#1F2937] border border-[#3B82F6] rounded-md px-2 py-1 focus:outline-none cursor-default" readonly="" type="text" value="Jadwal xxxxx menunggu persetujuan anda"/>
     </div>
    </main>
   </div>
  </div>
 </body>
</html>