@extends('layouts.dashboard')

@section('content')
  <!-- Table -->
  <div class="container mt-3 d-flex justify-content-center">
    <div class="card rounded-3" style="width: 1100px;">
      <div class="card-header mw-100 h-100 text-center btn-secondary rounded-3 shadow-lg">
        <h2 class="mt-0 mb-0" style="color: #fff; font-size: 22px;"><b>Silahkan Isi Data Berikut</b></h2>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('booking.update', $bookings->id) }}">
          @method('PUT')
          @csrf
          {{-- <input type="hidden" value="{{ $nomor }}" name="nomor"> --}}
          <div class="mb-3 mt-4 row">
            <label for="pelanggan_id" class="col-sm-2 col-form-label">Pelanggan</label>
            <div class="col-sm-10">
              <select class="form-control" name="pelanggan_id" id="pelanggan_id">
                <option value="">Pilih</option>
                @foreach ($pelanggans as $pelanggan)
                  <option value="{{ $pelanggan->getKey() }}" @if($pelanggan->getKey() == old('pelanggan_id', $bookings->pelanggan_id)) selected @endif>{{ $pelanggan->nama }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="mb-3 mt-4 row">
            <label for="" class="col-sm-2 col-form-label">Tgl_Transkasi :</label>
            <div class="col-sm-10">
              <input type="date" name="tgl_transaksi" class="form-control" id="tgl_transaksi"
                placeholder="Masukkan Tanggal Transaksi" autocomplete="off" value="{{ $bookings->tgl_transaksi->format('Y-m-d') }}">
            </div>
          </div>
          <div class="mb-3 mt-4 row">
            <label for="" class="col-sm-2 col-form-label">Harga Total:</label>
            <div class="col-sm-10">
              <input type="text" name="harga_total" class="form-control" id="harga_total"
                placeholder="Masukkan Harga Total" autocomplete="off" value="{{ old('harga_total', $bookings->harga_total) }}">
            </div>
          </div>
          <div class="mb-3 mt-4 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Status :</label>
            <div class="col-sm-10">
              <select class="form-select" name="status" aria-label="Default select example" required>
                <option value="">Pilih Status</option>
                <option value="Lunas" @if(old('status', $bookings->status) == 'Lunas') selected @endif>Lunas</option>
                <option value="Belum Lunas" @if(old('status', $bookings->status) == 'Belum Lunas') selected @endif>Belum Lunas</option>
              </select>
            </div>

          </div>
          <div class="mb-3 mt-4 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nomor Invoice :</label>
            <div class="col-sm-10">
              <input type="text" name="no_invoice" class="form-control" id="no_invoice"
                placeholder="Masukkan Nomor Invoice" autocomplete="off" value="{{ old('no_invoice', $bookings->no_invoice) }}" required>
            </div>
          </div>
          <div class="mb-3 mt-4 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan :</label>
            <div class="col-sm-10">
              <input type="text" name="keterangan" class="form-control" id="keterangan"
                placeholder="Masukkan Keterangan" autocomplete="off" value="{{ old('keterangan', $bookings->keterangan) }}" required>
            </div>
          </div>


          <div class="mb-3 row mt-4">
            <div class="col">
              <button type="submit" name="aksi" value="tambah" class="btn btn-primary">
                Submit
              </button>
              <a href="{{ route('booking.index') }}" type="button" class="btn btn-danger">
                Cancel
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Table -->
@endsection