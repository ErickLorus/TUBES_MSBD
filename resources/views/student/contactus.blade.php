@extends('layout.main')

@section('content')
<div class="container kontak">

    <h3 class="mb-4">Hubungi Kami</h3>
    <form action="">
        <div class="formKontakKiri">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
            </div>

            <div class="form-group">
                <label for="nama">Email</label>
                <input type="email" class="form-control" id="nama">
            </div>

            <div class="form-group">
                <label for="nama">No Telp</label>
                <input type="number" class="form-control" id="nama">
            </div>
        </div>


        <div class="formKontakKanan">
            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea name="pesan" id="pesan" cols="30" rows="8" class="form-control"></textarea>
            </div>

            <button class="listbutton">Kirim</button>
        </div>
    </form>
</div>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15928.549809637092!2d98.66869898281038!3d3.555788458799409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303130140e390193%3A0xca430cedd941f45f!2sMethodist%20Charles%20Wesley!5e0!3m2!1sen!2sid!4v1668923197588!5m2!1sen!2sid" 
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>
@endsection
