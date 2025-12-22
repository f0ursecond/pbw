<?php

$nama = $_POST['nama'] ?? '';
$kebutuhan = $_POST['kebutuhan'] ?? '';
$budget_min = $_POST['budget_min'] ?? 0;
$budget_max = $_POST['budget_max'] ?? PHP_INT_MAX;
$gpu_priority = $_POST['gpu_priority'] ?? '';


$processors = [
    ["nama" => "Intel i3-12100", "brand" => "intel", "harga" => 1450000, "tier" => "budget"],
    ["nama" => "Intel i5-12400F", "brand" => "intel", "harga" => 2100000, "tier" => "mid"],
    ["nama" => "Intel i5-13400F", "brand" => "intel", "harga" => 2800000, "tier" => "mid"],
    ["nama" => "Intel i7-13700F", "brand" => "intel", "harga" => 4500000, "tier" => "high"],
    ["nama" => "AMD Ryzen 5 5600", "brand" => "amd", "harga" => 1650000, "tier" => "budget"],
    ["nama" => "AMD Ryzen 5 5600G", "brand" => "amd", "harga" => 1850000, "tier" => "budget"],
    ["nama" => "AMD Ryzen 5 7600", "brand" => "amd", "harga" => 3200000, "tier" => "mid"],
    ["nama" => "AMD Ryzen 7 7800X3D", "brand" => "amd", "harga" => 6500000, "tier" => "high"],
];

$motherboards = [
    ["nama" => "MSI H610M", "socket" => "intel", "chipset" => "H610", "harga" => 950000],
    ["nama" => "Gigabyte B660M", "socket" => "intel", "chipset" => "B660", "harga" => 1450000],
    ["nama" => "ASUS TUF B760M", "socket" => "intel", "chipset" => "B760", "harga" => 2100000],
    ["nama" => "MSI Z790 Gaming", "socket" => "intel", "chipset" => "Z790", "harga" => 3800000],
    ["nama" => "ASRock A520M", "socket" => "amd", "chipset" => "A520", "harga" => 850000],
    ["nama" => "MSI B550M Pro", "socket" => "amd", "chipset" => "B550", "harga" => 1350000],
    ["nama" => "Gigabyte B650 Aorus", "socket" => "amd", "chipset" => "B650", "harga" => 2400000],
    ["nama" => "ASUS ROG X670E", "socket" => "amd", "chipset" => "X670", "harga" => 5200000],
];

$ram = [
    ["nama" => "Kingston 8GB DDR4 3200MHz", "kapasitas" => "8GB", "tipe" => "DDR4", "harga" => 350000],
    ["nama" => "Corsair 16GB DDR4 3200MHz", "kapasitas" => "16GB", "tipe" => "DDR4", "harga" => 650000],
    ["nama" => "G.Skill 32GB DDR4 3600MHz", "kapasitas" => "32GB", "tipe" => "DDR4", "harga" => 1400000],
    ["nama" => "Corsair 16GB DDR5 5600MHz", "kapasitas" => "16GB", "tipe" => "DDR5", "harga" => 1100000],
    ["nama" => "G.Skill 32GB DDR5 6000MHz", "kapasitas" => "32GB", "tipe" => "DDR5", "harga" => 2200000],
];

$storage = [
    ["nama" => "WD Blue 256GB NVMe", "kapasitas" => "256GB", "harga" => 350000],
    ["nama" => "Kingston 512GB NVMe", "kapasitas" => "512GB", "harga" => 550000],
    ["nama" => "Samsung 970 EVO 1TB NVMe", "kapasitas" => "1TB", "harga" => 1100000],
    ["nama" => "WD Black SN850X 2TB NVMe Gen4", "kapasitas" => "2TB", "harga" => 2800000],
];

