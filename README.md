## View-Mode-Page  
### 💻큐램 학생 인턴 프로젝트💻
  |구분|내용|
|------|---|
  |프로젝트 | **View Mode 선택 페이지 만들기** <br> 1. Login<br> 2. View mode<br> 3. TCP/IP communication  |
  |프로젝트 기간 | 2019 하계 방학 7월(약 한달) |

1. Login   
<figure>
    <img src="./images/login.PNG" alt="Login page" width = "400" height= "400">
</figure>

<br> ID와 PW를 입력한 후 초록색 Login 버튼을 누르면 submit 된다. 주어진 폼은 login_page.php에서 action되고, 로그인 페이지에서 입력되는 id와 pw는 userid, userpw에 값이 저장되어 login_page.php로 넘어간다. <br> 로그인 화면은 로그인 후 다시 돌아갈 필요가 없다.  
  
    <script> window.history.forward()   #사용하여 다시 넘어올 수 없는 페이지로 만들었다.
    
    
2. View mode 
<div align="center">
  <div style="display: flex;">
    <img src="./images/view1.PNG" alt="view mode #1" width = "400" height= "300">
    <img src="./images/view2.PNG" alt="view mode #2" width = "500" height= "200">
</div>
  </div>
<br> 넘어존 View mode화면에서 6개의 mode 중 하나를 선택한다. button형식 메뉴를 만들고 페이지를 이동하도록한다. view1 ~ view5 같은 크기에 프레임(1x1, 2x2, 3x3, etc)이고, view6는 사용자가 원하는대로 프레임을 선택하는 custom 메뉴이다.<br> view 모드를 선택하면 다음 페이지로 이동하고, view_숫자는 카메라 수의 제한을 의미한다. 카메라 선택 후 확인 버튼을 누르면 팝업창에 어떤 카메라를 선택했는지 바로 출력이 된다. custom 메뉴에서는 21개의 선택지 중 하나를 선택하여 카레라를 선택해야 한다. 예를 들어 카메라 9대를 선택해야 하는 Custom20을 선택했을 경우 9대를 누른 순서대로 출력된다.


    <script>  # viewmode 1 페이지 코드 
    var counter = 0; arr = new Array();
    arr[0] = 'View_1';
    
    function save(cam){
      arr.push(cam);
      count++;
      if(counter > 1){
        alert('1대의 카메라만 선택하세요');
        for(i=0;i<my_form.Camera.length;i++){
          my_form.Camera[i].checked = false;
        }
       arr = new Array();
       arr[0] = 'View_1':
       count = 0;
      }
    }
    
    function savefile(){
      var countent = arr.join(",");
      uriContent = "data;text/plain," + encodeURIComponent(content);
      document.getElementById('dlink').innerHTML = "<a href" + uriContent + "dowload=\"savefile.txt\">;
     }
     </script>
  
  
3. TCP/IP Socket communication <br> 
  연결을 대기하는 ip에서 이미 열어둔 포트넘버 5123사용. 아래 순서대로 socket 함수를 실행시킨다. socket이 제대로 생성되었고, bind 되었는지 확인하기 위해 echo를 이용한다.   
  함수 사용 순서 : socket_create() 함수를 이용해 TCP socket 생성 => bind() 함수를 이용해 소켓에 포트번호 연결
=> listen()함수를 이용해 클라이언트의 접속을 기다림 ( 한번에 5개의 클라이언트가 접속할 수 있도록 설정 )
=> accept()함수에서 클라이언트와 접속을 하고 그 이후 정보를 읽고 보낸다. => close() 함수로 연결을 끊는다.    
<p align="center">
    <img src="./images/socket.png" alt="socket 프로그래밍" width = "400" height= "400">
  사진 출처 : falinux forum
 </p>

    
       $socket = socket_create(AF_INET,SOCK_STREAM,0); //TCP 통신용 소켓 생성
       if($socket == flase){
        echo "socket_create() 실패 이유 : " , sockdt_strerror(socket_last_error()), "\n";
       } else {
        echo "socket 생성 성공\n";
       }
       
       // IP주소와 포트넘버를 소켓에 결합
       socket_bind($socket,$address,$port) or die('Could not bind to address');
       socket_listen($socket,5);
       
       $accept = socket_accept($socket);
       if($accept == false){
        echo "socket_accept() 실패 이유 : ", socket_Atrerror(socket_last_error()), "\n";
       } else{
        echo "대기 성공적\n";
       }
       
       socket_wirte($accept,"연결완료\n");
       $input = socket_read($accept,1024) or die("could not read from socket\n"); // 소켓으로 부터 받은 request 정보
       socket_close($accept);
       
     
    
