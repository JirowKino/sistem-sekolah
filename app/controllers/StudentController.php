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
}