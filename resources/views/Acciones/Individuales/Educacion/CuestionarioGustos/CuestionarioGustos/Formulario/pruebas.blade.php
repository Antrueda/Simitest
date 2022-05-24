<!DOCTYPE html>
<html>
<body>

<?php
$items =[
['Item 1',[[1,2,3],[1,2,3],[1,2,3],[1,2,3],[1,2,3],[1,2,3]]],
['Item 2',[[1,2,3],[1,2,3],[1,2,3],[1,2,3],[1,2,3],[1,2,3]]],
['Item 3',[[1,2,3],[1,2,3],[1,2,3],[1,2,3],[1,2,3],[1,2,3]]],
['Item 4',[[1,2,3],[1,2,3],[1,2,3],[1,2,3],[1,2,3],[1,2,3]]]
];
foreach($items as $keyu=> $item){ 
?>
<p><?=$item[0]?></p>
<table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach($item[1] as $key=> $itemx){ 
    ?>
      <tr>
        <td><?=$itemx[0]?></td>
        <td><?=$itemx[1]?></td>
        <td> <input type="radio" name="habilida<?=$keyu.$key?>" value="Bike"></td>
      </tr>
      <?php
    }
    ?>
    </tbody>
  </table>
<?php
}
$txt = "PHP";
echo "I love $txt!";
?>




</body>
</html>