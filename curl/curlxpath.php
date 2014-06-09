<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<?php
$target_url = "http://www.163trade.com";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$target_url);
curl_setopt($ch, CURLOPT_FAILONERROR, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$html = curl_exec($ch);

if (!$html) {
	echo "<br />cURL error number:" .curl_errno($ch);
	echo "<br />cURL error:" . curl_error($ch);
	exit;
}
//创建一个DomDocument对象，用于处理一个HTML
$dom = new DOMDocument();
//从一个字符串加载HTML
@$dom->loadHTML($html);
//使该HTML规范化
$dom->normalize();

//用DOMXpath加载DOM，用于查询
$xpath = new DOMXPath($dom);
#获取所有的a标签的地址
$hrefs = $xpath->evaluate("/html/body//a//@href");

for ($i = 0; $i < $hrefs->length; $i++) {
	$href = $hrefs->item($i);
	$linktext = $href->nodeValue;
	echo $linktext;
	echo "<BR>";

}
?>
