
<?php
// 시간 제한을 0으로 무한정 대기
set_time_limit (0);

$address = '192.168.0.182'; // 대기할 IP //
$port = 5123; // 접속할 PORT //

$socket = socket_create(AF_INET, SOCK_STREAM, 0); // TCP 통신용 소켓 생성 //
if ($socket === false) {
  echo "socket_create() 실패! 이유: " . socket_strerror(socket_last_error()) . "\n";
  echo "<br>";
} else {
  echo "socket 성공적으로 생성.\n";
  echo "<br>";
}
//comSocket.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)

//IP주소와 포트넘버를 소켓에 결합
//이 과정은 port가 열려 있는지 확인하고 넘어가는게 좋음
socket_bind($socket,$address,$port) or die('Could not bind to address');
//
socket_listen($socket,5);

$accept = socket_accept($socket);
if ($accept === false) {
  echo "socket_accept() 실패! 이유: " . socket_strerror(socket_last_error()) . "\n";
  echo "<br>";
} else {
echo "대기 성공적.\n";
echo "<br>";
}
socket_write($accept,"연결완료!\n ");
//echo "Server: welcome to my server!\n ";
$input = socket_read($accept, 1024) or die("Could not read from Socket\n");  // 소켓으로 부터 받은 REQUEST 정보를 $input에 지정 //
echo "<br>";

echo $input;  //REQUEST 정보 출력//
//$input = socket_read($accept,1024,PHP_NORMAL_READ);
//socket_write($accept,$input,strlen($input));
socket_close($accept);

?>
