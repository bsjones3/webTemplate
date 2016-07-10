function direct(){
  window.location.replace('./index.php');
}
window.onload = function(){
  setTimeout(direct, 3000);
}
