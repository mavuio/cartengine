<?php namespace Werkzeugh\Cartengine\Interfaces;


interface OrderRepositoryInterface{


  function getOrderByOrderNr($ordernr);
  function getOrderByTransactionId($transaction_id);

  function createNewOrderNr();

  function addOrder(array $cart);



}
