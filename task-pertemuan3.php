<?php

# membuat class Animal
class Animal
{
  # property animals
  public $animals = array ();

  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($data)
  {
    $this -> animals = $data;
  }

  # method index - menampilkan data animals
  public function index()
  {
    # gunakan foreach untuk menampilkan data animals (array)
    $animals = array ("serigala", "harimau", "singa", "macan");

    foreach ($animals as $animal) {
        echo "$animal <br>";
    }
  }

  # method store - menambahkan hewan baru
  # parameter: hewan baru
  public function store($data)
  {
    # gunakan method array_push untuk menambahkan data baru
    $animals = array ("serigala", "harimau", "singa", "macan");
    array_push($animals, "burung");
    print_r($animals);

    // $animals = ['serigala', 'harimau', 'singa', 'macan'];
    // $new = array_push($animals, 'burung');

    // print_r($animals);
    // echo $new."\n";
    echo "<br>";
  }

  # method update - mengupdate hewan
  # parameter: index dan hewan baru
  public function update($index, $data)
  {
    $animal[0] = "Kucing Anggora";
    // echo "Array after updating fourth element value: <br>";
    print_r($animal);
    echo "<br>";

  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index)
  {
    # gunakan method unset atau array_splice untuk menghapus data array
    // unset($animal);
    
  }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal([]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";