<?php if (validation_errors()) { ?>
      <div id="snackbar"> <?php echo validation_errors(); ?> </div>
  <?php } ?>
<?php
$attributes = array('onsubmit' => "return validate();");
echo form_open('admin/tambah',$attributes);
?>
<main>
  <div class="title">
    <span><?php echo $title; ?></span>
      <div class="col s12 bred">
        <a href="#!" class="breadcrumb">admin</a>
        <a href="#!" class="breadcrumb">Tambah Admin</a>
      </div>
  </div>
  <div class="content">
    <div class="row form">
      <div class="col s12">
        <div class="card-panel cus-tambah white lighten-2">
          <p class="sub-tit teal lighten-2">Data Diri</p>
          <div class="content">
            <div class="row">
              <div class="input-field col s12">
                <label>Nama Lengkap :</label>
                <input id="val1" type="text" name="nama_lengkap" value="<?php echo set_value('nama_lengkap'); ?>">
              </div>
              <div class="input-field col s12">
                <textarea name="alamat" id="val2" class="materialize-textarea"><?php echo set_value('alamat'); ?></textarea>
                <label for="val3">Alamat</label>
              </div>
              <div class="input-field col s12">
                <label>E-Mail :</label>
                <input id="val4" type="text" name="email" value="<?php echo set_value('email'); ?>">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col s12">
        <div class="card-panel cus-tambah white lighten-2">
          <p class="sub-tit teal lighten-2">Admin </p>
          <div class="content">
            <div class="row">
              <div class="input-field col s12">
                <select name="akses">
                  <option value="super_admin" selected>Super Admin</option>
                  <option value="admin_datin">Admin Datin</option>
                  <option value="admin_pkl">Admin PKL</option>
                </select>
                <label>Hak Akses :</label>
              </div>
              <div class="input-field col s12">
                <label>Username :</label>
                <input id="val5" type="text" name="username" value="<?php echo set_value('username'); ?>">
              </div>
              <div class="input-field col s6">
                <label>Password :</label>
                <input id="password" type="password" name="password">
              </div>
              <div class="input-field col s6">
                <label>Ketik Ulang Password :</label>
                <input id="re-password" type="password" name="re_password">
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="col s12">
          <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Tambahkan
            <i class="material-icons right">send</i>
          </button>
        </div>
    </div>
  </div>
</main>
<?php echo form_close();?>

<!-- Validasi Password-->
<script type="text/javascript">
    window.onload = function () {
    document.getElementById("password").onchange = validatePassword;
    document.getElementById("re-password").onchange = validatePassword;
    }
    function validatePassword(){
    var pass2=document.getElementById("re-password").value;
    var pass1=document.getElementById("password").value;
    if(pass1!=pass2)
    document.getElementById("re-password").setCustomValidity("Passwords Tidak Sama");
    else
    document.getElementById("re-password").setCustomValidity('');
	}
</script>
