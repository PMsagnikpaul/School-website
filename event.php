<?php
    include("./include/header.php");
?>
<style>
.all {
    margin-left: 190px;
    margin-right: 190px;
}

.tab {
    background-color: #03A9F4;
    padding-top: 10px;
    padding-bottom: 10px;
}

.tit {
    font-size: 25px;
}

.grid:after {
    content: '';
    display: block;
    clear: both;
}

.grid-sizer,
.grid-item {
    width: 33.333%;
    padding: 4px;
}

@media (max-width: 575px) {

    .grid-sizer,
    .grid-item {
        width: 100%;
    }
}

@media (min-width: 576px) and (max-width: 767px) {

    .grid-sizer,
    .grid-item {
        width: 50%;
    }
}


.grid-item {
    float: left;
}

.grid-item img {
    display: block;
    max-width: 100%;
}
</style>
<div class="container">
    <h1 style="font-size:55px; margin-top:20px">
        <center> <b>Events held in our School</b></center>
    </h1>
</div>
<div class="container">
    <p class="tit"><b> Celebration of 50 years completion of the school </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\uik.JPG" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\uuj.JPG" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\IMG_1515.JPG" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\IMG_1554.JPG" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\IMG_1535.JPG" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\aw.JPG" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Celebration of Saraswati Puja in our school </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\r (2).jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\sa.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\sxd.jpg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\i.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\IMG_20210219_125047.jpg" onclick="openModal(this);" />
        </div>
        
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Excursion to Science City </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\fd.jpg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\n.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\a.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\vv.jpeg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b> Annual Science Exhibition held in our school </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\cx.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\cxz.jpg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\vc.jpeg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Celebration of Republic Day of India in our school on 26th January </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\r3.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\r5.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\r1.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\r.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\r2.jpeg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Celebration of Netaji's Birthday in our school on 23th January </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\netaji.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\r4.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\nb.jpeg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Celebration of Mahatma Gandhi Jayanti in our school on 2nd October </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\gandhi.jpg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\nbv.jpeg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Celebration of Cultural program in our school </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\q.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\bb.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\jj.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\hg.jpeg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Celebration of Ishwar Chandra Vidyasagar's birthday in our school on 26 September</b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\bidyasagar.jpg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\vidyasagar.jpg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Celebration of Teacher's Day in our school on 5th September</b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\w.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\nn.jpeg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"><b> Celebration of Independence Day of India in our school on 15th August</b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\vbn.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\g.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\vcx.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\cc.jpeg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Celebration of World Environment Day in our school on 5th June</b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\world-environment-day.jpg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\wea.jpg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\waste.jpg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\der.jpg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Celebration of Rabindra Jayanti in our school on 9th May</b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\nbv.jpg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\xx.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\qw.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\gfd.jpg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"><b> Celebration of Annual Sport's Day of our school </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\ijh.jpg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\e.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\gfsd.jpg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\f.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\s.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\hjml.jpg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <p class="tit"> <b>Prize Distribution of Annual Sport's Day </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\ew.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\h.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\dsae.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\xc.jpeg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Drawing competition organised in our school </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\t.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\km.JPG" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>
<hr>
<br><br>
<div class="container">
    <p class="tit"> <b>Blood Donation Camp organised in our school </b></p>
</div>
<div class="container">

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <img id="myImg" src=".\images\kk.jpeg" onclick="openModal(this);" />
        </div>
        <div class="grid-item">
            <img id="myImg" src=".\images\u.jpeg" onclick="openModal(this);" />
        </div>
    </div>
</div>
<br><br><br><br>

<br><br>

<script>
// init Masonry
var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
});

// layout Masonry after each image loads
$grid.imagesLoaded().progress(function() {
    $grid.masonry();
});
</script>

<?php
    include("./include/footer.php");
?>