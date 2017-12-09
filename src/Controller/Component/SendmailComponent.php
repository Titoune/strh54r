<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Mailer\Email;


class SendmailComponent extends Component
{
    // ********************************
    // Mails à destination des citoyens
    // ********************************

    public function citizenregistration($user, $passwordclear)
    {
            $email = new Email('default');
            if ($email->setEmailFormat('html')
                ->setAttachments([
                    'manuel-utilisation-citoyen.pdf' => [
                        'file' => 'manuel-utilisation-citoyen.pdf',
                        'mimetype' => 'application/pdf',
                    ]
                ])
                ->setTo($user->email)
                ->setSubject(__("MairesetCitoyens.fr - Création de votre compte"))
                ->setTemplate('citizen_registration')
                ->setViewVars(['user' => $user, 'password' => $passwordclear])
                ->send()
            ) {
                return true;
            } else {
                return false;
            }

    }





    public function newsletterRegistration($email)
    {
        (new Email('default'))->setEmailFormat('html')
            ->setTo($email)
            ->setSubject(__('MairesetCitoyens.fr - Inscription à la newsletter'))
            ->setTemplate('newsletter_registration')
            ->setViewVars(['email' => $email])
            ->send();
    }

    // ******************************
    // Mails signalements
    // ******************************
    public function signalingsend($fullname, $mail, $signaling, $city, $pictures){

        $email = new Email('default');
        $email->setEmailFormat('html')
            ->setTo($mail)
            ->setSubject(__("MairesetCitoyens.fr - Nouveau signalement sur la commune"))
            ->setTemplate('signaling')
            ->setViewVars(['fullname' => $fullname, 'signaling' => $signaling, 'city' => $city, 'pictures' => $pictures])
            ->send();

        return true;
    }

    // ******************************
    // Mails à destination des Maires
    // ******************************


    // ***************************************
    // Mails à destination des administrateurs
    // ***************************************

    // ***************************************
    // Mails communs
    // ***************************************
    public function notificationloginattempts($user){
        $email = new Email('default');
        $email->setEmailFormat('html')
            ->setTo($user->email)
            ->setSubject(__('MairesetCitoyens.fr - Votre compte est bloqué'))
            ->setTemplate('notification_login_attempts')
            ->setViewVars(['object' => $user])
            ->send();
        return true;
    }


    public function generatepassword($user)
    {
        $email = new Email('default');
        $email->setEmailFormat('html')
            ->setTo($user->email)
            ->setSubject(__('MairesetCitoyens.fr - Modification de votre mot de passe'))
            ->setTemplate('generate_password')
            ->setViewVars(['user' => $user])
            ->send();
        return;
    }


}
