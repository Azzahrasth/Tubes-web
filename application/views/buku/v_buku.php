<?php
// jika data berhasil dsimpan maka kita tampilkan pesan succes
if (!empty($this->session->flashdata('info'))) {?>
  <div class="alert alert-success" role="alert"><?=$this->session->flashdata('info')?></div>
  <?php
}
?>



<div class="row">
    <div class="col-md-12">
        <a href="<?=base_url()?>index.php/buku/tambah_buku"class="btn btn-success"><i class="fa fa-plus"></i> Tambah Buku</a>
    </div>
</div>
<br>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Buku</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Buku</th>
                  <th>Judul</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>Tahun Tebit</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <tbody>
                    <?php 
                        foreach ($data->result() as $row) {?>
                            <tr>
                                <td><?= $row->id_buku;?></td>
                                <td><?= $row->judul_buku;?></td>
                                <td><?= $row->nama_pengarang;?></td> 
                                <td><?= $row->nama_penerbit;?></td> 
                                <td><?= $row->tahun_terbit;?></td> 
                                <td><?= $row->jumlah;?></td>     
                                <td>
                                    <a href="<?=base_url()?>index.php/buku/edit/<?=$row -> id_buku;?>" class="btn btn-success btn-xs">Edit</a>
                                    <a href="<?=base_url()?>index.php/buku/hapus/<?=$row -> id_buku;?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini?')">Hapus</a>
                                </td> 
                            </tr>
                   <?php }
                    ?>
                </tbody>
</table>
</div>
</div>