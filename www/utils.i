<?php
include "utils.i"
?>

<?php
start_page();
?>

<?php
    $operateurs = ["+","-","*","/"];
?>
    <form action="/calculator.php" method="GET">
        <div style="display: flex; justify-content: space-between;">
            <label for="num_1">First Operand</label>
            <input type="number" name="num_1" value="0" style="max-width: 40vw">
        </div>
        <div style="display: flex; justify-content: space-between; margin-top: 5px;">
            <label for="num_2">Second Operand</label>
            <input type="number" name="num_2" value="0" style="max-width: 40vw">
        </div>
    
        <div style="margin-top: 10px; display: flex; justify-content: space-between;">
        <?php
            foreach ($operateurs as $value) {
                echo "<input type='submit' name='op' value='$value'>\n\t\t";
            }
        ?>
        </div>
    </form>
    <div class="card" style="display: flex; justify-content: center; margin-top: 10px">
        <h3>Résultat:</h3>
        <h3><?php
            switch ($_GET['op']) {
                case '+':
                    echo $_GET['num_1'] + $_GET['num_2'];
                    break;
                case '-':
                    echo $_GET['num_1'] - $_GET['num_2'];
                    break;
                case '*':
                    echo $_GET['num_1'] * $_GET['num_2'];
                    break;
                case '/':
                    echo $_GET['num_1'] / $_GET['num_2'];
                    break;
            }
        ?></h3>
    </div>
<?php
end_page();
?>
