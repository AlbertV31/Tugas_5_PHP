<?php
$hasil1 = false && false;
$hasil2 = false || false;
$hasil3 = false && true;
$hasil4 = false || true;
$hasil5 = true && false;
$hasil6 = true || false;
$hasil7 = true && true;
$hasil8 = true || true;

echo "Tabel Logika 1111";
echo "<table border=1>
<tr>
  <th> Input true </th>
  <th> Input 2 </th>
  <th> AND </th>
  <th> OR </th>
<tr>
<tr>
  <td> false </td>
  <td> false </td>
  <td> $hasil1 </td>
  <td> $hasil2 </td>
<tr>
<tr>
  <td> false </td>
  <td> true </td>
  <td> $hasil3 </td>
  <td> $hasil4 </td>
<tr>
<tr>
  <td> true </td>
  <td> false </td>
  <td> $hasil5 </td>
  <td> $hasil6 </td>
<tr>
<tr>
  <td> true </td>
  <td> true </td>
  <td> $hasil7 </td>
  <td> $hasil8 </td>
<tr>
</table>
";

 ?>
