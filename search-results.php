<?php 
include_once('inc/functions.php');
include_once('inc/search.php');

$search_term = get_string_form_data(SEARCH_BAR, $_REQUEST, FILTER_SANITIZE_SPECIAL_CHARS);

$search_result_array=search_for_term($search_term);


?>
<!DOCTYPE html>
<html lang="en">

<?php print_head("Search Results") ?>

<body>

<?php include_once('inc/header.php') ?>

    <main>
        <h1>Search Results</h1>
        <?php if (count($search_result_array) > 0) : ?>
        <p>Your search for "<?=$search_term?>" produced <?=count($search_result_array)?> result(s).</p>
        <ul>
        <?php foreach ($search_result_array as $search_element) : ?>	
        
            <li>
				<a href="<?=$search_element[CONTENT_LINK]?>"><?=$search_element[CONTENT_TITLE]?></a>
            </li>	
            
        <?php endforeach; ?>        
        </ul>
        <?php else: ?>

     <p>Sorry, but there were no matches for "<?=$search_term?>".</p>

        <?php endif; ?>

      
    </main>


<?php include_once('inc/footer.php') ?>
</body>

</html>