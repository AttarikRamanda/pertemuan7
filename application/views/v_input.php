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
        width: 40%;
        margin: 20px auto;
        border-radius: 5px;
    }
    select {
        width: 100%;
    }
</style>
    <fieldset>
        <legend>
            Input Transaksi
        </legend>
        <form method="POST" >
        <table>
            <tr>
                <th> Nama Pembeli</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama">
                    <?= form_error('nama', '<br><span style="color:red;">','</span>'); ?>
                </td>
            </tr>
            <tr>
                <th>Nomor HP</th>
                <td>:</td>
                <td>
                    <input type="text" name="nhp" id="nhp">
                    <?= form_error('nhp', '<br><span style="color:red;">','</span>'); ?>
                </td>
            </tr>
            <tr>
                <th>Merek sepatu</th>
                <td>:</td>
                <td>
                    <select name="merk" id="merk">
                    <option>---Pilihan---</option>
                    <?php foreach($merk as $m) : ?>
                        <option value="<?= $m; ?>"><?= $m; ?></option>
                    <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Ukuran</th>
                <td>:</td>
                <td>
                    <select name="ukuran" id="ukuran">
                    <option>---Pilihan---</option>
                    <?php for($i = 32; $i <= 44; $i++) : ?>
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                    <?php endfor; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <hr>
                    <button type="submit">save</button>
                </td>
            </tr>
        </table>
    </form>
    </fieldset>
</body>
</html>