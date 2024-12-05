<?php

namespace App\Models;

class Location
{
    public $id;
    public $name;
    public $image;
    public $creationDate;

    public function __construct($id, $name, $image, $creationDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->creationDate = $creationDate;
    }

    public static function all()
    {
        return [
            new self(1, 'Sede Central', 'https://plus.unsplash.com/premium_photo-1678963247798-0944cf6ba34d?fm=jpg&q=60&w=3000', '2023-01-01'),
            new self(2, 'Sede Norte', 'https://images.unsplash.com/photo-1527465094057-db061fdbfaf7?fm=jpg&q=60&w=3000', '2023-02-01'),
            new self(3, 'Sede Sur', 'https://plus.unsplash.com/premium_photo-1670275658703-33fb95fe50d8?fm=jpg&q=60&w=3000', '2023-03-01'),
            new self(4, 'Sede Este', 'https://images.unsplash.com/photo-1501459530422-244942cf51f5?fm=jpg&q=60&w=3000', '2023-04-01'),
            new self(5, 'Sede Oeste', 'https://images.unsplash.com/photo-1489936724440-afaf5a115ede?fm=jpg&q=60&w=3000', '2023-05-01'),
            new self(6, 'Sede Centro', 'https://images.unsplash.com/photo-1534655610770-dd69616f05ff?fm=jpg&q=60&w=3000', '2023-06-01'),
        ];
    }
    
}