function text() 
{	
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.openai.com/v1/completions",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS =>'{
	"model": "text-curie-001",
    "prompt": "Say Marhaban Ya Ramadan",
    "max_tokens": 1,
    "temperature": 0
}',
CURLOPT_HTTPHEADER => array(
"Content-Type: application/json",
"Authorization: Bearer ****"
),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

var_dump($response);
}
