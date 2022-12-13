@extends('layout.main')

@section('content')

<div class="title">
    <h1 class="text-center">List Buku</h1>
    <!-- <p class="text-center">Choose The Category To See Our Galery</p> -->



</div>

<div class="formListKanan">
    <div class="container list">

        <table class="table table-bordered table-hover table-striped">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Harga</th>
                    <th>Ambil</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Ilmu Pengetahuan Alam</td>
                    <td>Doraemon</td>
                    <td>Erlangga</td>
                    <td>2018</td>
                    <td>50000</td>
                    <td>
                        <form class="checkbox-list" action="proses.php" method="get">
                            <p><input type='checkbox' name='bahasa1' value='php' /></p>
                        </form>
                    </td>
                </tr>


                <tr>
                    <th scope="row">2</th>
                    <td>Matematika</td>
                    <td>Doraemon</td>
                    <td>Erlangga</td>
                    <td>2018</td>
                    <td>50000</td>
                    <td>
                        <form class="checkbox-list" action="proses.php" method="get">
                            <p><input type='checkbox' name='bahasa1' value='php' /></p>
                        </form>
                    </td>
                </tr>

                <tr>
                    <th scope="row">3</th>
                    <td>Fisika</td>
                    <td>Doraemon</td>
                    <td>Erlangga</td>
                    <td>2018</td>
                    <td>50000</td>
                    <td>
                        <form class="checkbox-list" action="proses.php" method="get">
                            <p><input type='checkbox' name='bahasa1' value='php' /></p>
                        </form>
                    </td>
                </tr>

                <tr>
                    <th scope="row">4</th>
                    <td>Kimia</td>
                    <td>Doraemon</td>
                    <td>Erlangga</td>
                    <td>2018</td>
                    <td>50000</td>
                    <td>
                        <form class="checkbox-list" action="proses.php" method="get">
                            <p><input type='checkbox' name='bahasa1' value='php' /></p>
                        </form>
                    </td>
                </tr>

                <tr>
                    <th scope="row">5</th>
                    <td>Biologi</td>
                    <td>Doraemon</td>
                    <td>Erlangga</td>
                    <td>2018</td>
                    <td>50000</td>
                    <td>
                        <form class="checkbox-list" action="proses.php" method="get">
                            <p><input type='checkbox' name='bahasa1' value='php' /></p>
                        </form>
                    </td>
                </tr>

                <tr>
                    <th scope="row">6</th>
                    <td>Bahasa Inggris</td>
                    <td>Doraemon</td>
                    <td>Erlangga</td>
                    <td>2018</td>
                    <td>50000</td>
                    <td>
                        <form class="checkbox-list" action="proses.php" method="get">
                            <p><input type='checkbox' name='bahasa1' value='php' /></p>
                        </form>
                    </td>
                </tr>

                <tr>
                    <th scope="row">7</th>
                    <td>Bahasa Indonesia</td>
                    <td>Doraemon</td>
                    <td>Erlangga</td>
                    <td>2018</td>
                    <td>50000</td>
                    <td>
                        <form class="checkbox-list" action="proses.php" method="get">
                            <p><input type='checkbox' name='bahasa1' value='php' /></p>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <div>
            <button>Tambah</button>
        </div>
    </div>
</div>
</div>

@endsection
