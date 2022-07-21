<?php
$data = file_get_contents('php://input');
//ACT
if(preg_match('/\b[Live]+\b/', $data)){
    $data = substr($data, 5, 5);
    $json_source = file_get_contents('./'.$data.'.json');
    $json = json_decode($json_source, true); 
    $json["Live"]= $json['Live']+1;
    $json = json_encode($json);
    file_put_contents("".$data.".json",$json);
}else if(preg_match('/\b[Read]+\b/', $data)){
    $data = substr($data, 5, 5);
    $json_source = file_get_contents('./'.$data.'.json');
    $json = json_decode($json_source, true); 
    $json["Read"]= $json['Read']+1;
    $json = json_encode($json);
    file_put_contents("".$data.".json",$json);
}
//Reply
if(preg_match('/\b[Reply]+\b/', $data)){




}else if(preg_match('/\b[Reply]+\b/', $data)){



}



?>