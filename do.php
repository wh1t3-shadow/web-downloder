
<?php
system('clear');
echo "\e[0;31m

                                           
           _       _ _                     
 _ _ _ ___| |_ ___|_| |_ ___               
| | | | -_| . |_ -| |  _| -_|              
|_____|___|___|___|_|_| |___|              
                                           
                                           
 ____                _           _         
|    \ ___ _ _ _ ___| |___ ___ _| |___ ___ 
|  |  | . | | | |   | | . | .'| . | -_|  _|
|____/|___|_____|_|_|_|___|__,|___|___|_|  
                                           

";
echo "\e[0;32m    Devoloper  ::wh1t3 shadow "; 
echo "

";
echo"[ 1 ]  offline mirror any website";
echo"

[ 2 ] download all source code of any website";
echo"

[ 3 ] download all source code of single webpage ";
echo"

";
$a= readline("\e[0;36menter your option : ");
if ($a==1){
mirror();
}
elseif ($a==2){
dow();
}
elseif ($a==3){
page();
}
else {
echo " enter a valid input";
}
function mirror(){

system("clear");
echo" \e[0;36m
                    ▄───▄
                    █▀█▀█
                    █▄█▄█
                    ─███──▄▄
                    ─████▐█─█
                    ─████───█
                    ─▀▀▀▀▀▀▀
";

echo "website link ex: https://example.com";
echo"

";

$ab = readline("enter link : ");
system("wget -m $ab");
system("clear");

echo"\e[0;31m

            type ls for if download";
}


function dow(){

system("clear");
echo" \e[0;36m
                    ▄───▄
                    █▀█▀█
                    █▄█▄█
                    ─███──▄▄
                    ─████▐█─█
                    ─████───█
                    ─▀▀▀▀▀▀▀
";

echo "website link ex: https://example.com";
echo"

";
$ab = readline("enter link : ");
system("wget -p -k $ab");
system("clear");
echo"\e[0;31m

            type ls for if download";
echo"
";
}




function page(){

system("clear");
echo" \e[0;36m
                    ▄───▄
                    █▀█▀█
                    █▄█▄█
                    ─███──▄▄
                    ─████▐█─█
                    ─████───█
                    ─▀▀▀▀▀▀▀
";

echo "page link ex: https://example.com/page.html";
echo"

";
$ab = readline("enter link : ");
system("wget -p -k $ab");
system("clear");
echo"\e[0;31m

            type ls for if download";
echo"
";
}
?>

