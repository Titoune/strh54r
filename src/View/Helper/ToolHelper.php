<?php
namespace App\View\Helper;

use Cake\View\Helper;


class ToolHelper extends Helper
{

    public $helpers = array('Html');


    //******************************
    //******* FONCTIONS DATE *******
    //******************************

    public function datefr($date)
    {
        if ($date)
            return $date->format('d/m/Y');
        else
            return false;
    }

    public function datetimefr($date)
    {
        if ($date)
            return $date->format('d/m/Y h:i:s');
        else
            return false;
    }


    //******************************
    //****** FONCTIONS PRIX ******
    //******************************
    public function ht($prixttc)
    {
        $ht = round($prixttc / (1 + (TVA / 100)), 2);
        return $ht;
    }

    public function ttc($prixht)
    {
        $coef = 100 / (100 + TVA);
        return round($prixht / $coef, 2);
    }

    public function tva($prixttc)
    {
        $ht = round($prixttc / (1 + (TVA / 100)), 2);
        return round($prixttc - $ht, 2);
    }



    //******************************
    //****** FONCTIONS Divers ******
    //******************************
    public function truefalse($v)
    {
        if ((empty($v)) || ($v == 0))
            return '<i class="fa fa-times"></i>';
        else
            return '<i class="fa fa-check"></i>';
    }


}