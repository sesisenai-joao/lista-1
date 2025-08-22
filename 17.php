<html>
    <div style="display: flex; flex-direction: row;">
        <div class="input" style="background-color: yellow; width: 100%; border: 1px solid black; margin-right: 2px;">
            <h2>Entrada</h2>
            <form action="17.php" method="post">
                <input type="text" name="field1" value="D">
                <input type="text" name="field2" value="M">
                <input type="text" name="field3" value="A">
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



                    $r = (checkdate($n2, $n1, $n3) ? "Data válida" : "Data inválida");
                    echo "<span>Entrada: $n1/$n2/$n3</span><br/><span>Resultado: $r</span>";
                }else{
                    echo "<span>Não há saída ainda!</span>";
                }
            ?>
        </div>
    </div>
</html>