<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    public function index(){
       
}
  public function check()
{  
                
                /**
                  * wechat php test
                  */
                
                //define your token
                define("TOKEN", "weixin");
      $this->valid();

}
    
                 public function valid()
                    {
                        $echoStr = $_GET["echostr"];
                
                        //valid signature , option
                        if($this->checkSignature()){
                            echo $echoStr;
                            exit;
                        }
     
                    }
                
                        
                    public function checkSignature()
                    {
                        // you must define TOKEN by yourself
                        if (!defined("TOKEN")) {
                            throw new Exception('TOKEN is not defined!');
                        }
                        
                        $signature = $_GET["signature"];
                        $timestamp = $_GET["timestamp"];
                        $nonce = $_GET["nonce"];
                                
                        $token = TOKEN;
                        $tmpArr = array($token, $timestamp, $nonce);
                        // use SORT_STRING rule
                        sort($tmpArr, SORT_STRING);
                        $tmpStr = implode( $tmpArr );
                        $tmpStr = sha1( $tmpStr );
                        
                        if( $tmpStr == $signature ){
                            return true;
                        }else{
                            return false;
                        }
                    }
1
<br>
}

?>
