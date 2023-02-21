<?php

function logout()
{
    unset($_SESSION['ais']['logged']);
    header('Location: index.ph');
    exit;
}

function createDir($dir)
{
    if ($dir != '' && !is_dir($dir)) {
        $ret = mkdir($dir);
        if (!$ret) {
            //print "<pre>$dir\n";
        }
    }
}

function hashPassword($pwd)
{
    $hashed = md5('bisu-bc-ais_'.$pwd);

    return $hashed;
}

function getCSVFileData($file, $separator=",") 
{
    $data = array();
    if (is_file($file)) {
        $fd = fopen($file, "r");
        if ($fd == null) {
            die("Command 'fopen' failed for $file.");
        }
        $line = trim(fgets($fd));
        $headers = explode($separator, $line);
        while (!feof($fd)) {
            $line = trim(fgets($fd));
            if (empty($line)) continue;
            $token = explode($separator, $line);
            $row = array();
            foreach ($headers as $i => $header) {
                $row[$header] = $token[$i];
            }
            $data[] = $row;
        }
        fclose($fd);
    }

    return $data;
}

function getFileExtension($filename)  
{    
    $ext = preg_replace('/([^\.]+)\.(.+)$/', '$2', $filename);
    
    return $ext;
}

function getImagesFromDir($path, $name_filter='') 
{
    $files = scandir($path);
    $images = array();
    foreach($files as $file) {
        $fpath = $path.'/'.$file;
        if (is_file($fpath)) {
            $type = mime_content_type($fpath);
            if (preg_match('/^image/', $type)) {
                $base_fn = preg_replace('/\..+$/', '', $file);
                if ($name_filter != '') {
                    if (preg_match("/{$name_filter}/", $base_fn)) {
                        $images[$base_fn] = dirname($fpath).'/'.$file;
                    }
                } else {
                    $images[$base_fn] = dirname($fpath).'/'.$file;
                }
            }
        }
    }
    //print "<pre>$path - $name_filter\n"; print_r($files); print_r($images); exit;

    return $images;
}

?>