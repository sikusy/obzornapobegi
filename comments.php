<?php
if (comments_open()) {
if (get_comments_number() == 0) { ?>
Комментарии отсутствуют
<?php } else { ?>
Комментарии к посту"<?php the_title(); ?>"
<?php }
} else { ?>
Обсуждения закрыты для данного поста закрыты
<?php } ?>
</h3>
<?php if ( have_comments() ) : 
<ol class="commentlist"> 
    <?php
wp_list_comments( array(
'style
= 'ol',
'avatar_size' => 50,
) );
?> 
</ol>
<?php endif; ?>
<?php
add_filter("comment_form_fields", "kama_reorder_comment_fields' );
function kama_reorder_comment_fields( $fields
// die(print_r( $fields )); // посмотрим какие поля есть
$new_fields = array(); // сюда соберем поля в новом порядке
Smyorder = array('author','email','url',"comment'); // нужный порядок
foreach( $myorder as $key ){ $new_fields[ $key ] = $fields[ $key ]; unset( $fields[ $key ] );
// если остались еще какие-то поля добавим их в конец if( $fields )
foreach( $fields as $key => $val )
$new_fields[ $key ] $val;
return $new_fields;
$defaults = array(
"fields"
=> array(
"author" => "<div class="group">"
<label for="author">"

<?php
comment_form();
?>