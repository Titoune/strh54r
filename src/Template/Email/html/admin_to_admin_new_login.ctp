<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Cher partenaire,"); ?>
</p>
<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Un administrateur a modifié vos identifiants de connexion.") ?>
</p>
<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Voici vos nouveaux identifiants :") ?>
    <br>
    Login : <?= $administrator->login ?>
    <br>
    Mot de passe : <?= $password ? $password : __("Votre mot de passe habituel") ?>
</p>