<script>
function cariBuku() {
  var x = document.getElementById("inputcari");
  x.value = x.value.toLowerCase();
}
function hidePass() {
  var pass = document.getElementById("pass");
  var btn = document.getElementById("btnpass");
  if(pass.type == "password"){
    btn.innerHTML = "<i class='bi bi-eye-slash'></i>";
    pass.type = "text";
  }else{
    btn.innerHTML = "<i class='bi bi-eye'></i>";
    pass.type = "password";
  }
}

function delSpace() {
  var x = document.getElementById("inUser");
  x.value = x.value.replace(' ','');
}


</script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>