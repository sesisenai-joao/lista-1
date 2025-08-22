<html>
    <div style="display: flex; flex-direction: row;">
        <div class="input" style="background-color: yellow; width: 100%; border: 1px solid black; margin-right: 2px;">
            <h2>Entrada</h2>
            <form action="10.php" method="post">
                <input type="text" name="field1">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div style="background-color: green; width:100%; border: 1px solid black; margin-right: 2px;" class="results">
            <h2>Saída</h2>
            <?php
                if(sizeof($_POST) > 0) {
                    $n1 = (int) $_POST["field1"];

                    $fib = array(0, 1);

                    while(end($fib) <= $n1) {
                        $x = ($fib[sizeof($fib) - 2] + $fib[sizeof($fib) - 1]);
                        array_push($fib, $x);
                    }
                    if(end($fib) > $n1) array_pop($fib);

                    array_shift($fib); // Remove first element (0)
                    $r = implode(", ", $fib);
                    echo "<span>Entrada: $n1</span><br/><span>Resultado: $r</span>";
                }else{
                    echo "<span>Não há saída ainda!</span>";
                }
            ?>
        </div>
    </div>


</html>