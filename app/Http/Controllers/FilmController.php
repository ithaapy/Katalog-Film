<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Category;

class FilmController extends Controller
{
    // menampilkan halaman utama.
    public function home()
{
    $id_pilihan = [3, 8, 4];

    $film_pilihan = [];
    foreach ($id_pilihan as $id) {
        // Controller mengambil beberapa film
        $film = Film::find($id);
        if ($film) {
            $film_pilihan[] = $film;
        }
    }
    // data tersebut dikirim ke View
    return view('home', [
        'title' => 'Home',
        'film_pilihan' => $film_pilihan,
    ]);
// "Ambil beberapa data film dari Model, lalu kirim data tersebut ke halaman Home."
}

    
    // Fungsi ini mengatur proses ketika user membuka halaman katalog.
    public function katalog(Request $request)
{
    // Mengambil pilihan genre yang dikirim oleh user dari URL.
    $genre_dipilih = $request->query('genre');

    // Mengambil kata kunci pencarian dari URL (kolom search di navbar).
    $q = trim((string) $request->query('q'));

    // Memulai pertanyaan ke tabel films. Belum dijalankan.
    $query = Film::query();

    // Jika user memilih genre, Controller melakukan filter berdasarkan genre tersebut.
    if ($genre_dipilih) {
        $query->where('genre', 'like', '%' . $genre_dipilih . '%');
    }

    // Jika user mengetik kata kunci, Controller mencari film yang judulnya mengandung kata itu.
    if ($q !== '') {
        $query->where('judul', 'like', '%' . $q . '%');
    }

    // Mengirim hasil filter dan data genre ke View katalog.
    return view('katalog', [
        'title' => 'Katalog Film',

        // Menjalankan pertanyaan di atas dan mengambil hasilnya dari Model.
        'films' => $query->get(),

        // Mengambil semua genre dari database.
        // Satu film bisa memiliki lebih dari satu genre, misalnya "Drama, Action".
        'daftar_genre' => Film::pluck('genre')

            // Memisahkan genre yang ditulis dalam satu data menggunakan koma.
            ->flatMap(fn ($genre) => explode(',', $genre))

            // Menghapus spasi yang tidak diperlukan.
            ->map(fn ($genre) => trim($genre))

            // Menghilangkan genre yang sama agar tidak muncul berulang.
            ->unique()

            // Mengatur kembali urutan data.
            ->values(),

        // Mengirim genre yang sedang dipilih user
        // agar View mengetahui filter yang sedang digunakan.
        'genre_dipilih' => $genre_dipilih,

        // Mengirim kata kunci pencarian agar View bisa menampilkannya.
        'q' => $q,
    ]);
}

// Halaman Genre: menampilkan semua film dalam satu kategori (genre)
public function kategori(Category $category)
{
    return view('katalog', [
        'title' => 'Genre: ' . $category->name,
        'films' => $category->films,
        'daftar_genre' => Category::orderBy('name')->pluck('name'),
        'genre_dipilih' => $category->name,
        'q' => '',
    ]);
}

    
    // Mengambil satu data film berdasarkan ID yang dipilih user.
    public function detail($id)
{
    // untuk menampilkan satu film tertentu.
    $film = Film::find($id);

    if (!$film) {
        abort(404);
    }
    // Kemudian data film dikirim ke halaman detail:
    return view('detail', [
        'title' => $film['judul'],
        'film' => $film,
    ]);
    // User memilih film → Controller menerima ID → Model mencari film → Controller mengirim film ke View.
}

    // Halaman About: tidak butuh data dari Model
    // Tidak mengambil data film dari Model. Controller langsung membuka halaman About.
    public function about()
{
    return view('about', [
        'title' => 'About',
    ]);
}
}

// “Filter diproses di Controller. Controller mengambil genre yang dipilih user, kemudian meminta Model mencari film yang sesuai dengan genre tersebut. Kalau tidak ada genre yang dipilih, semua film ditampilkan.”

// Bagian ['films' => $films] artinya: “kirim data $films ke View dengan nama films”. Nama inilah yang nanti dipakai di Blade sebagai $films.
// Hubungan dengan file lain:

// Dipanggil oleh Route (web.php).
// Memanggil Model (Film::all(), Film::find(), Film::where()).
// Mengirim data ke View (home, katalog, detail, about).