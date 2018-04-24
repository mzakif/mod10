<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>./css/style.css">
  </head>
  <body>
    <h1>REGISTRASI MAHASISWA</h1>
    <?php echo form_open('main','method="post"');?>
    <table>
      <tr>
        <td> <input type="text" class="input" minlength="10" name="nim" required onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="NIM" value="<?php echo set_value('nim'); ?>"> </td><br/>
      </tr>
      <tr>
        <td><?php echo validation_errors(); ?></td>
      </tr>
      <tr>
        <td> <input type="text" class="input" name="nama" required placeholder="NAMA" value="<?php echo set_value('nama'); ?>"> </td>
      </tr>
      <tr>
        <td align="center"> <input type="submit" name="submit" value="DAFTAR"> </td>
      </tr>
      <tr>
        <td align="center"><?php echo $message; ?></td>
      </tr>
    </table>

    </form>

  </body>
</html>
