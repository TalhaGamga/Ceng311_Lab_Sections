<!DOCTYPE html>
<html lang="en">
<head>
    <title>TALHA GAMGA - 20050111078</title>
    <meta name="description" content="CENG 311 Inclass Activity-5"/>
</head>
<body>
    <?php 
        $rates = array(
            "FUSD" => 1.0,
            "FCAD" => 0.74,
            "FEUR" => 1.08,
            "TUSD" => 1.0,
            "TCAD" => 1.35,
            "TEUR" => 0.92
        );

        $value = $from = $to = $result = "";

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET['value_from'], $_GET['currencies_from'], $_GET['currencies_to'])) {
                $value = $_GET['value_from'];
                $from = $_GET['currencies_from'];
                $to = $_GET['currencies_to'];

                if (is_numeric($value) && isset($rates[$from]) && isset($rates[$to])) {
                    $result = $value * $rates[$from] * $rates[$to];
                } else {
                    $result = "Invalid input";
                }
            }
        }
    ?>
    
    <form action="activity5.php" method="GET"> 
        <table>
            <tr>
                <td>From:</td>
                <td><input type="text" name="value_from" value="<?php echo htmlspecialchars($value); ?>"/></td>
                <td>Currency:</td>
                <td>
                    <select name="currencies_from">
                        <option value="FUSD" <?php if ($from == 'FUSD') echo 'selected'; ?>>USD</option>
                        <option value="FCAD" <?php if ($from == 'FCAD') echo 'selected'; ?>>CAD</option>
                        <option value="FEUR" <?php if ($from == 'FEUR') echo 'selected'; ?>>EUR</option>
                    </select>
                </td>    
            </tr>
            <tr>
                <td>To:</td>
                <td><input type="text" name="result" value="<?php echo htmlspecialchars($result); ?>" readonly/></td>
                <td>Currency:</td>
                <td>
                    <select name="currencies_to">
                        <option value="TUSD" <?php if ($to == 'TUSD') echo 'selected'; ?>>USD</option>
                        <option value="TCAD" <?php if ($to == 'TCAD') echo 'selected'; ?>>CAD</option>
                        <option value="TEUR" <?php if ($to == 'TEUR') echo 'selected'; ?>>EUR</option>
                    </select>
                </td>    
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="submit" value="convert"/></td>    
            </tr>
        </table>    
    </form>        
</body>
</html>