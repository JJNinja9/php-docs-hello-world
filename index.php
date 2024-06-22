<?php
    print "ATM test\n\n";
    print "1. Withdrawal\n";
    print "2. Deposit\n";
    print "3. Other\n\n";

    $balance = 500;

        $option = readline("Command: ");
        //readline_add_history($line);

        if ($option) == "1"
        {
            print "How much would you like to withdraw?";
            $amount = readline("Command: ");
            
            if ($amount > $balance)
            {
                print "error. insufficient funds. calling police.";
            }

        }

?>