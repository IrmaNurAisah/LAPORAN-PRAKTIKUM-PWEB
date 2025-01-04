<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bursa Kerja</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-size: 2em;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #4CAF50;
            color: white;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tr:hover {
            background-color: #e0f7e3;
        }

        .table td {
            font-size: 1em;
            color: #333;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            .table th, .table td {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Bursa Kerja</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Posisi</th>
                <th>Perusahaan</th>
                <th>Lokasi</th>
                <th>Tanggal Ditambahkan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Software Engineer</td>
                <td>PT. Teknologi Canggih</td>
                <td>Jakarta</td>
                <td>2024-01-01</td>
            </tr>
            <tr>
                <td>Data Analyst</td>
                <td>PT. Data Solusi</td>
                <td>Bandung</td>
                <td>2024-01-05</td>
            </tr>
            <tr>
                <td>Web Developer</td>
                <td>PT. Kreatif Digital</td>
                <td>Surabaya</td>
                <td>2024-01-10</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
