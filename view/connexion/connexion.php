<form method="post" action="controler/connexion/connexion.php">
    <input type="hidden" name="operation" value="connexion">
    <label>Identifiant : </label>
      <input type='text' name='pseudo' maxlength=12 size=12 required /><br>
      <label>Mot de passe : </label>
      <input type='password' name='mdp' maxlength=12 size=12 required /><br>
      <br>
      <input type='submit' value='Valider' />
</form>
