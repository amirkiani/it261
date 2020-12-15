<?php
// this is my heredoc synax

$book = 'Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

$content = <<<EOT
<p>My favorite book is $book, written by $author, and is presently a miniseries on HULU.
Hulu's viewing audience is extremely excited about the miniseries and looks forward to the 5th season of the award-winning 'Handmaid's Tale!' The $actor's rendition is right on!
Again the content will work, because of my content is displayed in orange, my variab;es is displayed in black!!</p>
EOT;

echo $content;