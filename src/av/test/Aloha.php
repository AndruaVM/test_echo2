<?php
namespace av\test;
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.07.2019
 * Time: 19:51
 */
class Aloha
{
    public function getOne(){

        return 1;
    }
}
echo (new Aloha())->getOne();