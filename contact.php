<?php
    include("./include/header.php");
?>
<style>
.all {
    display: inline-flex;
    margin: 20px 200px;
}

.map {

    //flex: 50%;
    padding-left: 80px;
    padding-top: 40px;
}

.contact {
    //flex: 50%;
}

.email {
    margin-bottom: -20px;
    font-size: 30px;
    color: #0a09da;
}
.md{
    font-size:55px;
}
@media (max-width: 575px) {

.md{
    font-size:40px;
}
}
.email>p>b>.svg-inline--fa{
    margin-right:10px;
}
</style>

<div class="container">
    <h1 class="md" >
        <center><b>Contact Us</b></center>
    </h1>

</div><br>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="email">
                <p><b><i class="fas fa-map-marker-alt " ></i>LOCATION:</b></p>
            </div>
            <p style="font-size:20px">VILLAGE - NASHERKULI<br> POST OFFICE - NASHERKULI<br> POLICE STATION -
                GANGNAPUR<br>
                BLOCK - RANAGHAT II<br> SUB DIVISION - RANAGHAT<br> DISTRICT - NADIA<br> PIN CODE - 741238.</p>

            <div class="email">
                <p><b><i class="fas fa-phone-alt" ></i>PHONE NUMBER:</b></p>
            </div>
            <p style="font-size:20px"> +91 9433562911</p>

            <div class="email">
                <p style="font-size:30px"><b><i class="fas fa-envelope" ></i>EMAIL:</b></p>
            </div>
            <p style="font-size:20px">19101421903.hc@gmail.com</p>

        </div>

        <div class="col-sm">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385.631412322008!2d88.60811087414945!3d23.142265161864074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8c50913f66bfd%3A0xbf017e587f6126cb!2sNasherkuli%20Netaji%20Vidyalaya!5e0!3m2!1sen!2sin!4v1607936465501!5m2!1sen!2sin"
                height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" width="100%"
                tabindex="0"></iframe><br><br><br>
        </div>
    </div>
</div>
<?php
    	include("./include/footer.php");
?>