                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <footer style="background: #f0f0f0; margin: 0; height: 50px; padding: 20px;">
            Copyright 2015. All right reserved. Powered by K SOFT SOLUTIONS
        </footer>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=  base_url()?>cjfksoft/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=  base_url()?>cjfksoft/js/admin/bootstrap.js"></script>
    
</body>

</html>

<script>
	$(document).ready(function() {
		var base_url = <?=base_url();?>;
		$("#search_order").click(function(e) {
			e.preventDefault();
			var input_text = $("#input_text").val();
			var input_criteria = $("#input_criteria").val();
			if(input_text) {
				$.post(
					base_url + "order/ordersearch",
					{
						input_t: input_text, input_c: input_criteria
					},
					function(results) {
						alert(results);	
					}
				);
			}
		});
	});
</script>