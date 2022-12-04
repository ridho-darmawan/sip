<div class="modal fade" id="tambahFaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah FAQ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('faq.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" name="pertanyaan" id="pertanyaan"  value="{{old('pertanyaan')}}"  required>
                  </div>
                  <div class="form-group">
                    <label for="jawaban">Jawaban</label>
                    <textarea rows="6" class="form-control" id="jawaban" name="jawaban" value={{old('jawaban')}} required>{{old('jawaban')}}</textarea>
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
