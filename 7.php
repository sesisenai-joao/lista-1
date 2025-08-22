<html>
    <div style="display: flex; flex-direction: row;">
        <div class="input" style="background-color: yellow; width: 100%; border: 1px solid black; margin-right: 2px;">
            <h2>Entrada</h2>
            <form action="7.php" method="post">
                <input type="text" name="field1">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div style="background-color: green; width:100%; border: 1px solid black; margin-right: 2px;" class="results">
            <h2>Saída</h2>
            <?php
                if(sizeof($_POST) > 0) {
                    $n1 = (int) $_POST["field1"];

                    $soma_div = 0;

                    for($i = 1; $i <= $n1; $i++) {
                        if($n1 % $i == 0) {
                            $soma_div += $i;
                        }
                    }
                    $a = (($soma_div - $n1) == $n1);
                    $r = "Número perfeito?: " . ($a ? "Sim" : "Não") . ".";
                    echo "<span>Entrada: $n1</span><br/><span>Resultado: $r</span>";
                }else{
                    echo "<span>Não há saída ainda!</span>";
                }
            ?>
        </div>
    </div>


</html>