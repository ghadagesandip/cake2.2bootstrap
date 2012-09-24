<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FileUploadComponent
 *
 * @author webwerks
 */
class FileUploadComponent extends Component {
    
      
        function generateUniqueFilename($fileName, $path=''){
                $fileName = str_replace(' ', '_', $fileName);
                $path = empty($path) ? WWW_ROOT.'/uploads/' : $path;
                $no = 1;
                $newFileName = $fileName;

                while (file_exists("$path/".$newFileName)) {
                  $no++;
                  $newFileName = substr_replace($fileName, "_$no.", strrpos($fileName, "."), 1);
                }
                 return $newFileName;
          }



          function handleFileUpload($fileData, $fileName, $path=''){
                $path = (empty($path)) ? WWW_ROOT.'/uploads/' : $path;

                if (is_uploaded_file($fileData['tmp_name']))
                  {
                    //Finally we can upload file now. Let's do it and return without errors if success in moving.
                    if (move_uploaded_file($fileData['tmp_name'], $path."/".$fileName)){
                        return TRUE;
                    }else{
                        return false;
                    }
                  }
          }
   
}
?>
