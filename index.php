<?php
get_header();
$whatsapp = get_theme_mod('set_whatsapp');
?>
<section class="about container cor-p1" id="about">
  <div class="section-titulo">
    <div class="section-titulo-icone">
      <img src="<?php echo INCLUDE_PATH ?>/dist/img/icon/barber.svg" alt="Sobre a Barbearia">
    </div>
    <h2 class="font-1-l">Barbearia Mestre</h2>
    <p class="font-2-m"><?php echo get_theme_mod('set_about_subtitle'); ?></p>
  </div>
  <div class="about-item about-img"></div>
  <div class="about-item cor-b1">
    <div class="about-contact">
      <h3 class="font-1-m">Atendimento</h3>
      <p class="font-2-m ">segunda | sexta-feira 08:00 - 19:00</p>
      <p class="font-2-m ">sábado | domingo 08:00 - 21:00</p>
    </div>
    <div class="about-contact">
      <h3 class="font-1-m">Contato</h3>
      <p class="font-2-m "><?php echo get_theme_mod('set_address'); ?></p>
      <p class="font-2-m">Whatsapp: <a href="https://wa.me/55<?php phone_cta_format($whatsapp); ?>" target="blank" rel="noopener noreferrer"><?php echo get_theme_mod('set_whatsapp'); ?></a></p>
    </div>
  </div>
  <div class="about-item about-info">
    <h3 class="font-1-m">Sobre</h3>
    <p class="font-2-m"><?php echo get_theme_mod('set_about_text'); ?></p>
    <ul class="redes-socias">
      <li>
        <a href="https://wa.me/55<?php phone_cta_format($whatsapp); ?>" target="blank" rel="noopener noreferrer">
          <img src="<?php echo INCLUDE_PATH ?>/dist/img/icon/whatsapp.svg" alt="WhatsApp">
        </a>
      </li>
      <li>
        <a href="<?php echo get_theme_mod('set_instagram'); ?>" target="blank" rel="noopener noreferrer">
          <img src="<?php echo INCLUDE_PATH ?>/dist/img/icon/instagram.svg" alt="Instagram">
        </a>
      </li>
      <li>
        <a href="tel:55<?php phone_cta_format(get_theme_mod('set_phone')); ?>" target="blank" rel="noopener noreferrer">
          <img src="<?php echo INCLUDE_PATH ?>/dist/img/icon/telefone.svg" alt="Phone">
        </a>
      </li>
    </ul>
  </div>
</section>

<section class="services-bg" id="services">
  <?php
  $args = array(
    'post_type' => 'service'
  );
  $services = new WP_Query($args); ?>
  <div class="services container">
    <div class="section-titulo cor-m1">
      <div class="section-titulo-icone">
        <img src="<?php echo INCLUDE_PATH ?>/dist/img/icon/barber.svg" alt="">
      </div>
      <h2 class="font-1-l">Nossos Serviços</h2>
      <p class="font-2-m cor-b1"><?php echo get_theme_mod('set_services_subtitle'); ?></p>
    </div>
    <ul class="services-lista cor-b0">
      <?php if ($services->have_posts()) : while ($services->have_posts()) : $services->the_post(); ?>
          <li class="services-item">
            <div class="services-item__icon">
              <img src="<?php echo get_field('icone_do_servico'); ?>" alt="<?php the_title_attribute(); ?>">
            </div>
            <h3 class="font-1-m"><?php echo get_the_title(); ?></h3>
            <p class="font-2-xs"><?php echo get_the_content(); ?></p>
          </li>
      <?php endwhile;
      else: endif;
      wp_reset_query();
      wp_reset_postdata(); ?>
    </ul>
    <a href="#contact" class="btn-main">Clique aqui para agendar</a>
  </div>
</section>

<section class="works container" id="works">
  <div class="section-titulo">
    <div class="section-titulo-icone">
      <img src="./dist/img/icon/barber.svg" alt="">
    </div>
    <h2 class="font-1-l">Nossa equipe</h2>
    <p class="font-2-m">Pellentesque blandit metus <span class="font-2-m-b">volutpat diam sollicitudin</span> sed
      maximus metus maximus</p>
  </div>

  <ul class="works-lista cor-p1">
    <li class="works-item">
      <img src="./dist/img/corte.jpg" alt="">
      <h3 class="font-1-m">Work Name</h3>
    </li>
    <li class="works-item">
      <img src="./dist/img/corte.jpg" alt="">
      <h3 class="font-1-m">Work Name</h3>
    </li>
    <li class="works-item">
      <img src="./dist/img/corte.jpg" alt="">
      <h3 class="font-1-m">Work Name</h3>
    </li>
    <li class="works-item">
      <img src="./dist/img/corte.jpg" alt="">
      <h3 class="font-1-m">Work Name</h3>
    </li>
  </ul>
</section>

<div class="contact-bg" id="contact">
  <div class="contact container">
    <div class="section-titulo cor-b1">
      <div class="section-titulo-icone">
        <img src="./dist/img/icon/barber.svg" alt="">
      </div>
      <h2 class="font-1-l">Agende seu Horário</h2>
      <p class="font-2-m">Pellentesque blandit metus <span class="font-2-m-b">volutpat diam sollicitudin</span> sed
        maximus metus maximus</p>
    </div>
    <form action="" class="form-agenda font-2-xs cor-b0">
      <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
      </div>
      <div>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">
      </div>
      <div>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">
      </div>
      <div>
        <label for="servico" class="font-2-xs">Serviço</label>
        <select name="servico" id="servico">
          <option value="">Corte de Cabelo</option>
          <option value="">Barba</option>
          <option value="">Cabelo e Barba</option>
        </select>
      </div>

      <button class="btn-main">clique aqui para agendar</button>
    </form>
  </div>
</div>
<?php get_footer(); ?>