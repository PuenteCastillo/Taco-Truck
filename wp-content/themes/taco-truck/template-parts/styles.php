
<?php
$accent = get_field('accent', 'option');
$primary = get_field('primary', 'option');
$secondary = get_field('secondary', 'option');
?>

<style>

.accent-bg{
    background-color: <?php echo $accent ?>;
}

.accent-text{
    color: <?php echo $accent ?>;
}

.primary-text{
    color: <?php echo $primary ?>;
}

.secondary-text{
    color: <?php echo $secondary ?>;
}


</style>
