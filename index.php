<?php
    include("./include/header.php");
?>

<style>
body {
    margin: 0px;
}

.about {
    background-color: #fff;
    backface-visibility: hidden;
    padding-left: 50px;
    padding-top: 30px;
    outline: solid;
    padding-bottom: 20px;
    padding-right: 50px;
}


.nbv {
    padding-top: 10px;
}

.mes {
    display: inline-flex;
}

.hmm {
    background-color: #fef200;
    padding-left: 30px;
    padding-right: 30px;
    border-radius: 15px;
}

.nir {
    border-radius: 15px;
}

.md{
    font-size:50px;
}
.carousel-item>img {
    height: 700px;
}

.det{
    font-size:20px
}

@media (max-width: 576px) {
    .about {
        background-color: #fff;
        backface-visibility: hidden;
        margin: 10px;
        padding: 10px;
    }

    .hmm {
        background-color: #fef200;
        margin: 10px;
    }

    .carousel-item>img {
        height: 200px;
    }
    .md{
        font-size:38px;
    }

    .fm{
        font-size:28px;
    }
    .nam{
        font-size:23px;
    }
    .sch{
        font-size:23px;
    }

    .det{
        font-size:18px 
    }
    .but{
        font-size: 15px;
    }
}

.but {
    background-color: #0b21ef;
    color: #fff;
    font-size: 25px;
    border-radius: 30px;
    padding: 10px;
}

.center {
    justify-content: center;
    align-items: center;
    display: flex;
}

</style>

<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./images/NNV pic.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./images/r5.jpeg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./images/q.jpeg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./images/s.jpeg">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container">
    <div class="row about">
        <div class="column col-sm-4 ">
            <img class="b" src="./images/r5.jpeg" height="180" width="100%"><br>
            <img class="nbv" src="./images/nbv.jpg" height="180" width="100%">
        </div>
        <div class="column col-sm-8">
            <h2 style="font-size:35px"> About our school</h2>
            <p style="font-size:21px"> Our school is the best school in the area. The school was affiliated to secondary
                education in 2006 and it got recognition for higher secondary education in 2016. The journey of the
                school
                begins in 1968 with a mission to educate the surrounding village. Now the school has flourished to
                higher
                secondary education. There is separate computer laboratory, e-learning facilities and rich library. The
                moto
                of the school is the holistic developmewnt of the children. They must learn basic education and build
                moral
                character which will help them for strong establishment in the society. Nasherkuli Netaji Vidyalaya
                (H.S.)
                hails all the blithe spirits with an open heart. </p>
        </div>
    </div>
</div><br><br><br>
<div class="container">
    <h1 class="md">
        <center> Message Desk </center>
    </h1>
</div>
<div class="container">
    <div class="row mes">
        <div class="col-sm-8 hmm">
            <h1 class="fm"style="color:#0403fb">From the Head of the Institute</h1>
            <h2 class="nam">Mr. Subhasis Paul (HOI)</h2>
            <h2 class="sch"style="color:#0403fb"> Nasherkuli Netaji Vidyalaya (H.S.)</h2>
            <p class="det"> <b>'The highest form of knowledge is empathy' and if one can develop the
                    power of
                    empathy and imagination, the whole world opens up like a budding blossom of the season. Today
                    the role
                    of schools is not to just pursue academic excellence but to empower students to evolve as
                    critical and
                    ethical thinkers of 21st century. This is only possible through a holistic and learner centric
                    environment that is carefully nurtured in Nasherkuli Netaji Vidyalaya (H.S.). <br>
                    Every learner should be transformed into a self-reliant and independent citizen in relation to
                    the
                    emotional, academic and social aspect. we here at school strive to provide the same through a
                    balanced
                    amalgamation of scholastic and co-scholastic activities.</b> </p>
        </div>
        <div class="col-sm-4">
            <img src="./images/hm.jpeg" height="auto" width="100%">
        </div>
    </div>
</div><br><br>
<div class="container">
    <h1 class="md" >
        <center> Awards won by our school</center>
    </h1>
</div>
<div class="container">
    <div class="row nir">
        <div class=" col-sm-4">
            <img id="myImg" src="./images/sax.jpeg" height="400" width="100%" onclick="openModal(this);">
        </div>
        <div class=" col-sm-4">
            <img id="myImg" src="./images/ae.jpeg" height="400" width="100%" onclick="openModal(this);">
        </div>
        <div class=" col-sm-4">
            <img id="myImg" src="./images/nirmal.jpg" height="400" width="100%" onclick="openModal(this);">
        </div>
    </div>
</div><br><br>
<div class="container">
    <h1 class="md">
        <center>School Gallery</center>
    </h1>
</div>
<div class="container">
    <div class="row">
        <div class="column col-sm-4 ">
            <img id="myImg" src=".\images\IMG_1535.JPG" onclick="openModal(this);" />
        </div>
        <div class="column col-sm-4 ">
            <img id="myImg" src=".\images\r5.jpeg" onclick="openModal(this);" />
        </div>
        <div class="column col-sm-4 ">
            <img id="myImg" src=".\images\g.jpeg" onclick="openModal(this);" />
        </div>

    </div>
</div><br>
<div class="container center">
    <button class="but" onclick="location.href='gallery.php';"> See more </button>
</div>
<br><br><br><br>


<?php
    include("./include/footer.php");
?>