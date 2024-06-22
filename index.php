<?php

print "please select an option.\n";
print "1. deposit\n";
print "2. withdrawal\n";
print "3. other\n";

$option = readline("Enter an option: "); 

if ($option = "1")
{
    print "you have deposited $10";
}

if ($option = "2")
{
    print "how much would you like to withdraw? great! you have withdrawn $1000";
}

if ($option = "3")
{
    print "there is no option 3. hahah got em";
}
?>