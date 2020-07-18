

<?php
$array = [
    'Ten Steps To a Better You',
    'Ten Steps To a Better You',
     'Refat is not a bad boy',
     'Refat is not a bad boy',
     'ashik is a nice gay',
     'ashik is a nice gay',

    'Uplifting News by ZeroHege'
];
$unique = array_unique($array);

foreach ($unique as $you) {
  echo $you.'</br>';
}
