<!DOCTYPE html>
<html lang="en">
    <?php
        if(isset($_GET['secret'])){
			echo "cake";
		} else {
			echo "There may or may not be secret's hidden here :eyes:";
		}
    ?>
</html>
