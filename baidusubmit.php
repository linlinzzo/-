<?php
//本文件还是要插入(注意是插入)index.php，因为有相关的变量在index.php中。
$urls = array(
    $url,
);
//在下面这行的引号当中填入你的接口调用地址
$api = '在这边填你的地址';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
//这边会显示出接口调用的结果，如果放在PHP文件的末尾会影响网站的结构，所以最好加双斜杠变为注释，以便未来的时候开启。
echo $result;
