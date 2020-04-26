<?php
foreach ($products as $row) {
  echo '<tr>';
  echo '<td>' . $row['product_id'] . '</td>';
  echo '<td>' . $row['name'] . '</td>';
  echo '<td>' . $row['description'] . '</td>';
  echo '<td>' . $row['brand'] . '</td>';
  echo '<td><img style="width:100px" src="' . base_url('assets/img/') . $row['picture'] . '"/></td>';
  echo '</tr>';
}
