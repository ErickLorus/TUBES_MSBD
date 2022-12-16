@extends('layout.mainAdmin')

@section('content')


<div id="page_top" class="section-body">
    <div class="page-header">
        <div class="left">
            <h1 class="page-title">Log Buku</h1>
        </div>
    </div>
    <br>

    <div class="row clearfix">
        <div class="col-12">
            <div class="table-responsive card">
                <table style="margin-left: auto; margin-right:auto" class="table header-border table-hover">
                    <thead>
                        <tr>
                            <th style="width: 80px">No</th>
                            <th style="width: 400px">Books (Old)</th>
                            <th style="width: 400px">Books (New)</th>
                            <th style="width: 200px">Harga (Old)</th>
                            <th style="width: 200px">Harga (New)</th>
                            <th style="width: 200px">Date Modified</th>
                            <th style="width: 180px">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="w60">1</th>
                            <td> Pendidikan Pancasila dan Kewarganegaraan 2 (E)</td>
                            <td> Pendidikan Pancasila dan Kewarganegaraan 2 (E)</td>
                            <td>110,000</td>
                            <td>110,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">2</th>
                            <td>Cerdas Berbahasa Indonesia 2 (E)</td>
                            <td>Cerdas Berbahasa Indonesia 2 (E)</td>
                            <td>110,000</td>
                            <td>110,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">3</th>
                            <td>ESPS Matematika 2 - Wajib (E)</td>
                            <td>ESPS Matematika 2 - Wajib (E)</td>
                            <td>240,000</td>
                            <td>240,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">4</th>
                            <td>Sejarah Indonesia 2 (E)</td>
                            <td>Sejarah Indonesia 2 (E)</td>
                            <td>135,000</td>
                            <td>135,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">5</th>
                            <td>Fisika 2 (E)</td>
                            <td>Fisika 2 (E)</td>
                            <td>205,000</td>
                            <td>205,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">6</th>
                            <td>Kimia 2 (E)</td>
                            <td>Kimia 2 (E)</td>
                            <td>140,000</td>
                            <td>140,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">7</th>
                            <td>Biologi 2 (E)</td>
                            <td>Biologi 2 (E)</td>
                            <td>175,000</td>
                            <td>175,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">8</th>
                            <td>Think! Add Maths Sec (S)</td>
                            <td>Think! Add Maths Sec (S)</td>
                            <td>395,000</td>
                            <td>395,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">9</th>
                            <td>B. Mandarin HELLO jld. 11 (Textbook)</td>
                            <td>B. Mandarin HELLO jld. 11 (Textbook)</td>
                            <td>65,000</td>
                            <td>65,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">10</th>
                            <td>B. Mandarin HELLO jld. 11 (Workbook)</td>
                            <td>B. Mandarin HELLO jld. 11 (Workbook)</td>
                            <td>40,000</td>
                            <td>40,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">11</th>
                            <td>Reading Explorer 5 (NG)</td>
                            <td>Reading Explorer 5 (NG)</td>
                            <td>220,000</td>
                            <td>220,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">12</th>
                            <td>Gold Experience B2+ (PL)</td>
                            <td>Gold Experience B2+ (PL)</td>
                            <td>260,000</td>
                            <td>260,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                        <tr>
                            <th class="w60">13</th>
                            <td>Buku Tulis 1 Set</td>
                            <td>Buku Tulis 1 Set</td>
                            <td>110,000</td>
                            <td>110,000</td>
                            <td>16/12/2022</td>
                            <td>Updated</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>

        <div class="paginationmain">
            <div class="pagination">
                <span>
                    <div class="index">1</div>
                    <div class="index">2</div>
                    <div class="index">3</div>
                    <div class="index">4</div>
                    <div class="index">5</div>
                </span>
                <svg viewBox="0 0 100 100">
                    <path
                        d="m 7.1428558,49.999998 c -1e-7,-23.669348 19.1877962,-42.8571447 42.8571442,-42.8571446 23.669347,0 42.857144,19.1877966 42.857144,42.8571446" />
                </svg>
                <svg viewBox="0 0 100 100">
                    <path
                        d="m 7.1428558,49.999998 c -1e-7,23.669347 19.1877962,42.857144 42.8571442,42.857144 23.669347,0 42.857144,-19.187797 42.857144,-42.857144" />
                </svg>
            </div>
        </div>
    </div>

        <div id="listbutton">
            <button class="listbutton" type="button">Export</button>
        </div>


        @endsection