<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Calculator</title>
</head>

<style>
body {
  font-family: Arial;
  color: black;
}

.button {
  border: none;
  color: white;
  padding: 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {border-radius: 8px;}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: AliceBlue;
}

.right {
  right: 0;
  background-color: FloralWhite;
}

.leftPage {
  position: absolute;
  top: 20%;
  left: 20%;
  transform: translate(-10%, -50%);
  text-align: center;
}

.rightPage {
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

</style>
</head>
<body>
<div class="split left">
    <div class="leftPage">
        <h1>Calculator</h1>
         <form>
          <input type="text" name = "num1" placeholder="Enter a number">
          <select name="operator">
              <option>None</option>
              <option>Plus</option>
              <option>Minus</option>
              <option>Times</option>
              <option>Divided</option>
            </select>
            <input type="text" name = "num2" placeholder="Enter a number">
            <br>
            <br>
            <button class="button button1" style="background-color: black;" type="submit" name="submit" value="submit">Calculate</button>
        </form>
        <p> Answer:</p>
        <?php

        if (isset($_GET['submit'])){
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];

            switch ($operator){
                case "None":
                    echo "Please select an operator.";
                    break;
                    case "Plus":
                        $newOperator = "+";
                        $answer1 = $result1 + $result2;
                        echo $answer1;

                        $finalOper = $_POST[$newOperator];
                        $finalAnswer = $answer1;

                        break;
                        case "Minus":
                            $newOperator = "-";
                            $answer2 = $result1 - $result2;
                            echo $answer2;

                            $finalOper = $_POST[$newOperator];
                            $finalAnswer = $answer2;
                            break;
                        case "Times":
                            $newOperator = "*";
                            $answer3 = $result1 * $result2;
                            echo $answer3;

                            $finalOper = $_POST[$newOperator];
                            $finalAnswer = $answer3;
                            break;
                        case "Divided":
                            $newOperator = "/";
                            $answer4 = $result1 / $result2;
                            echo $answer4;

                            $finalOper = $_POST[$newOperator];
                            $finalAnswer = $answer4;
                            break;
                        }
                    }
                            ?>
                            </div>
                        </div>

                        <div class="split right">
                            <div class="rightPage">
                                <h1>Recent Calculations</h1>
                                <p>
                                <?php
                                if (isset($_GET['submit'])){
                                    echo $result1. " ";
                                    echo $newOperator . " ";
                                    echo $result2 . " = ";
                                    echo $finalAnswer;
                                }
                                ?>
                                </p>
                            </div>
                        </div>
                    </body>
                    </html>