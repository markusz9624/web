<!DOCTYPE html>
<meta charset="UTF-8">
<h2>Bel�p�s</h2>
<form action="<?= SITE_ROOT ?>beleptet" method = "post">
    <fieldset>
    <label for="login">Felhaszn�l�:</label><input type="text" name="login" id="login" required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
    <label for="password">Jelsz�:</label><input type="password" name="password" id="password" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
    <input type="submit" value="K�ld�s">
    </fieldset>
</form>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>

   
    <h3>Regisztr�lja mag�t, ha m�g nem felhaszn�l�!</h3>
    <form action = "<?= SITE_ROOT ?>=regisztral" method = "post">
      <fieldset>
        <legend>Regisztr�ci�</legend>
        <br>
        <input type="text" name="vezeteknev" placeholder="vezet�kn�v" required><br><br>
        <input type="text" name="utonev" placeholder="ut�n�v" required><br><br>
        <input type="text" name="felhasznalo" placeholder="felhaszn�l�i n�v" required><br><br>
        <input type="password" name="jelszo" placeholder="jelsz�" required><br><br>
        <input type="submit" name="regisztracio" value="Regisztr�ci�">
        <br>&nbsp;
      </fieldset>
    </form>
