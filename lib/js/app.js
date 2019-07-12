$(document).ready(function () {
	console.log('Bismillah')
	setInterval(function() {
		let load_page = $('#load_page').val()
		if (load_page == 'true'){
			load()
		}
	},1000)

	$('#menu').click(function () {
		var status = $(this).attr('data')
		if (status == 'buka') {
			$(this).attr('data','tutup')
			$('.main-panel').removeAttr('style')
			$('#sidebar').show()
		}else{
			$('.main-panel').css({'transtion':'0s','width':'100%'})
			$(this).attr('data','buka')
			$('#sidebar').hide()
		}
	})

	$('#tamplate').val('views/dashboard.php')
	$('#refresh_page').click(function () {
		$('#load_page').val('true')
		var locpage = $('#tamplate').val()
		load()
		$('#app').load(locpage);
	})

	//ROUTE
	load()
	$('#app').load('views/dashboard.php');

	$('#dashboard').click(function () {
		$('#load_page').val('true')
		$('#tamplate').val('views/dashboard.php')
		load()
		$('#menu').attr('data','buka')
		$('.main-panel').attr('style','width:100%')
		$('#sidebar').hide()
		$('#caa').removeClass('link-active')
		$('#OfferingLatter').removeClass('link-active')
		$('#dataNasabah').removeClass('link-active')
		$('#dataAplikasiOrder').removeClass('link-active')
		$('#KreditChecking').removeClass('link-active')
		$('#SurveyKomite').removeClass('link-active')
		$('#TrackingOrder').removeClass('link-active')
		$('#MemoKreditAo').removeClass('link-active')
		$('#MemoKreditCa').removeClass('link-active')
		$('#Legal').removeClass('link-active')
		$(this).addClass('link-active')
		$('#app').load('views/dashboard.php');
	})

	$('#dataNasabah').click(function () {
		$('#load_page').val('true')
		$('#tamplate').val('views/content/data/data-c-nasabah.php')
		load()
		$('#menu').attr('data','buka')
		$('.main-panel').attr('style','width:100%')
		$('#sidebar').hide()
		$('#caa').removeClass('link-active')
		$('#OfferingLatter').removeClass('link-active')
		$('#MemoKreditCa').removeClass('link-active')
		$('#dashboard').removeClass('link-active')
		$('#dataAplikasiOrder').removeClass('link-active')
		$('#TrackingOrder').removeClass('link-active')
		$('#KreditChecking').removeClass('link-active')
		$('#MemoKreditAo').removeClass('link-active')
		$('#Legal').removeClass('link-active')
		$('#SurveyKomite').removeClass('link-active')
		$(this).addClass('link-active')
		$('#app').load('views/content/data/data-c-nasabah.php');
	})

	$('#dataAplikasiOrder').click(function () {
		$('#load_page').val('true')
		$('#tamplate').val('views/content/data/data-aplikasi-order.php')
		load()
		$('#menu').attr('data','buka')
		$('.main-panel').attr('style','width:100%')
		$('#sidebar').hide()
		$('#caa').removeClass('link-active')
		$('#OfferingLatter').removeClass('link-active')
		$('#MemoKreditCa').removeClass('link-active')
		$('#dashboard').removeClass('link-active')
		$('#dataNasabah').removeClass('link-active')
		$('#TrackingOrder').removeClass('link-active')
		$('#KreditChecking').removeClass('link-active')
		$('#MemoKreditAo').removeClass('link-active')
		$('#Legal').removeClass('link-active')
		$('#SurveyKomite').removeClass('link-active')
		$(this).addClass('link-active')
		$('#app').load('views/content/data/data-aplikasi-order.php');
	})

	$('#TrackingOrder').click(function () {
		$('#load_page').val('true')
		$('#tamplate').val('views/content/data/data-tracking-order.php')
		load()
		$('#menu').attr('data','buka')
		$('.main-panel').attr('style','width:100%')
		$('#sidebar').hide()
		$('#caa').removeClass('link-active')
		$('#OfferingLatter').removeClass('link-active')
		$('#MemoKreditCa').removeClass('link-active')
		$('#dashboard').removeClass('link-active')
		$('#dataNasabah').removeClass('link-active')
		$('#dataAplikasiOrder').removeClass('link-active')
		$('#KreditChecking').removeClass('link-active')
		$('#MemoKreditAo').removeClass('link-active')
		$('#Legal').removeClass('link-active')
		$('#SurveyKomite').removeClass('link-active')
		$(this).addClass('link-active')
		$('#app').load('views/content/data/data-tracking-order.php');
	})

	$('#KreditChecking').click(function () {
		$('#load_page').val('true')
		$('#tamplate').val('views/content/data/data-kredit-checking.php')
		load()
		$('#menu').attr('data','buka')
		$('.main-panel').attr('style','width:100%')
		$('#sidebar').hide()
		$('#caa').removeClass('link-active')
		$('#OfferingLatter').removeClass('link-active')
		$('#MemoKreditCa').removeClass('link-active')
		$('#dashboard').removeClass('link-active')
		$('#dataNasabah').removeClass('link-active')
		$('#dataAplikasiOrder').removeClass('link-active')
		$('#TrackingOrder').removeClass('link-active')
		$('#MemoKreditAo').removeClass('link-active')
		$('#Legal').removeClass('link-active')
		$('#SurveyKomite').removeClass('link-active')
		$(this).addClass('link-active')
		$('#app').load('views/content/data/data-kredit-checking.php');
	})

	$('#SurveyKomite').click(function () {
		$('#load_page').val('true')
		$('#tamplate').val('views/content/data/data-cek-survey-komite.php')
		load()
		$('#menu').attr('data','buka')
		$('.main-panel').attr('style','width:100%')
		$('#sidebar').hide()
		$('#caa').removeClass('link-active')
		$('#OfferingLatter').removeClass('link-active')
		$('#MemoKreditCa').removeClass('link-active')
		$('#dashboard').removeClass('link-active')
		$('#dataNasabah').removeClass('link-active')
		$('#dataAplikasiOrder').removeClass('link-active')
		$('#TrackingOrder').removeClass('link-active')
		$('#MemoKreditAo').removeClass('link-active')
		$('#Legal').removeClass('link-active')
		$('#KreditChecking').removeClass('link-active')
		$(this).addClass('link-active')
		$('#app').load('views/content/data/data-cek-survey-komite.php');
	})

	$('#MemoKreditAo').click(function () {
		$('#load_page').val('true')
		$('#tamplate').val('views/content/data/data-memo-kredit-ao.php')
		load()
		$('#menu').attr('data','buka')
		$('.main-panel').attr('style','width:100%')
		$('#sidebar').hide()
		$('#caa').removeClass('link-active')
		$('#OfferingLatter').removeClass('link-active')
		$('#MemoKreditCa').removeClass('link-active')
		$('#dashboard').removeClass('link-active')
		$('#dataNasabah').removeClass('link-active')
		$('#dataAplikasiOrder').removeClass('link-active')
		$('#TrackingOrder').removeClass('link-active')
		$('#KreditChecking').removeClass('link-active')
		$('#Legal').removeClass('link-active')
		$('#SurveyKomite').removeClass('link-active')
		$(this).addClass('link-active')
		$('#app').load('views/content/data/data-memo-kredit-ao.php');
	})

	$('#MemoKreditCa').click(function () {
		$('#load_page').val('true')
		$('#tamplate').val('views/content/data/data-memo-kredit-ca.php')
		load()
		$('#menu').attr('data','buka')
		$('.main-panel').attr('style','width:100%')
		$('#sidebar').hide()
		$('#caa').removeClass('link-active')
		$('#OfferingLatter').removeClass('link-active')
		$('#MemoKreditAo').removeClass('link-active')
		$('#dashboard').removeClass('link-active')
		$('#dataNasabah').removeClass('link-active')
		$('#dataAplikasiOrder').removeClass('link-active')
		$('#TrackingOrder').removeClass('link-active')
		$('#KreditChecking').removeClass('link-active')
		$('#Legal').removeClass('link-active')
		$('#SurveyKomite').removeClass('link-active')
		$(this).addClass('link-active')
		$('#app').load('views/content/data/data-memo-kredit-ca.php');
	})

	$('#caa').click(function () {
		$('#load_page').val('true')
		$('#tamplate').val('views/content/data/data-caa.php')
		load()
		$('#menu').attr('data','buka')
		$('.main-panel').attr('style','width:100%')
		$('#sidebar').hide()
		$('#MemoKreditAo').removeClass('link-active')
		$('#OfferingLatter').removeClass('link-active')
		$('#MemoKreditCa').removeClass('link-active')
		$('#dashboard').removeClass('link-active')
		$('#dataNasabah').removeClass('link-active')
		$('#dataAplikasiOrder').removeClass('link-active')
		$('#TrackingOrder').removeClass('link-active')
		$('#KreditChecking').removeClass('link-active')
		$('#Legal').removeClass('link-active')
		$('#SurveyKomite').removeClass('link-active')
		$(this).addClass('link-active')
		$('#app').load('views/content/data/data-caa.php');
	})

	$('#Legal').click(function () {
		$('#load_page').val('true')
		$('#tamplate').val('views/content/data/data-legal.php')
		load()
		$('#menu').attr('data','buka')
		$('.main-panel').attr('style','width:100%')
		$('#sidebar').hide()
		$('#caa').removeClass('link-active')
		$('#MemoKreditAo').removeClass('link-active')
		$('#OfferingLatter').removeClass('link-active')
		$('#MemoKreditCa').removeClass('link-active')
		$('#dashboard').removeClass('link-active')
		$('#dataNasabah').removeClass('link-active')
		$('#dataAplikasiOrder').removeClass('link-active')
		$('#TrackingOrder').removeClass('link-active')
		$('#KreditChecking').removeClass('link-active')
		$('#SurveyKomite').removeClass('link-active')
		$(this).addClass('link-active')
		$('#app').load('views/content/data/data-legal.php');
	})

	$('#OfferingLatter').click(function () {
		$('#load_page').val('true')
		$('#tamplate').val('views/content/data/data-offering.php');
		load()
		$('#menu').attr('data','buka')
		$('.main-panel').attr('style','width:100%')
		$('#sidebar').hide()
		$('#caa').removeClass('link-active')
		$('#MemoKreditAo').removeClass('link-active')
		$('#MemoKreditCa').removeClass('link-active')
		$('#dashboard').removeClass('link-active')
		$('#dataNasabah').removeClass('link-active')
		$('#dataAplikasiOrder').removeClass('link-active')
		$('#TrackingOrder').removeClass('link-active')
		$('#KreditChecking').removeClass('link-active')
		$('#Legal').removeClass('link-active')
		$('#SurveyKomite').removeClass('link-active')
		$(this).addClass('link-active')
		$('#app').load('views/content/data/data-offering.php');
	})
	function load() {
	    var elem = document.getElementById("myBar");
	    var width = 1;
	    var id = setInterval(frame, 10);
	    function frame() {
	        if (width >= 100) {
	            clearInterval(id);
	        } else {
	            width++;
	            elem.style.width = width + '%';
	        }
	    }
	}
})
