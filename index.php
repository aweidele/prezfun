<?php
  $pres = date('Y');
  $prez = [
    [
      "name" => "Washington",
      "start" => 1789,
      "died" => $pres
    ],
    [
      "name" => "J Adams",
      "start" => 1797,
      "died" => $pres
    ],
    [
      "name" => "Jefferson",
      "start" => 1801,
      "died" => $pres
    ],
    [
      "name" => "Madison",
      "start" => 1809,
      "died" => $pres
    ],
    [
      "name" => "Monroe",
      "start" => 1817,
      "died" => $pres
    ],
    [
      "name" => "JQ Adams",
      "start" => 1825,
      "died" => $pres
    ],
    [
      "name" => "Jackson",
      "start" => 1829,
      "died" => $pres
    ],
    [
      "name" => "Van Buren",
      "start" => 1837,
      "died" => $pres
    ],
    [
      "name" => "WH Harrison",
      "start" => 1841,
      "died" => $pres
    ],
    [
      "name" => "Tyler",
      "start" => 1841,
      "died" => $pres
    ],
    [
      "name" => "Polk",
      "start" => 1845,
      "died" => $pres
    ],
    [
      "name" => "Taylor",
      "start" => 1849,
      "died" => $pres
    ],
    [
      "name" => "Fillmore",
      "start" => 1850,
      "died" => $pres
    ],
    [
      "name" => "Pierce",
      "start" => 1853,
      "died" => $pres
    ],
    [
      "name" => "Buchanan",
      "start" => 1857,
      "died" => $pres
    ],
    [
      "name" => "Lincoln",
      "start" => 1861,
      "died" => $pres
    ],
    [
      "name" => "A Johnson",
      "start" => 1865,
      "died" => $pres
    ],
    [
      "name" => "Grant",
      "start" => 1869,
      "died" => $pres
    ],
    [
      "name" => "Hayes",
      "start" => 1877,
      "died" => $pres
    ],
    [
      "name" => "Garfield",
      "start" => 1881,
      "died" => $pres
    ],
    [
      "name" => "Arthur",
      "start" => 1881,
      "died" => $pres
    ],
    [
      "name" => "Cleveland",
      "start" => 1885,
      "died" => $pres
    ],
    [
      "name" => "B Harrison",
      "start" => 1889,
      "died" => $pres
    ],
    [
      "name" => "McKinley",
      "start" => 1897,
      "died" => $pres
    ],
    [
      "name" => "T Roosevelt",
      "start" => 1901,
      "died" => $pres
    ],
    [
      "name" => "Taft",
      "start" => 1909,
      "died" => $pres
    ],
    [
      "name" => "Wilson",
      "start" => 1913,
      "died" => $pres
    ],
    [
      "name" => "Harding",
      "start" => 1921,
      "died" => $pres
    ],
    [
      "name" => "Coolidge",
      "start" => 1923,
      "died" => $pres
    ],
    [
      "name" => "Hoover",
      "start" => 1929,
      "died" => $pres
    ],
    [
      "name" => "FD Roosevelt",
      "start" => 1933,
      "died" => $pres
    ],
    [
      "name" => "Truman",
      "start" => 1945,
      "died" => $pres
    ],
    [
      "name" => "Eisenhower",
      "start" => 1953,
      "died" => $pres
    ],
    [
      "name" => "Kennedy",
      "start" => 1961,
      "died" => $pres
    ],
    [
      "name" => "LB Johnson",
      "start" => 1963,
      "died" => $pres
    ],
    [
      "name" => "Nixon",
      "start" => 1969,
      "died" => $pres
    ],
    [
      "name" => "Ford",
      "start" => 1974,
      "died" => $pres
    ],
    [
      "name" => "Carter",
      "start" => 1977,
      "died" => $pres
    ],
    [
      "name" => "Reagan",
      "start" => 1981,
      "died" => $pres
    ],
    [
      "name" => "GHW Bush",
      "start" => 1989,
      "died" => $pres
    ],
    [
      "name" => "Clinton",
      "start" => 1993,
      "died" => $pres
    ],
    [
      "name" => "GW Bush",
      "start" => 2001,
      "died" => $pres
    ],
    [
      "name" => "Obama",
      "start" => 2009,
      "died" => $pres
    ],
    [
      "name" => "Trump",
      "start" => 2017,
      "died" => $pres
    ]
  ];
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Prez Fun</title>
  <style>
    td { font-size: 12px; padding: 2px 5px; }
    tr:nth-child(2n) { background: #F0F0F0; }
  </style>
</head>
<body>
  <table>
    <?php foreach($prez as $p) { ?>
      <tr>
        <td><?= $p["name"] ?></td>
        <td><?= $p["start"] ?></td>
        <td><?= $p["died"] ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
