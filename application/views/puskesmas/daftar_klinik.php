<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Kadinkes</a>
        <a href="#!" class="breadcrumb">Lihat Data Klinik Tervalidasi</a>
      </div>
  </div>
  <nav class="teal">
    <div class="nav-wrapper ">
      <form>
        <div class="input-field">
          <input id="searchbox" type="search" required>
          <label for="searchbox" class="active"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>

  <div class="content ">
    <div class="card-panel white lighten-2">

    <table class="highlight striped" id="example">
      <thead>
        <tr>
          <th>No</th>
          <th>Klinik</th>
          <th>Alamat</th>
          <th>Kelurahan</th>
          <th>RT</th>
          <th>RW</th>
          <th>Telp</th>
          <th>Penggangung Jawab</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $i=1;
        if ($admin > 0 ) {

        foreach ($admin as $news_item) { ?>
        <tr>
          <!-- atribut di table database -->
          <td align="center"><?php echo $i; ?></td>
          <td><?php echo $news_item->nama; ?></td>
          <td><?php echo $news_item->alamat; ?></td>
          <td><?php echo $news_item->kelurahan; ?></td>
          <td><?php echo $news_item->rt; ?></td>
          <td><?php echo $news_item->rw; ?></td>
          <td><?php echo $news_item->telp; ?></td>
          <td><?php echo $news_item->penanggun_jawab; ?></td>
            <td><a href="#modal<?php echo $news_item->no_surat_izin ?>" class="btn blue lighten-2 modal-trigger waves-effect waves-light pad">
              <i class="material-icons">view_module</i>
            </a>
            </td>
          </td>
        </tr>

        <div id="modal<?php echo $news_item->no_surat_izin ?>" class="modal">
          <div class="modal-content">
            <h6>Data Lengkap</h6>
            <div class="row">
              <div class="col m6">No Surat Izin</div>
              <div class="col m6">: <?php echo $news_item->no_surat_izin; ?></div>
              <div class="col m6">Tanggal Mulai Izin</div>
              <div class="col m6">: <?php echo tgl_indo($news_item->tgl_mulai_izin); ?></div>
              <div class="col m6">Nama KLinik</div>
              <div class="col m6">: <?php echo $news_item->nama; ?></div>
              <div class="col m6">Alamat</div>
              <div class="col m6">: <?php echo $news_item->alamat; ?></div>
              <div class="col m6">RT</div>
              <div class="col m6">: <?php echo $news_item->rt; ?></div>
              <div class="col m6">RW</div>
              <div class="col m6">: <?php echo $news_item->rw; ?></div>
              <div class="col m6">Telepon</div>
              <div class="col m6">: <?php echo $news_item->telp; ?></div>
              <div class="col m6">Penanggung Jawab</div>
              <div class="col m6">: <?php echo $news_item->penanggun_jawab; ?></div>
              <div class="col m6">Jenis Klinik</div>
              <div class="col m6">: <?php echo $news_item->jenis_klinik; ?></div>
              <div class="col m6">Kepemilikan</div>
              <div class="col m6">: <?php echo $news_item->milik; ?></div>
              <div class="col m6">Jenis Layanan</div>
              <div class="col m6">: <?php echo $news_item->jenis_layanan; ?></div>
            </div>

          </div>
          <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat" >Tidak</a>
          </div>
        </div>

          <?php $i++;} } ?>
        </tbody>
    </table>
  </div>
  </div>


</main>
