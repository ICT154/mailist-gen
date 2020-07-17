<?php

$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg = "\e[42m";
$lgreenbg = "\e[102m";
$yellowbg = "\e[43m";
$lyellowbg = "\e[103m";
$redbg = "\e[101m";
$grey = "\e[37m";
$cyan = "\e[36m";
$bold   = "\e[1m";

$ask = "\e[97m[ \e[93m?\e[97m ] ";
$err = "\e[97m[ \e[91m!\e[97m ] ";
$suk = "\e[97m[ \e[92m+\e[97m ] ";

$logo = "
\e[1m \e[91m      ___             __ _     _   
      /   \___ _ __   / /(_)___| |_ 
     / /\ / _ \ '_ \ / / | / __| __|
    / /_//  __/ | | / /__| \__ \ |_ 
   /___,' \___|_| |_\____/_|___/\__|
   \e[97m [ Author : R4D3N G0Z4LL ]
   \e[35m [ Mailist Generator ]\e[97m
                                 
";
system('clear');

echo $logo;
echo $ask."List Nama Untuk Mailist : "; $nama = trim(fgets(STDIN));
echo "";
echo $suk."Sedang Mengambil List Nama......";
sleep(2);
$list = file_get_contents($nama);
$low = strtolower($list);
$x = explode("\r\n", $low);
echo "\n";
echo $ask."Tipe Email Yang Mau Di Generate ( yahoo.com ) : "; $mail = trim(fgets(STDIN));
echo $ask."Jumlah Generate : "; $jum = trim(fgets(STDIN));
sleep(1);
echo "\n";
echo "\n";
echo $suk."Sedang Di Proses.....";
echo "\n";
for ($i=1; $i <= $jum; $i++) {
			$no = "1234567890";
			$n = str_shuffle($no);
			$result = substr($n, rand(1, 3), rand(1, 3));
			$hub = array("_", ".");
			$name = $x[array_rand($x, 1)];
			$peng = $hub[array_rand($hub, 1)];
			$cek = $name.$result."@$mail\n";
			$file = "list_email.txt";
			touch($file);
		$o = fopen($file, 'a');
		fwrite($o, $cek);
		fclose($o);
			}
			sleep(5);
			echo $suk."$jum Mail List Sukses Di Generate !";
			echo "\n";
		    echo $suk."Cek Hasilnya di list_email.txt\n";

?>
