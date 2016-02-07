<?php

function generation ($age){

if ($age < 16){

	echo "tu es un enfant";
}

elseif ($age == 18){

	echo " bravo on va faire la fete";
}

elseif ($age > 18){

	echo " tu es un adulte";
}

else {

	echo " euh c'est louche";
}

};

echo generation (0);
echo "\n";
echo generation (15);
echo "\n";
echo generation (17);
echo "\n";
echo generation (18);
echo "\n";
echo generation (20);
echo "\n";
echo generation ("simplon");
echo "\n";
echo generation (true);
echo "\n";
echo generation (array(1,2));