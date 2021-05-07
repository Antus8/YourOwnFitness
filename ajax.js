<script type="text/javascript">

var i = 0;
		 function move(identifier) {
		   if (i == 0) {
		     i = 1;
		     var elem = document.getElementById(identifier);
		     var width = 1;
		     var id = setInterval(frame, 10);
		     function frame() {
		       if (width >= 100) {
		         clearInterval(id);
		         i = 0;
		       } else {
		         width++;
		         elem.style.width = width + "%";
		       }
		     }
		   }
		 }
	
	
	$(document).ready(function () {
		$('#button_progress0').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training0').serialize(),
			dataType: "text",
			success: function(){
				move(myBar0);
			}
			})
		})		
    });
	
	$(document).ready(function () {
		$('#button_progress1').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training1').serialize(),
			dataType: "text",
			success: function(){
				move();
			}
			})
		})		
    });
	$(document).ready(function () {
		$('#button_progress2').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training2').serialize(),
			dataType: "text",
			success: function(result){
			}
			})
		})		
    });
	$(document).ready(function () {
		$('#button_progress3').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training3').serialize(),
			dataType: "text",
			success: function(result){
			}
			})
		})		
    });
	$(document).ready(function () {
		$('#button_progress4').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training4').serialize(),
			dataType: "text",
			success: function(result){
			}
			})
		})		
    });
	$(document).ready(function () {
		$('#button_progress5').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training5').serialize(),
			dataType: "text",
			success: function(result){
			}
			})
		})		
    });
	$(document).ready(function () {
		$('#button_progress6').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training6').serialize(),
			dataType: "text",
			success: function(result){
			}
			})
		})		
    });
	
	$(document).ready(function () {
		$('#button_progress7').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training7').serialize(),
			dataType: "text",
			success: function(result){
			}
			})
		})		
    });
	$(document).ready(function () {
		$('#button_progress8').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training8').serialize(),
			dataType: "text",
			success: function(result){
			}
			})
		})		
    });
	
	$(document).ready(function () {
		$('#button_progress9').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training9').serialize(),
			dataType: "text",
			success: function(result){
			}
			})
		})		
    });
	
	$(document).ready(function () {
		$('#button_progress10').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "update_progress.php",
			data: $('#my_training10').serialize(),
			dataType: "text",
			success: function(result){
			}
			})
		})		
    });
	
</script>