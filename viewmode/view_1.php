<!DOCTYPE html>
<html>
    <style>
    body {
  background: #485460;
  color: #fff;
  text-align: center;
  font-family: sans-serif;
        font-size: 15px;
}
    </style>
<head>
    <meta charset="utf-8">
    <title>View Mode_1</title>

</head>
<body style="padding":20px>
    <h1>View_1 <br></h1>
    <h3> Now choose 1 of the camera below.</h3>

<div style="position:absolute;right:10px;top:10px;">
<img src="큐램.jpg" alt="" weight="100%" height="100%"/></div>

    <br>
    <br>
<form name="my_form">
<p>
  <input type="checkbox" name="Camera" value="Cam1" style="width:18px;height:18px;" onClick="save(this.value);">Camera01
  <input type="checkbox" name="Camera" value="Cam2" style="width:18px;height:18px;" onClick="save(this.value);">Camera02
  <input type="checkbox" name="Camera" value="Cam3" style="width:18px;height:18px;" onClick="save(this.value);">Camera03
  <input type="checkbox" name="Camera" value="Cam4" style="width:18px;height:18px;" onClick="save(this.value);">Camera04
  <input type="checkbox" name="Camera" value="Cam5" style="width:18px;height:18px;" onClick="save(this.value);">Camera05
  <input type="checkbox" name="Camera" value="Cam6" style="width:18px;height:18px;" onClick="save(this.value);">Camera06
  <input type="checkbox" name="Camera" value="Cam7" style="width:18px;height:18px;" onClick="save(this.value);">Camera07
  <input type="checkbox" name="Camera" value="Cam8" style="width:18px;height:18px;" onClick="save(this.value);">Camera08
    </p>
<p>
  <input type="checkbox" name="Camera" value="Cam9" style="width:18px;height:18px;" onClick="save(this.value);">Camera09
  <input type="checkbox" name="Camera" value="Cam10" style="width:18px;height:18px;" onClick="save(this.value);">Camera10
  <input type="checkbox" name="Camera" value="Cam11" style="width:18px;height:18px;" onClick="save(this.value);">Camera11
  <input type="checkbox" name="Camera" value="Cam12" style="width:18px;height:18px;" onClick="save(this.value);">Camera12
  <input type="checkbox" name="Camera" value="Cam13" style="width:18px;height:18px;" onClick="save(this.value);">Camera13
  <input type="checkbox" name="Camera" value="Cam14" style="width:18px;height:18px;" onClick="save(this.value);">Camera14
  <input type="checkbox" name="Camera" value="Cam15" style="width:18px;height:18px;" onClick="save(this.value);">Camera15
  <input type="checkbox" name="Camera" value="Cam16" style="width:18px;height:18px;" onClick="save(this.value);">Camera16

    </p>
<p>
</p>
</form>
<button onClick="savefile()" id="dlink" >확인</button>
<button onClick="history.go(0)">리셋</button>

  <script >
  var counter = 0;
  var arr = new Array();
  arr[0] = 'View_1';

  function save(cam_){
    arr.push(cam_);
    counter++;
    if(counter > 1){
      alert("Only 1 camera must be selected.(1 대의 카메라만 선택하세요)");
      for(i=0; i < my_form.Camera.length; i++) {
    		my_form.Camera[i].checked = false;
    	}
      arr = new Array();
      arr[0] = 'View_1';
      counter =0;
    }
    if(arr[my_form.Camera.length]==arr[my_form.Camera.length-1]){
      arr.pop();
    }
  }
  function savefile(){
    document.write(arr);
    //var content = arr.join(",");
    //uriContent = "data:text/plain," + encodeURIComponent(content);
    //document.getElementById("dlink").innerHTML = "<a href=" + uriContent + " download=\"savedfile.txt\">확인</a>";
  }
  </script>
    </body>
</html>
