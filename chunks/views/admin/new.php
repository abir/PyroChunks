<h3><?php echo sprintf(lang('chunks.add_chunk'), $chunk->name);?></h3>

<?php echo form_open($this->uri->uri_string(), 'class="crud"'); ?>

<div id="chunk-data-tab">

	<ol>

		<li>
			<label for="name"><?php echo lang('chunks.chunk_name');?></label>
			<?php echo form_input('name', htmlspecialchars_decode($chunk->name), 'maxlength="60"'); ?>
			<span class="required-icon tooltip"><?php echo lang('required_label');?></span>
		</li>

		<li class="even">
			<label for="slug"><?php echo lang('chunks.chunk_slug');?></label>
			<?php echo form_input('slug', $chunk->slug, 'maxlength="60"'); ?>
			<span class="required-icon tooltip"><?php echo lang('required_label');?></span>
		</li>

		<li>
			<label for="type"><?php echo lang('chunks.chunk_type');?></label>
			<?php echo form_dropdown('type', $chunk_types, $chunk->type); ?>
		</li>
	
	</ol>
	
</div><!--#chunk-data-tab-->

<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>

<?php echo form_hidden('content', ''); ?>

<?php echo form_close(); ?>