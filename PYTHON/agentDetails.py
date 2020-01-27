import requests

auth_token="59550a0e2b1a864a31bef962363e029f" #YOUR_AUTH_TOKEN
org_id="652853630" #YOUR_ORGANISATION_ID

agent_id="215666000000074005";

headers={
    "Authorization":auth_token,
    "orgId":org_id,
    "contentType": "application/json; charset=utf-8"
}

request=requests.get('https://desk.zoho.com/api/v1/agents/'+agent_id, headers=headers)

if agent_id:

    if request.status_code == 200:
        print "Request Successful,Response:"
        print request.content
    else:
        print "Request not successful,Response code ",request.status_code," \nResponse : ",request.content;

else:
    print "Agent ID is missing"
