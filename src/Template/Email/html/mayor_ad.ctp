<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("{0} {1} vient de faire une réclamation concernant une publicité", [h($user->firstname), h($user->lastname)]) ?>
</p>
<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Voici les informations de la publicité concernée :") ?> <br>
    Titre : <?= $ad->ad->title ?> <br>
    Annonceur : <?= $ad->ad->ad_client->company ?><br>
    Date de début : <?= $ad->ad->date_start ?>
</p>
<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Voici le message du maire :") ?> <br>
    <?= $message ?>
</p>
<p style="font-family: arial; color:#292929; font-size:13px; margin-bottom:40px; margin-top:40px; text-align: center;">
    <?= $this->Html->link(__("Connexion"),
        [
            'prefix' => 'publicbundle',
            'controller' => 'Users',
            'action' => 'login',
            '_full' => true
        ],
        [
            'title' => __("Connexion"),
            "style"=>"text-decoration: none;font-family: arial; font-weight:600; color: #fff; padding: 10px 20px; background: #1f529b"
        ]); ?>
</p>
