<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px 30px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h3 {
            margin-bottom: 10px;
            color: #555;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            color: #555;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="number"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
            margin-top: 10px;
            color: green;
            font-size: 14px;
        }

        /* Add responsiveness */
        @media (max-width: 768px) {
            form {
                padding: 15px;
            }

            button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div style="width: 100%; display: flex; justify-content: center;">

        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <form action="{{ route('pengajuan.store') }}" method="POST">
            @csrf
            <h1>Form Pengajuan</h1>

            <!-- Data Konsumen -->
            <h3>Data Konsumen</h3>
            <label>Nama:</label>
            <input type="text" name="nama" required>
            <label>NIK:</label>
            <input type="text" name="nik" required>
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" required>
            <label>Status Perkawinan:</label>
            <input type="text" name="status_perkawinan" required>
            <label>Data Pasangan:</label>
            <input type="text" name="data_pasangan">

            <!-- Data Kendaraan -->
            <h3>Data Kendaraan</h3>
            <label>Dealer:</label>
            <input type="text" name="dealer" required>
            <label>Merk Kendaraan:</label>
            <input type="text" name="merk_kendaraan" required>
            <label>Model Kendaraan:</label>
            <input type="text" name="model_kendaraan" required>
            <label>Tipe Kendaraan:</label>
            <input type="text" name="tipe_kendaraan" required>
            <label>Warna Kendaraan:</label>
            <input type="text" name="warna_kendaraan" required>
            <label>Harga Kendaraan:</label>
            <input type="number" name="harga_kendaraan" required>

            <!-- Data Pinjaman -->
            <h3>Data Pinjaman</h3>
            <label>Asuransi:</label>
            <input type="text" name="asuransi" required>
            <label>Down Payment:</label>
            <input type="number" name="down_payment" required>
            <label>Lama Kredit (bulan):</label>
            <input type="number" name="lama_kredit" required>
            <label>Angsuran Bulanan:</label>
            <input type="number" name="angsuran_bulanan" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>