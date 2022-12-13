@extends('layout.mainAdmin')

@section('content')


<div id="page_top" class="section-body">
    <div class="page-header">
        <div class="left">
            <h1 class="page-title">Edit Buku</h1>
        </div>
    </div>
    <div id="page-top" class="section-body"></div>
    <tr>
        <th> SMA XII </th>
    </tr>
    <div class="row clearfix">
        <div class="col-12">
            <div class="table-responsive card">
                <table style="margin-left: auto; margin-right:auto" class="table header-border table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th style="width: 500px">Books</th>
                            <th style="width: 200px">Harga (Rp)</th>
                            <th style="width: 180px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="w60">1</th>
                            <td>Pendidikan Pancasila dan Kewarganegaraan 3 (E) </td>
                            <td>105,000</td>
                            <td>
                                <button class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection