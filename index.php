<?php
require __DIR__ . '/vendor/autoload.php';

use Curl\Curl;

class Inery
{
    function __construct()
    {
        $this->curl = new Curl();
    }

    public function create($username, $ipAddress, $password)
    {
        $this->curl->setHeader('Host', 'api-testnet.inery.io');
        $this->curl->setHeader('Connection', 'keep-alive');
        $this->curl->setHeader('sec-ch-ua', '"Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"');
        $this->curl->setHeader('Accept', 'application/json, text/plain, */*');
        $this->curl->setHeader('Content-Type', 'application/json');
        $this->curl->setHeader('sec-ch-ua-mobile', '?0');
        $this->curl->setHeader('User-Agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36');
        $this->curl->setHeader('sec-ch-ua-platform', '"Windows"');
        $this->curl->setHeader('Origin', 'https://testnet.inery.io');
        $this->curl->setHeader('Sec-Fetch-Site', 'same-site');
        $this->curl->setHeader('Sec-Fetch-Mode', 'cors');
        $this->curl->setHeader('Sec-Fetch-Dest', 'empty');
        $this->curl->setHeader('Referer', 'https://testnet.inery.io/');
        $this->curl->setHeader('Accept-Encoding', 'gzip, deflate');
        $this->curl->setHeader('Accept-Language', 'id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7');
        $this->curl->post('https://api-testnet.inery.io/api/register', '{"account_name":"' . $username . '","server_ip":"' . $ipAddress . '","server_name":"' . $ipAddress . '","password":"' . $password . '","password_confirmation":"' . $password . '"}');

        if ($this->curl->error) {
            echo '[-] Error: Register - ' . $this->curl->error . "\n";
            exit;
        } else {
            $responseData = $this->curl->response;
            return $responseData;
        }
    }

    public function confirmWords($username, $words)
    {
        $this->curl->setHeader('Host', 'api-testnet.inery.io');
        $this->curl->setHeader('Connection', 'keep-alive');
        $this->curl->setHeader('sec-ch-ua', '"Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"');
        $this->curl->setHeader('Accept', 'application/json, text/plain, */*');
        $this->curl->setHeader('Content-Type', 'application/json');
        $this->curl->setHeader('sec-ch-ua-mobile', '?0');
        $this->curl->setHeader('User-Agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36');
        $this->curl->setHeader('sec-ch-ua-platform', '"Windows"');
        $this->curl->setHeader('Origin', 'https://testnet.inery.io');
        $this->curl->setHeader('Sec-Fetch-Site', 'same-site');
        $this->curl->setHeader('Sec-Fetch-Mode', 'cors');
        $this->curl->setHeader('Sec-Fetch-Dest', 'empty');
        $this->curl->setHeader('Referer', 'https://testnet.inery.io/');
        $this->curl->setHeader('Accept-Encoding', 'gzip, deflate');
        $this->curl->setHeader('Accept-Language', 'id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7');
        $this->curl->post('https://api-testnet.inery.io/api/confirm-words', '{"account_name":"' . $username . '","twelve_words":[' . $words . ']}');

        if ($this->curl->error) {
            echo '[-] Error: CONFIRMATION WORDS - ' . $this->curl->error . "\n";
            exit;
        } else {
            $responseData = $this->curl->response;
            return $responseData;
        }
    }

    public function claimToken($authorization)
    {
        $this->curl->setHeader('Host', 'api-testnet.inery.io');
        $this->curl->setHeader('Connection', 'keep-alive');
        $this->curl->setHeader('sec-ch-ua', '"Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"');
        $this->curl->setHeader('Accept', 'application/json, text/plain, */*');
        $this->curl->setHeader('Content-Type', 'application/json');
        $this->curl->setHeader('sec-ch-ua-mobile', '?0');
        $this->curl->setHeader('Authorization', 'Bearer ' . $authorization);
        $this->curl->setHeader('User-Agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36');
        $this->curl->setHeader('sec-ch-ua-platform', '"Windows"');
        $this->curl->setHeader('Origin', 'https://testnet.inery.io');
        $this->curl->setHeader('Sec-Fetch-Site', 'same-site');
        $this->curl->setHeader('Sec-Fetch-Mode', 'cors');
        $this->curl->setHeader('Sec-Fetch-Dest', 'empty');
        $this->curl->setHeader('Referer', 'https://testnet.inery.io/');
        $this->curl->setHeader('Accept-Encoding', 'gzip, deflate');
        $this->curl->setHeader('Accept-Language', 'id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7');
        $this->curl->post('https://api-testnet.inery.io/api/buy-tokens', '{"amount":50000}');

        if ($this->curl->error) {
            echo '[-] Error: CLAIM TOKEN - ' . $this->curl->error . "\n";
            exit;
        } else {
            $responseData = $this->curl->response;
            return $responseData;
        }
    }

