<?php


    /*
       Scope Resolution Operator biasanya digunakan untuk mengakses property dan method pada suatu class tanpa harus instansiasi/new object terlebih dahulu
    */

    class Mobil
    {

        public static $jenisMobil = 'Mercedes'; //Property diset menjadi static/tetap
        public $type; //property diset menjadi public
        private $persneling; //property diset menjadi private


        //method

        public static function cetakJenisMobil() //method print/cetak/menampilkan jenis mobil
        {
        	//mengambil property $jenisMobil menggunakan self. Kenapa menggunakan self? karena self digunakan untuk memanggil property yang sifatnya static/tetap
            return 'Jenis Mobil : '.self::$jenisMobil;
        }

        public function setType($type) //method set type mobil
        {
            $this->type = $type;
        }

        public function getType() //method get type mobil
        {
            return $this->type;
        }

        public function setPersneling($persneling) //method set jumlah persneling
        {
            $this->persneling = $persneling;
        }

        public function getPersneling() //method get jumlah persneling
        {
            return $this->persneling;
        }

        //endOfMethod
    }
