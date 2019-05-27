	<?php
	$data = $this->session->userdata("nama");
	if (!isset($data)) {
		redirect('login');
	}
	?>
	<?php
	function format_ribuan($nilai)
	{
		$n = number_format($nilai, 0, ',', ',');
		$m = "" . $n . ".00";
		return $m;
	}
	function TanggalIndo($date)
	{
		$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

		$tahun = substr($date, 0, 4);
		$bulan = substr($date, 5, 2);
		$tgl   = substr($date, 8, 2);

		$result = $tgl . " " . $BulanIndo[(int)$bulan - 1] . " " . $tahun;
		return ($result);
	}
	?>

	<h6>
		<center># Rekap Tanggal <?php echo TanggalIndo($tgl_awal) ?> Sampai <?php echo TanggalIndo($tgl_akhir) ?></center>
	</h6>
	<table border="1" width="100%">
		<thead>
			<tr>
				<th style="background-color:black; color: white;">
					<center>Kode</center>
				</th>
				<th style="background-color:black; color: white;">
					<center>Pelanggan</center>
				</th>
				<th style="background-color:black; color: white;">
					<center>Tanggal</center>
				</th>
				<th style="background-color:black; color: white;">
					<center>Nominal</center>
				</th>
				<th style="background-color:black; color: white;">
					<center>Kasir</center>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($ambil as $data) {
				?>
				<tr>
					<td><?php echo $data->id_transaksi ?></td>
					<td><?php echo $data->nama_pelanggan ?></td>
					<td><?php echo TanggalIndo($data->tanggal) ?></td>
					<td width="16%" style="text-align: right;"><?php echo format_ribuan($data->total_harga) ?></td>
					<td><?php echo $data->nama_pegawai ?></td>

				</tr>
			<?php
		}
		?>
		</tbody>
	</table>