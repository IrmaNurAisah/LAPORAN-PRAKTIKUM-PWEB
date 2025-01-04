<?php
// penelusuran_alumni.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penelusuran Alumni</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Input search styling */
        #searchInput {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            font-size: 16px;
            margin-bottom: 20px;
            transition: border-color 0.3s;
        }

        #searchInput:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Table styling */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .table thead tr {
            background-color: #007bff;
            color: white;
            text-align: left;
        }

        .table th, .table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tr:hover {
            background-color: #f1f1f1;
        }

        /* Styling for smaller devices */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            h2 {
                font-size: 1.5rem;
            }

            #searchInput {
                font-size: 14px;
                padding: 8px;
            }

            .table th, .table td {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Penelusuran Alumni</h2>
    
    <!-- Input Search -->
    <div class="form-group mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Cari berdasarkan nama, jurusan, tahun lulus, atau email...">
    </div>
    
    <table class="table table-striped" id="alumniTable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Tahun Lulus</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Yang Jeongin</td>
                <td>Teknik Informatika</td>
                <td>2024</td>
                <td>foxyayen@gmail.com</td>
            </tr>
            <tr>
                <td>Kim Seungmin</td>
                <td>Manajemen</td>
                <td>2021</td>
                <td>seungmo@gmail.com</td>
            </tr>
            <tr>
                <td>Lee Felix</td>
                <td>Sistem Informasi</td>
                <td>2023</td>
                <td>leeYongbuk@gmail.com</td>
            </tr>
            <tr>
                <td>Han Jisung</td>
                <td>Desain Komunikasi Visual</td>
                <td>2022</td>
                <td>hanQuokka@gmail.com</td>
            </tr>
            <!-- Tambahkan lebih banyak alumni sesuai kebutuhan -->
        </tbody>
    </table>
</div>

<script>
// JavaScript untuk fitur pencarian
document.getElementById('searchInput').addEventListener('input', function () {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('#alumniTable tbody tr');
    
    rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        const matches = Array.from(cells).some(cell => cell.textContent.toLowerCase().includes(filter));
        row.style.display = matches ? '' : 'none';
    });
});
</script>

</body>
</html>
