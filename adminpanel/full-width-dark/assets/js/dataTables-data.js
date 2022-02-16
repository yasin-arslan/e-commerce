/*DataTable Init*/

"use strict"; 

$(document).ready(function() {
	"use strict";
	
	$('#datable_1').DataTable({"language": {
		"search": "Ara:" ,
		sLengthMenu: "_MENU_ gösteriliyor",
		"info": " _TOTAL_ kayıt arasından _START_ - _END_ arası gösteriliyor",
		zeroRecords: "Kayıt Bulunamadı.",
		"infoEmpty": " _TOTAL_ kayıt arasından 0 - 0 arası gösteriliyor",
		"infoFiltered": "",
		"paginate":{
		"previous": "Önceki",
		"next":"Sonraki"
		}}
	  });
    $('#datable_2').DataTable({ "lengthChange": false});
} );