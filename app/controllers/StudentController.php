<?php
namespace App\Controllers;

class StudentController
{

    public function index()
    {
         echo '<h1>Daftar Sugus</h1>';
         echo '<p>Menampilkan daftar sugus</p>';
    }

    public function create()
    {
         echo '<h1>Tambah Sugus</h1>';
         echo '<p>Menampilkan form tambah sugus</p>';
    }

     public function show(string $id)
     {
          echo '<h1>Detail Sugus</h1>';
          echo "<p>Menampilakan detail sugus dengan ID: {$id}</p>";
     }

}