$gpu = [
    ["nama" => "Integrated Graphics", "tipe" => "integrated", "harga" => 0, "tier" => "budget"],
    ["nama" => "GTX 1650 4GB", "tipe" => "dedicated", "harga" => 2100000, "tier" => "budget"],
    ["nama" => "RTX 3050 8GB", "tipe" => "dedicated", "harga" => 3200000, "tier" => "mid"],
    ["nama" => "RTX 4060 8GB", "tipe" => "dedicated", "harga" => 4800000, "tier" => "mid"],
    ["nama" => "RTX 4070 12GB", "tipe" => "dedicated", "harga" => 8500000, "tier" => "high"],
    ["nama" => "RTX 4080 16GB", "tipe" => "dedicated", "harga" => 15000000, "tier" => "high"],
];

$psu = [
    ["nama" => "Cooler Master 450W 80+ Bronze", "watt" => 450, "harga" => 450000],
    ["nama" => "Corsair 550W 80+ Bronze", "watt" => 550, "harga" => 650000],
    ["nama" => "Seasonic 650W 80+ Gold", "watt" => 650, "harga" => 950000],
    ["nama" => "Corsair RM850 80+ Gold", "watt" => 850, "harga" => 1650000],
];

$monitors = [
    ["nama" => "LG 24\" FHD 75Hz IPS", "ukuran" => "24\"", "resolusi" => "1080p", "harga" => 1400000],
    ["nama" => "ASUS 27\" FHD 165Hz VA", "ukuran" => "27\"", "resolusi" => "1080p", "harga" => 2200000],
    ["nama" => "Samsung 27\" QHD 144Hz IPS", "ukuran" => "27\"", "resolusi" => "1440p", "harga" => 3500000],
    ["nama" => "LG 32\" 4K 60Hz IPS", "ukuran" => "32\"", "resolusi" => "4K", "harga" => 5200000],
];

$keyboards = [
    ["nama" => "Logitech K120", "tipe" => "Membrane", "harga" => 150000],
    ["nama" => "Fantech MK871 RGB", "tipe" => "Mech Blue", "harga" => 350000],
    ["nama" => "Keychron K2 V2", "tipe" => "Mech Brown", "harga" => 950000],
];

$mice = [
    ["nama" => "Logitech B100", "dpi" => "800", "harga" => 80000],
    ["nama" => "Fantech X9 Thor", "dpi" => "4800", "harga" => 150000],
    ["nama" => "Logitech G304", "dpi" => "12000", "harga" => 450000],
];


