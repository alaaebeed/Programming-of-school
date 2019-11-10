 <?php 
    $pageTitle = "contact" ;
  

    ?>


  <!--THis is the Contact Form !-->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">I'll be in touch soon</h4>
    </div>
    <div class="modal-body">
            <form id="contact-form" method="post" action="contact-2.php" role="form">

 <div class="messages"></div>
        <div class="controls">
        <div class="row">
            <div class="col-md-6">
        <div class="form-group">
         <label for="form_name">Firstname *</label>                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
        </div>
            </div>
         <div class="col-md-6">
          <div class="form-group">
        <label for="form_lastname">Lastname *</label>
       <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
    <div class="help-block with-errors"></div>
                                    </div>
            </div>
                            </div>
            <div class="row">
                <div class="col-md-6">
        <div class="form-group">
         <label for="form_email">Email *</label>
         <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
        <div class="help-block with-errors"></div>
        </div>
     </div>
    <div class="col-md-6">
     <div class="form-group">
     <label for="form_phone">Phone</label>
     <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
     <div class="help-block with-errors"></div>
              </div>
                                </div>
                            </div>
        <div class="row">
     <div class="col-md-12">
        <div class="form-group">
           <label for="form_message">Message *</label>
        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
         <div class="help-block with-errors"></div>
                                    </div>
           </div>
                            <div class="col-md-12">
<input type="submit" class="btn btn-success btn-send" value="Send message">
                                    
                                </div>                
 </div>
<div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                    
         
</div>
                             
                            </div>
                       

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

      
        </div>
     
      
  </div>