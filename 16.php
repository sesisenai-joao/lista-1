<html>
    <div style="display: flex; flex-direction: row;">
        <div class="input" style="background-color: yellow; width: 100%; border: 1px solid black; margin-right: 2px;">
            <h2>Entrada</h2>
            <form action="16.php" method="post">
                <input type="text" name="field1" value="Nome">
                <input type="text" name="field2" value="Idade">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div style="background-color: green; width:100%; border: 1px solid black; margin-right: 2px;" class="results">
            <h2>Saída</h2>
            <?php
                if(sizeof($_POST) > 0) {
                    $n2 = (int) $_POST["field2"];

                    $r = ($n2 >= 16 ? "Pode votar" : "Não pode votar");
                    echo "<span>Entrada: $n2 anos</span><br/><span>Resultado: $r</span>";
                }else{
                    echo "<span>Não há saída ainda!</span>";
                }
            ?>
        </div>
    </div>
</html>