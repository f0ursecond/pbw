<?php

function extractPrice($value) {
    $parts = explode('|', $value);
    return isset($parts[1]) ? (int)$parts[1] : 0;
}

function extractName($value) {
    $parts = explode('|', $value);
    return isset($parts[0]) ? $parts[0] : $value;
}

$nama       = $_POST['nama'] ?? 'User';
$mobo       = extractPrice($_POST['mobo'] ?? '');
$processor  = extractPrice($_POST['processor'] ?? '');
$ram        = extractPrice($_POST['ram'] ?? '');
$storage    = extractPrice($_POST['storage'] ?? '');
$psu        = extractPrice($_POST['psu'] ?? '');
$keyboard   = extractPrice($_POST['keyboard'] ?? '');
$mouse      = extractPrice($_POST['mouse'] ?? '');
$monitor    = extractPrice($_POST['monitor'] ?? '');

$moboName       = extractName($_POST['mobo'] ?? '');
$processorName  = extractName($_POST['processor'] ?? '');
$ramName        = extractName($_POST['ram'] ?? '');
$storageName    = extractName($_POST['storage'] ?? '');
$psuName        = extractName($_POST['psu'] ?? '');
$keyboardName   = extractName($_POST['keyboard'] ?? '');
$mouseName      = extractName($_POST['mouse'] ?? '');
$monitorName    = extractName($_POST['monitor'] ?? '');

$total = $mobo + $processor + $ram + $storage + $psu + $keyboard + $mouse + $monitor;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Komputer - KomputerKita</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #0074D9;
            text-align: center;
            margin-bottom: 10px;
            font-size: 28px;
        }
        
        .user-info {
            text-align: center;
            color: #555;
            margin-bottom: 30px;
            font-size: 16px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        
        table th {
            background: linear-gradient(135deg, #0074D9 0%, #0056b3 100%);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }
        
        table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e0e0e0;
            color: #555;
        }
        
        table tr:hover {
            background-color: #f9f9f9;
        }
        
        .total-row {
            background-color: #f0f8ff;
        }
        
        .total-row th {
            background: linear-gradient(135deg, #0074D9 0%, #0056b3 100%);
            color: white;
            padding: 15px;
        }
        
        .total-row td {
            font-weight: 600;
            font-size: 18px;
            color: #0074D9;
        }
        
        .price {
            color: #0074D9;
            font-weight: 500;
        }
        
        .button-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
        }
        
        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #0074D9 0%, #0056b3 100%);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 116, 217, 0.4);
        }
        
        .btn-secondary {
            background: #e0e0e0;
            color: #333;
        }
        
        .btn-secondary:hover {
            background: #d0d0d0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🖥️ Rekomendasi Komputer Anda</h1>
        <div class="user-info">Nama: <strong><?= htmlspecialchars($nama) ?></strong></div>
        
        <table>
            <tr>
                <th>Komponen</th>
                <th style="text-align: right;">Harga</th>
            </tr>
            <tr>
                <td>Motherboard: <?= htmlspecialchars($moboName) ?></td>
                <td style="text-align: right;"><span class="price">Rp <?= number_format($mobo, 0, ',', '.') ?></span></td>
            </tr>
            <tr>
                <td>Processor: <?= htmlspecialchars($processorName) ?></td>
                <td style="text-align: right;"><span class="price">Rp <?= number_format($processor, 0, ',', '.') ?></span></td>
            </tr>
            <tr>
                <td>RAM: <?= htmlspecialchars($ramName) ?></td>
                <td style="text-align: right;"><span class="price">Rp <?= number_format($ram, 0, ',', '.') ?></span></td>
            </tr>
            <tr>
                <td>Storage: <?= htmlspecialchars($storageName) ?></td>
                <td style="text-align: right;"><span class="price">Rp <?= number_format($storage, 0, ',', '.') ?></span></td>
            </tr>
            <tr>
                <td>Power Supply: <?= htmlspecialchars($psuName) ?></td>
                <td style="text-align: right;"><span class="price">Rp <?= number_format($psu, 0, ',', '.') ?></span></td>
            </tr>
            <tr>
                <td>Keyboard: <?= htmlspecialchars($keyboardName) ?></td>
                <td style="text-align: right;"><span class="price">Rp <?= number_format($keyboard, 0, ',', '.') ?></span></td>
            </tr>
            <tr>
                <td>Mouse: <?= htmlspecialchars($mouseName) ?></td>
                <td style="text-align: right;"><span class="price">Rp <?= number_format($mouse, 0, ',', '.') ?></span></td>
            </tr>
            <tr>
                <td>Monitor: <?= htmlspecialchars($monitorName) ?></td>
                <td style="text-align: right;"><span class="price">Rp <?= number_format($monitor, 0, ',', '.') ?></span></td>
            </tr>
            <tr class="total-row">
                <th>Total Harga</th>
                <th style="text-align: right;">Rp <?= number_format($total, 0, ',', '.') ?></th>
            </tr>
        </table>
        
        <div class="button-group">
            <a href="index.html" class="btn btn-secondary">← Kembali</a>
        </div>
    </div>
</body>
</html>
