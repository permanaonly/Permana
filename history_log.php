<div class="panel-heading">
    <h1>Tulis Catetan Perjalanan</h1>
</div>
<div class="panel-body">
    <form method="POST" action="save_log.php">
        <div class="form-group row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
        </div>
        <div class="form-group row">
            <label for="jam" class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-10">
                <input type="time" class="form-control" id="jam" name="jam">
            </div>
        </div>
        <div class="form-group row">
            <label for="Lokasi" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
                <input type="text" required class="form-control" id="Lokasi" name="lokasi">
            </div>
        </div>
        <div class="form-group row">
            <label for="suhu" class="col-sm-2 col-form-label">suhu</label>
            <div class="col-sm-10">
                <input type="number" required class="form-control" id="suhu" name="suhu">
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-lg "><i class="fa-solid fa-floppy-disk"> </i> save</button>
    </form>
</div>