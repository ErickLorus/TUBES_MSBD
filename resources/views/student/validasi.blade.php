@extends('layout.main')

@section('content')

<div class="container">
  <div class="row it">
    <div class="col-sm-offset-1 col-sm-10" id="one">
      <p>
        Upload Bukti Transfer
      </p><br>
      <div class="row">

        <!--form-group-->
      </div>
      <!--row-->
      <div id="uploader">
        <div class="row uploadDoc">
          <div class="col-sm-3">
            <div class="docErr">Please upload valid file</div>
            <!--error-->
            <div class="fileUpload btn btn-orange">
              <i class="fa fa-upload"></i>
              <span class="upl" id="upload">Upload document</span>
              <input type="file" class="upload up" id="up" onchange="readURL(this);" />
            </div><!-- btn-orange -->
          </div><!-- col-3 -->
          <div class="col-sm-8">
            <input type="text" class="form-control" name="" placeholder="Nama">
            <input type="text" class="form-control" name="" placeholder="Kelas">
            <input type="text" class="form-control" name="" placeholder="Nomor VA">
            <div class="form-control">Total Harga</div>
          </div>
          <!--col-8-->
          <div class="col-sm-1"><a class="btn-check"><i class="fa fa-times"></i></a></div><!-- col-1 -->
        </div>
        <!--row-->
      </div>
      <!--uploader-->
      <div class="text-center">
        <a class="btn btn-next text-white"><i class="fa fa-paper-plane"></i> Submit</a>
      </div>
    </div>
    <!--one-->
  </div><!-- row -->
</div><!-- container -->



@endsection