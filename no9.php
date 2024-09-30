<?php

    // The amount of money to be broken down into denominations
    $jumlah = 140500;

// Function to break down the amount into jumlah
    function hitungPecahanUang($jumlahUang) {
        // List of available currency denominations in descending order
        $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100];
        
        // Array to store the result of the number of bills per denomination
        $hasil = [];

        // Loop through each denomination
        foreach ($pecahan as $nilai) {
            // Check if the amount is greater than or equal to the current denomination
            if ($jumlahUang >= $nilai) {
                // Calculate how many bills of this denomination can be used
                $jumlahLembar = intdiv($jumlahUang, $nilai);
                
                // Store the number of bills in the result array
                $hasil[$nilai] = $jumlahLembar;
                
                // Calculate the remaining amount after using this denomination
                $jumlahUang = $nilai;
            }
        }

        // Return the breakdown result as an associative array
        return $hasil;
    }

    
    // Display the initial amount
    echo "Money: " . $jumlah . "<br>";
    
    // Display the breakdown result
    foreach (hitungPecahanUang($jumlah) as $pecahan => $jumlahLembar) {
        echo "jumlah Rp " . number_format($pecahan, 0, ',', '.') . ": " . $jumlahLembar . " bills<br>";
    }
?>
