<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
    <form action="<?php echo base_url();?>fabelio/result" method="POST">
        <fieldset>
        <legend>Page 1</legend>
        <p>
            <label>Fabelio product url:</label>
            <input type="text" name="url" placeholder="Product page link..." size="50" />
        </p>
        <p>
            <input type="submit" name="submit" value="submit" />
        </p>
        </fieldset>
    </form>
     <a href="<?php echo base_url();?>fabelio/list">Page 2</a> 
</body>
</html>