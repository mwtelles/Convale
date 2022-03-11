<!-- Vendor -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/jquery.vide.min.js"></script>
<script src="vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="vendor/nivo-slider/jquery.nivo.slider.min.js"></script>
<script src="js/views/view.contact.js"></script>

<!-- Demo -->
<script src="js/demos/demo-construction.js"></script>	

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>




		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
	-->

	<script type="text/javascript">

		$(window).ready(function(){
			function formatTime(time)
			{
				moment.locale('pt-br');
				var new_time = moment(time, "YYYYMMDD").fromNow();
			}


			var esportes = [
			"Natação",
			"Futebol",
			"Vôlei",
			"Basquete"
			];

			$('#pesquisar').autocomplete({

				source: function(request, response) {
					$.ajax({
						url: "/busca/"+request.term,
						data: {
							term : request.term
						},
						dataType: "json",
						success: function(data){
							var resp = $.map(data,function(obj){
								return obj;
							});
							var teste = '<a href="'+resp.post+'/'+resp.id+'">'+resp.title+'</a>'
							response(resp);
						}
					});
				},
				select: function (event, ui) {
					$("#pesquisar").val(ui.item.title);

					return false;
				},
				minLength: 1
			}) .data("ui-autocomplete")._renderItem = function (ul, item) {
				console.log(item)
				return $("<li>")
				.data("item.autocomplete", item)
				.append("<a href='/noticia/"+item.id+"'>" + item.title +"</a><hr>")
				.appendTo(ul);
			};
		});


	</script>