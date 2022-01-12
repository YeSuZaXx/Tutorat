<link rel="stylesheet" type="text/css" href="./style/cookie-banner.css">    

    <button id="cookie"  value="okay">
        Okay
      </button>

<div id="test">

</div>
  <div id="container">
      <p>
        We use cookies in this website to give you the best experience on our
        site and show you relevant ads. To find out more, read our
        <a href="#">privacy policy</a> and <a href="#">cookie policy</a>.
      </p>

     
    </div>

<footer class="w3-container w3-padding-64 w3-center w3-opacity"> 
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>


   

 

 <p>© 2021-2022 Alban fabre </p>

 

 
</footer>

<script>


const cookieContainer = document.getElementById('container');
const cookieButton = document.getElementById('cookie');
cookieContainer.style.display="none";
cookieButton.addEventListener("click", () => {
 
   cookieContainer.style.display="block"
  document.getElementById('test').innerHTML=cookieContainer.classList;
  localStorage.setItem("cookieBannerDisplayed", "true");
  cookieButton.style.display="none";
})





function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>


