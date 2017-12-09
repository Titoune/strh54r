<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?php if($mayor->sex == 'm') : ?>
        <?= __("Monsieur le maire {0} {1}", [h($mayor->firstname), h($mayor->lastname)]) ?>,<br>
    <?php else: ?>
        <?= __("Madame le maire {0} {1}", [h($mayor->firstname), h($mayor->lastname)]) ?>,<br>
    <?php endif; ?>
</p>
<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Votre mot de passe de connexion vient d'être réinitialisé.") ?>
</p>
<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Voici vos nouvelles informations de connexion :") ?> <br>
    <?= $mayor->email ?> / <?= $password ?>
</p>
