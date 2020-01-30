<?php

$html = <<<EOF
<html>
<body>
test

</body>
</html>
EOF;

Route::get("/heredoc", function() use ($html) {
    return $html;
});