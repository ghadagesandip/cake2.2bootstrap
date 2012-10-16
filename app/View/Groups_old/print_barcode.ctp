<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

           $data_to_encode = 'Sandip R ghadge';

            // Generate Barcode data
            $this->Barcode->barcode();
            $this->Barcode->setType('C128');
            $this->Barcode->setCode($data_to_encode);
            $this->Barcode->setSize(80,200);

            // Generate filename
            $random = rand(0,1000000);
            $file = 'img/barcode/code_'.$random.'.png';

            // Generates image file on server
            $this->Barcode->writeBarcodeFile($file);

            // Display image
            echo $this->Html->image('barcode/code_'.$random.'.png');




?>


