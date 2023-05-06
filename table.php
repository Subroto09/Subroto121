<?php
include("developer.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>Player Information</th>
         <th>Player_tag</th>
         <th>Game_Name</th>
         <th>Top_Agent</th>
         <th>KDR</th>
         <th>TSG</th>
         <th>Rank</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['Player_tag']??''; ?></td>
      <td><?php echo $data['Game_Name']??''; ?></td>
      <td><?php echo $data['Top_Agent']??''; ?></td>
      <td><?php echo $data['KDR']??''; ?></td>
      <td><?php echo $data['TSG']??''; ?></td>
      <td><?php echo $data['Rank']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>