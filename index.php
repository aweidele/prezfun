<?php
  $pres = intval(date('Y')) + 1;
  $prez = [
    [
      "name" => "Washington",
      "start" => 1789,
      "died" => 1799
    ],
    [
      "name" => "J Adams",
      "start" => 1797,
      "died" => 1826
    ],
    [
      "name" => "Jefferson",
      "start" => 1801,
      "died" => 1826
    ],
    [
      "name" => "Madison",
      "start" => 1809,
      "died" => 1836
    ],
    [
      "name" => "Monroe",
      "start" => 1817,
      "died" => 1831
    ],
    [
      "name" => "JQ Adams",
      "start" => 1825,
      "died" => 1848
    ],
    [
      "name" => "Jackson",
      "start" => 1829,
      "died" => 1845
    ],
    [
      "name" => "Van Buren",
      "start" => 1837,
      "died" => 1862
    ],
    [
      "name" => "WH Harrison",
      "start" => 1841,
      "died" => 1841
    ],
    [
      "name" => "Tyler",
      "start" => 1841,
      "died" => 1862
    ],
    [
      "name" => "Polk",
      "start" => 1845,
      "died" => 1849
    ],
    [
      "name" => "Taylor",
      "start" => 1849,
      "died" => 1850
    ],
    [
      "name" => "Fillmore",
      "start" => 1850,
      "died" => 1874
    ],
    [
      "name" => "Pierce",
      "start" => 1853,
      "died" => 1869
    ],
    [
      "name" => "Buchanan",
      "start" => 1857,
      "died" => 1868
    ],
    [
      "name" => "Lincoln",
      "start" => 1861,
      "died" => 1865
    ],
    [
      "name" => "A Johnson",
      "start" => 1865,
      "died" => 1875
    ],
    [
      "name" => "Grant",
      "start" => 1869,
      "died" => 1885
    ],
    [
      "name" => "Hayes",
      "start" => 1877,
      "died" => 1893
    ],
    [
      "name" => "Garfield",
      "start" => 1881,
      "died" => 1881
    ],
    [
      "name" => "Arthur",
      "start" => 1881,
      "died" => 1886
    ],
    [
      "name" => "Cleveland",
      "start" => 1885,
      "died" => 1908
    ],
    [
      "name" => "B Harrison",
      "start" => 1889,
      "died" => 1901
    ],
    [
      "name" => "McKinley",
      "start" => 1897,
      "died" => 1901
    ],
    [
      "name" => "T Roosevelt",
      "start" => 1901,
      "died" => 1919
    ],
    [
      "name" => "Taft",
      "start" => 1909,
      "died" => 1930
    ],
    [
      "name" => "Wilson",
      "start" => 1913,
      "died" => 1924
    ],
    [
      "name" => "Harding",
      "start" => 1921,
      "died" => 1923
    ],
    [
      "name" => "Coolidge",
      "start" => 1923,
      "died" => 1933
    ],
    [
      "name" => "Hoover",
      "start" => 1929,
      "died" => 1964
    ],
    [
      "name" => "FD Roosevelt",
      "start" => 1933,
      "died" => 1945
    ],
    [
      "name" => "Truman",
      "start" => 1945,
      "died" => 1972
    ],
    [
      "name" => "Eisenhower",
      "start" => 1953,
      "died" => 1969
    ],
    [
      "name" => "Kennedy",
      "start" => 1961,
      "died" => 1963
    ],
    [
      "name" => "LB Johnson",
      "start" => 1963,
      "died" => 1973
    ],
    [
      "name" => "Nixon",
      "start" => 1969,
      "died" => 1994
    ],
    [
      "name" => "Ford",
      "start" => 1974,
      "died" => 2006
    ],
    [
      "name" => "Carter",
      "start" => 1977,
      "died" => $pres
    ],
    [
      "name" => "Reagan",
      "start" => 1981,
      "died" => 2004
    ],
    [
      "name" => "GHW Bush",
      "start" => 1989,
      "died" => 2018
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

  $years = [];
  $sort = [];
  for ($i = 1789; $i < $pres; $i++) {
    $a = 0;
    $list = [];
    $d = [];
    foreach($prez as $key => $p) {
      if($p["start"] <= $i && $p["died"] >= $i) {
      //if($p["start"] >= $i && $p["died"] <= $i) {
        $a++;
        $list[] = $p["name"];
        if($p["died"] == $i) {
          $d[] = $p["name"];
        }
      }
    }
    $years[$i] = [
      "alive" => $a,
      "prez" => $list,
      "died" => $d
    ];
  }
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
    <?php foreach($years as $key => $year) { ?>
      <tr>
        <td><?= $key ?></td>
        <td><?= $year["alive"] ?></td>
        <td><?= implode(", ",$year["prez"]) ?></td>
        <td><?= implode(", ",$year["died"]) ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
