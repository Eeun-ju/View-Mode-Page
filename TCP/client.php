<?php
 //The Client
error_reporting(E_ALL);
set_time_limit (0);

$address = "192.168.0.9";                                                 // 접속할 IP //
$port = 5123;                                                                         // 접속할 PORT //
$arr = [];
 $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP); // TCP 통신용 소켓 생성 //
 if ($socket === false) {
     echo "socket_create() 실패! 이유: " . socket_strerror(socket_last_error()) . "\n";
     echo "<br>";
 }
else {
     echo "socket 성공적으로 생성.\n";
     echo "<br>";
 }

echo "다음 IP '$address' 와 Port '$port' 으로 접속중...";
echo "<BR>";
$result = socket_connect($socket, $address, $port);           // 소켓 연결 및 $result에 접속값 지정 //
 if ($result === false) {
     echo "socket_connect() 실패.\nReason: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
  echo "<br>";
 } else {
     echo "다음 주소로 연결 성공 : $address.\n";
  echo "<br>";
 }
 echo "<br>";
 echo "<br>";
 echo "<br>";
 $j = file("savedfile.txt");
 $doc_data = implode(",",$j);
// echo $doc_data;
//$i = "Client : hi";  //보내고자 하는 전문 //
//echo "서버로 보내는 전문 : $i|종료|.\n";
echo "<br>";
echo "<br>";
socket_write($socket, $doc_data, strlen($doc_data)); // 실제로 소켓으로 보내는 명령어 //
echo "<br>";
//socket_write($socket, $i, strlen($i)); // 실제로 소켓으로 보내는 명령어 //
echo "<br>";
$input = socket_read($socket, 1024) or die("Could not read from Socket\n");  // 소켓으로 부터 받은 REQUEST 정보를 $input에 지정 //
echo "<br>";

echo $input;  //REQUEST 정보 출력//
socket_close($socket);
 ?>
