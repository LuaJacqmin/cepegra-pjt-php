<?php 
  $users = [
    [
      "title" => "Mademoiselle",
      "name" => "Laetitia",
      "firstname" => "Lemaire",
      "email" => "laetitia.lemaire@example.com",
      "birth" => "1965-08-17",
      "picture" => "https://randomuser.me/api/portraits/women/65.jpg",
      "phone" => array("075 801 94 26", "079 434 49 63"),
      "city" => "Walkringen",
      "street" => "Rue Duguesclin",
      "number" => "3120",
      "zip" => "8538",
      "country" => "Switzerland"
    ],
    [
      "title" => "Mr",
      "name" => "Victor",
      "firstname" => "Rasmussen",
      "email" => "victor.rasmussen@example.com",
      "birth" => "1992-03-29",
      "picture" => "https://randomuser.me/api/portraits/men/71.jpg",
      "phone" => array("17533988", "93778278"),
      "city" => "Kongsvinger",
      "street" => "Vestergårdsvej",
      "number" => "5304",
      "zip" => "87937",
      "country" => "Denmark"
    ],
    [
      "title" => "Mr",
      "name" => "Tobias",
      "firstname" => "Sørensen",
      "email" => "tobias.sorensen@example.com",
      "birth" => "1969-01-11",
      "picture" => "https://randomuser.me/api/portraits/men/73.jpg",
      "phone" => array("13001946", "16096774"),
      "city" => "Nørre Sundby",
      "street" => "Thorsvej",
      "number" => "4280",
      "zip" => "76009",
      "country" => "Denmark"
    ],
    [
      "title" => "Mr",
      "name" => "Chris",
      "firstname" => "Hohmann",
      "email" => "chris.hohmann@example.com",
      "birth" => "1963-04-30",
      "picture" => "https://randomuser.me/api/portraits/men/55.jpg",
      "phone" => array("0314-4275432", "0176-4049101"),
      "city" => "Altentreptow",
      "street" => "Kapellenweg",
      "number" => "2487",
      "zip" => "32797",
      "country" => "Germany"
    ]
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random user php</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
<div class="container content">
  <header class="hero is-primary block">
    <div class="hero-body">
      <h1 class="title">Carnet</h1>
    </div>
  </header>
  
  <div class="columns block">
    <div class="column is-two-quarter">
      <ul style="margin: 0">
      <?php foreach($users as $index => $user) :?>
          <li style="list-style-type: none;" class="is-primary">
            <a href="random-user.php?id=<?php echo $index; ?>">
              <div class="card">
                <div class="card-content">
                  <div class="media">
                    <div class="media-left">
                      <figure class="image is-48x48">
                        <img src="<?php echo $user["picture"]?>" alt="photo de <?php echo $user["name"]." ".$user["firstname"]?>">
                      </figure>
                    </div>
                    <div class="media-content">
                    <p class="title is-4"><?php echo $user["name"]." ".$user["firstname"]?></p>
                    <p class="subtitle is-6">@<?php echo $user["name"].$user["firstname"]?></p>
                  </div>
                </div>
              </div>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="column is-half">
        <?php if(isset($_GET['id'])):?>
        <?php $id = $_GET['id']?>
          <div class="card">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="<?php echo $users[$id]["picture"]?>" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
                <div class="media-content">
                    <p class="title is-4"><?php echo $users[$id]["name"]." ".$users[$id]["firstname"]?></p>
                    <p class="subtitle is-6">@<?php echo $users[$id]["name"].$users[$id]["firstname"]?></p>
                    <p>Adresse</p>
                    <p><?php echo $users[$id]["number"].", ".$users[$id]["street"]?></p>
                    <p><?php echo $users[$id]["zip"]."-".$users[$id]["city"]?></p>
                    <p><?php echo $users[$id]["country"]?></p>
                    <time datetime="1-1-2016"><?php echo $users[$id]["birth"]?></time>
                </div>
              </div>
              <ul class="card-footer">
              <li class="card-footer-item">Téléphone : <?php echo $users[$id]["phone"][0]?></li>
              <li class="card-footer-item">Mobile : <?php echo $users[$id]["phone"][1]?></li>
              <li class="card-footer-item">Mail : <?php echo $users[$id]["email"]?></li>
              </ul>
                  
              </div>
            </div>
          </div>
        <?php endif; ?>
    </div>
  </div>
</body>
</html>
