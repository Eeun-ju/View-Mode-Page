
<?php
  // 192.168.0.182는 제 컴퓨터의 ip주소로, 소스를 다운받고 local 혹은 자신의 ip로 바꾸어도 됩니다.

  // 로그인을 할 수 있는 아이디와 비밀번호는 하나로 지정해두었습니다.
  // 하나 이상으로 설정하고 싶다면 if문을 추가하면 됩니다.
  if($_POST['userid']=='myid'){
    if($_POST['userpw']=='mypw'){
      echo '<meta http-equiv="refresh" content="0;http://192.168.0.182/firstapp/viewmode/main_mode.php">';
    }
    else{
      //아이디는 맞고 비밀번호가 틀렸을때는 "Password wrong" 이라는 팝업을 띄우며 새로고침 효과를 주었습니다.
      echo '<meta charset="utf-8" />';
      echo "<script>alert('Password wrong')</script>";
      echo '<meta http-equiv="refresh" content="0;http://192.168.0.182/firstapp/Login/index.php">';
    }

  }
  else{
    #팝업창 띄우기 (아이디와 비밀번호를 확인해주세요)
    echo '<meta charset="utf-8" />';
    echo "<script>alert('Wrong')</script>";
    echo '<meta http-equiv="refresh" content="0;http://192.168.0.182/firstapp/Login/index.php">';
  }
?>
