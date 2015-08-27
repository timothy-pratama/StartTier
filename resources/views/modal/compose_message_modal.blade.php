<!-- /.modal compose message -->
<div class="modal fade" id="modal-compose-message" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Buat Pesan</h4>
      </div>
      <div class="modal-body">
        <form id="form-kirim-message" method="post" action="{{route('compose_email')}}" role="form" id="compose-message-mdoal" class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2" for="inputTo" style="margin-top: 7px">Penerima</label>
              <div class="col-sm-10">
                  <select name="penerimaPesan" class="form-control" id="inputTo" required>

                    <option disabled>────────────────── Startup ──────────────────</option>
                    <?php $available_users = \App\Pengguna::whereNotIn('id_user', [session('current_user')->id_user])->where('tipe','startup')->orderBy('nama_perusahaan', 'asc')->get(); $i = 1; ?>
                    @foreach($available_users as $available_user)
                        <option value="{{$available_user->id_user}}" <?php if($i == 1) {echo 'selected';} ?>>{{$available_user->nama_perusahaan}}</option>
                        <?php $i++; ?>
                    @endforeach

                    <option disabled></option>
                    <option disabled>────────────────── Investor ──────────────────</option>
                    <?php $available_users = \App\Pengguna::whereNotIn('id_user', [session('current_user')->id_user])->where('tipe','investor')->orderBy('nama_perusahaan', 'asc')->get(); ?>
                    @foreach($available_users as $available_user)
                        <option value="{{$available_user->id_user}}">{{$available_user->nama_perusahaan}}</option>
                        <?php $i++; ?>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2" for="inputSubject" style="margin-top: 7px">Subjek</label>
              <div class="col-sm-10"><input name="judulPesan" type="text" class="form-control" id="inputSubject" placeholder="Tuliskan subjek pesan Anda" required /></div>
            </div>
            <div class="form-group">
              <label class="col-sm-12" for="inputBody">Isi Pesan</label>
              <div class="col-sm-12"><textarea class="form-control" name="isiPesan" id="inputBody" rows="10" placeholder="Tuliskan isi pesan Anda" style="resize: vertical" required></textarea></div>
            </div>

            <button type="button" onclick="clear_form();" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <input type="submit" id="kirim-message" class="btn btn-primary" value="Kirim" style="margin-left: 79%" />

            <input type="hidden" name="pengirimPesan" value="{{session('current_user')->id_user}}" />
            <input type="hidden" name="url_callback" value="{{\Illuminate\Support\Facades\Request::fullUrl()}}" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal compose message -->

<script>
    function clear_form()
    {
        document.getElementById('form-kirim-message').reset();
    }
</script>