<?php
// Copyright : W
function send($phone){
	$config['headers'] = explode("\n",'Host: www.airbnb.co.id
Connection: keep-alive
Content-Length: 66
Origin: https://www.airbnb.co.id
X-CSRF-Token: V4$.airbnb.co.id$oP0Y9kVuZ-0$rMnweKVyObb3-zOblCFBxerI6uCSo2LCZPOlMclmfNs=
User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; Redmi 4X Build/N2G47H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.91 Mobile Safari/537.36
Content-Type: application/x-www-form-urlencoded; charset=UTF-8
Accept: */*
Cache-Control: no-cache
X-Requested-With: XMLHttpRequest
Save-Data: on
Referer: https://www.airbnb.co.id/
Accept-Encoding: gzip, deflate, br
Accept-Language: en-US,en;q=0.9,id;q=0.8
Cookie: bev=1534255716_dhzYKerZB3T9Pf8i; jitney_client_session_id=f0bb6850-256c-49af-b0c8-07c77b026df1; jitney_client_session_created_at=1534255716; flags=268697600; 41698bf42=control; 3b689aa21=treatment; ftv=1534255719033; AMP_TOKEN=%24NOT_FOUND; _ga=GA1.3.982250051.1534255720; _gid=GA1.3.797209371.1534255720; cbkp=1; fbs=not_authorized; 9b88d9e4f=control; dbcfb34a2=control; 99f2e37da=treatment; sdid=; _csrf_token=V4%24.airbnb.co.id%24oP0Y9kVuZ-0%24rMnweKVyObb3-zOblCFBxerI6uCSo2LCZPOlMclmfNs%3D; li=1; _pt=1--WyI0YjY3MWE4ZTExZTI3OGE5NjJhMDQyN2YzNDk0ZGNjZjI2MmYzMjk2Il0%3D--4565f6593881cd2d2c5699f554ed6488cd8f1b03; _aat=0%7C66PEneHPVjz6n3Sr%2Foio9nTEPZByrIQfN4FDxzjG9f2YcQLc5A8N3ILXgbzTziXy; _user_attributes=%7B%22curr%22%3A%22IDR%22%2C%22guest_exchange%22%3A14624.102105%2C%22device_profiling_session_id%22%3A%221534255716--f079e9d05af444e5cb620ed6%22%2C%22giftcard_profiling_session_id%22%3A%221534255716--e824ce0b4bb33c20e373ca7c%22%2C%22reservation_profiling_session_id%22%3A%221534255716--4c07f78417a5d397a40d8e50%22%2C%22id%22%3A209493432%2C%22hash_user_id%22%3A%224b671a8e11e278a962a0427f3494dccf262f3296%22%2C%22eid%22%3A%22O3DvV4-P8T0EkKAcC7LRWw%3D%3D%22%2C%22num_msg%22%3A0%2C%22num_notif%22%3A2%2C%22num_alert%22%3A5%2C%22num_h%22%3A0%2C%22num_trip_notif%22%3A0%2C%22name%22%3A%22Putra%22%2C%22num_action%22%3A0%2C%22is_admin%22%3Afalse%2C%22can_access_photography%22%3Afalse%2C%22travel_credit_status%22%3Anull%2C%22referrals_info%22%3A%7B%22terms_and_conditions_link%22%3A%22%2Fhelp%2Farticle%2F2269%22%2C%22referrer_guest%22%3A%22Rp230%2C000%22%7D%7D; roles=0; _airbed_session_id=08bb403352baa465542ac41b3e318445; hli=1; jitney_client_session_updated_at=1534255932');
	$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.airbnb.co.id/phone_numbers/create");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $config['headers']);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "phone_number=$phone&phone_type=call&phone_number_country=ID");
        $asw = curl_exec($ch);
        curl_close($ch);
		echo $server_output."\n";
}
echo "Nomor (Pake 62 jangan 0)\nInput : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
