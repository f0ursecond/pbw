<?php

$nama = $_POST['nama'] ?? '';
$kebutuhan = $_POST['kebutuhan'] ?? '';
$budget_min = $_POST['budget_min'] ?? 0;
$budget_max = $_POST['budget_max'] ?? PHP_INT_MAX;
$gpu_priority = $_POST['gpu_priority'] ?? '';

$laptop_list = [
    // OFFICE & PRODUCTIVITY
    [
        "kebutuhan" => "office",
        "brand" => "ASUS",
        "nama" => "ASUS VivoBook 14",
        "processor" => "Intel i3-1215U",
        "ram" => "8GB DDR4",
        "storage" => "256GB SSD",
        "gpu" => "Intel UHD Graphics",
        "gpu_type" => "integrated",
        "layar" => "14\" FHD",
        "baterai" => "42Wh (~6 jam)",
        "berat" => "1.6 kg",
        "harga" => 5500000,
        "deskripsi" => "Laptop ringan untuk pekerjaan office dasar"
    ],
    [
        "kebutuhan" => "office",
        "brand" => "Lenovo",
        "nama" => "Lenovo IdeaPad Slim 3",
        "processor" => "AMD Ryzen 5 5500U",
        "ram" => "8GB DDR4",
        "storage" => "512GB SSD",
        "gpu" => "AMD Radeon Graphics",
        "gpu_type" => "integrated",
        "layar" => "14\" FHD",
        "baterai" => "45Wh (~7 jam)",
        "berat" => "1.5 kg",
        "harga" => 6800000,
        "deskripsi" => "Multitasking lancar dengan performa efisien"
    ],
    [
        "kebutuhan" => "office",
        "brand" => "HP",
        "nama" => "HP 14s-fq1047AU",
        "processor" => "AMD Ryzen 5 5625U",
        "ram" => "16GB DDR4",
        "storage" => "512GB SSD",
        "gpu" => "AMD Radeon Graphics",
        "gpu_type" => "integrated",
        "layar" => "14\" FHD IPS",
        "baterai" => "41Wh (~6 jam)",
        "berat" => "1.46 kg",
        "harga" => 8200000,
        "deskripsi" => "RAM besar untuk multitasking produktivitas tinggi"
    ],
    [
        "kebutuhan" => "office",
        "brand" => "Acer",
        "nama" => "Acer Swift 3",
        "processor" => "Intel i5-1235U",
        "ram" => "16GB LPDDR4X",
        "storage" => "512GB SSD",
        "gpu" => "Intel Iris Xe",
        "gpu_type" => "integrated",
        "layar" => "14\" FHD IPS",
        "baterai" => "56Wh (~9 jam)",
        "berat" => "1.2 kg",
        "harga" => 10500000,
        "deskripsi" => "Ultrabook premium dengan baterai tahan lama"
    ],

    // GAMING
    [
        "kebutuhan" => "gaming",
        "brand" => "ASUS",
        "nama" => "ASUS TUF Gaming F15",
        "processor" => "Intel i5-11400H",
        "ram" => "8GB DDR4",
        "storage" => "512GB SSD",
        "gpu" => "GTX 1650 4GB",
        "gpu_type" => "dedicated",
        "layar" => "15.6\" FHD 144Hz",
        "baterai" => "48Wh (~4 jam)",
        "berat" => "2.3 kg",
        "harga" => 10500000,
        "deskripsi" => "Gaming entry level untuk eSports dan game ringan"
    ],
    [
        "kebutuhan" => "gaming",
        "brand" => "Lenovo",
        "nama" => "Lenovo LOQ 15",
        "processor" => "Intel i5-12450H",
        "ram" => "16GB DDR5",
        "storage" => "512GB SSD",
        "gpu" => "RTX 3050 4GB",
        "gpu_type" => "dedicated",
        "layar" => "15.6\" FHD 144Hz",
        "baterai" => "60Wh (~5 jam)",
        "berat" => "2.4 kg",
        "harga" => 13500000,
        "deskripsi" => "Gaming 1080p dengan ray tracing dan DLSS"
    ],
    [
        "kebutuhan" => "gaming",
        "brand" => "ASUS",
        "nama" => "ASUS ROG Strix G15",
        "processor" => "AMD Ryzen 7 6800H",
        "ram" => "16GB DDR5",
        "storage" => "512GB SSD",
        "gpu" => "RTX 4050 6GB",
        "gpu_type" => "dedicated",
        "layar" => "15.6\" FHD 144Hz",
        "baterai" => "56Wh (~4.5 jam)",
        "berat" => "2.3 kg",
        "harga" => 16500000,
        "deskripsi" => "Gaming 1080p ultra settings dengan DLSS 3.0"
    ],
    [
        "kebutuhan" => "gaming",
        "brand" => "MSI",
        "nama" => "MSI Katana 15",
        "processor" => "Intel i7-13620H",
        "ram" => "16GB DDR5",
        "storage" => "1TB SSD",
        "gpu" => "RTX 4060 8GB",
        "gpu_type" => "dedicated",
        "layar" => "15.6\" FHD 144Hz",
        "baterai" => "53Wh (~4 jam)",
        "berat" => "2.25 kg",
        "harga" => 19500000,
        "deskripsi" => "Gaming 1440p capable dengan performa tinggi"
    ],
    [
        "kebutuhan" => "gaming",
        "brand" => "ASUS",
        "nama" => "ASUS ROG Zephyrus G14",
        "processor" => "AMD Ryzen 9 7940HS",
        "ram" => "32GB DDR5",
        "storage" => "1TB SSD",
        "gpu" => "RTX 4060 8GB",
        "gpu_type" => "dedicated",
        "layar" => "14\" QHD 165Hz",
        "baterai" => "76Wh (~8 jam)",
        "berat" => "1.65 kg",
        "harga" => 26000000,
        "deskripsi" => "Gaming portabel premium dengan layar QHD"
    ],
    [
        "kebutuhan" => "gaming",
        "brand" => "Lenovo",
        "nama" => "Lenovo Legion 5 Pro",
        "processor" => "AMD Ryzen 7 7745HX",
        "ram" => "32GB DDR5",
        "storage" => "1TB SSD",
        "gpu" => "RTX 4070 8GB",
        "gpu_type" => "dedicated",
        "layar" => "16\" WQXGA 240Hz",
        "baterai" => "80Wh (~5 jam)",
        "berat" => "2.5 kg",
        "harga" => 32000000,
        "deskripsi" => "High-end gaming dengan layar 16:10 dan refresh rate tinggi"
    ],

    // VIDEO/PHOTO EDITING
    [
        "kebutuhan" => "editing",
        "brand" => "ASUS",
        "nama" => "ASUS VivoBook Pro 15",
        "processor" => "AMD Ryzen 5 5600H",
        "ram" => "16GB DDR4",
        "storage" => "512GB SSD",
        "gpu" => "GTX 1650 4GB",
        "gpu_type" => "dedicated",
        "layar" => "15.6\" FHD OLED",
        "baterai" => "63Wh (~6 jam)",
        "berat" => "1.8 kg",
        "harga" => 11500000,
        "deskripsi" => "Content creation entry dengan layar OLED akurat"
    ],
    [
        "kebutuhan" => "editing",
        "brand" => "Acer",
        "nama" => "Acer ConceptD 3",
        "processor" => "Intel i7-11800H",
        "ram" => "16GB DDR4",
        "storage" => "512GB SSD",
        "gpu" => "RTX 3050 Ti 4GB",
        "gpu_type" => "dedicated",
        "layar" => "14\" FHD IPS 100% sRGB",
        "baterai" => "48Wh (~5 jam)",
        "berat" => "1.7 kg",
        "harga" => 15000000,
        "deskripsi" => "Creator laptop dengan color accuracy tinggi"
    ],
    [
        "kebutuhan" => "editing",
        "brand" => "MSI",
        "nama" => "MSI Creator 15",
        "processor" => "Intel i7-13700H",
        "ram" => "32GB DDR5",
        "storage" => "1TB SSD",
        "gpu" => "RTX 4060 8GB",
        "gpu_type" => "dedicated",
        "layar" => "15.6\" QHD IPS 100% DCI-P3",
        "baterai" => "90Wh (~7 jam)",
        "berat" => "2.1 kg",
        "harga" => 24000000,
        "deskripsi" => "Professional content creation dengan layar color accurate"
    ],
    [
        "kebutuhan" => "editing",
        "brand" => "ASUS",
        "nama" => "ASUS ProArt Studiobook",
        "processor" => "Intel i9-13980HX",
        "ram" => "64GB DDR5",
        "storage" => "2TB SSD",
        "gpu" => "RTX 4070 8GB",
        "gpu_type" => "dedicated",
        "layar" => "16\" 4K OLED 100% DCI-P3",
        "baterai" => "90Wh (~6 jam)",
        "berat" => "2.4 kg",
        "harga" => 42000000,
        "deskripsi" => "Workstation-grade untuk 4K/8K video editing profesional"
    ],

    // WORKSTATION PRO
    [
        "kebutuhan" => "workstation",
        "brand" => "Lenovo",
        "nama" => "Lenovo ThinkPad P15v",
        "processor" => "Intel i7-13700H",
        "ram" => "32GB DDR5",
        "storage" => "1TB SSD",
        "gpu" => "RTX A2000 4GB",
        "gpu_type" => "dedicated",
        "layar" => "15.6\" FHD IPS",
        "baterai" => "68Wh (~6 jam)",
        "berat" => "2.07 kg",
        "harga" => 28000000,
        "deskripsi" => "Mobile workstation untuk CAD dan engineering"
    ],
    [
        "kebutuhan" => "workstation",
        "brand" => "Dell",
        "nama" => "Dell Precision 5570",
        "processor" => "Intel i9-12900H",
        "ram" => "64GB DDR5",
        "storage" => "2TB SSD",
        "gpu" => "RTX A3000 12GB",
        "gpu_type" => "dedicated",
        "layar" => "15.6\" 4K OLED",
        "baterai" => "86Wh (~7 jam)",
        "berat" => "1.9 kg",
        "harga" => 48000000,
        "deskripsi" => "Premium workstation untuk 3D rendering dan simulasi kompleks"
    ],

    // ULTRAPORTABLE / STUDENTS
    [
        "kebutuhan" => "office",
        "brand" => "Apple",
        "nama" => "MacBook Air M2",
        "processor" => "Apple M2 8-core",
        "ram" => "8GB Unified",
        "storage" => "256GB SSD",
        "gpu" => "M2 8-core GPU",
        "gpu_type" => "integrated",
        "layar" => "13.6\" Liquid Retina",
        "baterai" => "52.6Wh (~15 jam)",
        "berat" => "1.24 kg",
        "harga" => 17000000,
        "deskripsi" => "Ultraportable premium dengan efisiensi luar biasa"
    ],
    [
        "kebutuhan" => "office",
        "brand" => "Microsoft",
        "nama" => "Surface Laptop 5",
        "processor" => "Intel i5-1235U",
        "ram" => "16GB LPDDR5X",
        "storage" => "512GB SSD",
        "gpu" => "Intel Iris Xe",
        "gpu_type" => "integrated",
        "layar" => "13.5\" PixelSense Touchscreen",
        "baterai" => "47Wh (~12 jam)",
        "berat" => "1.27 kg",
        "harga" => 19500000,
        "deskripsi" => "Premium ultrabook dengan touchscreen dan build quality premium"
    ],
];

