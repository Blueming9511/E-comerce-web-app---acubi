function showResult(str) {
    searchbar = document.querySelector(".searchbar");
    if (str.length==0) {
      searchbar.style.display = 'none';
      searchbar.innerHTML="";
      searchbar.style.border="0px";
      return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        searchbar.style.display = 'flex';
        searchbar.innerHTML=this.responseText;
        searchbar.style.border="1px solid #A5ACB2";
      }
    }
    xmlhttp.open("GET","livesearch.php?q="+str,true);
    xmlhttp.send();
}