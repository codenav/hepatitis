<?php if ($this->session->flashdata('success_msg')) { ?>
      <div id="snackbar"> <?php echo $this->session->flashdata('success_msg') ?> </div>
  <?php } ?>

<main>
  <div class="content">
  <!-- Grafik -->
    <div class="row">
      <div class="col s12">
        <div class="card-panel white lighten-2">
          <span class="black-text">
            <h4 class="title-grafik">Grafik Pengajuan Perbulan</h4>
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
      labels: ["asdf","asdf","asdfsdf"],
      datasets: [
        {
          fillColor: "rgba(51,153,153,0.5)",
          strokeColor: "#339999",
          pointColor: "#339999",
          pointStrokeColor: "#fff",
          data: [10,2,23]
        }
      ]
    }
    var myNewChart = new Chart(ctx).Line(data);
  };
</script>
