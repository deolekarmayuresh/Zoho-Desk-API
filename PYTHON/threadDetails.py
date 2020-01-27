import requests

auth_token="59550a0e2b1a864a31bef962363e029f" #YOUR_AUTH_TOKEN
org_id="652853630" #YOUR_ORGANISATION_ID

ticket_id="215666000000137001"; #TICKET_ID_OF_THREAD
thread_id="215666000000074216"; #THREAD_ID

headers={
    "Authorization":auth_token,
    "orgId":org_id,
    "contentType": "application/json; charset=utf-8"
}

request=requests.get('https://desk.zoho.com/api/v1/tickets/'+ticket_id+'/threads/'+thread_id, headers=headers)

if ticket_id and thread_id:

    if request.status_code == 200:
        print "Request Successful,Response:"
        print request.content
    else:
        print "Request not successful,Response code ",request.status_code," \nResponse : ",request.content;

else:
    print "ERROR : ",
    if not ticket_id: print "Ticket ID ",
    if not thread_id: print "Thread ID ",
    print "is missing."
