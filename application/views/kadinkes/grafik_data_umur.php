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
      <div class="col s4">
        <div class="card-panel white lighten-2">
          <div id="chart">
            <canvas id="myChart" width="200" height="200"></canvas>
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
        "Red",
        "Blue",
        "Yellow"
      ],
      datasets: [{
        data: [300, 50, 100],
        backgroundColor: [
          "#FF6384",
          "#36A2EB",
          "#FFCE56"
        ],
        hoverBackgroundColor: [
          "#FF6384",
          "#36A2EB",
          "#FFCE56"
        ]
      }]
    };
    var ctx = $("#myChart");
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: data
    });
    </script>
