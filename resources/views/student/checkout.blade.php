@extends('layout.main')

@section('content')

<div class="title">
    <h1 class="text-center">Checkout</h1>
    <!-- <p class="text-center">Choose The Category To See Our Galery</p> -->
</div>

<div class="formListKanan">
    <div class="container list">

        <table class="table table-bordered table-hover table-striped">

            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="width: 100px">Jumlah</th>
                    <th>Judul Buku</th>
                    <th style="width: 150px">Buku Kelas</th>
                    <th style="width: 200px">Total Harga</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td> Pendidikan Pancasila dan Kewarganegaraan 1 (E) </td>
                    <td>SMK X</td>
                    <td>140,000</td>
                </tr>


                <tr>
                    <th scope="row">1</th>
                    <td>PTP Bahasa Indonesia 1 (E) </td>
                    <td>SMK X</td>
                    <td>60,000</td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td> PTP Matematika 1 (E) </td>
                    <td>SMK X</td>
                    <td>55,000</td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td> Sejarah Indonesia (E) </td>
                    <td>SMK X</td>
                    <td>180,000</td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td> Understanding English Grammar </td>
                    <td>SMK X</td>
                    <td>300,000</td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td> Reading Explorer 4 (NG) </td>
                    <td>SMK X</td>
                    <td>220,000</td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td>B. Mandarin HELLO jld. 10 (Textbook)</td>
                    <td>SMK X</td>
                    <td>65,000</td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td> B. Mandarin HELLO jld. 10 (Workbook) </td>
                    <td>SMK X</td>
                    <td>40,000</td>
                </tr>

                <tr>
                    <th scope="row">1</th>
                    <td> Buku Tulis SMK 1 Set </td>
                    <td>SMK X</td>
                    <td>125,000</td>
                </tr>
            </tbody>
            <tr>
                    <th scope="row">9</th>
                    <td> Total Buku </td>
                    <td>SMK X</td>
                    <td>1,185,000</td>
            </tr>
        </table>
        <div>
            <a href = "/validasi">
            <button class="listbutton"><i class="fa fa-plus"></i> Upload Bukti </button>
            </a>
        </div>
    </div>
</div>
</div>


@endsection
