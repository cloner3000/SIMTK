<?php $i=0;   ?>
<?php foreach ($DetailPembayaran->result() as $row): 
if ($i=='0') { ?>
   <h4 style="text-align: center;"><?php echo $row->nama_aset; ?></h4>

<?php $i++; } ?>

<?php endforeach; ?>
<div class="box-body table-responsive" id="list-table-menu">
            <table id="" class="table table1 table-bordered table-striped" >
                <thead>
                    <tr style="background:  #3998ad; color: white">
                       
                        <th>No</th>
                        <th>Bulan </th>
                        <th style="text-align: center;">Status</th>
                        <th>Tanggal Bayar</th>
                        
                                              
                    </tr>
                </thead>
                <tbody>
                 
                 <!-- <?php foreach ($DetailPembayaran->result() as $row): ?>
                    <tr>
                      <td><?php echo $i; $i++; ?></td>
                      <td><?php echo $row->awal_kampus; ?> / <?php echo $row->awal_fakultas; ?> / <?php echo $row->awal_jurusan; ?> / <?php echo $row->awal_lokasi; ?></td>
                      <td><?php echo $row->sekarang_kampus; ?> / <?php echo $row->sekarang_fakultas; ?> / <?php echo $row->sekarang_jurusan; ?> / <?php echo $row->sekarang_lokasi; ?></td>
                      <td><?php echo $row->tanggal_pindah; ?></td>
                        
                      
                    </tr>
                <?php endforeach; ?> -->
                  <tr>
                      <td>1</td>
                      <td>January 2017</td>
                      <td style="text-align: center;"><small class="label  bg-green">sudah bayar</small></td>
                      <td>2 January 2017</td> 
                  </tr>
                  <tr>
                      <td>2 </td>
                      <td>February 2017</td>
                      <td style="text-align: center;"><small class="label  bg-red">belum bayar</small></td> 
                      <td>-</td>
                  </tr>

                 </tbody>
                
            </table>

        </div>