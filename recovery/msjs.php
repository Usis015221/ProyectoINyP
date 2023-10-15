
 <?php
if(isset($_REQUEST['errorEmail'])){ ?>
         <div class="alert show showAlert" style="color:#fff;">
               <strong> Ops.! </strong>
               El Correo no Existe, por favor coloque su correo.
        </div>
<?php }

if(isset($_REQUEST['email'])){ ?>
    <div class="alert show showAlert" style="color:#fff;">
          <p>
            Su contraseña fue cambiada, 
            <p>
          comuniquese con soporte tecnico
          <p> 
          para que le proporcionen su nueva contraseña.
          <p>
          
   </div>
<?php } ?>