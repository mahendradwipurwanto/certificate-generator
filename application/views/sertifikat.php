<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h2 class="display-5">E-Sertifikat Sender</h2>
</div>

<div class="col-md-6 mx-auto">
  <div class="card-deck mb-3">
    <div class="card mb-4 box-shadow">
      <div class="card-body">
        <?php if($this->session->userdata('success')): ?>
          <div class="alert alert-success text-center">
            <?= $this->session->userdata('success');?>
          </div>
        <?php endif;?>
        <form action="<?= site_url('send-sertifikat');?>" method="POST">
          <div class="form-group">
            <label class="input-label font-weight-bold">Nama</label>
            <input type="text" name="NAMA" class="form-control" placeholder="nama anda" required>
          </div>
          <div class="form-group">
            <label class="input-label font-weight-bold">NRP</label>
            <input type="number" name="NRP" class="form-control" minlength="6" placeholder="nrp anda" required>
          </div>
          <div class="form-group">
            <label class="input-label font-weight-bold">JENIS Sertifikat</label>
            <div class="form-group">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="keaktifan_18" name="JENIS" value="1" class="custom-control-input" required>
                <label class="custom-control-label" for="keaktifan_18">Keaktifan Anggota HIC '18</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="pengurus" name="JENIS" value="2" class="custom-control-input" required>
                <label class="custom-control-label" for="pengurus">PENGURUS HIC</label>
              </div>
              <hr>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="keaktifan_19" name="JENIS" value="3" class="custom-control-input" required>
                <label class="custom-control-label" for="keaktifan_19">Keaktifan Anggota HIC '19</label>
              </div>
            </div>
          </div>
          <hr>
          <button type="submit" class="btn btn-sm btn-primary float-right">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</div>