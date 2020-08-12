<?php 

include('view/includes/header.php');
?>
<div class="header">
<?php include('view/includes/navbar.php');?>
    <form class="row d-flex m-5">
       <div class="col px-md-5">
            <div class="row  mb-2">
                <div class="col px-md-6 d-flex flex-column">
                    <label for="" class="">Name</label>
                    <input class="p-2" type="text" placeholder="Full Name"name="name">
                </div>
                <div class="col px-md-6 d-flex flex-column">
                    <label for="" class="">Phone</label>
                    <input class="p-2" type="text" placeholder="Phone" name="phone">
                </div>
                
            </div >
            <div class="d-flex flex-column pb-3">
                <label for="">Email</label>
                <input class="p-2" type="email" placeholder="Your Email" name="email">
            </div>
            <div class="d-flex flex-column">
                <label for="">Message</label>
                <textarea class="p-2" name="msg" id="" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <!-- <input type="submit" name="envey" value="Envey"> -->
            <button type="button" class="btn btn-primary m-2">Send</button>
        </div>
       <div class="col px-md-5">
           <div class="d-flex p-5"><i class="fas fa-map-marker-alt"></i></div>
           <div class="d-flex p-5"><i class="fas fa-phone"></i>+212617198646</div>
           <div class="d-flex p-5"><i class="fas fa-at"></i><p>simozoubir012@gmail.com</p></div>
       
       </div>
    </form>





</div>

<?php
include('view/includes/footer.php');

?>