<form class="ui form cta ui sticky cta-form">
    <div class="header">
        <figure>
            <img src="<?php echo 'img/'.$tag.'/product.jpg'; ?>" alt="<?php echo $titulo; ?>"/>
            <figcaption><h3>Reserva a:</h3><span class="price">$<?php echo $precio; ?></span><span>USD / persona</span></figcaption>
        </figure>
    </div>
    <div class="contain">
        <div class="field name-cta-form">
          <label>Nombres:</label>
          <input type="text" id="name" name="name" placeholder="Juan Pérez">
        </div>
        <div class="field email-cta-form">
          <label>Correo Electrónico:</label>
          <input type="email" id="email" name="email" placeholder="usuario@email.com">
        </div>
        <div class="field phone-cta-form">
          <label>Número de Celular:</label>
          <input type="number" id="phone" name="phone" placeholder="0987654321">
        </div>
        <div class="two fields">
            <div class="field">
                <label>Fecha:</label>
    		    <div class="ui fluid large left icon input">
    		    	<input class="calendar" id="date" type="text" data-min-year="2018" data-max-year="2020" data-large-default="true" data-large-mode="true" data-format="d/m/Y" data-lock="from" data-jump="4" />
    		    	<i class="calendar icon"></i>
    		    </div>
            </div>
            <div class="field">
    	        <label># Personas</label>
    	        <div class="people-num">
    	        	<button class="ui none mini button icon l"><i class="minus icon"></i></button>
    	        	<span class="people" data="1">Solo yo</span>
    	        	<button class="ui none mini button icon r"><i class="plus icon"></i></button>
    	        </div>
            </div>
        </div>
        <div class="field">
            <div class="totalprice">Total: <span><?php echo $precio; ?></span> USD</div>
        </div>
        <input type="hidden" class="nameHidden" value="<?php echo $titulo; ?>" />
        <input type="hidden" class="priceHidden" value="<?php echo $precio; ?>" />
        <button class="ui fluid large orange button cta-submit" type="submit"><i class="clipboard outline icon"></i>Reserva Ahora</button>
    </div>
</form>
