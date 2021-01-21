 <input type="text" id="approved_loan_amount" onclick="computeLoan()" class="altField" name="bookingdate" value="">

 <input type="text" id="approved_loan_amount" onclick="computeLoan()"  name="bookingdate" value="">



 <div id="abc"></div>

 <script type="text/javascript">
 	function computeLoan(){
var abc = document.getElementById('approved_loan_amount').value;
abc = abc.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById('abc').innerHTML = abc;
}
 </script>    

