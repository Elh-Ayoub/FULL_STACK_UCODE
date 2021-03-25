document.addEventListener("DOMContentLoaded", function() {
    var lazyloadImages = document.querySelectorAll("img.lazy");
    function lazyload () {
      let count = 0;
      lazyloadThrottleTimeout = setTimeout(function() {
          var scrollTop = window.pageYOffset;
          lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
                img.src = img.dataset.src;
                if(!imageExists(img.src)){
                    img.src= "assets/images/temp.jpg";
                }
                img.classList.remove('lazy');
                count++;
                let getN = document.getElementById('notification').innerHTML;
                let n = getN.substring(0, getN.indexOf(' '));
                if(count > +n){
                    document.getElementById('notification').innerHTML = count + " images loaded from 20";
                }
                if(count === 20){
                    document.getElementById('notification').style = "background-color: lightgreen;";
                    document.getElementById('notification').innerHTML = count + " images loaded from 20";
                    setTimeout(function(){
                        document.getElementById('notification').style = "display: none;";
                    }, 3000);
                }
            }
          });
          if(lazyloadImages.length == 0) { 
            document.removeEventListener("scroll", lazyload);
            window.removeEventListener("resize", lazyload);
            window.removeEventListener("orientationChange", lazyload);
          }
      }, 80);
    }
    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
});
function imageExists(image_url){
    var http = new XMLHttpRequest();
    http.open('HEAD', image_url, false);
    http.send();
    return http.status != 404;
}