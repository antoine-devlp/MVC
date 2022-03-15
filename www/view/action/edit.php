<form action="" method="get" style="display: flex; flex-direction:column; margin:15px;">
    <input type="hidden" name="entity" value="projet">
    <input type="hidden" name="action" value="edit">
    <label style="margin-top: 15px;">Code :</label>
    <input type="number" name="code" value="<?php echo $_GET['code']?>" readonly="readonly">
    <label style="margin-top: 15px;">Nom :</label>
    <input type="text" name="nom" value="<?php foreach ($nom as $key) { echo $key['nom'];}?>">
    <input type="hidden" name="commit">
    <input type="submit" value="Confirmer">
</form>