# WordPress Themes Kickstart

Kickstart untuk kerangka pengembangan WordPress themes dilengkapi dengan:

- [ ] Twitter Bootstrap 4 
- [ ] Editorconfig
- [ ] PHP_Codesniffer
- [ ] JQuery dan Popper.js sebagai peer dependency bootstrap
- [ ] Laravel-mix, webpack wrapper sass dan js
- [ ] Javascript bootstrap `scripts/app.js`
- [ ] Fontawesome 5
- [ ] Boilerplate direktori

## Themes Development

### Bootstrap SCSS Theming

Theming bootstrap dilakukan via `styles/_variables.scss` yang diimport oleh `style.scss`. Untuk mengupdate asset dalam fase development silahkan gunakan script `watch` yang disediakan oleh `laravel-mix`

### Build dan Watch

```bash
$ npm run dev
$ npm watch-poll
```

### File Asset

Berikut adalah file asset untuk pengembangan lebih lanjut;

- `style.scss` merupakan bootstrapper untuk pengembangan css, termasuk theming Bootstrap
- `scripts/_meta.scss` meta untuk WordPress theme
- `scripts/_variables.scss` variable scss untuk melakukan theming bootstrap
- `scripts/_swatch.scss` scss spesifik untuk themes yang sedang kita kembangkan
- `scripts/_varsample.scss` contoh variabel bootstrap, dikopi dari module bootstrap4
- `scripts/app.js` entry point javascript yang memanggil dan mendefinisikan semua logic dan modul javascript yang ingin kita gunakan
- `webpack.mix.js` file konfigurasi laravel-mix
- `functions.php` standard function untuk WordPress 
- `parts/*` direktori untuk meletakkan partial template seperti navbar, footer dan search form

## Menggunakan Kickstart

Clone repositori

```bash
$ git clone https://github.com/tajidyakub/wordpress-themes-kickstart.git folder-themes
```

Install dependency dan Kompilasi asset untuk pertama kali

```bash
$ cd folder-themes/
$ npm i
$ npm run dev
```
