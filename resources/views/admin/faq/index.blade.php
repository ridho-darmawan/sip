@extends('layouts.admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Frequently Ask Questions</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">FAQ</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="container-fluid">

    <div class="card">
        <div class="card-header">

            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahFaq" data-backdrop="static" data-keyboard="false"><i class="fa fa-plus"></i> Tambah</a>
            @include('admin.faq.tambahModal')
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Pertanyaan</th>
              <th>Jawaban</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($faqs as $faq)
                @php
                    $no = 1;
                @endphp
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$faq->pertanyaan}} </td>
                    <td>{{$faq->jawaban}}</td>
                    <td>edit|delete|update</td>
                  </tr>
                @empty
                <tr>
                    <td colspan="4">Data Belum Tersedia</td>
                </tr>

                @endforelse


            </tbody>

          </table>
        </div>
        <!-- /.card-body -->
      </div>

</div>
@endsection
