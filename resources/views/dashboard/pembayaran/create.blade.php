@extends('layouts.dashboard')

@section('content')
        <!-- Table -->
        <div class="container mt-3 d-flex justify-content-center">
            <div class="card rounded-3" style="width: 1100px;">
                <div class="card-header mw-100 h-100 text-center btn-secondary rounded-3 shadow-lg">
                    <h2 class="mt-0 mb-0" style="color: #fff; font-size: 22px;"><b>Silahkan Isi Data Berikut</b></h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pembayaran.store') }}">
                        @csrf
                        {{-- <input type="hidden" value="{{ $nomor }}" name="nomor"> --}}
                        <div class="mb-3 mt-3 row">
                            <label for="" class="col-sm-2 col-form-label">Booking ID :</label>
                            <div class="col-sm-10">
                                <input type="text" name="booking_id" class="form-control" id="booking_id" autocomplete="off" placeholder="Masukan ID Booking">
                            </div>
                        </div>
                        <div class="mb-3 mt-3 row">
                            <label for="" class="col-sm-2 col-form-label">Tanggal Pembayaran :</label>
                            <div class="col-sm-10">
                                <input type="text" name="tgl_pembayaran" class="form-control" id="tgl_pembayaran" autocomplete="off" placeholder="Masukan Tanggal Pembayaran">
                            </div>
                        </div>
                        <div class="mb-3 mt-4 row">
                            <label for="" class="col-sm-2 col-form-label">Jumlah Bayar :</label>
                            <div class="col-sm-10">
                                <input type="text" name="jumlah_bayar" class="form-control" id="jumlah_bayar"  placeholder="Masukkan Jumlah Bayar" autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3 mt-4 row">
                            <label for="" class="col-sm-2 col-form-label">Cara Pembayaran :</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="cara_pembayaran" class="form-control" id="cara_pembayaran"">
                                    <option selected>Pilih Opsi Pembayaran</option>
                                    <option value="Transfer">Transfer</option>
                                    <option value="Cash">Cash</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 mt-4 row">
                            <label for="" class="col-sm-2 col-form-label">Tipe Pembayaran :</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="tipe_pembayaran" class="form-control" id="tipe_pembayaran"">
                                    <option selected>Pilih Tipe Pembayaran</option>
                                    <option value="DP">DP</option>
                                    <option value="Pelunasan">Pelunasan</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row mt-4">
                            <div class="col">
                                <button type="submit" name="aksi" value="tambah" class="btn btn-primary">
                                    Submit
                                </button>
                                <a href="{{ route('pembayaran.index') }}" type="button" class="btn btn-danger">
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