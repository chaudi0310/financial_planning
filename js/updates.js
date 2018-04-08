$(document).on("click", ".update-funding", function(){
			var loanamount = $(this).data('loan-amount');
			var anual_interest = $(this).data('anual-loan');
			$(".modal-body #loan-amount").val(loanamount);
			$(".modal-body #anual-interest").val(anual_interest);
});