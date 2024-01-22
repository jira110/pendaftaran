<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Your CSS styles here */
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (
            isset($_POST["gender"]) && isset($_POST["tanggal_lahir"]) && isset($_POST["alamat"]) &&
            isset($_POST["gender"][0]) && isset($_POST["tanggal_lahir"][0]) && isset($_POST["alamat"][0]) &&
            isset($_POST["gender"][1]) && isset($_POST["tanggal_lahir"][1]) && isset($_POST["alamat"][1]) &&
            count($_POST["gender"]) === 2
        ) {
            $gender_pasangan = $_POST["gender"];
            $tanggal_lahir_pasangan = $_POST["tanggal_lahir"];
            $alamat_pasangan = $_POST["alamat"];

            echo "<div class='form-container'>";
            echo "<p>Pasangan 1:</p>";
            echo "<p>Gender: " . htmlspecialchars($gender_pasangan[0]) . "</p>";
            echo "<p>Tanggal Lahir: " . htmlspecialchars($tanggal_lahir_pasangan[0]) . "</p>";
            echo "<p>Alamat: " . htmlspecialchars($alamat_pasangan[0]) . "</p>";

            echo "<p>Pasangan 2:</p>";
            echo "<p>Gender: " . htmlspecialchars($gender_pasangan[1]) . "</p>";
            echo "<p>Tanggal Lahir: " . htmlspecialchars($tanggal_lahir_pasangan[1]) . "</p>";
            echo "<p>Alamat: " . htmlspecialchars($alamat_pasangan[1]) . "</p>";
            echo "</div>";
        } else {
            echo "<div class='form-container'>";
            echo "<p>Data tidak lengkap atau tidak sesuai format.</p>";
            echo "</div>";
            header("Location: post.html");
            exit();
        }
        // echo '<script>window.location.href = "post.html";</script>';
    }
    ?>
</body>

</html>
