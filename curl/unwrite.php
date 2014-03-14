<?php
function matchphpurl($url){

preg_match('@^(?:http://)?([^/]+)@i',$url,$matches);
$host = $matches[1];

echo "host name is ".$host."</br>";
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is:{$matches[0]}\n";

}

matchphpurl("http://www.github.com/index.html")

?>
