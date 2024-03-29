<?php

# membuat class Animal
class Animal
{
  # property animals
  private $animals = [];

  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct(Array $data)
  {
    $this->animals = $data;
  }

  # method index - menampilkan data animals
  public function index()
  {
    # gunakan foreach untuk menampilkan data animals (array)
    foreach ($this->animals as $index => $a) {
        echo ($index + 1) . ". " . $a . "\n";
    }
  }

  # method store - menambahkan hewan baru
  # parameter: hewan baru
  public function store(String $data)
  {
    # gunakan method array_push untuk menambahkan data baru
    array_push($this->animals, $data);
  }

  # method update - mengupdate hewan
  # parameter: index dan hewan baru
  public function update($index, $data)
  {
    try {
        $this->animals[$index] = $data;
    } catch (Exception $e) {
        echo "Error: " + $e->getMessage();
    }
  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index)
  {
    # gunakan method unset atau array_splice untuk menghapus data array
    unset($this->animals[$index]);
  }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(["Kucing", "Anjing", "Burung", "Keledai", "Kuda", "Sapi"]);

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