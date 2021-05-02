<script type="text/javascript">
	$(document).ready(function () {
		$('#cardiosubmit').click(function (e) {
            e.preventDefault();
			$.ajax({
			method: "post",
			url: "store_training.php",
			data: $('#trainingform').serialize(),
			dataType: "text",
			success: function(result){
				alert(result);
			}
			})
		})		
    });
</script>