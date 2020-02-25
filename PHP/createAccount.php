<?php
    
    $auth_token = '59550a0e2b1a864a31bef962363e029f'; //your_auth_token
    //your_organization_id
    $org_id=652853630; 
    
    $account_data=array(
        "accountName"=>"Some Account Name",
        "email"=>"example@example.com",
        "website"=>"www.somesite.com"
    );
    
    $headers=array(
            "Authorization: $auth_token",
            "orgId: $org_id",
            "contentType: application/json; charset=utf-8",
    );
    
    $url="https://desk.zoho.com/api/v1/accounts";
    
    $account_data=(gettype($account_data)==="array")? json_encode($account_data):$account_data;
    
    $ch= curl_init($url);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch,CURLOPT_POST,TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$account_data); //convert ticket data array to json
    
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
