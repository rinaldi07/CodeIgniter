
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <h3>Data Penjualan</h3>
                
                <tr>
                  <th>No</th>
                  <th>Nama konsumen</th>
                  <th>Nomor invoice</th>
                  <th>Jumlah Transper</th>
                  <th>Bukti Transper</th>
                  <th>Tanggal Transper</th>
                </tr>
                </thead>
                <tbody>
               <?php $no=1; ?>
               <?php foreach($databayar as $row) { ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?php echo $row['customer_username']; ?></td>
                  <td><?php echo $row['no_invoice']; ?></td>
                  <td><?php echo $row['jmlh_transper']; ?></td>
                  <td>
                    <img src="<?php echo base_url(); ?>asset/images/<?php echo $row["gambar_transper"]; ?>" width="70" height="70" />
                  </td>
                     <td>
                         <?= $row['tanggal_transper'];?>
                     </td>
                  <td>
                    <a href="<?php echo base_url(); ?>AdminMain/ ?>" class="btn btn-primary btn-xs" title="Edit">Edit</a>
                
                    <a onClick="javascript: return confirm('Are you sure to Delete Data');" href="<?php echo base_url(); ?>AdminMain/hapus/" class="btn btn-primary btn-xs" title="Delete" onclick="return confirm('apakah anda yakin data ber id= ">Hapus</a>
                  </td>
                </tr>
                <?php $no++ ?>
                <?php } ?>
               
              </table>


