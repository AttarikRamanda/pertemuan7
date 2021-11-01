<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<style>
    fieldset {
        width: 30% ;
        margin: 20px auto;
        border-radius: 5px;
        text-align: center;
    }
    select {
        width: 100%;
    }
    table.table{
  margin-left: auto;
  margin-right: auto;
    }
    a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 3px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
</style>
    <fieldset>
        <legend>
            Input Transaksi
        </legend>
        
        <table class="table">
            <tr>
                <th> Nama Pembeli</th>
                <td>:</td>
                <td>
                    
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>Nomor HP</th>
                <td>:</td>
                <td>
                    <?= $nhp; ?>
                </td>
            </tr>
            <tr>
                <th>Merek sepatu</th>
                <td>:</td>
                <td>
                <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <th>Ukuran</th>
                <td>:</td>
                <td>
                <?= $ukuran; ?>
                </td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>:</td>
                <td>
                <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <hr>
                    <a href="<?= base_url('Cinput'); ?>" >back</a>
                </td>
            </tr>
        </table>
    </fieldset>
</body>
</html>