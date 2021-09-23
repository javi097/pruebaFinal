<?php

namespace Hiberus\Garcia\Plugin\Mark;

use Hiberus\Garcia\Model\Examen;


class MarkPlugin
{

    public function afterGetMark(Examen $subject, $result){

        if($subject->getData('mark')<5){
            $subject->setMark(4.9);
            $result=$subject->getData('mark');
            //dd($result);die;
        }
        return $result;

    }

}