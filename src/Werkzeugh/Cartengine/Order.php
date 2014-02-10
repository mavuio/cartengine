<?php namespace Werkzeugh\Cartengine;



class DbOrder extends Eloquent implements \Werkzeugh\Cartengine\Interfaces\OrderInterface
{



    function getOrderNr()
    {
      return $this->ordernr;
    }


}

