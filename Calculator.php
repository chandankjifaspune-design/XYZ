<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator using Switch Case</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            text-align: center;
            padding-top: 50px;
        }
        form {
            background-color: #fff;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
        }
        input, select {
            padding: 10px;
            margin: 10px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .result {
            margin-top: 20px;
            font-size: 20px;
            color: #2c3e50;
        }
    </style>
</head>
<body>

    <h2>🔢 PHP Calculator using Switch Case</h2>

    <form method="post">
        <input type="number" name="num1" placeholder="Enter First Number" required><br>
        <input type="number" name="num2" placeholder="Enter Second Number" required><br>

        <select name="operation" required>
            <option value="">-- Select Operation --</option>
            <option value="add">Addition (+)</option>
            <option value="sub">Subtraction (-)</option>
            <option value="mul">Multiplication (*)</option>
            <option value="div">Division (/)</option>
            <option value="mod">Module (%)</option>
        </select><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $op = $_POST['operation'];
        $result = "";

        switch ($op) {
            case "add":
                $result = $a + $b;
                echo "<div class='result'>Result of Addition: $result</div>";
                break;
            case "sub":
                $result = $a - $b;
                echo "<div class='result'>Result of Subtraction: $result</div>";
                break;
            case "mul":
                $result = $a * $b;
                echo "<div class='result'>Result of Multiplication: $result</div>";
                break;
            case "div":
                if ($b == 0) {
                    echo "<div class='result' style='color:red;'>Cannot divide by zero!</div>";
                } else {
                    $result = $a / $b;
                    echo "<div class='result'>Result of Division: $result</div>";
                }
                break;
            case "mod":
                if ($b == 0) {
                    echo "<div class='result' style='color:red;'>Cannot perform modulo by zero!</div>";
                } else {
                    $result = $a % $b;
                    echo "<div class='result'>Result of Modulo: $result</div>";
                }
                break;
            default:
                echo "<div class='result'>Invalid operation selected.</div>";
        }
    }
    ?>

</body>
</html>
7