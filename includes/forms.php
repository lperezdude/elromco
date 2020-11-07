<?php
function add_elromco_ultra_small_form() {
    $Content = '<div class="ultra-form-wrapper"><ultrasmall-form></ultrasmall-form></div>';
    return $Content;
}
function add_elromco_move_calculator() {
    $Content = '<div class="move-calc-wrapper"><move-Calculator></move-Calculator></div>';
    return $Content;
}
add_shortcode( 'elromco_ultra_small_form', 'add_elromco_ultra_small_form' );
add_shortcode( 'elromco_move_calculator', 'add_elromco_move_calculator' );