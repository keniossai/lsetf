<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SpeakersController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllProfileController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', [HomePageController::class, 'homepage'])->name('homepage');
Route::get('/about', [AboutController::class, 'aboutpage'])->name('aboutpage');
Route::get('/speakers', [SpeakersController::class, 'speakers'])->name('speakers');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Speakers Profiles Routes
Route::get('/babajide-sanwolu', [AllProfileController::class, 'sanwo'])->name('sanwo');
Route::get('/Aloysius-Uche-Ordu', [AllProfileController::class, 'aloysius'])->name('aloysius');
Route::get('/Sam-Egube', [AllProfileController::class, 'sam'])->name('sam');
Route::get('/Bola-Adesolu', [AllProfileController::class, 'bola'])->name('bola');
Route::get('/Dr-Tobias-Wolfgarten', [AllProfileController::class, 'tobias'])->name('tobias');
Route::get('/Idris-Olorunnimbe', [AllProfileController::class, 'idris'])->name('idris');
Route::get('/Teju-Abisoye', [AllProfileController::class, 'teju'])->name('teju');
Route::get('/Michael-Famoroti', [AllProfileController::class, 'micheal'])->name('micheal');
Route::get('/Ronke-Azeez', [AllProfileController::class, 'ronke'])->name('ronke');
Route::get('/Nnamdi-Ezeigbo', [AllProfileController::class, 'nnamdi'])->name('nnamdi');
Route::get('/Olusegun-Alimi', [AllProfileController::class, 'olusegun'])->name('olusegun');
Route::get('/Olaoye-Jaiyeola', [AllProfileController::class, 'jaiyeola'])->name('jaiyeola');


// Newly Added Speakers Jan 28 2022
Route::get('/Adenike-Adeyemi', [AllProfileController::class, 'adenike'])->name('adenike');
Route::get('/Olawale-Rotimi', [AllProfileController::class, 'olawale'])->name('olawale');
Route::get('/Obi-Asika', [AllProfileController::class, 'obi'])->name('obi');
Route::get('/Fade-Ogunro', [AllProfileController::class, 'fade'])->name('fade');
Route::get('/Ify-Umunna', [AllProfileController::class, 'ify'])->name('ify');
Route::get('/Princess-Tekena', [AllProfileController::class, 'princess'])->name('princess');
Route::get('/Ebun-Feludu', [AllProfileController::class, 'ebun'])->name('ebun');

Route::get('/Folashade-Adefisayo', [AllProfileController::class, 'fisayo'])->name('fisayo');
Route::get('/Iyabo-Seriki-Bello', [AllProfileController::class, 'bello'])->name('bello');
Route::get('/Tosin-Faniro-Dada', [AllProfileController::class, 'tosin'])->name('tosin');
Route::get('/Jumoke-Oduwole', [AllProfileController::class, 'jumoke'])->name('jumoke');
Route::get('/Omolara-Adewunmi', [AllProfileController::class, 'omolara'])->name('omolara');
Route::get('/Maria-Glover', [AllProfileController::class, 'maria'])->name('maria');
Route::get('/Henrietta-Onwugbeuzie', [AllProfileController::class, 'henrietta'])->name('henrietta');
Route::get('/Dabeaski-Mac-Ikemejima', [AllProfileController::class, 'obaseki'])->name('obaseki');
Route::get('/Ferris-Sybil', [AllProfileController::class, 'ferris'])->name('ferris');
Route::get('/Joyce-Awosika', [AllProfileController::class, 'joyce'])->name('joyce');

//New Added Feb 14th 2022
Route::get('/Ayokanmi-Ayuba', [AllProfileController::class, 'ayokanmi'])->name('ayokanmi');
Route::get('/Omowale-Ogunrinde', [AllProfileController::class, 'omowale'])->name('omowale');
Route::get('/Tope-Akinwunmi', [AllProfileController::class, 'tope'])->name('tope');
Route::get('/Abosede-George-Ogan', [AllProfileController::class, 'abosede'])->name('abosede');
Route::get('/Hansatu-Adegbite', [AllProfileController::class, 'hansatu'])->name('hansatu');
Route::get('/Ebunoluwa-Feludu', [AllProfileController::class, 'feludu'])->name('feludu');
Route::get('/Olabode-Abikoye', [AllProfileController::class, 'olabode'])->name('olabode');
Route::get('/Khalil-Nur-Khalil', [AllProfileController::class, 'khalil'])->name('khalil');
Route::get('/Massimilliano-Spalazi', [AllProfileController::class, 'jumia'])->name('jumia');
Route::get('/Adenike-Dasola-Oyetunde-Lawal', [AllProfileController::class, 'nike'])->name('nike');
Route::get('/Olawale-Anifowose', [AllProfileController::class, 'anifowose'])->name('anifowose');

//Newly Added Feb 19 2022
Route::get('/Christian-Kaelin', [AllProfileController::class, 'christian'])->name('christian');
Route::get('/Kikelomo-Fola-Ogunniya', [AllProfileController::class, 'kikelomo'])->name('kikelomo');
Route::get('/Adebisi-Sunday-Abayomi', [AllProfileController::class, 'adebisi'])->name('adebisi');
Route::get('/Jussi-Hinkkanen', [AllProfileController::class, 'jussi'])->name('jussi');
Route::get('/Babasola-Alakolaro', [AllProfileController::class, 'babasola'])->name('babasola');
Route::get('/Bode-Roberts', [AllProfileController::class, 'bode'])->name('bode');
Route::get('/Foluke-Jaiyeola', [AllProfileController::class, 'foluke'])->name('foluke');
Route::get('/Olawale-Timothy-Morenikeji', [AllProfileController::class, 'morenikeji'])->name('morenikeji');
Route::get('/Ewoma-Oloye', [AllProfileController::class, 'ewoma'])->name('ewoma');
Route::get('/Chinaza-Onuzo', [AllProfileController::class, 'chinaza'])->name('chinaza');
Route::get('/Ojoma-Ochai', [AllProfileController::class, 'ojoma'])->name('ojoma');
Route::get('/Markus-Wauschkuhn', [AllProfileController::class, 'markus'])->name('markus');
Route::get('/Jody-Adewale', [AllProfileController::class, 'jody'])->name('jody');
Route::get('/Omoyemi-Akerele', [AllProfileController::class, 'omoyemi'])->name('omoyemi');
Route::get('/Solape-Hammond', [AllProfileController::class, 'hammond'])->name('hammond');
Route::get('/Aigboje-Imokhuede', [AllProfileController::class, 'aigboje'])->name('aigboje');
Route::get('/Victor-Akoma-Philips', [AllProfileController::class, 'victor'])->name('victor');
Route::get('/Olufemi-Taiwo', [AllProfileController::class, 'olufemi'])->name('olufemi');

// Newly Added Speakers Feb 20 2022
Route::get('/Adetomi-Soyinka', [AllProfileController::class, 'soyinka'])->name('soyinka');
Route::get('/Fola-Olatunji-David', [AllProfileController::class, 'david'])->name('david');
Route::get('/Yetunde-Arobieke', [AllProfileController::class, 'yetunde'])->name('yetunde');
Route::get('/Omolola-Opaleye', [AllProfileController::class, 'omolola'])->name('omolola');


Route::get('/dashboard', [AllProfileController::class, 'home'])->name('home');



Route::get('/registration-successful', [SuccessController::class, 'success'])->name('success');