
<footer class="mt-5 bg-light">
 <!--  <div class="contacto">
    <h1>¿Quieres contactarnos?</h1>
    <div class="contacto-conte">
    <form class="form-group">
      <div class="form-control">
        <label for="name">Nombre</label>
        <input type="text" id="name" placeholder="Nombre">  
      </div>
      <div class="form-control">
        <label for="mail">Correo</label>
        <input type="email" id="mail" placeholder="Correo">  
      </div>
      <div class="form-control">
        <label for="mensaje">Mensaje</label>
      ​  <textarea id="txtArea" placeholder="Dejanos tu mensaje" form="form-group"></textarea>
      </div>
         <button>Enviar</button>
    </form>
    </div>
  </div> -->
  <div class="container-responsive">

    <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="row border-bottom pt-5 pb-4" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?>

    <div class="row pt-3">
      <div class="col">
        <p class="text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
      </div>
    </div>

  </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
