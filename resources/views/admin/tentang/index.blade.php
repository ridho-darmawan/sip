@extends('layouts.admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tentang Kami</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Tentang Kami</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            @if (empty($abouts))
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahFaq" data-backdrop="static" data-keyboard="false"><i class="fa fa-plus"></i> Tambah</a>
            @include('admin.tentang.tambahModal')
            @endif

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($abouts as $about)
                @php
                    $no = 1;
                @endphp
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$about->deskripsi}}</td>
                    <td>
                        <a href="#ubahAbout{{ $about->id }}" data-toggle="modal"  data-keyboard="false" data-backdrop="static" class="badge badge-warning">Ubah</a>
                        @include('admin.tentang.modalUbah')
                    </td>
                  </tr>
                @empty
                <tr>
                    <td colspan="3">Data Belum Tersedia</td>
                </tr>

                @endforelse


            </tbody>

          </table>
        </div>
        <!-- /.card-body -->
      </div>

</div>
@endsection
