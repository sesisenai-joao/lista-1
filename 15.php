<html>
    <div style="display: flex; flex-direction: row;">
        <div class="input" style="background-color: yellow; width: 100%; border: 1px solid black; margin-right: 2px;">
            <h2>Entrada</h2>
            <form action="15.php" method="post">
                <input type="text" name="field1" value="Massa">
                <input type="text" name="field2" value="Altura (m)">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div style="background-color: green; width:100%; border: 1px solid black; margin-right: 2px;" class="results">
            <h2>Saída</h2>
            <?php
                if(sizeof($_POST) > 0) {
                    $n1 = (int) $_POST["field1"];
                    $n2 = (double) $_POST["field2"];

                    $imc = $n1 / ($n2 * $n2);
                    $r = $imc <= 17 ? "Muito abaixo do Peso" : ($imc <= 18.49 ? "Abaixo do Peso" : ($imc <= 24.99 ? "Peso Normal" : ($imc <= 29.99 ? "Acima do Peso" : ($imc <= 34.99 ? "Obesidade I" : ($imc <= 39.99 ? "Obesidade II (severa)" : "Obesidade III (mórbida)")))));
                    $r = "IMC: $imc - $r";
                    echo "<span>Entrada: $n1 kg e $n1 m</span><br/><span>Resultado: $r</span>";
                }else{
                    echo "<span>Não há saída ainda!</span>";
                }
            ?>
        </div>
    </div>
</html>