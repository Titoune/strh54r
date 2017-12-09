<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Bonjour {0}", [$user->fullname])  ?>,<br>
    <?= __("nous sommes heureux de vous compter parmi les membres de MairesetCitoyens.fr, mais nous remarquons que vous n'avez pas encore rempli toutes vos informations personnelles.") ?><br><br>
    <?= __("Pour mieux vous servir, et afin que vous soyez en mesure de recevoir des alertes importantes de la part de votre maire, nous vous conseillons vivement de renseigner votre numéro de téléphone, ainsi que votre adresse postale."); ?><br>
</p>

<p style="font-family: arial; color:#292929; font-size:13px; margin-bottom:10px; margin-top:40px; text-align: center;">
    <?= $this->Html->link(__("Mettre à jour mes informations personnelles"),
        [
            'prefix' => 'citizenbundle',
            'controller' => 'Users',
            'action' => 'update',
            '_full' => true
        ],
        [
            'title' => __("Mettre à jour mes informations personnelles"),
            "style"=>"text-decoration: none;font-family: arial; font-weight:600; color: #fff; padding: 10px 20px; background: #1f529b; display:block; max-width: 300px;"
        ]); ?>
</p>
