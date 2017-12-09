<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Vous venez de modifier votre mot de passe.") ?>
</p>
<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Pour rappel, voici vos nouvelles informations de connexion :") ?> <br>
    <?= $user->email ?> / <?= $user->password1 ?>
</p>