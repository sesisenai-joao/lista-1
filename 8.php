<html>
    <div style="display: flex; flex-direction: row;">
        <div class="input" style="background-color: yellow; width: 100%; border: 1px solid black; margin-right: 2px;">
            <h2>Entrada</h2>
            <form action="8.php" method="post">
                <input type="text" name="field1">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div style="background-color: green; width:100%; border: 1px solid black; margin-right: 2px;" class="results">
            <h2>Saída</h2>
            <?php
                if(sizeof($_POST) > 0) {
                    $n1 = (int) $_POST["field1"];

                    $ct = 0;

                    $s = 0;
                    while($s != $n1) {
                        $s++;
                        if($s % 2 == 0) $ct++;
                    }

                    $r = "Existem $ct números pares entre 1 e $n1.";
                    echo "<span>Entrada: $n1</span><br/><span>Resultado: $r</span>";
                }else{
                    echo "<span>Não há saída ainda!</span>";
                }
            ?>
        </div>
    </div>


</html>