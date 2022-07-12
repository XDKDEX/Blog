<?php
$data = file_get_contents('php://input');
system("msg %username% /time:10 ".$data."");
if(preg_match('/[Live]+/', $data)){
    $data = substr($data, 5, 5);
    $json_source = file_get_contents('./'.$data.'.json');
    $json = json_decode($json_source, true); 
    $json["Live"]= $json['Live']+1;
    $json = json_encode($json);
    file_put_contents("".$data.".json",$json);
}else if(preg_match('/[Read]+/', $data)){


}


?>