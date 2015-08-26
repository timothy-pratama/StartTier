<!-- /.modal compose message -->
<div class="modal fade" id="modal-compose-message" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Buat Pesan</h4>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2" for="inputTo" style="margin-top: 7px">Penerima</label>
              <div class="col-sm-10"><input type="email" name="pengirimPesan" class="form-control" id="inputTo" placeholder="comma separated list of recipients" required /></div>
            </div>
            <div class="form-group">
              <label class="col-sm-2" for="inputSubject" style="margin-top: 7px">Subjek</label>
              <div class="col-sm-10"><input name="judulPesan" type="text" class="form-control" id="inputSubject" placeholder="Tuliskan subjek pesan Anda" required /></div>
            </div>
            <div class="form-group">
              <label class="col-sm-12" for="inputBody">Isi Pesan</label>
              <div class="col-sm-12"><textarea class="form-control" name="isiPesan" id="inputBody" rows="10" placeholder="Tuliskan isi pesan Anda" style="resize: vertical" required></textarea></div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
        <button type="button" id="send_message" class="btn btn-primary ">Kirim<i class="fa fa-arrow-circle-right fa-lg"></i></button>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal compose message -->