function generateBuilds($kebutuhan, $budget_min, $budget_max, $gpu_priority, $processors, $motherboards, $ram, $storage, $gpu, $psu, $monitors, $keyboards, $mice) {
    $builds = [];
    
    
    $tierMap = [
        'office' => ['budget'],
        'gaming' => ['budget', 'mid', 'high'],
        'editing' => ['mid', 'high'],
        'workstation' => ['high']
    ];
    
    $allowedTiers = $kebutuhan ? $tierMap[$kebutuhan] : ['budget', 'mid', 'high'];
    
    
    $filteredGpu = $gpu;
    if ($gpu_priority) {
        $filteredGpu = array_filter($gpu, function($g) use ($gpu_priority) {
            return $g['tipe'] === $gpu_priority;
        });
    }
    
    
    foreach ($processors as $cpu) {
        
        if (!in_array($cpu['tier'], $allowedTiers)) continue;
        
        
        $compatibleMobos = array_filter($motherboards, function($m) use ($cpu) {
            return $m['socket'] === $cpu['brand'];
        });
        
        foreach ($compatibleMobos as $mobo) {
            foreach ($ram as $memory) {
                foreach ($storage as $ssd) {
                    foreach ($filteredGpu as $graphics) {
                        
                        if ($cpu['tier'] === 'high' && $graphics['tier'] === 'budget') continue;
                        if ($kebutuhan === 'gaming' && $graphics['tipe'] === 'integrated') continue;
                        
                        foreach ($psu as $power) {
                            foreach ($monitors as $monitor) {
                                foreach ($keyboards as $keyboard) {
                                    foreach ($mice as $mouse) {
                                        $totalHarga = $cpu['harga'] + $mobo['harga'] + $memory['harga'] + 
                                                     $ssd['harga'] + $graphics['harga'] + $power['harga'] +
                                                     $monitor['harga'] + $keyboard['harga'] + $mouse['harga'];
                                        
                                        
                                        if ($totalHarga >= $budget_min && $totalHarga <= $budget_max) {
                                            $builds[] = [
                                                'cpu' => $cpu,
                                                'mobo' => $mobo,
                                                'ram' => $memory,
                                                'storage' => $ssd,
                                                'gpu' => $graphics,
                                                'psu' => $power,
                                                'monitor' => $monitor,
                                                'keyboard' => $keyboard,
                                                'mouse' => $mouse,
                                                'total' => $totalHarga,
                                                'tier' => $cpu['tier']
                                            ];
                                        }
                                        
                                        
                                        if (count($builds) >= 50) break 8;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    
    
    usort($builds, function($a, $b) {
        return $a['total'] - $b['total'];
    });
    
    
    return array_slice($builds, 0, 10);
}

$hasil = generateBuilds($kebutuhan, $budget_min, $budget_max, $gpu_priority, $processors, $motherboards, $ram, $storage, $gpu, $psu, $monitors, $keyboards, $mice);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rekomendasi PC Build</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #f4f4f4;
    padding: 30px 20px;
    font-family: 'Poppins', sans-serif, cursive;
}

.container {
    max-width: 1200px;
    margin: auto;
}

/* HEADER */
.header {
    background: white;
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    text-align: center;
}

.header h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 28px;
    margin-bottom: 10px;
}

.header p {
    font-size: 15px;
    color: #555;
}

/* FILTER */
.filter-summary {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.filter-summary h3 {
    font-family: 'Poppins', sans-serif;
    margin-bottom: 10px;
}

.filter-item {
    display: inline-block;
    background: #0074D9;
    padding: 6px 12px;
    margin: 5px 3px;
    border-radius: 8px;
    font-size: 14px;
    
}

.filter-item  strong  {
    color: white;
}

/* BUILD CARD (NGIKUT SECTION LU) */
.build-card {
    background: white;
    border-radius: 15px;
    padding: 40px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

/* HEADER CARD */
.build-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.build-title {
    font-family: 'Poppins', sans-serif;
    font-size: 26px;
}

.tier-badge {
    background: #eee;
    padding: 6px 14px;
    border-radius: 10px;
    font-size: 14px;
}

/* GRID PART */
.parts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
}

.part-item {
    background: #fafafa;
    border-radius: 10px;
    padding: 15px;
}

.part-category {
    font-size: 13px;
    color: black;
    margin-bottom: 5px;
    font-weight: bold;
}

.part-name {
    font-size: 16px;
    margin-bottom: 5px;
    
}

.part-price {
    font-size: 15px;
    font-weight: bold;
    color: green;
}

/* TOTAL */
.total-price-section {
    margin-top: 30px;
    background: #0074D9;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

.total-label {
    font-size: 14px;
    color: white;
}

.total-price {
    font-family: 'Poppins', sans-serif;
    font-size: 30px;
    color: white;
    font-weight: bold;
}

/* OTHER */
.result-count {
    text-align: center;
    font-size: 16px;
    margin-bottom: 20px;
}

.back-button {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: #333;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-size: 14px;
}

.back-button:hover {
    background: #555;
}
</style>


</head>
<body>

<div class="container">
    <div class="header">
        <h1>Hasil Rekomendasi</h1>
        <p>Build PC lengkap dengan spesifikasi dan harga per komponen</p>
    </div>

    <div class="filter-summary">
        <h3>Filter yang Diterapkan:</h3>
        <?php if ($kebutuhan): ?>
            <span class="filter-item"><strong><?= ucfirst($kebutuhan) ?></strong></span>
        <?php endif; ?>
        <span class="filter-item"><strong>Rp <?= number_format($budget_min, 0, ',', '.') ?> - Rp <?= number_format($budget_max, 0, ',', '.') ?></strong></span>
        <?php if ($gpu_priority): ?>
            <span class="filter-item"><strong><?= ucfirst($gpu_priority) ?></strong></span>
        <?php endif; ?>
    </div>

    <?php if (empty($hasil)) : ?>
        <div class="no-results">
            <h2>Tidak Ada Build yang Cocok</h2>
            <p>Maaf, tidak ada kombinasi PC yang sesuai dengan kriteria Anda.</p>
            <p>Coba sesuaikan filter atau perluas rentang budget Anda.</p>
            <a href="javascript:history.back()" class="back-button">← Kembali ke Form</a>
        </div>
    <?php else : ?>
        <div class="result-count">
            Ditemukan <strong><?= count($hasil) ?></strong> rekomendasi build PC
        </div>

        <?php foreach ($hasil as $index => $build) : ?>
            <div class="build-card">
                <div class="build-header">
                    <div class="build-title">Pilihan <?= $index + 1 ?></div>
                </div>

                <div class="parts-grid">
                    <div class="part-item">
                        <div class="part-category">Processor</div>
                        <div class="part-name"><?= htmlspecialchars($build['cpu']['nama']) ?></div>
                        <div class="part-price">Rp <?= number_format($build['cpu']['harga'], 0, ',', '.') ?></div>
                    </div>

                    <div class="part-item">
                        <div class="part-category">Motherboard</div>
                        <div class="part-name"><?= htmlspecialchars($build['mobo']['nama']) ?></div>
                        <div class="part-price">Rp <?= number_format($build['mobo']['harga'], 0, ',', '.') ?></div>
                    </div>

                    <div class="part-item">
                        <div class="part-category">RAM</div>
                        <div class="part-name"><?= htmlspecialchars($build['ram']['nama']) ?></div>
                        <div class="part-price">Rp <?= number_format($build['ram']['harga'], 0, ',', '.') ?></div>
                    </div>

                    <div class="part-item">
                        <div class="part-category">Penyimpanan / Storage</div>
                        <div class="part-name"><?= htmlspecialchars($build['storage']['nama']) ?></div>
                        <div class="part-price">Rp <?= number_format($build['storage']['harga'], 0, ',', '.') ?></div>
                    </div>

                    <div class="part-item">
                        <div class="part-category">Kartu Grafis</div>
                        <div class="part-name"><?= htmlspecialchars($build['gpu']['nama']) ?></div>
                        <div class="part-price">Rp <?= number_format($build['gpu']['harga'], 0, ',', '.') ?></div>
                    </div>

                    <div class="part-item">
                        <div class="part-category">Power Supply</div>
                        <div class="part-name"><?= htmlspecialchars($build['psu']['nama']) ?></div>
                        <div class="part-price">Rp <?= number_format($build['psu']['harga'], 0, ',', '.') ?></div>
                    </div>

                    <div class="part-item">
                        <div class="part-category">Monitor</div>
                        <div class="part-name"><?= htmlspecialchars($build['monitor']['nama']) ?></div>
                        <div class="part-price">Rp <?= number_format($build['monitor']['harga'], 0, ',', '.') ?></div>
                    </div>

                    <div class="part-item">
                        <div class="part-category">Keyboard</div>
                        <div class="part-name"><?= htmlspecialchars($build['keyboard']['nama']) ?></div>
                        <div class="part-price">Rp <?= number_format($build['keyboard']['harga'], 0, ',', '.') ?></div>
                    </div>

                    <div class="part-item">
                        <div class="part-category">Mouse</div>
                        <div class="part-name"><?= htmlspecialchars($build['mouse']['nama']) ?></div>
                        <div class="part-price">Rp <?= number_format($build['mouse']['harga'], 0, ',', '.') ?></div>
                    </div>
                </div>

                <div class="total-price-section">
                    <div class="total-label">TOTAL HARGA</div>
                    <div class="total-price">Rp <?= number_format($build['total'], 0, ',', '.') ?></div>
                </div>
            </div>
        <?php endforeach; ?>

        <div style="text-align: center; margin-top: 30px;">
            <a href="javascript:history.back()" class="back-button">← Cari Build Lain</a>
        </div>
    <?php endif; ?>
</div>

</body>
</html>