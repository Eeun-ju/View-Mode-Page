## View-Mode-Page  
### π»νλ¨ νμ μΈν΄ νλ‘μ νΈπ»
  |κ΅¬λΆ|λ΄μ©|
|------|---|
  |νλ‘μ νΈ | **View Mode μ ν νμ΄μ§ λ§λ€κΈ°** <br> 1. Login<br> 2. View mode<br> 3. TCP/IP communication  |
  |νλ‘μ νΈ κΈ°κ° | 2019 νκ³ λ°©ν 7μ(μ½ νλ¬) |

1. Login   
<figure>
    <img src="./images/login.PNG" alt="Login page" width = "400" height= "400">
</figure>

<br> IDμ PWλ₯Ό μλ ₯ν ν μ΄λ‘μ Login λ²νΌμ λλ₯΄λ©΄ submit λλ€. μ£Όμ΄μ§ νΌμ login_page.phpμμ actionλκ³ , λ‘κ·ΈμΈ νμ΄μ§μμ μλ ₯λλ idμ pwλ userid, userpwμ κ°μ΄ μ μ₯λμ΄ login_page.phpλ‘ λμ΄κ°λ€. <br> λ‘κ·ΈμΈ νλ©΄μ λ‘κ·ΈμΈ ν λ€μ λμκ° νμκ° μλ€.  
  
    <script> window.history.forward()   #μ¬μ©νμ¬ λ€μ λμ΄μ¬ μ μλ νμ΄μ§λ‘ λ§λ€μλ€.
    
    
2. View mode 
<div align="center">
  <div style="display: flex;">
    <img src="./images/view1.PNG" alt="view mode #1" width = "400" height= "300">
    <img src="./images/view2.PNG" alt="view mode #2" width = "500" height= "200">
</div>
  </div>
<br> λμ΄μ‘΄ View modeνλ©΄μμ 6κ°μ mode μ€ νλλ₯Ό μ ννλ€. buttonνμ λ©λ΄λ₯Ό λ§λ€κ³  νμ΄μ§λ₯Ό μ΄λνλλ‘νλ€. view1 ~ view5 κ°μ ν¬κΈ°μ νλ μ(1x1, 2x2, 3x3, etc)μ΄κ³ , view6λ μ¬μ©μκ° μνλλλ‘ νλ μμ μ ννλ custom λ©λ΄μ΄λ€.<br> view λͺ¨λλ₯Ό μ ννλ©΄ λ€μ νμ΄μ§λ‘ μ΄λνκ³ , view_μ«μλ μΉ΄λ©λΌ μμ μ νμ μλ―Ένλ€. μΉ΄λ©λΌ μ ν ν νμΈ λ²νΌμ λλ₯΄λ©΄ νμμ°½μ μ΄λ€ μΉ΄λ©λΌλ₯Ό μ ννλμ§ λ°λ‘ μΆλ ₯μ΄ λλ€. custom λ©λ΄μμλ 21κ°μ μ νμ§ μ€ νλλ₯Ό μ ννμ¬ μΉ΄λ λΌλ₯Ό μ νν΄μΌ νλ€. μλ₯Ό λ€μ΄ μΉ΄λ©λΌ 9λλ₯Ό μ νν΄μΌ νλ Custom20μ μ ννμ κ²½μ° 9λλ₯Ό λλ₯Έ μμλλ‘ μΆλ ₯λλ€.


    <script>  # viewmode 1 νμ΄μ§ μ½λ 
    var counter = 0; arr = new Array();
    arr[0] = 'View_1';
    
    function save(cam){
      arr.push(cam);
      count++;
      if(counter > 1){
        alert('1λμ μΉ΄λ©λΌλ§ μ ννμΈμ');
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
  μ°κ²°μ λκΈ°νλ ipμμ μ΄λ―Έ μ΄μ΄λ ν¬νΈλλ² 5123μ¬μ©. μλ μμλλ‘ socket ν¨μλ₯Ό μ€νμν¨λ€. socketμ΄ μ λλ‘ μμ±λμκ³ , bind λμλμ§ νμΈνκΈ° μν΄ echoλ₯Ό μ΄μ©νλ€.   
  ν¨μ μ¬μ© μμ : socket_create() ν¨μλ₯Ό μ΄μ©ν΄ TCP socket μμ± => bind() ν¨μλ₯Ό μ΄μ©ν΄ μμΌμ ν¬νΈλ²νΈ μ°κ²°
=> listen()ν¨μλ₯Ό μ΄μ©ν΄ ν΄λΌμ΄μΈνΈμ μ μμ κΈ°λ€λ¦Ό ( νλ²μ 5κ°μ ν΄λΌμ΄μΈνΈκ° μ μν  μ μλλ‘ μ€μ  )
=> accept()ν¨μμμ ν΄λΌμ΄μΈνΈμ μ μμ νκ³  κ·Έ μ΄ν μ λ³΄λ₯Ό μ½κ³  λ³΄λΈλ€. => close() ν¨μλ‘ μ°κ²°μ λλλ€.    
<p align="center">
    <img src="./images/socket.png" alt="socket νλ‘κ·Έλλ°" width = "400" height= "400">
  μ¬μ§ μΆμ² : falinux forum
 </p>

    
       $socket = socket_create(AF_INET,SOCK_STREAM,0); //TCP ν΅μ μ© μμΌ μμ±
       if($socket == flase){
        echo "socket_create() μ€ν¨ μ΄μ  : " , sockdt_strerror(socket_last_error()), "\n";
       } else {
        echo "socket μμ± μ±κ³΅\n";
       }
       
       // IPμ£Όμμ ν¬νΈλλ²λ₯Ό μμΌμ κ²°ν©
       socket_bind($socket,$address,$port) or die('Could not bind to address');
       socket_listen($socket,5);
       
       $accept = socket_accept($socket);
       if($accept == false){
        echo "socket_accept() μ€ν¨ μ΄μ  : ", socket_Atrerror(socket_last_error()), "\n";
       } else{
        echo "λκΈ° μ±κ³΅μ \n";
       }
       
       socket_wirte($accept,"μ°κ²°μλ£\n");
       $input = socket_read($accept,1024) or die("could not read from socket\n"); // μμΌμΌλ‘ λΆν° λ°μ request μ λ³΄
       socket_close($accept);
       
     
    
