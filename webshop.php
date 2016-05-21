<?php
  include "header.php";
?>

<div class="main products_page">

  <form>
    <input type="text" value="Zoektermen ingeven">
    <input type="button" value="button">
    <p>
      1367 Producten |
      Toon
      <select>
        <option>10</option>
        <option selected>20</option>
        <option>30</option>
        <option>40</option>
      </select>
      per pagina
    </p>
  </form>
</div>

<?php
$query = "SELECT AFBEELDING_KLEIN FROM dbo.PRODUCT";
$results = sqlsrv_query($query);
if ($results) {
  $num = sqlsrv_num_rows($results);
}else{
  echo sqlsrv_errors();
}
?>

<div class="categories">

  <?php if ($num>0) {
    while ($row = sqlsrv_fetch($results)){
  ?>
    <ul>
      <li><a href="list.php?catid = <?php echo $row['id'];?>"><?php echo $row['CATEGORIENAAM'];?></a></li>
      <!--<li><a href="#">Subcategorie 2</a></li> -->
    </ul>
<tr>
  <td>
<?php
  echo $row['desc'];
   ?>
 </td>
 </tr>
 <?php
 }
 }else{
 ?>
 <tr>
   <td>No categories available.</td>
 </tr>
 <?php
 }
 ?>

</div>
