<?php
    
    $auth_token = '59550a0e2b1a864a31bef962363e029f'; //your_auth_token
    //your_organization_id
    $org_id=652853630; 
    
    $headers=array(
            "Authorization: $auth_token",
            "orgId: $org_id",
            "contentType: application/json; charset=utf-8",
    );
    
    $params="limit=5&include=contacts,products"; //options as parameters
    
    $url="https://desk.zoho.com/api/v1/tickets?$params";
    
    $ch= curl_init($url);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch,CURLOPT_HTTPGET,TRUE);
    
    $response= curl_exec($ch);
    $info= curl_getinfo($ch);
    
    if($info['http_code']==200){
        echo "<h2>Request Successful, Response:</h2> <br>";
        echo $response;
    }
    else{
        echo "Request not successful. Response code : ".$info['http_code']." <br>";
        echo "Response : $response";
    }
    
    curl_close($ch);
    
?>
