<?php namespace App\Libraries\Registration;
use Illuminate\Http\UploadedFile;

/**
 * Created By: Sugeng
 * Date: 23/04/20
 * Time: 18.28
 */
class UploadAvatar
{
    protected $folder_name = "app/public/avatars";

    /**
     * @var string
     */
    protected $registration_number;

    protected $path;

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
        $this->path = "{$this->folder_name}}";
    }
}
