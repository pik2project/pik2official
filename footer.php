<!-- Footer-->
<footer > 
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-12 leftpart">
            <h4>Connect With us</h4>
            <hr style="width:35%; border:1px solid; color:#caa461; margin-bottom:10px; margin-top:8px;">
            <a href="#"><img src="img/logo/wa.png" alt="Whatsapp"> +62 851 5708 6969</a>
          </div>

          <div style="padding-top:20px;"class="col-md-4 col-sm-12 text-center">
            <img src="img/logo/logo1.png" alt="Logo" height="75">
          </div>

          <div class="col-md-4 col-sm-12 rightpart">
            <h4>Follow us</h4>
            <hr class="rightparthr" style="width:30%; border:1px solid; color:#caa461; margin-bottom:10px; margin-top:10px;">
            <a href="#"><img src="img/logo/ig.png" alt="Instagram"> @pik2project</a><br>
            <a href="#"><img src="img/logo/mail.png" alt="Email"> officialpik2@gmail.com</a><br>
            <a href="#"><img src="img/logo/yt.png" alt="Youtube"> PIK2 Project</a><br>
          </div>
        </div>
      </div>

      <div class="copyright text-center">
        <hr style="margin-bottom:10px;">
        <p style="font-size:13px;">Designed And Developed By Billy Wijaya G, Leon Chrisdion, Winston Renatan</p>
      </div>
    </footer>

    <a href="https://api.whatsapp.com/send?phone=6285157086969&text=Hello%20Hutama,%20bolehkah%20saya%20menanyakan%20tentang%20PIK2?" class="wabutton"><img src="img/whatsapp.png" alt="" width="75"></a>

    <script type="text/javascript">
        $('.counter').counterUp({
          delay: 10,
          time: 2000
        });
        $('.counter').addClass('animated fadeInDownBig');
        
        $(document).ready(function(){
            setTimeout(()=> {
                $('.loader').remove();
            } , 1800); // after 5 sec it will remove.
        });

        /*Button Function for Playing Video*/
        var video = document.getElementById("myVideo");
        var btn = document.getElementById("myBtn");

        function myFunction() {
          if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
          } else {
            video.pause();
            btn.innerHTML = "Play";
          }
        }
        
        /*Reveal element on scroll*/
        window.addEventListener('scroll', reveal);

        function reveal(){
          var reveals = document.querySelectorAll('.reveal');

          for(var i=0; i< reveals.length; i++){
            var windowheight= window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;

            if(revealtop < windowheight - revealpoint){
              reveals[i].classList.add('active');
            }
          }
        }

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementsByClassName("modalImg");
        var modalImg = document.getElementById("img01");
        
        [].forEach.call(img, function (img_curr) {
            img_curr.onclick = function () {
                modal.style.display = "block";
                modalImg.src = this.src;
            };
        });

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
        
        /*Adung Group Div Reveal*/
        function updateItems(tgt, delta) {

        var $items = $(tgt).closest("div").find("div");
        var $current = $items.filter('.current');
        $current = $current.length ? $current : $items.first();
        var index = $current.index() + delta;

        // Range check the new index
        index = (index < 0) ? 0 : ((index > $items.length) ? $items.length : index);
        $current.removeClass('current');
        $current = $items.eq(index).addClass('current');

        // Hide/show the next/prev
        $(".prev").toggle(!$current.is($items.first()));
        $(".next").toggle(!$current.is($items.last()));
        }

        $(".next").click(function(e) {
        updateItems(e.target, 1);
        });

        $(".prev").click(function(e) {
        updateItems(e.target, -1);
        });

        // Cause initial selection
        $(".group").each(function() {
        updateItems(this, 0)
        });
        
        /*PHP MAILER JAVASCRIPT*/
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }

    </script>
    
    <!-- jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>