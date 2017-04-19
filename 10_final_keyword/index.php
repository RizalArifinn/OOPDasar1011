<?php

    /*
       keyword final ialah sesuatu yang tidak bisa diturunkan lagi atau bersifat akhir. Jadi ketika method/class memiliki embel-embel final.. maka class/method itu akan menjadi class/method akhir tidak bisa di turunkan/inheritance
    */


    class Mobil
    {

        public function beli() //method public biasa...
        {
            echo 'Beli Mobil ...'.PHP_EOL;
        }


       //final public function jual(), ialah method yang tidak bisa diturunkan lagi/dioverride atau bersifat akhir*/
        final public function jual()
        {
            echo 'Jual Mobil ...'.PHP_EOL;
        }
    }



    class Mercedes extends Mobil /* Inheritance / turunan */
    {

        /* jika kita memanggil ulang method jual, seperti ini maka akan terjadi error. Karena fungsi jual() sudah menjadi final/akhir */
        //sengaja dikomen biar ga error

        // public function jual()
        // {
        //     echo 'Jual Mobil Hitam ...'.PHP_EOL;
        // }


        public function beli()
        {
            echo 'Beli Mobil Hitam'.PHP_EOL;
        }
    }


    //pembuatan object baru
    $mobil = new Mercedes();

    $mobil->beli(); //memanggil fungsi beli
    echo ' | '; //sebagai pembatas
    $mobil->jual(); //memanggil fungsi jual    
