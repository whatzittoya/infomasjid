<?php
// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('masjid', function ($trail) {
    $trail->parent('home');
    $trail->push('Masjid', route('masjid.index'));
});
Breadcrumbs::for('kategori', function ($trail) {
    $trail->parent('home');
    $trail->push('Kategori', route('kategori.index'));
});
Breadcrumbs::for('add_kategori', function ($trail) {
    $trail->parent('kategori');
    $trail->push('Tambah Kategori', route('kategori.create'));
});
Breadcrumbs::for('edit_kategori', function ($trail, $kategori) {
    $trail->parent('kategori');
    $trail->push('Ubaah Kategori', route('kategori.edit', $kategori->kategory_id));
});
Breadcrumbs::for('edit_masjid', function ($trail, $masjid) {
    $trail->parent('masjid');
    $trail->push('Ubah Masjid', route('masjid.index', $masjid->masjid_id));
});

Breadcrumbs::for('new_masjid', function ($trail) {
    $trail->parent('masjid');
    $trail->push('Tambah Masjid', route('masjid.create'));
});
Breadcrumbs::for('takmir_masjid', function ($trail) {
    $trail->parent('home');
    $trail->push('Masjid', route('takmir_masjid'));
});
Breadcrumbs::for('takmir_edit_masjid', function ($trail) {
    $trail->parent('takmir_masjid');
    $trail->push('Ubah Masjid', route('takmir_edit_masjid'));
});

Breadcrumbs::for('takmir_berita', function ($trail) {
    $trail->parent('home');
    $trail->push('Berita', route('berita.index'));
});
Breadcrumbs::for('takmir_new_berita', function ($trail) {
    $trail->parent('takmir_berita');
    $trail->push('Tambah Berita', route('berita.create'));
});

Breadcrumbs::for('takmir_view_berita', function ($trail, $berita) {
    $trail->parent('takmir_berita');
    $trail->push('Lihat Berita', route('berita.show', $berita->masjid_id));
});
Breadcrumbs::for('admin_berita', function ($trail) {
    $trail->parent('home');
    $trail->push('Berita', route('beritaall.index'));
});


Breadcrumbs::for('admin_view_berita', function ($trail, $berita) {
    $trail->parent('admin_berita');
    $trail->push('Lihat Berita', route('beritaall.show', $berita->masjid_id));
});
