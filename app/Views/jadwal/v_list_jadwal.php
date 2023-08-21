<div class="col-sm-12">
    <a href="<?= base_url('jadwal/tambah') ?>" class="btn btn-primary">Tambah Data</a>
 <br><br>
 <?php
    if(!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
<?= session()->getFlashdata('success'); ?>
    </div>
    <?php } ?>
 
         <table id="examplel" class="table table-bordered table-striped">
         <thead>
            <tr>
                <th>No</th>
                <th>Tgl Jadwal</th>
                <th>Ket Jadwal</th>
                <th>Action</th> 
        </tr>
        <thead>
        <tbody>
        <?php $no=1; foreach ($jadwal as $key => $value) { ?>
            <tr>
         <td><?= $no++; ?></td>
        <td><?= $value['tgl_jadwal']; ?></td>
        <td><?= $value['ket_jadwal']; ?></td>
        <td>
            <a href="<?= base_url('jadwal/edit/'.$value['id_jadwal']) ?>" class="btn btn-warning">Edit</a>
            <a href="<?= base_url('jadwal/delete/'.$value['id_jadwal']) ?>" class="btn btn-danger" onClick="return confirm('Apakah Ingin Hapus Data...?') ">Delete</a>
        </td>
    </tr>
    <?php } ?>
</tbody> 
</table>
</div>