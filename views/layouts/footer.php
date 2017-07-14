<div id="templatemo_footer">
        <p><a href="#">Home</a> | <a href="#">Products</a> | <a href="#">About</a> | <a href="#">FAQs</a> | <a href="#">Checkout</a> | <a href="#">Contact Us</a>
        </p>

        Copyright © 2072 <a href="#">Your Company Name</a> <!-- Credit: www.templatemo.com --></div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->

<script>
	$(document).ready(function() {
		$(".addtocart").click(function () {
			var id = $(this).attr("data-id");
			$.post("/cart/addAjax/"+id, {}, function (data) {
				$("#cart-count").html(data);
			});
			return false;
		});
	});
</script>

</body>
</html>