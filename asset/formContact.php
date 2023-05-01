<?php function formCont($conexion){ ?>
 <?php 

date_default_timezone_set("Europe/Madrid");
$fecha_actual= date("Y-m-d H:i:s");
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['send'])) {
    $mensajeEnviado="";
    $mensajeError="";
    if (!empty($_POST['name'])) {
        $name = test_input($_POST['name']);
    }else{
        $error_name=true;
    }
    if (!empty($_POST['email'])) {
        $email = test_input($_POST['email']); 
    }else{
        $error_email = true;
    }
    if (!empty($_POST['message'])) {
        $text = test_input($_POST['message']);     
    }else{
        $error_message = true;
    }

    if ($error_name== true or $error_email==true or $error_message==true) {
        $mensajeError="
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>
        <script type='text/javascript'>
        swal.fire({
            title:'Formulario Vacio',
            text:'El formulario no puede estar vacío',
            icon:'error'
            });
            setTimeout(function(){window.location.href='/';},5000);
            </script>"; 
        }

        try {
            $stmt =$conexion->prepare("INSERT INTO contact(name,email,message,fecha) VALUES (?,?,?,?)");
            $stmt->bindParam(1,$name);
            $stmt->bindParam(2,$email);
            $stmt->bindParam(3,$text);
            $stmt->bindParam(4,$fecha_actual);
            $stmt->execute();
            $conexion=null;
            if ($stmt->rowCount()) {

                $mensajeEnviado="
                <script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>
                <script type='text/javascript'>
                swal.fire({
                    title:'Mensaje Enviado',
                    text:'Datos enviados correctamente',
                    icon:'success'
                    });
                    setTimeout(function(){window.location.href='/';},4000);
                    </script>"; 

                }else{
                    $mensajeEnviado="
                    <script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>
                    <script type='text/javascript'>
                    swal.fire({
                        title:'Mensaje No Enviado',
                        text:'Datos incorrectos vuelva a intentarlo',
                        icon:'error'
                        });
                        </script>"; 

                    }


                } catch (Exception $e) {
                    echo "Error". $e->getMessage(); 
                }
            }

            ?>
<section class="contact section-padding" id="contact">
    <div class="container">
        <div class="main-heading mx-auto">
            <h2 class="main-head-animation">Contacto</h2>
            <span>Enviar Mensaje</span>
        </div>
        <div class="contact-field my-4 row flex-wrap-reverse">
            <div class="contact-info-field p-2 col-12 col-md-4">
                <div class="location">
                    <i class="fas fa-street-view"></i>
                    <h5>Ubicación</h5>
                    <address class="mb-0">España</address>
                </div>
                <div class="email">
                    <i class="far fa-envelope"></i>
                    <h5>Email</h5>
                    <a href="mailto:tomas@example.com">biscoderdev@gmail.com</a>
                </div>
                <!--
                <div class="phone">
                    <i class="fas fa-phone-alt"></i>
                    <h5>Phone</h5>
                    <a href="tel:#">00000000</a>
                </div>
                -->
                <div class="social">
                    <i class="fas fa-share-alt"></i>
                    <h5>Redes Sociales</h5>
                    <div class="social-links pt-2 d-flex align-items-center justify-content-center">
                        <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="mx-2" href="https://www.linkedin.com/in/bismarck-colombo-16246222a/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="contact-form-field p-4 col-12 col-md-8">
                <form class="contact-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="name mb-3">
                        <input class="w-100 p-2" type="text" name="name" required placeholder="Nombre" id="nombre">
                    </div>
                    <div class="email mb-3">
                        <input class="w-100 p-2" type="email" name="email" id="correo" placeholder="Email">
                    </div>
                    <div class="message mb-3">
                        <textarea class="w-100 p-2" name="message" required placeholder="Mensaje" id="texto" onkeyup="countChars(this);"></textarea>
                    </div>
                    <p class="mt-3 " id="charNum">0 caracteres</p>
                    <button type="submit" name="send">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>
 <?php if (!empty($mensajeEnviado)) {   
            echo $mensajeEnviado;
        } 
        if (!empty($mensajeError)) {
            echo $mensajeError;
        }
        ?>
<?php } ?>