<!-- < ?php if(have_post()) :
while(have_post()) : the_post: ?>
<h2>< ?php the_title(); ?></h2>
<p>< ?php the_content(); ?></p> -->
<!-- < ?php endwhile;
else:
    echo "<p>No hay contenido que mostrar</p>";
endif; -->
<?php get_header('echo header.php');  ?> <!--Incluye el header-->
        <h1>About Us</h1>
    
        <div>
            <p>Parrafo Uno</p>
            <p>Parrafo Dos</p>
        </div>

        <?php  get_footer('echo footer.php') ;?>