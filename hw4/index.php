<?php
// Your code here!
// $avatar = "https://s0.rbk.ru/v6_top_pics/resized/590xH/media/img/9/05/754598832771059.jpeg";
$name = "света котлета";
$proffession = "умпалумпа";
$country = "флатландия";
$city = "2d";
$emai = "helpme@gmail.com";
$phone = "+ 42 424242";
$skills = [
    [
        'name' => 'истошно орать',
        'percent' => 80,
    ],
    [
        'name' => 'кушать вкусняшки',
        'percent' => 85,
    ],
    [
        'name' => 'плакать',
        'percent' => 100,
    ]
];
$langs = [
    [
        'name' => 'Эсперанто',
        'percent' => 30,
    ],
    [
        'name' => 'Хинди',
        'percent' => 80,
    ],
    [
        'name' => 'Древнеарамейский',
        'percent' => 5,
    ]
];
$experience = [
    [
        'name' => 'классификация тихоходок',
        'startDate' => '19 января 1997',
        'endDate' => '',
        'isCurent' => true,
        'description' => 'Тихоходки раздельнополые. Самцы тихоходок мельче самок и встречаются редко, поэтому возможен партеногенез, то есть размножение самок без оплодотворения. Во время периода размножения у самки созревает от 1 до 30 яиц. Оплодотворение внутреннее или внешнее, когда самец откладывает сперму на кладку яиц. У одних видов яйца откладываются в грунт, в мох или воду, у других — в сброшенную при линьке шкурку. Развитие прямое, молодая тихоходка отличается от взрослой только меньшими размерами.',
    ],
    [
        'name' => 'перевозка бананов',
        'startDate' => '2 февраля 1986',
        'endDate' => '2 февраля 1987',
        'isCurent' => false,
        'description' => 'На перевозки и логистику уходит, в среднем 4-5 месяцев. Как правило, из страны производителя бананы отправляется морем на корабле рефрижераторе. Стоимость такой перевозки, например, из Китая в порт Санкт-Петербурга составляет до $4000 за контейнер для 20-ти футовых и до $6000 40-ка футовых контейнеров.',
    ],
    [
        'name' => 'стриминг изнутри черных дыр',
        'startDate' => '1 апреля 987 до н.э',
        'endDate' => 'рождение Христа',
        'isCurent' => false,
        'description' => 'чёрными дырами часто называют объекты, не строго соответствующие данному выше определению, а лишь приближающиеся по своим свойствам к такой чёрной дыре — например, это могут быть коллапсирующие звёзды на поздних стадиях коллапса. В современной астрофизике этому различию не придаётся большого значения[6], так как наблюдаемые проявления «почти сколлапсировавшей» («замороженной») звезды и «настоящей» («извечной») чёрной дыры практически одинаковы. Это происходит потому, что отличия физических полей вокруг коллапсара от таковых для «извечной» чёрной дыры уменьшаются по степенным законам с характерным временем порядка гравитационного радиуса, делённого на скорость света — то есть за доли секунды для чёрных дыр звёздных масс и часы для сверхмассивных чёрных дыр',
    ]
];
$stud = [
    [
        'name' => '2 класса начальной школу ГБУ СОШ Алупки',
        'startDate' => '2000',
        'endDate' => '2002',
        'isCurent' => false,
        'description' => 'в основном ела мел для доски и дралась с одноклассницами за бычки за гаражами',
    ],
    [
        'name' => 'домашнее обучение',
        'startDate' => '2003',
        'endDate' => '2022',
        'description' => 'дома не бьют',
    ]
];


?>

<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://s0.rbk.ru/v6_top_pics/resized/590xH/media/img/9/05/754598832771059.jpeg"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?= $name;?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $proffession;?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $city . ", " . $country;?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $emai?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $phone;?></p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i = 0; $i < count($skills); $i++): ?>
                <p><?= $skills[$i]['name'];?></p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                  <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skills[$i]['percent'];?>%"><?= $skills[$i]['percent'];?></div>
                </div>
            <?php endfor;?>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <?php for ($i = 0; $i < count($langs); $i++): ?>
            <p><?= $langs[$i]['name'];?></p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?= $langs[$i]['percent']?>%"></div>
            </div>
            <?php endfor;?>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
            <?php for ($i = 0; $i < count($experience); $i++): ?>          
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?= $experience[$i]['name'];?></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $experience[$i]['startDate'];?> - 
                <?php if ($experience[$i]['isCurent'] = true): // ДА ПОЧЕМУ ОНА НЕ УБИРАЕТСЯ ТАМ ГДЕ FAlSE?? ?>
                <span class="w3-tag w3-teal w3-round">Current</span> 
                <?php endif;?>
                <?= $experience[$i]['endDate'];?></h6>
            <p><?= $experience[$i]['description'];?></p>
            <hr>
          </div>
            <?php endfor;?>          
        </div>
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
            <?php for ($i = 0; $i < count($stud); $i++): ?>         
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?= $stud[$i]['name'];?></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $stud[$i]['startDate'];?> - <?= $stud[$i]['endDate'];?></h6>
            <p><?= $stud[$i]['description'];?></p>
            <hr>
          </div>
            <?php endfor;?>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>