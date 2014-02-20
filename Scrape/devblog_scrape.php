<html>

<head>
    <style>
    .resultNew{
        font-size:6px;
        border-radius:10px;
        background-color:yellow;
    }

    .resultNew li{

        font-size:20px;
    }

    .tile {
        height: 300px;
        width: 300px;
        box-shadow: 10px 10px 10px #111;
        box-shadow: 10px 10px 10px #111;  
}

    </style>

</head>

<?php
$file_string = file_get_contents('http://allrecipes.com/recipes/meat-and-poultry/chicken/?prop24=hn_slide0&evt19=1');
?>

preg_match('/<meta name="keywords" content="(.*)" \/> /i', $file_string, $keywords);
$keywords_out = $keywords[1];
preg_match('/<meta name="description" content="(.*)" \/> /i', $file_string, $description);
$description_out = $description[1];

preg_match_all('/<li><a href="(.*)">(.*)<\/a><\/li>/i', $file_string, $links);

p><strong>Title:</strong> <?php echo $title_out; ?></p>
<p><strong>Keywords:</strong> <?php echo $keywords_out; ?></p>
<p><strong>Description:</strong> <?php echo $description_out; ?></p>
<p><strong>Links:</strong> <em>(Name - Link)</em><br />
<?php
echo '<ol>';
for($i = 0; $i < count($links[1]); $i++) {
echo '<li>' . $links[2][$i] . ' - ' . $links[1][$i] . '</li>';
}
echo '</ol>';
?>
</p>


</html>