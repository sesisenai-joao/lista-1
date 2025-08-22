<html>
    <div style="display: flex; flex-direction: row;">
        <div class="input" style="background-color: yellow; width: 100%; border: 1px solid black; margin-right: 2px;">
            <h2>Entrada</h2>
            <form action="18.php" method="post">
                <input type="text" name="field1">
                <input type="text" name="field2">
                <input type="text" name="field3">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div style="background-color: green; width:100%; border: 1px solid black; margin-right: 2px;" class="results">
            <h2>Saída</h2>
            <?php
                if(sizeof($_POST) > 0) {
                    $n1 = (int) $_POST["field1"];
                    $n2 = (int) $_POST["field2"];
                    $n3 = (int) $_POST["field3"];



                    $r = max(array($n1, $n2, $n3));
                    echo "<span>Entrada: $n1/$n2/$n3</span><br/><span>Resultado: $r</span>";
                }else{
                    echo "<span>Não há saída ainda!</span>";
                }
            ?>
        </div>
    </div>
</html>