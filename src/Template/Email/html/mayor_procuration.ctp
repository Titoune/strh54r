<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("{0} {1} vous a donné procuration pour administrer sa page sur MairesetCitoyens.fr.", [h($mayor->firstname), h($mayor->lastname)]) ?>
</p>
<p style="font-family: arial; color:#292929; font-size:14px; line-height:20px; margin-bottom:10px; text-align: left;">
    <?= __("Voici vos informations de connexion :") ?> <br>
    Identifiant : <?= $procuration->email ?> <br>
    Mot de passe : <?php if($password == null): echo "Votre mot de passe habituel sur MairesetCitoyens.fr"; else: echo $password; endif; ?>
</p>
<p style="font-family: arial; color:#292929; font-size:13px; margin-bottom:40px; margin-top:40px; text-align: center;">
    <?= $this->Html->link(__("Lien de connexion"),
        [
            'prefix' => 'publicbundle',
            'controller' => 'Users',
            'action' => 'login',
            '_full' => true
        ],
        [
            'title' => __("Lien de connexion"),
            "style"=>"text-decoration: none;font-family: arial; font-weight:600; color: #fff; padding: 10px 20px; background: #1f529b"
        ]); ?>
</p>
