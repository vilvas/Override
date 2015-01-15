<style type="text/css">
	.group {
		margin-top: 30px !important;
	}
	.tabs {
	  position: relative;  
	  min-height: 700px; /* This part sucks */
	  clear: both;
	  margin: 25px 0;
	}
	.tab {
	  float: left;
	}
	.tab label {
	  background: #eee; 
	  padding: 10px; 
	  border: 1px solid #ccc; 
	  margin-left: -1px; 
	  position: relative;
	  left: 1px; 
	}
	.tab [type=radio] {
	  display: none;   
	}
	.content {
	  position: absolute;
	  top: 28px;
	  left: 0;
	  background: white;
	  right: 0;
	  bottom: 0;
	  padding: 20px;
	  border: 1px solid #ccc; 
	}
	[type=radio]:checked ~ label {
	  background: white;
	  border-bottom: 1px solid white;
	  z-index: 2;
	}
	[type=radio]:checked ~ label ~ .content {
	  z-index: 1;
	}
	.clear {
		clear: both;
	}
	
	textarea {
		width: 100%;
		height: 140px;
	}

	.section{clear:both;padding:0;margin:0}.col{display:block;float:left;margin:1% 0 1% 1.6%}.col:first-child{margin-left:0}.group:after,.group:before{content:"";display:table}.group:after{clear:both}.group{zoom:1}.span_8_of_8{width:100%}.span_7_of_8{width:87.3%}.span_6_of_8{width:74.6%}.span_5_of_8{width:61.9%}.span_4_of_8{width:49.2%}.span_3_of_8{width:36.5%}.span_2_of_8{width:23.8%}.span_1_of_8{width:11.1%}@media only screen and (max-width:1000px){.col{margin:1% 0}.span_1_of_8,.span_2_of_8,.span_3_of_8,.span_4_of_8,.span_5_of_8,.span_6_of_8,.span_7_of_8,.span_8_of_8{width:100%}}
</style>

<div class="wrap">
	<form method="POST" action="options.php">
	<?php settings_fields( 'override_settings' ); do_settings_sections( 'overridemenu' ); ?>
	<?php submit_button(); ?>
	</form>
</div>
