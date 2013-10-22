<footer>
      <div class="container">
          <section class="row foot">
              <article class="span3">
                  <strong>Quick Links</strong>
     
     
     
            <?php if (count(CustomPage::model()->bottomtabs()->findAll()))
				$this->widget('zii.widgets.CMenu', array(
				'id'=>'bl',
				// 'itemCssClass'=>'menutab'.round(12/count(CustomPage::model()->bottomtabs()->findAll())),
				'items'=>CustomPage::model()->bottomtabs()->findAll(),
				'htmlOptions'=>array('class'=>'bottom-links')
			)); ?>
        
     
     
              </article>
              <article class="span3">
                  
                  <strong>About Us</strong>
          <p>Pellentesque justo quam, euismod ut sapien quis, sagittis facilisis tortor. Ut bibendum odio eu velit venenatis, eget ultricies ante semper. </p>
                  
                  
                  
                  
              </article>
              <article class="span3">
                  <strong>Address</strong>
                 
                 
                    
            
                 
                 	<?php
				echo ' <address class="row-fluid"><div class="pull-left clabel"><i class="icon-map-marker"></i></div>
                      <div class="pull-left cdata">'._xls_get_conf('STORE_NAME').'<br>';
				echo _xls_get_conf('STORE_ADDRESS1').'<br>';
				echo _xls_get_conf('STORE_ADDRESS2').'</div></address>';
				echo ' <address class="row-fluid">
                      <div class="pull-left clabel"><i class="icon-phone"></i></div>
                      <div class="pull-left cdata">'._xls_get_conf('STORE_PHONE').'</div></address>';
				echo '<address class="row-fluid">
                      <div class="pull-left clabel"><i class="icon-envelope"></i></div><div class="pull-left cdata"><a href="mailto:'._xls_get_conf('EMAIL_FROM').'">'._xls_get_conf('EMAIL_FROM').'</a></div></address>';
				?>
                 
                 
                 
                 
     
                 
                 
                 
                 
                 
                 
              </article>
              <article class="span3">
                  <strong>Business Hours</strong>
      		<?php
				echo _xls_get_conf('STORE_HOURS');
				?>
                  
    
                
                      
              </article>
          </section>
		  </div>
          
          <section class="row-fluid doubleline">
             <div class="container">
              <div class="span7">
  
                  <div class="payments amex"></div>
                  <div class="payments mastercard"></div>
                  <div class="payments visa"></div>
                  <div class="payments paypal"></div>
                  
                  
                  
                  
                  <div class="payments ebay"></div>
                  
                  
                  
                  
                  
                  
                  <div class="payments visaelectron"></div>
                  
                  <div class="payments westernunion"></div>
                  
              </div>
            
            	<div id="searchentry" class="span5 customtext">	
                
                
                
                        
      <div class="search pull-right">
        <?php echo $this->renderPartial("/site/_mini_search",array(),true); ?>
        </div>
 
                
                
     
	</div>
            
             </div>
          </section>
  
          <section class="row-fluid social">
            <div class="container">
            <div class="pull-left">&copy; <?= Yii::t('global', 'Copyright') ?> <?= date("Y"); ?> <?= _xls_get_conf('STORE_NAME') ?>. <?= Yii::t('global', 'All Rights Reserved'); ?>.</div>
              <div class="pull-right footer-social">

          <ul class="unstyled clearfix">
          <li><a href="http://twitter.com" title="Twitter" class="icon-social twitter ir">Twitter</a></li>
          <li><a href="http://www.facebook.com" title="Facebook" class="icon-social facebook ir">Facebook</a></li>
          <li><a href="http://plus.google.com/" title="Google+" class="icon-social google ir">Google+</a></li>
          <li><a href="http://www.youtube.com/user" title="YouTube" class="icon-social youtube ir">YouTube</a></li>
          <li><a href="http://vimeo.com" title="Vimeo" class="icon-social vimeo ir">Vimeo</a></li>
          <li><a href="http://instagram.com" title="Instagram" class="icon-social instagram ir">Instagram</a></li>
          <li><a href="http://pinterest.com/" title="Pinterest" class="icon-social pinterest ir">Pinterest</a></li>         
          <li><a href="#" title="Blog Feed" class="icon-social atom ir">Blog feed</a></li>
          </ul>
  
              </div>
              </div>
          </section>

  </footer>

  

 <script src="<?=Yii::app()->baseUrl."/themes/futon/js/custom.js" ?>"></script>
    <!-- Le javascript    ================================================== -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-transition.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-alert.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-modal.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-dropdown.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-scrollspy.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-tab.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-tooltip.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-popover.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-button.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-collapse.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-carousel.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-typeahead.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/bootstrap-affix.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/holder/holder.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/google-code-prettify/prettify.js" ?>"></script>
    <script src="<?=Yii::app()->baseUrl."/themes/futon/js/application.js" ?>"></script>
    