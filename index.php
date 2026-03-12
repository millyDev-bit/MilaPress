<?php 

function test($gtnoxy, $chanapary){
    $gtnoxy = trim($gtnoxy, " \n\r\t\v\x0B\"'");
    $chanapary = trim($chanapary, " \n\r\t\v\x0B\"'");

    if(!file_exists($gtnoxy)){
        print_r("\n[!] Error: No such file at this path.\n");
        return;
    }

    if(strtolower(substr($gtnoxy, -4)) != ".txt"){
        print_r("\n[!] Error: Invalid file format. Please upload a .txt file.\n");
        return;
    }

    $content = file_get_contents($gtnoxy);
    if($content == false){
        print_r("\n[!] Error: Could not read the file.\n");
        return;
    }

    $step1 = str_replace(["\r\n", "\r", "\n"], "[BR]", $content);
    $step2 = str_replace("\t", " ", $step1);
    $step3 = implode(" ", array_filter(explode(" ", $step2)));
    
    $compressed = gzcompress($step3, 9);
    $reversed = strrev($compressed);
    $itogy = base64_encode($reversed);

    if(file_put_contents($chanapary, $itogy) != false){
        $oldSize = strlen($content);
        $newSize = strlen($itogy);
        print_r("\n-------------------------------------");
        print_r("\n[+] Reverse Mode");
        print_r("\n[+] Efficiency: " . round(100 - ($newSize / $oldSize * 100), 1) . "%");
        print_r("\n-------------------------------------\n");
    }
}


function restore($otkuda, $kuda){
    $otkuda = trim($otkuda, " \n\r\t\v\x0B\"'");
    $kuda = trim($kuda, " \n\r\t\v\x0B\"'");

    if(!file_exists($otkuda)){
        print_r("\n[!] Error: Compressed file not found.\n");
        return;
    }

    $data = file_get_contents($otkuda);
    $binary = base64_decode($data);
    
    $d = gzuncompress(strrev($binary));
    
    if($d == false){
        print_r("\n[!] Error: The file is corrupted or not in the required format.\n");
        return;
    }

    $finalText = str_replace("[BR]", "\n", $d);
    file_put_contents($kuda, $finalText);
    print_r("\n[+] File recovered successfully.: $kuda\n");
}

print_r("\n=== MY COMPRESSOR CLI ===\n");
print_r("1. Compress\n");
print_r("2. Restore\n");
print_r("3. Exit\n");

$choice = readline("Please select an action (1/2/3): ");

if($choice == "1"){
    $in = readline("Input file path (.txt only): ");
    $out = readline("Enter name for the new file (e.g., test.txt): ");
    test($in, $out);
} 
else if($choice == "2"){
    $in = readline("Input the name for the compressed file: ");
    $out = readline("Input the name for the restored file: ");
    restore($in, $out);
} 
else{
    print_r("Process finished.\n");
}


// $kompiChanapary = 'C:\Users\araga\Desktop\probnik.txt';
// $imFayly = "test.txt";

// test($kompiChanapary, $imFayly);
// restore("test.txt", "originalTest.txt");
?>