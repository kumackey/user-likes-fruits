<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

class GenderHelper extends Helper
{

    protected $_defaultConfig = [];

    function convertToManOrWomanFrom(int $number) :string
    {
      switch ($number) {
        case 1;
          return '男性';
          break;
        case 2;
          return '女性';
          break;
        default:
          return '';
          break;
      }
    }

}