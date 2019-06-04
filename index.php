<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vuejs in PHP</title>
    <link rel="stylesheet" href="public/css/main.css">
</head>

<body>
    <?php
    $data = [
        [
            'name' => 'Gozzilla',
            'duration' => '128 minutes'
        ],
        [
            'name' => 'Aladdin',
            'duration' => '129 minutes'
        ],
        [
            'name' => 'Avenger',
            'duration' => '125 minutes'
        ]
    ];
    $data = json_encode($data);
    ?>

    <div class="notification">
        <button class="delete"></button>
        Lorem ipsum
    </div>

    <div id="app">
        <div class="container">
            <Movie v-for='(data, index) in <?= $data ?>' v-bind:movie-object="data" :key="index"></Movie>
        </div>


    </div>

    <script src="public/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                $notification = $delete.parentNode;
                $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });
    </script>
</body>

</html>