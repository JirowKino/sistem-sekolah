<div class="mt-8 space-y-4">
    <!-- Card Header Start -->
    <div class="bg-white shadow rounded-lg p-4">
        <h1 class="text-2xl font-bold">Tambah Siswa</h1>
        <p>Menambahkan siswa ke dalam sistem</p>
    </div>
    <!-- Card Header End -->

    <!-- Card Content Start -->
    <div class="bg-white shadow rounded-lg">
        <form action="/sugus" method="POST" class="p-4 grid grid-cols-2 gap-4">
            <div class="space-y-2">
                <label for="name" class="block font-bold">Nama</label>
                <input class=" w-full border rounded-lg py-2 px-4" type="text" name="name" id="name"
                    placeholder="Masukkan Nama">
            </div>
            <div class="space-y-2">
                <label for="nis" class="block font-bold">NIS</label>
                <input class="w-full border rounded-lg py-2 px-4" type="text" name="nis" id="NIS"
                    placeholder="Masukkan NIS">
            </div>
            <div class="space-y-2">
                <label for="Kelas" class="block font-bold">Kelas</label>
                <input class="w-full border rounded-lg py-2 px-4" type="text" name="class" id="class"
                    placeholder="Masukkan Kelas">
            </div>
            <div class="space-y-2">
                <label for="phone_number" class="block font-bold">No Telepon</label>
                <input class="w-full border rounded-lg py-2 px-4" type="text" name="phone_number" id="phone_number"
                    placeholder="Masukkan No Telepon">
            </div>
            <div class="flex justify-end gap-4 col-span-2">
                <a href="/sugus" class="py-2 px-4 bg-gray-100 rounded-lg">Kembali</a>
                <button type="submit" class="py-2 px-4 bg-blue-500 rounded-lg text-white">Simpan</button>
            </div>
        </form>
    </div>
    <!-- Card Content End -->
</div>