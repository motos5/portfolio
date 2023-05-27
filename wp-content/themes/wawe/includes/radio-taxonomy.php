<?php
// ================= Используем радиокнопки для таксономии  ============== //
// Удаляем метабокс таксономии по умолчанию
add_action( 'admin_menu', 'myprefix_remove_meta_box');
function myprefix_remove_meta_box(){
	remove_meta_box('category-gallerydiv', 'gallery', 'normal');
}

//Добавляем новый метабокс таксономии
add_action( 'add_meta_boxes', 'myprefix_add_meta_box');
function myprefix_add_meta_box() {
	add_meta_box( 'category-gallery', 'Радиокнопки','myprefix_mytaxonomy_metabox','gallery' ,'side','core');
}

//Возвратная функция для установки метабокса
function myprefix_mytaxonomy_metabox( $post ) {
    //Имя таксономии
    $taxonomy = 'category-gallery';

    //получаем объект таксономии и терминыы
    $tax = get_taxonomy($taxonomy);
    $terms = get_terms($taxonomy,array('hide_empty' => 0));

    //Имя формы
    $name = 'tax_input[' . $taxonomy . ']';

    //Получаем текущий и популярные термины
    $popular = get_terms( $taxonomy, array( 'orderby' => 'count', 'order' => 'DESC', 'number' => 10, 'hierarchical' => false ) );
    $postterms = get_the_terms( $post->ID,$taxonomy );
    $current = ($postterms ? array_pop($postterms) : false);
    $current = ($current ? $current->term_id : 0);
    ?>

    <div id="taxonomy-<?php echo $taxonomy; ?>" class="categorydiv">

        <!-- Закладка-->
        <ul id="<?php echo $taxonomy; ?>-tabs" class="category-tabs">
            <li class="tabs"><a href="#<?php echo $taxonomy; ?>-all" tabindex="3"><?php echo $tax->labels->all_items; ?></a></li>
            <li class="hide-if-no-js"><a href="#<?php echo $taxonomy; ?>-pop" tabindex="3"><?php _e( 'Часто используются' ); ?></a></li>
        </ul>

        <!-- Выводим все термины -->
        <div id="<?php echo $taxonomy; ?>-all" class="tabs-panel">
            <ul id="<?php echo $taxonomy; ?>checklist" class="list:<?php echo $taxonomy?> categorychecklist form-no-clear">
                <?php   foreach($terms as $term){
                    $id = $taxonomy.'-'.$term->term_id;
                    echo "<li id='$id'><label class='selectit'>";
                    echo "<input type='radio' id='in-$id' name='{$name}'".checked($current,$term->term_id,false)."value='$term->term_id' />$term->name<br />";
                   echo "</label></li>";
                }?>
           </ul>
        </div>

        <!-- Выводим популярные термины -->
        <div id="<?php echo $taxonomy; ?>-pop" class="tabs-panel" style="display: none;">
            <ul id="<?php echo $taxonomy; ?>checklist-pop" class="categorychecklist form-no-clear" >
                <?php   foreach($popular as $term){
                    $id = 'popular-'.$taxonomy.'-'.$term->term_id;
                    echo "<li id='$id'><label class='selectit'>";
                    echo "<input type='radio' id='in-$id'".checked($current,$term->term_id,false)."value='$term->term_id' />$term->name<br />";
                    echo "</label></li>";
                }?>
           </ul>
       </div>

    </div>
    <?php
}
// ================= // END Используем радиокнопки для таксономии // ============== //