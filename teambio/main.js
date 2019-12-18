var hd = document.getElementsByClassName("hd")[0].getElementsByTagName("li");
  var bd = document.getElementsByClassName("bd")[0].getElementsByTagName("li");
  for (var i = 0; i < hd.length; i++) {
    hd[i].onclick = function(){
      doTabs(this);
    }
  }
  function doTabs(obj){
    for (var i = 0; i < hd.length; i++) {
      if(hd[i]==obj){
        hd[i].className = "current";
        bd[i].className = "current";
      }else{
        hd[i].className = "";
        bd[i].className = "";
      }
    }
  }