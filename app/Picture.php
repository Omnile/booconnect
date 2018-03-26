<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use \Cloudinary\Uploader;

class Picture extends Model
{
    protected $types = [
        'user' => User::class,
        'staff' => Restaurant::class,
        'item' => Item::class,
    ];

    public function imageable()
    {
        return $this->morphTo();
    }

    /**
     * This is a helper method for saving an image
     * in the database and creating a
     * relationship between an
     * image and an imagable.
     *
     * @param  int    $id          This will be the ID of the item
     *                             that this image belong to.
     * @param  string $image       This is the image input that
     *                             was sent from the form.
     * @param  string $class       This is the imagable class.
     * @param  string $description This is the descripton of the image.
     * @return App\Picture         This is the picture object.
     */
    public static function storeImage(int $id, string $image, string $class, $description = null, $size = 300)
    {
        $picture = new self;

        $picture->imageable_id = $id;
        $picture->imageable_type = $class;
        $picture->description = $description;
        $picture->path = self::upload($image, $size);

        $picture->save();

        return $picture;
    }

    protected static function upload($image, $size)
    {
        if (config('booconnect.use-cloudinary')) {
            return Uploader::upload($image, array('height' => $size))['secure_url'];
        }

        $imagePath = '/images/' . str_random(50) . '.jpg';

        Image::make($image)
            ->fit($size, $size)
            ->save(
                storage_path(
                    "/app/public/{$imagePath}"
                )
            )
        ;

        return $imagePath;
    }

    // public function getImageableTypeAttribute($type)
    // {
    //     // Illuminate/Database/Eloquent/Model::morphTo checks for null in order
    //     // to handle eager-loading relationships
    //     if (!$type) {
    //         return null;
    //     }

    //     // to make sure this returns value from the array
    //     return array_get($this->types, $type, $type);
    // }
}
