<?php namespace Werkzeugh\Cartengine\Repositories;


class OrderRepository implements \Werkzeugh\Cartengine\Interfaces\OrderRepositoryInterface {


  function getOrderByOrderNr($ordernr)
  {

    $nr=$ordernr;

    return Array(
      'nr'=>$nr,
      'name'=>"ich bin die Order Nr {$nr}",
      );

  }


}



