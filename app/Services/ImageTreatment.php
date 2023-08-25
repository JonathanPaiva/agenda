<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageTreatment {    
    
    /**
     * Captura a imagem e armazena no Storage com o nome de acordo com $logFileType passado + o $id .
     *
     * @param UploadedFile $imageReceived
     * @param string $destinationFolderStorage
     * @param int $id  
     * @return string
     */
    public static function getImageTreatment($imageReceived, $destinationFolderStorage, $id): string {
                
        $fileName = $destinationFolderStorage . "-" . $id . "." . $imageReceived->clientExtension();
        
        self::setImageStoragePath($imageReceived, $destinationFolderStorage, $fileName);
        
        return $fileName;
    }
    
    private static function setImageStoragePath($image, $destinationFolder, $name) : void {
        
        $folder = $destinationFolder . "/image";
        
        $image->storeAs($folder, $name);
    }    
}