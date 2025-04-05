<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


    <div class=container>
      <div class="wrapper-1">
        <div class="wrapper-2">
          
          <h1 class="success-heading">Success!</h1>
          <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
          <h2>One of our friendly consultants will be in touch!!!</h2>
          
        </div>
      </div>
    </div>    
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">

<style>
.success-icon {
  width: auto;
  font-family: 'Kaushan Script', cursive;
  font-size: 3vw;
  font-weight: bold;
}
.main-content__checkmark {
  font-size: 4.0625rem !important;
  line-height:1 !important;
  color:#24b663;
}
.wrapper-1{
  width:100%;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
.wrapper-4{
  padding :30px;
  text-align:center;
}
.success-heading{
  font-family: 'Kaushan Script', cursive;
  font-size:5em;
  letter-spacing:3px;
  color: #015FC9 ;
  margin:0;
  margin:20px 0;
}
.wrapper-4 p{
  margin:0;
  font-size:1.3em;
  color:#000;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.footer{
    position: fixed;
  left: 0;
  bottom: 0;
    
}

@media screen and (max-width: 747px){
    .footer{
        position: relative;
    }
}
</style>



<?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hlabi/Desktop/work/_public_html/resources/views/success.blade.php ENDPATH**/ ?>