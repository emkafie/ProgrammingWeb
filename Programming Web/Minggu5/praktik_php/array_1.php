<!DOCTYPE html>
<html>
<head>
<style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: left;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
        $Listdosen = ["Elok Nur Hamdana","Unggul Pamenang","Bagas Nugraha"];

        echo "<table>";
        echo "<tr><th>Index</th><th>Nama Dosen</th></tr>";
        
        echo "<tr><td>2</td><td>" . $Listdosen[2] . "</td></tr>";
        echo "<tr><td>0</td><td>" . $Listdosen[0] . "</td></tr>";
        echo "<tr><td>1</td><td>" . $Listdosen[1] . "</td></tr>";
        echo "</table>";

        echo "<br><h2>Daftar Dosen</h2>";
        echo "<table>";
        echo "<tr><th>Index</th><th>Nama Dosen</th></tr>";
        
        for ($i = 0; $i < count($Listdosen); $i++) { 
            echo "<tr><td>" . $i . "</td><td>" . $Listdosen[$i] . "</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>