    public function getName()
    {
        $this->curl->setHeader('Connection', 'keep-alive');
        $this->curl->setHeader('sec-ch-ua', '"Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"');
        $this->curl->setHeader('Accept', 'accept: application/json');
        $this->curl->setHeader('User-Agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36');
        $this->curl->setHeader('sec-ch-ua-platform', '"Windows"');
        $this->curl->setHeader('Sec-Fetch-Site', 'same-origin');
        $this->curl->setHeader('Sec-Fetch-Mode', 'cors');
        $this->curl->setHeader('Sec-Fetch-Dest', 'empty');
        $this->curl->setHeader('X-Audience', 'tiket.com');
        $this->curl->setHeader('X-Cookie-Session-V2', 'true');
        $this->curl->setHeader('X-Device-Id', 'web');
        $this->curl->setHeader('lang', 'id');
        $this->curl->setHeader('Accept-Encoding', 'gzip, deflate');
        $this->curl->setHeader('Content-Type', 'application/json');
        $this->curl->get('https://api.warifp.co/v1/name');

        if ($this->curl->error) {
            echo '[-] Error: Get Name - ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n\n";
        } else {
            $responseData = $this->curl->response;
            return $responseData;
        }
    }
}

function writeLog($location, $text, $config)
{
    $file = fopen($location, $config);
    fwrite($file, $text);
    fclose($file);
}

start:
$inery = new Inery();
$faker = Faker\Factory::create();
$env = Dotenv\Dotenv::createImmutable(__DIR__, '.env');
$env->load();

$username = strtolower($inery->getName()->data->name . $inery->getName()->data->name);
$username = substr($username, 0, 12);
$ipAddress = $faker->ipv4();
$password = $_ENV['PASSWORD'];

echo "[+] Username: " . $username . "\n";
echo "[+] IP Address: " . $ipAddress . "\n";
$register = $inery->create($username, $ipAddress, $password);
$register = json_decode($register);
if ($register->success) {
    echo "[+] Registration is successful\n";

    $words = str_replace(' ', '","', $register->data->twelve_words);
    $words = '"' . $words . '"';

    $confirm = $inery->confirmWords($username, $words);
    $confirm = json_decode($confirm);
    if ($confirm->success) {
        echo "[+] " . $confirm->msg . "\n";
        $authorization = $confirm->token;
        $claim = $inery->claimToken($authorization);
        $claim = json_decode($claim);
        if ($claim->success) {
            echo "[+] " . $claim->msg . " [" . $claim->data->amount . "]\n";
            
            echo "[+] Create account and claim tesnet tokens successfully\n";
            writeLog('logs/' . $username . ".txt", "ACCOUNT NAME: " . $username . "\nPASSWORD: " . $password . "\nWORDS: " . $register->data->twelve_words . "\nSERVER NAME: " . $confirm->data->server_name . "\nSERVER IP: " . $confirm->data->server_ip . "\nPUBLIC KEY: " . $confirm->keys->public_key . "\nPRIVATE KEY: " . $confirm->keys->private_key . "\nAUTHORIZATION: " . $authorization, "a+");
            echo "[+] Account save to [logs/" . $username . ".txt]\n\n";
        } else {
            echo "[-] Claim is failed - " . $claim->msg . "\n\n";
        }
    } else {
        echo "[-] Confirmation is failed - " . $confirm->msg . "\n\n";
    }
} else {
    echo "[-] Registration is failed - " . $register->msg . "\n\n";
}
goto start;
