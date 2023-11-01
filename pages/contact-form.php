           
                <div class="row" id="form_container">
                    <form method="post" id="reused_form">
                        <div class="col-xs-12">
                            <input type="text" class="col-xs-12" name="title" placeholder="Title" required>
                        </div>
                        <div class="col-xs-12">
                            <textarea class="col-xs-12" name="message" id="message" maxlength="6000" rows="7" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-xs-12 d-flex flex-wrap j-sbet">    
                            <input type="text" id="name" name="name" placeholder="Name and Surname" required>
                            <input type="email" id="email" name="email" placeholder="Email" required>
							<input type="tel" id="telefon" name="telefon" placeholder="Phone Number" required>
                            <button type="submit" class="btn btn-lg" >Send &rarr;</button>
                        </div>
                    </form>
                    <div id="success_message"> <h3>Message succesfully sent.</h3> </div>
                    <div id="error_message"> <h3>Error:</h3> Please fill out all fields and try again </div>
                </div>
<style>
#success_message, #error_message{
    text-align:center;
    width:100%;
    height:100%;
    display:none;
}
#form_container{
    background: #86DCFF;
    margin-bottom:20px;
    max-width:700px;
    padding:10px;
}
#form_container input, #form_container textarea{
    text-align:center;
    border:none;
    outline:none;
    padding:10px;
    color: #b0b0ad; 
    background:#f1f8fb;
    margin-bottom:15px;
}
.btn{
    background:#E8B429;
    margin-left:auto;
    margin-right:auto;
}
.btn:hover{
    background:#d78e00;
    -webkit-transition: background 0.5s, color 0.5s; /* Safari */
    transition: background 0.5, color 0.5s;
}
#reused_form .flex input:first-child{
    margin-right:12px;
}
#reused_form .flex input{
    width:49%;
}
#reused_form:first-child{
    margin-top:10px;
}
#form_container input:focus, #form_container textarea:focus{
    background:#fff;
}
::placeholder{
    color: #808080;
}
</style>
