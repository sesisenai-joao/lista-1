<html>
    <div style="display: flex; flex-direction: row;">
        <div class="input" style="background-color: yellow; width: 100%; border: 1px solid black; margin-right: 2px;">
            <h2>Entrada</h2>
            <form action="9.php" method="post">
                <input type="text" name="field1">
                <input type="text" name="field2">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div style="background-color: green; width:100%; border: 1px solid black; margin-right: 2px;" class="results">
            <h2>Saída</h2>
            <?php
                if(sizeof($_POST) > 0) {
                    $n1 = $_POST["field1"];
                    $n2 = $_POST["field2"];

                    $min = min(array($n1, $n2));
                    $max = max(array($n1, $n2));

                    $curr = $min + 1;
                    $soma = 0;
                    while($curr < $max) {
                        $soma += $curr;
                        $curr++;
                    }

                    $r = $soma;
                    echo "<span>Entrada: $n1 e $n2</span><br/><span>Resultado: $r</span>";
                }else{
                    echo "<span>Não há saída ainda!</span>";
                }
            ?>
        </div>
    </div>


</html>