<?php if($comments) : ?>  
	<ul class="comments">
        <?php wp_list_comments('type=comment&callback=custom_comments'); ?>
    </ul>
<?php else : ?>  
    <p>No comments yet</p>  
<?php endif; ?>  