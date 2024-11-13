<?php
    // ------------File Handling-----------
    
    // ----Create a file----
    touch("sample.txt");//only file create
    touch("./file/sample.txt"); //file create with path


    // ----Delete a file----
    unlink("./file/sample.txt");//delete file path created file


    // ----Create a folder----
    mkdir("sampledir");


    // ----Delete a folder----
    rmdir("sampledir");


    // ----Create a file in Append (a) mode and Write some data----
    $file = fopen("file.txt","a");// in append mode if content have ,continue to write from it 
    fwrite($file, "ThripleBee");
    fwrite($file, "\nSubscribe Us!");
    fclose($file);


    // ----Read the file in Read (r) mode----
    $file = fopen("file.txt","r");
    while(!feof($file)){   //feof function - Tests for end-of-file on a file pointer
        echo fgets($file).'<br>';
    }

    fclose($file);


    // ----Get file size of a file----
    echo filesize("file.txt").'<br>';


    // ----Check whether file is available or not---- for error handling part
    if(file_exists("file1.txt")){
        echo "File is available!"."<br>";
    }
    else{
        echo "File is not available!"."<br>";
    }


    // ----Create a file in Write (w) mode and Write some data using different function----
    $file = fopen("test.txt","w");//if do not have  file it will create file and open it
    fputs($file, 2000);// in write mode if content have delete content and write it new
    fclose($file);


    // ----Write variable data into the file----
    $arr = file("test.txt");// file content insert in to array
    print_r($arr);
    $co = $arr[0];
    $co++;

    $file = fopen("test.txt","w");
    fputs($file, $co);
    fclose($file);

    echo '<br>'.$co;
?>