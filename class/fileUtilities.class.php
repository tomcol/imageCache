<?php
    class FileUtilities{

        function save_file_if_sent($file_name, $file_dir)
        {
                if(array_key_exists($file_name,$_FILES))
                {
                        if(is_uploaded_file($_FILES[$file_name]["tmp_name"]))
                        {
                                $filename = basename($_FILES[$file_name]["name"]);
                                $filename=$_FILES[$file_name]["name"];
                                $i=0;
                                $filename=str_replace(array("%","'",'"'),"",$filename);
                                $old_file_name=$filename;
                                while (file_exists($file_dir.$filename)){
                                        $filename=$i.$old_file_name;
                                        $i++;
                                }
                                if(filesize($_FILES[$file_name]["tmp_name"]))
                                {
                                        $result=move_uploaded_file($_FILES[$file_name]["tmp_name"],$file_dir.$filename);
                                        if ($result){
                                            return $filename;
                                        }
                                }
                        }
                }
        }

            function saveFileIfSent($file_name,$name,$tmp_name, $file_dir)
        {

                        if(is_uploaded_file($tmp_name))
                        {
                        		
                                $filename = basename($name);
                                $filename=$name;
                                $i=0;
                                $filename=str_replace(array("%","'",'"'),"",$filename);
                                $old_file_name=$filename;
                                while (file_exists($file_dir.$filename)){
                                        $filename=$i.$old_file_name;
                                        $i++;
                                }
                                if(filesize($tmp_name))
                                {
                                        move_uploaded_file($tmp_name,$file_dir.$filename);
                                        return $filename;
                                }
                        }
        }


    }

?>
