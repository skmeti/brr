<div class="py-2 text-center flex-column bg-dark text-white">
	<h1 data-aos="zoom-in">Pricing</h1>
</div>
<div data-aos="fade-up" id="pricing" class="row justify-content-center">
	<a href="/images/pricing/Kardis-fox-570.jpg" data-toggle="lightbox" data-gallery="example-gallery">
		<img src="/images/pricing/Kardis-fox-570.jpg" class="img-fluid">
	</a>
	<a href="/images/pricing/Zar-47.jpg" data-toggle="lightbox" data-gallery="example-gallery">
		<img src="/images/pricing/Zar-47.jpg" class="img-fluid">
	</a>
	<a href="/images/pricing/Betina-700.jpg" data-toggle="lightbox" data-gallery="example-gallery">
		<img src="/images/pricing/Betina-700.jpg" class="img-fluid">
	</a>
</div>

<script>
$(document).ready(function(){
    $("#nav-8").addClass("active");
});
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({alwaysShowClose: true});
});
</script>

<style>
#pricing a img{
	width:550px;
}
</style>
