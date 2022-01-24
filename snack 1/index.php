<?php
    $matches = [
        [
            'home' => 'Los Angeles Clippers',
            'home_pts' => '102',
            'guest' => 'New York Knicks',
            'guest_pts' => '110'
        ],
        [
            'home' => 'Boston Celtics',
            'home_pts' => '116',
            'guest' => 'Washington Wizards',
            'guest_pts' => '87'
        ],
        [
            'home' => 'Los Angeles Lakers',
            'home_pts' => '107',
            'guest' => 'Miami Heat',
            'guest_pts' => '113'
        ],
        [
            'home' => 'Chicago Bulls',
            'home_pts' => '95',
            'guest' => 'Orlando Magic',
            'guest_pts' => '114'
        ],
        [
            'home' => 'Portland Trail Blazers',
            'home_pts' => '114',
            'guest' => 'Toronto Raptors',
            'guest_pts' => '105'
        ],
        [
            'home' => 'Atlanta Hawks',
            'home_pts' => '113',
            'guest' => 'Charlotte Hornets',
            'guest_pts' => '91'
        ],
        [
            'home' => 'Philadelphia 76ers',
            'home_pts' => '115',
            'guest' => 'San Antonio Spurs',
            'guest_pts' => '109'
        ],
        [
            'home' => 'Memphis Grizzlies',
            'home_pts' => '91',
            'guest' => 'Dallas Mavericks',
            'guest_pts' => '104'
        ],
        [
            'home' => 'Brooklyn Nets',
            'home_pts' => '125',
            'guest' => 'Minnesota Timberwolves',
            'guest_pts' => '136'
        ],
        [
            'home' => 'Detroit Pistons',
            'home_pts' => '111',
            'guest' => 'Denver Nuggets',
            'guest_pts' => '117'
        ],
        [
            'home' => 'Utah Jazz',
            'home_pts' => '92',
            'guest' => 'Golden State Warriors',
            'guest_pts' => '94'
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Results</h1>

    <?php for($i = 0; $i < count($matches); $i++) { ?>
        <?php $this_match = $matches[$i]; ?>

        <div class="match">
            <?php echo $this_match['home']; ?> - <?php echo $this_match['guest']; ?> | 
            <?php echo $this_match['home_pts']; ?>-<?php echo $this_match['guest_pts']; ?>
        </div>

    <?php } ?>
</body>
</html>