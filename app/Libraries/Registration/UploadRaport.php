<?php namespace App\Libraries\Registration;

use Illuminate\Http\UploadedFile;

/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 16.41
 */
class UploadRaport
{
    /**
     * @var string
     */
    protected $folder_name = "raports";

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    private $registration_number;

    public function __construct(string $registration_number)
    {
        $this->registration_number = $registration_number;

        $this->init();
    }

    public function upload(UploadedFile $uploaded_file, string $raport_name)
    {
        $filename = $raport_name . "_" . $uploaded_file->getClientOriginalName();

        \Storage::putFileAs(
            $this->path,
            $uploaded_file,
            $filename
        );
    }

    private function init()
    {
       $this->init_storage_path();

       $this->create_folder();
    }

    private function create_folder()
    {
        return  \Storage::makeDirectory($this->path);
    }

    private function init_storage_path()
    {
        $this->path = "{$this->folder_name}/{$this->registration_number}";
    }
}
