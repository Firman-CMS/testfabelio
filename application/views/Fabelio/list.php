<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Page 2 | List Data</h2>
<a href="<?php echo base_url();?>fabelio/">Page 1</a>
<table>
  <tr>
    <th>Name</th>
    <th>Url</th>
    <th>Action</th>
  </tr>
  <?php foreach ($data as $value) { ?>
    <tr>
        <td><?php echo $value->name ?></td>
        <td><?php echo $value->url ?></td>
        <td> <a href="<?php echo base_url();?>fabelio/detail?id=<?php echo $value->id ?>">link</a> </td>
    </tr>
  <?php } ?>
</table>

</body>
</html>
