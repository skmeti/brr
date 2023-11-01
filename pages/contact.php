<div class="py-2 text-center flex-column bg-dark text-white">
	<h1 data-aos="zoom-in">Contact</h1>
</div>
<div class="container">
	<div class="row m-0 p-3 text-center">

	<div class="col-lg-8" id="form_container">
                    <form method="post" id="reused_form">
                        <div class="col-xs-12">
                            <input type="text" class="col-xs-12" name="title" placeholder="Title" required>
                        </div>
                        <div class="col-xs-12">
                            <textarea class="col-xs-12" name="message" id="message" maxlength="6000" rows="7" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-xs-12">    
                            <input type="text" id="name" name="name" placeholder="Name and Surname" required>
                            <input type="email" id="email" name="email" placeholder="Email" required>
							<input type="tel" id="telefon" name="telefon" placeholder="Phone Number" required>
                        </div>
	<button type="submit" class="btn-secondary btn-lg" >Send &rarr;</button>
                    </form>
                    <div id="success_message"> <h3>Message succesfully sent.</h3> </div>
                    <div id="error_message"> <h3>Error:</h3> Please fill out all fields and try again </div>
                </div>	

	<div class="col-lg-4 d-flex align-items-center flex-column">
	<img src="/images/logo.png"
	<p>Tel: +385-91-254-8869</p>
	<p>Address: Prijeških Lavandijera 11</p>
	<p>Mail: info@blueadriarent.com</p>
	</div>
</div>
	
</div>


<script>
$(document).ready(function(){
    $("#nav-6").addClass("active");
});
</script>

<style>
#success_message, #error_message{
    text-align:center;
    width:100%;
    height:100%;
    display:none;
}
#form_container input, #form_container textarea{
    text-align:center;
    border:none;
    outline:none;
    padding:10px;
    color: #b0b0ad; 
    background:#f1f8fb;
    margin-bottom:15px;
    width:80%;
    border-radius:10px;
    border:1px solid #cecece;
}
#form_container input:focus, #form_container textarea:focus{
    background:#fff;
}
::placeholder{
    color: #808080;
}
</style>
