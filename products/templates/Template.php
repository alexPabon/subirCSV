<?php
class Template{

	public static function menu(){ ?>
        <nav id="menuPrincipal">
            <div class="inicio">
                <h2><a href="/">Inicio</a></h2>
                <span class="btnBurger"><hr><hr><hr></span>
            </div>
            <div id="contBotons" class="menu">

            </div>
        </nav>
<?php }

	public static function footer($usuario=NULL){?>
		<footer>
			<p title="Formulario de contacto"><b>contacto:</b><br><b>Alexander Pabon</b>: alepabon@gmail.com</p>
		</footer>
	<?php }
}