// Filter berdasarkan kriteria
$hasil = [];

foreach ($laptop_list as $laptop) {
    $match = true;
    
    // Filter kebutuhan (jika dipilih)
    if ($kebutuhan !== '' && $laptop['kebutuhan'] !== $kebutuhan) {
        $match = false;
    }
    
    // Filter budget range
    if ($laptop['harga'] < $budget_min || $laptop['harga'] > $budget_max) {
        $match = false;
    }
    
    // Filter GPU priority (jika dipilih)
    if ($gpu_priority !== '' && $laptop['gpu_type'] !== $gpu_priority) {
        $match = false;
    }
    
    if ($match) {
        $hasil[] = $laptop;
    }
}

// Sort hasil dari harga terendah ke tertinggi
usort($hasil, function($a, $b) {
    return $a['harga'] - $b['harga'];
});

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rekomendasi Laptop</title>
   

<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: #f4f4f4;
    padding: 30px 20px;
}

.container {
    max-width: 1200px;
    margin: auto;
}

.header {
    background: white;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    margin-bottom: 30px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.header h1 {
    color: #0074D9;
    margin-bottom: 10px;
    font-size: 26px;
}

.header p {
    color: #555;
    font-size: 15px;
}

.filter-summary {
    background: white;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 25px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.filter-summary h3 {
    margin-bottom: 10px;
    font-size: 18px;
}

.filter-item {
    display: inline-block;
    background: #0074D9;
    color: white;
    padding: 6px 12px;
    border-radius: 8px;
    margin: 4px;
    font-size: 13px;
}

.card {
    background: white;
    border-radius: 15px;
    padding: 40px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #ddd;
}

.card-title {
    font-size: 22px;
    font-weight: 600;
    color: #333;
}

.brand-badge {
    background: #eee;
    padding: 5px 10px;
    border-radius: 6px;
    font-size: 12px;
    color: #555;
}

.badge {
    padding: 5px 12px;
    border-radius: 6px;
    font-size: 12px;
    background: #eaf3ff;
    color: #0074D9;
    font-weight: 600;
}

.specs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.spec-item {
    background: #fafafa;
    padding: 12px;
    border-radius: 8px;
}

.spec-label {
    font-size: 12px;
    color: #777;
    margin-bottom: 5px;
}

.spec-value {
    font-size: 15px;
    color: #333;
    font-weight: 600;
}

.description {
    background: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
    margin: 15px 0;
    font-size: 14px;
    color: #555;
}

.price {
    border-radius: 8px;
    padding: 12px 20px;
    background: #0074D9;
    font-size: 26px;
    color: white;
    font-weight: bold;
    text-align: right;
    margin-top: 15px;
}

.no-results {
    background: white;
    padding: 40px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.no-results h2 {
    color: #e74c3c;
    margin-bottom: 15px;
}

.back-button {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 25px;
    background: #0074D9;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-size: 14px;
}

.back-button:hover {
    background: #005bb5;
}

.result-count {
    text-align: center;
    color: #333;
    font-size: 16px;
    margin-bottom: 20px;
}
</style>

</head>
<body>

<div class="container">
    <div class="header">
        <h1>Rekomendasi Laptop untuk <?= htmlspecialchars($nama) ?></h1>
        <p>Berikut adalah laptop yang sesuai dengan kriteria pencarian Anda</p>
    </div>

    <div class="filter-summary">
        <h3>Filter yang Diterapkan:</h3>
        <?php if ($kebutuhan): ?>
            <span class="filter-item">Kebutuhan: <strong><?= ucfirst($kebutuhan) ?></strong></span>
        <?php endif; ?>
        <span class="filter-item">Budget: <strong>Rp <?= number_format($budget_min, 0, ',', '.') ?> - Rp <?= number_format($budget_max, 0, ',', '.') ?></strong></span>
        <?php if ($gpu_priority): ?>
            <span class="filter-item">GPU: <strong><?= ucfirst($gpu_priority) ?></strong></span>
        <?php endif; ?>
    </div>

    <?php if (empty($hasil)) : ?>
        <div class="no-results">
            <h2>Tidak Ada Hasil</h2>
            <p>Maaf, tidak ada laptop yang sesuai dengan kriteria pencarian Anda.</p>
            <p>Coba sesuaikan filter atau perluas rentang budget Anda.</p>
            <a href="javascript:history.back()" class="back-button">Kembali ke Form</a>
        </div>
    <?php else : ?>
        <div class="result-count">
            Ditemukan <strong><?= count($hasil) ?></strong> rekomendasi laptop untuk Anda
        </div>

        <?php foreach ($hasil as $laptop) : ?>
            <div class="card">
                <div class="card-header">
                    <div class="card-title-section">
                        <!-- <div class="brand-badge"><?= htmlspecialchars($laptop['brand']) ?></div> -->
                        <div class="card-title"><?= htmlspecialchars($laptop['nama']) ?></div>
                    </div>
                   
                </div>

                <div class="description">
                    <?= htmlspecialchars($laptop['deskripsi']) ?>
                </div>

                <div class="portability-info">
                    <div class="portability-item">
                        <span>Layar:</span>
                        <span><strong><?= htmlspecialchars($laptop['layar']) ?></strong></span>
                    </div>
                    <div class="portability-item">
                        <span>Berat:</span>
                        <span><strong><?= htmlspecialchars($laptop['berat']) ?></strong></span>
                    </div>
                    <div class="portability-item">
                        <span>Baterai:</span>
                        <span><strong><?= htmlspecialchars($laptop['baterai']) ?></strong></span>
                    </div>
                </div>

                <div class="specs-grid">
                    <div class="spec-item">
                        <div class="spec-label">Processor</div>
                        <div class="spec-value"><?= htmlspecialchars($laptop['processor']) ?></div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-label">Memory</div>
                        <div class="spec-value"><?= htmlspecialchars($laptop['ram']) ?></div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-label">Storage</div>
                        <div class="spec-value"><?= htmlspecialchars($laptop['storage']) ?></div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-label">Graphics</div>
                        <div class="spec-value"><?= htmlspecialchars($laptop['gpu']) ?></div>
                    </div>
                </div>

                <div class="price">
                    Rp <?= number_format($laptop['harga'], 0, ',', '.') ?>
                </div>
            </div>
        <?php endforeach; ?>

        <div style="text-align: center; margin-top: 30px;">
            <a href="javascript:history.back()" class="back-button">Cari Lagi</a>
        </div>
    <?php endif; ?>
</div>

</body>
</html>