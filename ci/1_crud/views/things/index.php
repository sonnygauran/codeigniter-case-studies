<div class="navigation">
    <?php echo anchor('/things/add', 'Add a new thing'); ?>
</div>

<div class="things">
    <?php if ($things AND !empty($things)): ?>
        <?php       foreach ($things as $thing): ?>
    <div class="thing">
        <span class="name"> <?php echo $thing['name']; ?> </span>
        <span class="name"> <?php echo $thing['quantity']; ?> </span>
        <span class="name"> <?php echo $thing['price']; ?> </span>
    </div>
        <?php       endforeach; ?>
    <?php else: ?>
    <span class="warning empty">Not a thing can be found.</span>
    <?php endif; ?>
</div>