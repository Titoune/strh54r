<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Bonjour "). $user->fullname ?>,<br>>
    <?= __("Nous vous remercions d'avoir créé un compte sur MairesetCitoyens.fr."); ?><br>
</p>


<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Votre maire souhaite valider manuellement les inscriptions de chacun de ses administrés. Afin qu'il puisse valider votre compte, merci de cliquer sur le lien ci-dessous.") ?>
</p>


<p style="font-family: arial; color:#292929; font-size:13px; margin-bottom:20px; margin-top:40px; text-align: center;">
    <?= $this->Html->link(__("Confirmer mon compte"),
        [
            'prefix' => 'publicbundle',
            'controller' => 'Auth',
            'action' => 'redirectUserRegistration',
            '_full' => true, $user->email, $user->token
        ],
        [
            'title' => __("Confirmer mon compte"),
            "style"=>"text-decoration: none;font-family: arial; font-weight:600; color: #fff; padding: 10px 20px; background: #1f529b"
        ]); ?>
</p>

<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Votre maire validera votre compte dans les meilleurs délais.") ?><br><br>
    <?= __("Pour rappel, voici vos informations de connexion :"); ?>
</p>

<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Votre identifiant:") ?>
    <?= $user->email ?> / <?= $password ?>
</p>