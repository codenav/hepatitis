<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>


  <?php
    // $nama = '';
    // $jumlah = '';
    // foreach ($admin as $news_item) {
    //   $nama = $nama.'"'.$news_item['nama'].'",';
    //   $jumlah = $jumlah.$news_item['jumlah'].',';
    // }
  ?>

<main>
  <div class="content">
  <!-- Grafik -->
    <div class="row">
      <div class="col s12">
        <div class="card-panel white lighten-2">
          <span class="black-text">
            <h4 class="title-grafik">Grafik Data Hepatitis Berdasarkan Paket Data</h4>
            <canvas id="myChart"></canvas>
          </span>
        </div>
      </div>
    </div>


</div>
</main>

<script type="text/javascript">
  window.onload = function() {
    var ctx = $("#myChart").get(0).getContext("2d");
    var data = {
      labels: ["Migg 1","Migg 2","Migg 3","Migg 4","Migg 5","Migg 6","Migg 7","Migg 8","Migg 9","Migg 10","Migg 11","Migg 12","Migg 13","Migg 14","Migg 15","Migg 16","Migg 17","Migg 18","Migg 19","Migg 20","Migg 21","Migg 22","Migg 23","Migg 24","Migg 25"],
      datasets: [
        {
          fillColor: "rgba(51,153,153,0.5)",
          strokeColor: "#339999",
          pointColor: "#339999",
          pointStrokeColor: "#fff",
          data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,8,22,50,12,0,0]
        }
      ]
    }
    var myNewChart = new Chart(ctx).Line(data);
  };
</script>
