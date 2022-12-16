@extends('layout.mainAdmin')

@section('content')


<div id="page_top" class="section-body">
    <div class="page-header">
        <div class="left">
            <h1 class="page-title">Eksport Data</h1>
        </div>
    </div>
    <br>

    <div id="page-top" class="section-body"></div>
      <div class="row clearfix">
        <div class="col-4">
          <div class="table-responsive card">
            <table style="align-items: center" class="table header-border table-hover">
              <tr>
              <th style="width: 300px">NAMA  : AARON ADHIGUNA</th></tr>
              <tr><th style="width: 300px">NO VA : 7770300722000430</th></tr>
            <tr><th style="width: 300px">KELAS : SMA XI</th></tr>
            </table>      
          </div>
        </div>
      </div>

    <div id="page-top" class="section-body"></div>
    <div class="row clearfix">
        <div class="col-12">
            <div class="table-responsive card">
                <table style="margin-left: auto; margin-right:auto" class="table header-border table-hover">
                    <thead>
                        <tr>
                            <th style="width: 50px">No</th>
                            <th style="width: 500px">Books</th>
                            <th style="width: 200px">Harga (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="w60">1</th>
                            <td> Pendidikan Pancasila dan Kewarganegaraan 1 (E) </td>
                            <td>130,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>Cerdas Berbahasa Indonesia 1 (E)</td>
                            <td>130,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>ESPS Matematika - Wajib (E)</td>
                            <td>180,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>Sejarah Indonesia (E)</td>
                            <td>85,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>Fisika 1 (E)</td>
                            <td>170,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>Kimia 1 (E)</td>
                            <td>115,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>Biologi 1 (E)</td>
                            <td>170,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>Ekonomi 1 (E)</td>
                            <td>120,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>New Syllabus Maths 4 (S)</td>
                            <td>325,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>B. Mandarin HELLO jld. 10 (Textbook)</td>
                            <td>65,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>B. Mandarin HELLO jld. 10 (Workbook)</td>
                            <td>40,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>Reading Explorer 4 (NG)</td>
                            <td>220,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>Expert IELTS 5 (PL)</td>
                            <td>360,000</td>
                        </tr>
                        <tr>
                            <th class="w60">1</th>
                            <td>Buku Tulis 1 Set</td>
                            <td>110,000</td>
                        </tr>
                        <thead>
                            <tr>
                                <th> 14 </th>
                                <th> Total </th>
                                <th>2,220,000</th>
                            </tr>
                        </thead>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="listbutton">
        <button class="listbutton" type="button">Export</button>
    </div>
  

    @endsection