<?php 
$JSON = '{
    "FIFA_Last_World_Cup_final":
    {
        "Year": "2018",
        "data":
        {
            "Winner": "France",
            "Score": "4-2",
            "Runner-up": "Croatia"
        }
    }
}';

$outputObject = json_decode($JSON);

print "<PRE>";
print_r($outputObject);
?>