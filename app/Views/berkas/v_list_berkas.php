<div class="col-sm-12">
    <a href="<?= base_url('berkas/tambah') ?>" class="btn btn-primary">Tambah Data</a>
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
                <th>Tgl_berkas</th>
                <th>Resume_singkat</th>
                <th>No_sp_kap</th>
                <th>Tgl_sp_kap</th>
                <th>File_sp_kap</th>
                <th>No_ba_kap</th>
                <th>File_ba_kap</th>
                <th>No_srt_permintaan</th>
                <th>File_srt_permintaan</th>
                <th>Action</th> 
        </tr>
        <thead>
        <tbody>
        <?php $no=1; foreach ($berkas as $key => $value) { ?>
            <tr>
        <td><?= $no++; ?></td>
        <td><?= $value['tgl_berkas']; ?></td>
        <td><?= $value['resume_singkat']; ?></td>
        <td><?= $value['no_sp_kap']; ?></td>
        <td><?= $value['tgl_sp_kap']; ?></td>
        <td><?= $value['file_sp_kap']; ?></td>
        <td><?= $value['no_ba_kap']; ?></td>
        <td><?= $value['file_ba_kap']; ?></td>
        <td><?= $value['no_srt_permintaan']; ?></td>
        <td><?= $value['file_srt_permintaan']; ?></td>

        <td>
            <a href="<?= base_url('berkas/edit/'.$value['id_berkas']) ?>" class="btn btn-warning">Edit</a>
            <a href="<?= base_url('berkas/delete/'.$value['id_berkas']) ?>" class="btn btn-danger" onClick="return confirm('Apakah Ingin Hapus Data...?') ">Delete</a>
        </td>
    </tr>
    <?php } ?>
</tbody> 
</table>
</div>