<?php // views/index.php ?>
<html>
    <head>
        <title>render_view</title>
    </head>
    <body>
        <h1>Render View</h1>
        <p>Example of how to use a basic template renderer to render a view - maybe mix this up with ome Pug or other pre-processor to make writng your HTML a little easier!</p>
        <h2>Dynamic content</h2>
        <p>This has been passed into our template from our main script:</p>
        <ul>
            <li>Name: <?= $name ?></li>
            <li>Colour: <?= $colour ?></li>
        </ul>
        <p>This content will be repeated:</p>
        <ul>
            <?php foreach($friends as $friend){
                render_view('friends', $friend);
            } ?>
        </ul>
    </body>
</html>