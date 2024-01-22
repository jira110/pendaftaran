<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #D63484;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-container {
            background-color: #FF9BD2;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;
            margin-top: 20px; /* Jarak antara dua formulir */
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px; /* Add some space between form and result */
        }

        fieldset {
            margin-bottom: 15px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #F3D7CA;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #F8F4EC;
        }

    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["nama"]) && isset($_GET["tanggal_jadian"]) && count($_GET["nama"]) === 2) {
                $nama_pasangan = $_GET["nama"];
                $tanggal_jadian = $_GET["tanggal_jadian"];

                echo "<div class='form-container'>";
                echo "<p>Pasangan 1:</p>";
                echo "<p>Nama: " . htmlspecialchars($nama_pasangan[0]) . "</p>";
                echo "<p>Tanggal Jadian: " . htmlspecialchars($tanggal_jadian[0]) . "</p>";

                echo "<p>Pasangan 2:</p>";
                echo "<p>Nama: " . htmlspecialchars($nama_pasangan[1]) . "</p>";
                echo "<p>Tanggal Jadian: " . htmlspecialchars($tanggal_jadian[1]) . "</p>";
                echo "</div>";
            } else {
                echo "<div class='form-container'>";
                echo "<p>Data tidak lengkap.</p>";
                echo "</div>";
                header("Location: post.html");
                exit();
            }

        }
        ?>
        <form>
            <input type="submit" value="Lanjutkan">
        </form>
    </div>
</body>
</html>
