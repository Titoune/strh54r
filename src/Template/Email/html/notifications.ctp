<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">

    <?= __("Bonjour {0}", $user->has('mayor') ? ($user->sex == 'f' ? 'Madame le maire ' : 'Monsieur le maire ' . $user->fullname) : $user->fullname) ?>
    ,<br>
    <?= __("Vous avez {0} nouvelle(s) notification(s):", $notification_count) ?>
</p>

<?php foreach ($notifications AS $k => $n) : ?>
    <p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
        <?= ($k == 'mayor' ? __("Vos notifications maires") : __("Vos notifications citoyennes")) ?>
    </p>

    <?php foreach ($n AS $k => $p) : ?>
        <?php if ($k == 0) : ?>
            <?= $p->city->name ?>
        <?php else : ?>
            <?php if ($p->city_id != $n[$k - 1]['city_id']) : ?>
                <?= $p->city->name ?>
            <?php endif ?>
        <?php endif ?>

        <p style="font-family: arial; color:#292929; font-size:13px; margin-bottom:10px; margin-top:10px; text-align: left;">
            <?= $this->Html->link($p->published->nice() . ' ' . str_replace('{0}', $p->sender, $p->notification_type->email_message),
                [
                    'prefix' => $p->notification_type->prefix,
                    'controller' => $p->notification_type->controller,
                    'action' => $p->notification_type->action, $p->foreign_id, $p->anchor_id,
                    '_full' => true
                ],
                [
                    'title' => __("Voir la notification"),
                    "style" => "text-decoration: none;font-family: arial; color: #1f529b; font-weight: bold"
                ]);
            ?>
        </p>


    <?php endforeach ?>
<?php endforeach ?>

<p style="font-family: arial; color:#292929; font-size:13px; margin-bottom:10px; margin-top:40px; text-align: left;">
    <?= $this->Html->link(__("Voir toutes les notifications"),
        [
            'prefix' => 'publicbundle',
            'controller' => 'Users',
            'action' => 'login',
            '_full' => true
        ],
        [
            'title' => __("Voir toutes les notifications"),
            "style" => "text-decoration: none;font-family: arial; font-weight:600; color: #fff; padding: 10px 20px; background: #1f529b"
        ]); ?>
</p>
