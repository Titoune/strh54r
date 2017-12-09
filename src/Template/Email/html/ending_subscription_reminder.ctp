<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Bonjour {0}", [$subscription->administrator->fullname]) ?>,<br>
    <?= __("Le contrat de la ville {0} se termine dans {1} jours sur MairesetCitoyens.fr.", [$subscription->city->name, $days]); ?>
</p>

<p style="font-family: arial; color:#292929; font-size:13px; margin-bottom:20px; margin-top:40px; text-align: center;">
    <?= $this->Html->link(__("Accès à l'admin"),
        [
            'prefix' => 'adminbundle',
            'controller' => 'Cities',
            'action' => 'read',
            '_full' => true, $subscription->city->id
        ],
        [
            'title' => __("Accès à l'admin"),
            "style" => "text-decoration: none;font-family: arial; font-weight:600; color: #fff; padding: 10px 20px; background: #1f529b"
        ]); ?>
</p>
