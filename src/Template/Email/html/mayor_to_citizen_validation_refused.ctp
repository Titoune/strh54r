<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Bonjour "). $user->fullname ?>,<br>
    <?= __("Votre maire n'a pas souhaité valider votre compte MairesetCitoyens.fr. Les raisons de ce refus peuvent être multiples."); ?>
</p>



<p style="font-family: arial; color:#292929; font-size:13px; margin-bottom:20px; margin-top:40px; text-align: left;">
    <?= $this->Html->link(__("Accéder au site"),
        [
            'prefix' => 'publicbundle',
            'controller' => 'Pages',
            'action' => 'home',
            '_full' => true
        ],
        [
            'title' => __("Connectez-vous"),
            "style"=>"text-decoration: none;font-family: arial; font-weight:600; color: #fff; padding: 10px 20px; background: #1f529b"
        ]); ?>
</p>

