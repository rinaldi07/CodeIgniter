
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <h3>Data Penjualan</h3>
                <a href="<?= base_url();?>AdminMain/cetak" class="btn btn-primary" style="margin-bottom: 20px; ">Cetak Laporan</a>
                <tr>
                  <th>No</th>
                  <th>Gambar Produk</th>
                  <th>Nama pemesan</th>
                  <th>Harga Pembelian</th>
                  <th>Alamat pemesan</th>
                  <th>Kurir</th>
                  <th>Status Pembayaran</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
               <?php $no=1; ?>
               <?php foreach($datajual as $row) { ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td>
                    <img src="<?php echo base_url(); ?>asset/images/<?php echo $row["tshirt_image"]; ?>" width="70" height="70" />
                  </td>
                  <td><?= $row["customer_username"] ?></td>
                  <td>Rp. <?= $row["total"] ?></td>
                  <td width=""><?= $row['alamat']; ?></td>
                  <td width=""><?= $row['kurir']; ?></td>
                  <td width=""><?= $row['status']; ?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>AdminMain/adietproduk/<?php echo $row["id"]; ?>" class="btn btn-primary btn-xs" title="Edit">Edit</a>
                
                    <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url(); ?>AdminMain/hapus/<?php echo $row["id"]; ?>" class="btn btn-primary btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') ">Hapus</a>
                  </td>
                </tr>
                <?php $no++ ?>
                <?php } ?>
               
              </table>


