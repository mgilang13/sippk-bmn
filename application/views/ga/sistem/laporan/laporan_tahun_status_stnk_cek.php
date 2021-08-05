<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
	<a class="btn green" href="<?php echo base_url(); ?>ga/laporan_tahun_status_stnk_excel/<?php echo $data_tahun; ?>/<?php echo $data_status; ?>">
		Cetak Excel <i class="fas fa-print"></i>
	</a>

	Cetak Laporan STNK Dengan Tahun = <?php echo $data_tahun; ?> , Status Kendaraan =

	<?php
	if ($data_status == "0") {
		echo "Truk";
	} else if ($data_status == "1") {

		echo "Operasional";
	} else {
		echo "Komersial";
	}
	?>
	<thead>
		<tr>
			<th>No</th>
			<th>Plat Nomor</th>
			<th>Nomor Rangka</th>
			<th>Nomor Mesin</th>
			<th>Nominal Pajak</th>
			<th>Nama Pemilik</th>
			<th>Alamat</th>
			<th>Tahun Registrasi</th>
			<th>Type</th>
			<th>Jenis</th>
			<th>Merek</th>
			<th>Tahun Pembuatan</th>
			<th>Isi Silinder</th>
			<th>Berlaku S/d</th>


		</tr>
	</thead>
	<tbody>




		<?php
		$no = 1;
		if ($data_stnk->num_rows() > 0) {
			foreach ($data_stnk->result_array() as $tampil) {
		?>


				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $tampil['nomor_registrasi']; ?></td>
					<td><?php echo $tampil['nomor_rangka']; ?></td>
					<td><?php echo $tampil['nomor_mesin']; ?></td>
					<td><?php echo $tampil['nominal']; ?></td>
					<td><?php echo $tampil['nama_pemilik']; ?></td>
					<td><?php echo $tampil['alamat']; ?></td>
					<td><?php echo $tampil['tahun_registrasi']; ?></td>
					<td><?php echo $tampil['nama_ga_master_type']; ?></td>
					<td><?php echo $tampil['nama_ga_master_jenis']; ?></td>
					<td><?php echo $tampil['merk']; ?></td>
					<td><?php echo $tampil['tahun_pembuatan']; ?></td>
					<td><?php echo $tampil['isi_silinder']; ?></td>
					<td><?php echo $tampil['berlaku_sampai']; ?></td>



				</tr>
			<?php
				$no++;
			}
		} else { ?>
			<tr>
				<td colspan="14">No Result Data</td>
			</tr>
		<?php

		}
		?>

	</tbody>
</table>