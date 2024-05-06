<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Car</title>
    <style>
        body {
            background-color: #222;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #333;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: #444;
            color: #fff;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #08f;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0077cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New Car</h2>
        <form action="tambah_data.php" method="POST" enctype="multipart/form-data">
            <label for="merk">Merk:</label>
            <input type="text" id="merk" name="merk" required><br>

            <label for="model">Model:</label>
            <input type="text" id="model" name="model" required><br>

            <label for="nomor_plat">Nomor Plat:</label>
            <input type="text" id="nomor_plat" name="nomor_plat" required><br>

            <label for="tarif">Tarif:</label>
            <input type="text" id="tarif" name="tarif" required><br>

            <label for="gambar">Pilih Gambar:</label>
            <input type="file" id="gambar" name="gambar" accept="image/*" required><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
