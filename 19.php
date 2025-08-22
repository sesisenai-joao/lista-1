<html>
    <div style="display: flex; flex-direction: row;">
        <div class="input" style="background-color: yellow; width: 100%; border: 1px solid black; margin-right: 2px;">
            <h2>Entrada</h2>
            <form action="19.php" method="post">
                <input type="password" name="field1">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div style="background-color: green; width:100%; border: 1px solid black; margin-right: 2px;" class="results">
            <h2>Saída</h2>
            <?php
                if(sizeof($_POST) > 0) {
                    $n1 = $_POST["field1"];

                    $forte = true;

                    if(strlen($n1) < 8 || !preg_match("#[0-9]+#", $n1) || !preg_match("#[a-zA-Z]+#", $n1)) $forte = false; // https://stackoverflow.com/questions/10752862/password-strength-check-in-php
                    
                    $r = ($forte ? "Senha forte" : "Senha fraca");

                    echo "<span>Entrada: $n1</span><br/><span>Resultado: $r</span>";
                }else{
                    echo "<span>Não há saída ainda!</span>";
                }
            ?>
        </div>
    </div>


</html>