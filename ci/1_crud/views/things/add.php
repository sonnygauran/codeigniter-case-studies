<?php echo validation_errors(); ?>
<div class="navigation">
    <?php echo anchor('/things/', 'Show all things'); ?>
</div>
<?php
echo form_open("/things/add", array('method'=> 'POST'));
echo form_label('Name', 'name');
echo form_input(array('name' => 'name'));
echo form_label('Quantity', 'quantity');
echo form_input(array('name' => 'quantity'));
echo form_label('Price', 'price');
echo form_input(array('name' => 'price'));
echo form_submit(null, 'Submit');
echo form_close();
?>