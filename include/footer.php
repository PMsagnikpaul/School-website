<style>
.icon>b>.svg-inline--fa {
    margin-right: 10px;
}
</style>
<!-- Footer -->
<footer class="bg-dark text-left text-white footer"><br><br>
    <div class="container">
        <div class="row">
            <div class="column col-sm-6 ">
                <p style="font-size:30px">Nasherkuli Netaji Vidyalaya (H.S.)</p>
                <p style="font-size:20px">The school was affiliated to secondary education in 2006 and it got
                    recognition for higher secondary
                    education in 2016. The journey of the school begins in 1968 with a mission to educate the
                    surrounding village. Now the school has flourished to higher secondary education.</p>
                <a class="btn btn-outline-light btn-floating m-1"  target ="_blank"
                    href="https://www.facebook.com/nasherkuli.netajividyalaya.3" role="button"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://goo.gl/maps/m2dqPKKtuqVpAXmA9" target ="_blank"
                    role="button"><i class="fas fa-map-marker-alt"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="mailto:19101421903.hc@gmail.com"
                    role="button"><i class="fas fa-envelope"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="tel:9433562911" role="button"><i
                        class="fas fa-phone-alt"></i></a>
            </div>
            <div class="column col-sm-6 ">
                <div>
                    <p class="icon"><b><i class="fas fa-phone-alt"></i>PHONE NUMBER:</b></p>
                </div>
                <p> +91 9433562911</p>
                <div>
                    <p class="icon"><b> <i class="fas fa-envelope"></i>EMAIL:</b></p>
                </div>
                <p>19101421903.hc@gmail.com</p>
                <div>
                    <p class="icon"><b><i class="fas fa-map-marker-alt"></i>LOCATION:</b></p>
                </div>
                <p>VILLAGE - NASHERKULI, POST OFFICE - NASHERKULI<br> POLICE STATION -
                    GANGNAPUR, BLOCK - RANAGHAT II<br> SUB DIVISION - RANAGHAT, DISTRICT - NADIA, PIN CODE - 741238.</p>



            </div>
        </div>
    </div>
    <br><br>
</footer>
<!-- Footer -->
<!-- The Modal -->
<div id="myModal" class="modal2">
    <span class="close" onclick="closeModal();">&times;</span>
    <img class="modal2-content" id="img01">
</div>

<script>
// Get the modal
function openModal(n) {
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = n;
    var modalImg = document.getElementById("img01");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
    }

}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}
</script>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"
    integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw=="
    crossorigin="anonymous"></script>

</body>