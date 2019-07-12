function changeDate(tgl) {
	if (tgl == null) {
		return console.log('kosong')
	}else{
		var tanggalWaktu = tgl.split(' ')

	if (tanggalWaktu.length == 1) {
		var tanggalReal = tanggalWaktu[0]

		var tglblnthn = tanggalReal.split('-')
		var tanggal = tglblnthn[2]
		var bulan = tglblnthn[1]
		var tahun = tglblnthn[0]

		var waktu = ''
	}else{
		var tanggalReal = tanggalWaktu[0]

		var tglblnthn = tanggalReal.split('-')
		var tanggal = tglblnthn[2]
		var bulan = tglblnthn[1]
		var tahun = tglblnthn[0]

		var waktu = tanggalWaktu[1]
	}

		var tgl = ''
		switch (bulan) {
			case '01':
				return tgl = tanggal+' Januari '+tahun+' '+waktu
				break;
			case '02':
				return tgl = tanggal+' Februari '+tahun+' '+waktu
				break;
			case '03':
				return tgl = tanggal+' Maret '+tahun+' '+waktu
				break;
			case '04':
				return tgl = tanggal+' April '+tahun+' '+waktu
				break;
			case '05':
				return tgl = tanggal+' Mei '+tahun+' '+waktu
				break;
			case '06':
				return tgl = tanggal+' Juni '+tahun+' '+waktu
				break;
			case '07':
				return tgl = tanggal+' Juli '+tahun+' '+waktu
				break;
			case '08':
				return tgl = tanggal+' Agustus '+tahun+' '+waktu
				break;
			case '09':
				return tgl = tanggal+' September '+tahun+' '+waktu
				break;
			case '10':
				return tgl = tanggal+' Oktober '+tahun+' '+waktu
				break;
			case '11':
				return tgl = tanggal+' November '+tahun+' '+waktu
				break;
			default:
				return tgl = tanggal+' Desember '+tahun+' '+waktu
				break;
		}
	}
}
