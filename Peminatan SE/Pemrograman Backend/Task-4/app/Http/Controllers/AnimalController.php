<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    private $animals = [];

    public function __construct() {
        $this->animals = ["Ayam", "Burung", "Kerbau", "Kambing", "Singa", "Lebah", "Kucing", "Tikus"];
    }

    public function add (Request $request) {
        array_push($this->animals, $request->animal);
        return $this->animals;
    }

    public function index() : Array {
        return $this->animals;
    }

    public function update (Request $request, $index) {
        if ($index > (count($this->animals) - 1) || $index < 0) return response()->json([
            "index" => "out of index."
        ], 400);

        $this->animals[$index] = $request->animal;
        return $this->animals;
    }

    public function delete($index) {
        if ($index > (count($this->animals) - 1) || $index < 0) return response()->json([
            "index" => "out of index."
        ], 400);

        unset($this->animals[$index]);
        return $this->animals;
    }

    public function get_by_index($index) {
        if ($index > (count($this->animals) - 1) || $index < 0) return response()->json([
            "index" => "out of index."
        ], 400);

        return $this->animals[$index];
    }
}
