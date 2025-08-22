<html>
    <div style="display: flex; flex-direction: row;">
        <div class="input" style="background-color: yellow; width: 100%; border: 1px solid black; margin-right: 2px;">
            <h2>Entrada</h2>
            <form action="12.php" method="post">
                <input type="text" name="field1">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div style="background-color: green; width:100%; border: 1px solid black; margin-right: 2px;" class="results">
            <h2>Saída</h2>
            <?php
                if(sizeof($_POST) > 0) {
                    $n1 = $_POST["field1"];

                    $vog = 0;

                    foreach(count_chars($n1, 1) as $i => $val) {
                        if(chr($i) == 'a' || chr($i) == 'e' || chr($i) == 'i' || chr($i) == 'o' || chr($i) == 'u') $vog+=$val;
                    }
                    $r = $vog;
                    echo "<span>Entrada: $n1</span><br/><span>Resultado: $r vogais</span>";
                }else{
                    echo "<span>Não há saída ainda!</span>";
                }
            ?>
        </div>
    </div>


</html>