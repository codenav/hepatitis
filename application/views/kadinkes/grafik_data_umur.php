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
      <div class="col s6">
        <div class="card-panel white lighten-2">
          <div id="chart">
            <h3 class="center">Data Hepatitis Berdasarkan Jumlah Umur</h3>
            <canvas id="myChart" width="300" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>


</div>
</main>

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.5/Chart.min.js'></script>

    <script>
    var data = {
      labels: [
        "15-19 TAHUN",
        "25-29 TAHUN",
        "5-9 TAHUN",
        "30-34 TAHUN",
        "35-39 TAHUN",
        "10-14 TAHUN",
        ">40 TAHUN",
        "Tidak Mengisi Usia",
        "0 - 59 Bulan",
        "0 - 6 Bulan ",
        "6 - 12 Bulan"
      ],
      datasets: [{
        data: [ 25, 21, 14, 11, 9, 9, 8, 4, 2, 0, 0 ],
        backgroundColor: [
          "#FF6384",
          "#36A2EB",
          "#FFCE56",
          "#e4e892",
          "#3806dd",
          "#27e67f",
          "#759506",
          "#128c34",
          "#f63668",
          "#9db117",
          "#c34e25",
          "#6259cb"

        ],
        hoverBackgroundColor: [
          "#FF6384",
          "#36A2EB",
          "#FFCE56",
          "#e4e892",
          "#3806dd",
          "#27e67f",
          "#759506",
          "#128c34",
          "#f63668",
          "#9db117",
          "#c34e25",
          "#6259cb"
        ]
      }]
    };
    var ctx = $("#myChart");
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: data
    });
    </script>
