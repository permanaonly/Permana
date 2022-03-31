<div class="panel-heading">

</div>
<div class="panel-body" id="invoice">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>no</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Lokasi</th>
                <th>suhu</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $i = 1;
            $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
            $user = $_SESSION['nik'] . "|" . $_SESSION['nama'];

            foreach ($data as $value) :
                $pecah = explode("|", $value);
                @$key = $pecah['0'] . "|" . $pecah['1'];

                if ($key == $user) :
            ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $pecah['2'] ?></td>
                        <td><?= $pecah['3'] ?></td>
                        <td><?= $pecah['4'] ?></td>
                        <td><?= $pecah['5'] ?>°</td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="javascript:void()" id="print" class="btn btn-md btn-primary py-1 font-40"><i class="fa-solid fa-file-arrow-down mr-100"></i> Print</a>
</div>


<script type="text/javascript">
    document.getElementById('print').addEventListener('click', function() {
        var printContents = document.getElementById('invoice').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    });
</script>