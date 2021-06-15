<!DOCTYPE html>
<html>
<head>
  <title>Coronavirus Statistics Tracker</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <?php
    $data = file_get_contents("https://api.kawalcorona.com");
    $region = json_decode($data, true);
  ?>
</head>
<body>
  <section>
    <div class="container"><br>
      <center><h1>Coronavirus Statistics Tracker</h1></center><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Country Name</th>
            <th scope="col">Confirmed</th>
            <th scope="col">Recovered</th>
            <th scope="col">Deaths</th>
            <th scope="col">Active</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php 
            $i = 1;
              foreach ($region as $row ):
            ?>
            <td><?= $row['attributes']['Country_Region'] ?></td>
            <td><?= $row['attributes']['Confirmed'] ?></td>
            <td><?= $row['attributes']['Recovered'] ?></td>
            <td><?= $row['attributes']['Deaths'] ?></td>
            <td><?= $row['attributes']['Active'] ?></td>
          </tr>
          <?php $i++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </section>
</body>
</html>