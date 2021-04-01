<?php

//Condition if
function task_if($id)
{
    if ($id) {
        return "Hi, I'm true";
    } else {
        return "Hi, I'm false";
    }
}

//Condition switch
function task_switch($id)
{
    switch ($id) {
        case 1:
            return "Hi, I'm option 1";
            break;
        case 2:
            return "Hi, I'm option 2";
            break;
        case 3:
            return "Hi, I'm option 3";
            break;
        case 1:
            return "Hi, I'm option 4";
            break;
    }
}

echo task_if(true) . "<br>";
echo task_switch(1) . "<br>";
