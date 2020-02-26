<?php if (isset($message)) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><?= $message ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>
<h1>Authentification :</h1>
<fieldset>
    <form method="post">
        <p>
            <label for="uti_nom">votre Dénomination ou Nom : </label>
            <input type="text" name="uti_nom" id="uti_nom">
        </p>
        <p>
            <label for="uti_mdp">votre mot de passe : </label>
            <input type="password" name="uti_mdp" id="uti_mdp">
        </p>
        <p class="textCenter"><input type="submit" value="Envoyer" name="btsubmit"  class="btn btn-success"/></p>
    </form>
</fieldset>