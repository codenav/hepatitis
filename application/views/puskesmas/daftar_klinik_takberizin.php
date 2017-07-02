<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">Hepatitis</a>
        <a href="#!" class="breadcrumb">Data Hepatitis</a>
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
        <a href="<?php echo site_url('puskesmas/puskesmas_tambah_klinik_takberizin'); ?>" class="waves-effect waves-light btn">Tambah</a>
        <div class="content ">
          <div class="card-panel white lighten-2">

          <table class="highlight striped" id="example">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Tanngal Sakit</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kab/Kota</th>
                <th>Hasil Pemeriksaan</th>penanggun_jawab
                <th>Status</th>
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
                <td><?php echo tgl_indo($news_item->tgl_mulai_izin); ?></td>
                <td><?php echo $news_item->penanggun_jawab; ?></td>
                <td><?php echo $news_item->alamat; ?></td>
                <td><?php echo $news_item->kecamatan; ?></td>
                <td><?php echo $news_item->kelurahan; ?></td>
                <td><?php echo $news_item->rt; ?></td>
                <td><?php echo $news_item->telp; ?></td>
                <td><?php echo $news_item->telp; ?></td>
              </tr>
              </div>

                <?php $i++;} } ?>
              </tbody>
          </table>
        </div>
        </div>
  </div>
  </div>


</main>
