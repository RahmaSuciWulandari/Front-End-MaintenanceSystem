<?php
// Database connection (adjust according to your setup)
$host = 'localhost';
$dbname = 'maintenance_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // For demonstration, we'll use dummy data
    $pdo = null;
}

// Sample data (replace with actual database queries)
$schedules = [
    ['id' => 1, 'nama_jadwal' => 'Maintenance Server A', 'waktu' => '08:00 - 10:00', 'hari' => 'Senin'],
    ['id' => 2, 'nama_jadwal' => 'Backup Database', 'waktu' => '14:00 - 15:00', 'hari' => 'Selasa'],
    ['id' => 3, 'nama_jadwal' => 'Update System', 'waktu' => '20:00 - 22:00', 'hari' => 'Rabu'],
    ['id' => 4, 'nama_jadwal' => 'Hardware Check', 'waktu' => '09:00 - 11:00', 'hari' => 'Kamis'],
    ['id' => 5, 'nama_jadwal' => 'Network Monitoring', 'waktu' => '13:00 - 14:00', 'hari' => 'Jumat'],
    ['id' => 6, 'nama_jadwal' => 'Security Audit', 'waktu' => '16:00 - 18:00', 'hari' => 'Sabtu'],
];

// Handle form submissions
if ($_POST) {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                // Add new schedule logic
                $success_message = "Jadwal berhasil ditambahkan!";
                break;
            case 'edit':
                // Edit schedule logic
                $success_message = "Jadwal berhasil diperbarui!";
                break;
            case 'delete':
                // Delete schedule logic
                $success_message = "Jadwal berhasil dihapus!";
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'roboto': ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'primary': '#1976d2',
                        'primary-container': '#d3e3fd',
                        'secondary': '#625b71',
                        'surface': '#fef7ff',
                        'surface-variant': '#e7e0ec',
                        'outline': '#79747e',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .material-shadow {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1), 0 8px 16px rgba(0,0,0,0.1);
        }
        .material-shadow-elevated {
            box-shadow: 0 4px 8px rgba(0,0,0,0.12), 0 12px 24px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white material-shadow-elevated h-screen fixed left-0 top-0 z-10">
            <!-- Header -->
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center">
                        <span class="material-icons text-white text-xl">settings</span>
                    </div>
                    <div>
                        <h1 class="text-lg font-medium text-gray-900">Maintenance</h1>
                        <p class="text-sm text-gray-600">System</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center space-x-3 p-3 rounded-lg bg-primary-container text-primary font-medium">
                            <span class="material-icons">dashboard</span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 p-3 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors">
                            <span class="material-icons">schedule</span>
                            <span>Jadwal</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 p-3 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors">
                            <span class="material-icons">inventory</span>
                            <span>Aset</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 p-3 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors">
                            <span class="material-icons">assessment</span>
                            <span>Pelaporan</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <!-- Top Bar -->
            <header class="bg-white material-shadow px-6 py-4 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <h2 class="text-2xl font-medium text-gray-900">DAFTAR JADWAL</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Cari..." class="pl-10 pr-4 py-2 border border-outline rounded-full focus:outline-none focus:border-primary">
                        <span class="material-icons absolute left-3 top-2.5 text-gray-400">search</span>
                    </div>
                    <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center cursor-pointer">
                        <span class="material-icons text-white">person</span>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="p-6">
                <?php if (isset($success_message)): ?>
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                    <div class="flex items-center">
                        <span class="material-icons text-green-600 mr-2">check_circle</span>
                        <span class="text-green-800"><?php echo $success_message; ?></span>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Add Button -->
                <div class="mb-6 flex justify-end">
                    <button onclick="openAddModal()" class="bg-primary text-white px-6 py-3 rounded-full material-shadow hover:bg-blue-700 transition-colors flex items-center space-x-2">
                        <span class="material-icons">add</span>
                        <span>Tambah Jadwal</span>
                    </button>
                </div>

                <!-- Table -->
                <div class="bg-white rounded-2xl material-shadow overflow-hidden">
                    <table class="w-full">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th class="px-6 py-4 text-left font-medium">No</th>
                                <th class="px-6 py-4 text-left font-medium">Nama Jadwal</th>
                                <th class="px-6 py-4 text-left font-medium">Waktu</th>
                                <th class="px-6 py-4 text-left font-medium">Hari</th>
                                <th class="px-6 py-4 text-left font-medium">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($schedules as $index => $schedule): ?>
                            <tr class="<?php echo $index % 2 == 0 ? 'bg-blue-50' : 'bg-white'; ?> hover:bg-blue-100 transition-colors">
                                <td class="px-6 py-4 text-gray-900"><?php echo $index + 1; ?></td>
                                <td class="px-6 py-4 text-gray-900 font-medium"><?php echo htmlspecialchars($schedule['nama_jadwal']); ?></td>
                                <td class="px-6 py-4 text-gray-700"><?php echo htmlspecialchars($schedule['waktu']); ?></td>
                                <td class="px-6 py-4 text-gray-700"><?php echo htmlspecialchars($schedule['hari']); ?></td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <button onclick="viewSchedule(<?php echo $schedule['id']; ?>)" class="p-2 text-blue-600 hover:bg-blue-100 rounded-full transition-colors" title="Lihat">
                                            <span class="material-icons text-sm">visibility</span>
                                        </button>
                                        <button onclick="editSchedule(<?php echo $schedule['id']; ?>)" class="p-2 text-green-600 hover:bg-green-100 rounded-full transition-colors" title="Edit">
                                            <span class="material-icons text-sm">edit</span>
                                        </button>
                                        <button onclick="deleteSchedule(<?php echo $schedule['id']; ?>)" class="p-2 text-red-600 hover:bg-red-100 rounded-full transition-colors" title="Hapus">
                                            <span class="material-icons text-sm">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- Add/Edit Modal -->
    <div id="scheduleModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
        <div class="bg-white rounded-2xl material-shadow-elevated p-6 w-full max-w-md mx-4">
            <div class="flex justify-between items-center mb-6">
                <h3 id="modalTitle" class="text-xl font-medium text-gray-900">Tambah Jadwal</h3>
                <button onclick="closeModal()" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                    <span class="material-icons">close</span>
                </button>
            </div>
            
            <form id="scheduleForm" method="POST">
                <input type="hidden" name="action" id="formAction" value="add">
                <input type="hidden" name="id" id="scheduleId">
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Jadwal</label>
                        <input type="text" name="nama_jadwal" id="namaJadwal" required 
                               class="w-full px-4 py-3 border border-outline rounded-lg focus:outline-none focus:border-primary">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Waktu</label>
                        <input type="text" name="waktu" id="waktu" placeholder="08:00 - 10:00" required 
                               class="w-full px-4 py-3 border border-outline rounded-lg focus:outline-none focus:border-primary">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Hari</label>
                        <select name="hari" id="hari" required 
                                class="w-full px-4 py-3 border border-outline rounded-lg focus:outline-none focus:border-primary">
                            <option value="">Pilih Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                </div>
                
                <div class="flex justify-end space-x-3 mt-6">
                    <button type="button" onclick="closeModal()" 
                            class="px-6 py-2 text-gray-700 border border-gray-300 rounded-full hover:bg-gray-50 transition-colors">
                        Batal
                    </button>
                    <button type="submit" 
                            class="px-6 py-2 bg-primary text-white rounded-full hover:bg-blue-700 transition-colors">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openAddModal() {
            document.getElementById('modalTitle').textContent = 'Tambah Jadwal';
            document.getElementById('formAction').value = 'add';
            document.getElementById('scheduleForm').reset();
            document.getElementById('scheduleModal').classList.remove('hidden');
        }

        function editSchedule(id) {
            document.getElementById('modalTitle').textContent = 'Edit Jadwal';
            document.getElementById('formAction').value = 'edit';
            document.getElementById('scheduleId').value = id;
            // Here you would typically fetch the schedule data and populate the form
            document.getElementById('scheduleModal').classList.remove('hidden');
        }

        function viewSchedule(id) {
            alert('Fitur lihat detail jadwal akan diimplementasikan. ID: ' + id);
        }

        function deleteSchedule(id) {
            if (confirm('Apakah Anda yakin ingin menghapus jadwal ini?')) {
                // Create a form to submit delete request
                const form = document.createElement('form');
                form.method = 'POST';
                form.innerHTML = `
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="${id}">
                `;
                document.body.appendChild(form);
                form.submit();
            }
        }

        function closeModal() {
            document.getElementById('scheduleModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('scheduleModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
</body>
</html>