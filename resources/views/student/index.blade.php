@extends('layout.main')

@section('content')
<ul id="autoWidth" class="cs-hidden">
    <li class="item-a">
        <section class="slideshow">
            <img class="satu" src="images/banner-shd.png" alt="Team Work">
            <div class="shadow"></div>
            <div class="container">
                <div class="mainText">
                    <div class="garis"></div>
                    <h3>Our Vision</h3>
                    <h1>Vision</h1>
                </div>

                <h3>To be a benchmark institution in terms of spirituality, leadership, and entrepreneurship.</h3>
            </div>
        </section>
    </li>

    <li class="item-a">
        <section class="slideshow">
            <img class="dua" src="images/banner-shd.png" alt="Team Work">
            <div class="shadow"></div>
            <div class="container">
                <div class="mainText">
                    <div class="garis"></div>
                    <h3>Our Mission</h3>
                    <h1>Mission</h1>
                </div>

                <h3>To develop each student to the maximum: intellectually, physically, emotionally, morally, and socially.</h3>
            </div>
        </section>
    </li>

    <li class="item-a">
        <section class="slideshow">
            <img class="tiga" src="images/banner-shd.png" alt="Team Work">
            <div class="shadow"></div>
            <div class="container">
                <div class="mainText">
                    <div class="garis"></div>
                    <h3>Our Motto</h3>
                    <h1>Motto</h1>
                </div>

                <h3>The fear of the LORD is the beginning of knowledge (Proverbs 1:7a)</h3>
            </div>
        </section>
    </li>
</ul>

<div class="sambutan">
    <h1>Welcome to Methodist Charles Wesley </h1>
</div>


<div class="kepsek">
    <div class="container">
        <img src="images/sekend.jpeg" alt="sekend">

        <div class="visiMisi">

            <div class="visi">
                <h5>Motto</h5>
                <h3>Proverbs 1:7a</h3>
            </div>

            <div class="misi">
                <h5>About Us</h5>
                <p>
                Methodist Charles Wesley is a private Christian school which enrolls Junior and High school students. It also provides Vocational Education for those who are interested in acquiring more specialized academic skills in music.
                </p>
            </div>

        </div>

    </div>
</div>


<!-- jurusan -->
<div class="jurusan">
    <div class="container">
        <h2>Our Programs</h2>

        <div class="boxJurusan">

            <div class="perBox">
                <img src="images/smp.jpg" alt="RPL">
                <h3>Junior High School</h3>
            </div>

            <div class="perBox">
                <img src="images/sma.jpg" alt="ATU">
                <h3>Senior High School</h3>
            </div>

            <div class="perBox">
                <img src="images/smk.jpg" alt="APHP">
                <h3>Vocational High School</h3>
            </div>


        </div>
    </div>
</div>

@endsection
