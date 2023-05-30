var cart_data = localStorage.data;

var xhr = new XMLHttpRequest();
xhr.open("POST", "php/check.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    
    console.log(xhr.responseText);
    
  }
};

xhr.send("dati=" + encodeURIComponent(cart_data));