<?php namespace Werkzeugh\Cartengine\Models;



class DbOrder extends \Illuminate\Database\Eloquent\Model implements \Werkzeugh\Cartengine\Interfaces\OrderInterface
{

    protected $table = 'orders';

     protected $guarded = array('id','created_at','updated_at','transaction_id','order_nr','status','payment_status');


    function getOrderNr()
    {
      return $this->order_nr;
    }

     function getTransactionId()
    {
      return $this->transaction_id;
    }


    public function add2Log($msg,$data=NULL)
    {

        $data2log=Array();
        $data2log['time']=Date('Y-m-d H:i:s');
        $data2log['msg']=$msg;
        $data2log['ip']=$_SERVER['REMOTE_ADDR'];
        $data2log['url']=$_SERVER['REQUEST_URI'];

        if($data)
            $data2log['data']=$data;

        $json=json_encode($data2log);
        $this->log_json.="\n^^^\n".$json;
        $this->save();
        return TRUE;
    }

}

