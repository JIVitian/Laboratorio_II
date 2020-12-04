<?php
    require '../html/cabecera.html';
    require '../html/menu.html';
?>

    <main>
        <h2>Consulta sobre Preferencia</h2>
        <form action="sesion.php" method="POST" class="consulta">
            <label for="num">Número de DNI</label>
            <input type="text" name="dni" id="num" maxlength="8">
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>