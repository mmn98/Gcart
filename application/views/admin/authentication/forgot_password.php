<!-- Password recovery -->
<form  id="recovery_form" action="<?php echo admin_url('authentication/forgot_password') ?>" method="POST">
	<div class="panel panel-body login-form">
		<div class="text-center">
			<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
			<h5 class="content-group"><?php echo ucwords('forgot_password'); ?><small class="display-block"><?php echo  ucwords('forgot_password_instructions'); ?></small></h5>
		</div>

		<?php $this->load->view('admin/includes/alerts'); ?>

		<div class="form-group">
			<div class="form-control-feedback">
				<i class="icon-mail5 text-muted"></i>
			</div>
			<input type="email" class="form-control" placeholder="<?php echo ucwords('email'); ?>" name="email" id="email" autocomplete="off">
			
		</div>
		<div class="form-group">
		<button type="submit" class="btn bg-blue btn-block" name="submit"><?php echo ucwords('confirm'); ?><i class="icon-arrow-right14 position-right"></i></button>
		</div>

		<a href="<?php echo admin_url('authentication') ?>"><?php echo ucwords('login'); ?></a>
		
	</div>
</form>			
<script type="text/javascript">
$(function () {
	$("#recovery_form").validate({
	    rules: {
	        email: {
                required: true,
                email: true
	        }
	    },
    	messages: {
	        email: {
				required:"please_enter email",
				email:"please_enter_valid email"
	        }
	    }
	});  
});
</script>
