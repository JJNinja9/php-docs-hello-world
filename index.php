<?php
    print "ATM test\n\n";
    print "1. Withdrawal\n";
    print "2. Deposit\n";
    print "3. Other\n\n";

    $balance = 500;

        $option = readline("Command: ");

        if ($option) == "1"
        {
            print "How much would you like to withdraw?";
            $amount = readline("Command: ");
            
            if ($amount > $balance)
            {
                print "error. insufficient funds. calling police.";
            }

            else {
                print "Transaction successful.";
            }

        }

        if ($option == "2")
        {
            print "How much would you like to deposit?";
            $amount = readline("Command: ");
            
            if (!is_numeric($amount))
            {
                print "Please enter a number.";
                $amount = readline("Command: ");
            }

            if (is_numeric($amount))
            {
                print "Deposit successful.";
            }
        }

        if ($option == "3")
        {
            print "this does nothing. hahaha got em";
        }

?>