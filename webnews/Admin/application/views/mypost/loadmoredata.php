<tr>
	<td>
		<?php echo $loadMoreData->description; ?>
        <?php $store=$loadMoreData->description;
			  $storeData=preg_split("/*/",$store);
				for($i=0;$i<count($storeData);$i++){
					echo "<br>";
					echo $storeData[$i];
					
					
				}
				
		?>
    </td>
</tr>
