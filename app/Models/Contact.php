<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Services\ImageTreatment;
use Illuminate\Support\Facades\Storage;

const pathImageStorage = "contacts";

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'phone',
        'birthDate',
        'email',
        'observations',
        'image'
    ];

    public static function createRegister($contactRequest):void {

        $contact = Contact::create($contactRequest);

        self::setImagePath($contact);
    }

    public static function getById($id) : Contact {

        $contact = Contact::findOrFail($id);

        return $contact;
    }

    public static function editRegister($contactRequest) : void {

        $contact = self::getById($contactRequest->id);

        $contact->update($contactRequest->all());

        self::setImagePath($contact);
    }

    public static function deleteRegister($id) : void {

        $contact = self::getById($id);

        $image = $contact->image;

        if ( $contact->delete() && !empty($image)) {
            self::removeImagePath($image);
        }
    }

    private static function setImagePath($contact): void {

        $imageForTreatment = $contact->image;

        if (file_exists($imageForTreatment) ) {
            $id = $contact->id;

            $fileName = ImageTreatment::getImageTreatment($imageForTreatment, pathImageStorage, $id);

            $contact->image = $fileName;

            $contact->save();
        }
    }

    private static function removeImagePath($image): void {

        Storage::delete(pathImageStorage . "\\image\\" . $image);

    }

    public static function getImagePath($image) : string {

        if (empty($image)) return 'Vazio';

        $folder = Storage::path(pathImageStorage . "\\image\\" . $image);

        return  $folder;
    }

}
