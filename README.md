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


