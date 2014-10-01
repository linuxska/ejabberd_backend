<?php use_stylesheet('sfGuardPlugin/signin.css')?>

<div id="text">
    <h2>Bienvenidos al Sistema Mensajeria de </br>
        Artexport</h2>
    <dl>
        <dt>Inicie sesión</dt>
        <dd>Ingrese al sistema proporcionando sus datos de acceso en el formulario
        de la derecha.</dd>
        <dd style="font-style: italic">Nota: Si accede desde un equipo público no
         elija la opción <em>¿Recordar?</em></dd>

        <dt>Ayuda</dt>
        <dd>
        <p>Director y personal administrativo, si no recuerdan sus datos de acceso, por favor póngase en contacto con
        el administrador en la siguiente dirección de correo electrónico 
        <strong><a href="mailto:abrico@gdlicanet.net.mx">abrico@gdlicanet.net.mx</a></strong>.</p>
        </dd>
    </dl>
</div>
<div id="login">
    <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
        <table>
            <?php echo $form ?>
        </table>
        <input type="submit" value="Accesar" />
	 
    </form>
</div>

