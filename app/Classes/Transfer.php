<?php
namespace App\Classes;


/**
 * Description of Transfer
 *
 * @author daniel
 */
class Transfer extends \App\Transfer{
    //put your code here
    private $id =1;



    public function transfere( $sender_id , $receiver_id , $amount){
        $status = 0;

       // $hash = "2018-256-1220-0-1-200-1-0";

        $sender = \App\User::find($sender_id);
        $receiver = \App\User::find($receiver_id);

        $data_hora =  date('Y-z-his-');
        $operacao_status = "-1-0";
        $hash = $data_hora.$sender->id."-".$receiver->id."-".$amount.$operacao_status;


        if($sender->wallet < $amount){
            $msg = "O saldo é insuficiente";
        }else{
            $msg ="Transferencia realizada com sucesso";
            $sender->wallet=$sender->wallet-$amount;
            $receiver->wallet=$receiver->wallet+$amount;
            $sender->update();
            $receiver->update();
            $status = 1;
        }

        return array('status' => $status , 'msg' => $msg , 'wallet' => $sender->wallet);
    }

    public function pagar( $sender_id , $shop_id , $amount){
        $status = 0;


       // $hash = "2018-256-1220-0-1-200-1-0";

        $sender = \App\User::find($sender_id);
        $receiver = \App\Shop::find($shop_id);

        $data_hora =  date('Y-z-his-');
        $operacao_status = "-1-0";
        $hash = $data_hora.$sender_id."-".$shop_id."-".$amount.$operacao_status;


        if($sender->wallet < $amount){
            $msg = "O saldo é insuficiente";
        }else{
            $msg ="Transferencia realizada com sucesso";
            $sender->wallet=$sender->wallet-$amount;
            $receiver->total=$receiver->total+$amount;
            $sender->update();
            $receiver->update();
            $status = 1;
        }

        return array('status'=>$status , 'msg'=>$msg , 'wallet' => $sender->wallet);
    }

    public function hashear($hash)
    {
    	//ano-dianumero-horaminuto-sender-receiver-amount-operacao-status
    	$transacao['hash'] = md5($hash);
        return $transacao;
    }
}
