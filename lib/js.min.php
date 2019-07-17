<div class="ui tiny basic modal submit-cta">
  <h1 class="ui icon green">
    <i class="check icon"></i>
    Enviado.
  </h1>
  <div class="content">
    <p>Tan pronto nos pondremos en contacto contigo. Te recomendamos estar pendiente con tu correo.</p>
  </div>
  <div class="actions">
    <div class="ui green ok inverted button">
      <i class="checkmark icon"></i>
      Aceptar
    </div>
  </div>
</div>
<div class="ui tiny basic modal modal-loading">
  <h1 class="ui icon">
    <i class="loading sync icon"></i>
  </h1>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="238866156531989"
  theme_color="#f2711c"
  logged_in_greeting="Hola ! Como puedo ayudarte ?"
  logged_out_greeting="Hola ! Como puedo ayudarte ?">
</div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/semantic/site.min.js"></script>
    <script type="text/javascript" src="js/semantic/transition.min.js"></script>
    <script type="text/javascript" src="js/semantic/visibility.min.js"></script>
    <script type="text/javascript" src="js/semantic/dimmer.min.js"></script>
    <script type="text/javascript" src="js/semantic/modal.min.js"></script>
    <script type="text/javascript" src="js/semantic/dropdown.min.js"></script>