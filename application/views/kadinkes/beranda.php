<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>
<main>
  <div class="content">
    <div class="row">

      <div class="col m4">
        <div class="card-panel custom red lighten-2">
          <span class="white-text">
            <i class="material-icons cus-icon">equalizer</i>
            <h4>Jumlah Pola Penyaktit Hepatitis</h4>
            <h3>240</h3>
          </span>
        </div>
      </div>
      <div class="col m4">
        <div class="card-panel custom blue lighten-2">
          <span class="white-text">
            <i class="material-icons cus-icon">equalizer</i>
            <h4>Jumlah Pola Penyaktit DBD</h4>
            <h3>452</h3>
          </span>
        </div>
      </div>
      <div class="col m4">
        <div class="card-panel custom orange lighten-2">
          <span class="white-text">
            <i class="material-icons cus-icon">equalizer</i>
            <h4>Jumlah Pola Penyaktit Diare</h4>
            <h3>11542</h3>
          </span>
        </div>
      </div>
    </div>


</main>
