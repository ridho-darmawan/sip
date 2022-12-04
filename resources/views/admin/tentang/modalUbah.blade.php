<div class="modal fade" id="ubahAbout{{$about->id}}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Tentang Kami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('about.update',$about->id) }}" method="POST"  enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="modal-body">

                    <div class="card-body">
                        <div class="form-group">
                          <label for="pertanyaan">Deskripsi</label>
                          <textarea class="form-control" rows="10" name="deskripsi" id="pertanyaan" required>{{$about->deskripsi}}</textarea>
                        </div>

                      </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>


            </form>
        </div>

        </div>
    </div>
</div>
