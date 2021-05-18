INSERT INTO artists (id, name) VALUES (1, 'The Beatles');
INSERT INTO artists (id, name) VALUES (2, 'Nirvana');
INSERT INTO artists (id, name) VALUES (3, 'The Beach Boys');
INSERT INTO artists (id, name) VALUES (4, 'Rick Astley');

INSERT INTO genres (id, name) VALUES (1, 'Pop');
INSERT INTO genres (id, name) VALUES (2, 'Blues');
INSERT INTO genres (id, name) VALUES (3, 'Rock');
INSERT INTO genres (id, name) VALUES (4, 'Folk');

INSERT INTO songs (id, title, artist_id) VALUES (1, 'Come Together', 1);
INSERT INTO songs (id, title, artist_id) VALUES (2, 'Smells Like Teen Spirit', 2);
INSERT INTO songs (id, title, artist_id) VALUES (3, 'Good Vibrations', 3);
INSERT INTO songs (id, title, artist_id) VALUES (4, 'Wouldn''t It Be Nice', 3);
INSERT INTO songs (id, title, artist_id) VALUES (5, 'Sloop John B.', 3);
INSERT INTO songs (id, title, artist_id) VALUES (6, 'Come as You Are', 2);
INSERT INTO songs (id, title, artist_id) VALUES (7, 'Yellow Submarine', 1);
INSERT INTO songs (id, title, artist_id) VALUES (8, 'Never Gonna Give You Up', 4);
INSERT INTO songs (id, title, artist_id) VALUES (9, 'Together Forever', 4);
INSERT INTO songs (id, title, artist_id) VALUES (10, 'Eleanor Rigby', 1);

INSERT INTO songs_genres (song_id, genre_id) VALUES (1, 1);
INSERT INTO songs_genres (song_id, genre_id) VALUES (1, 2);
INSERT INTO songs_genres (song_id, genre_id) VALUES (1, 3);
INSERT INTO songs_genres (song_id, genre_id) VALUES (2, 2);
INSERT INTO songs_genres (song_id, genre_id) VALUES (2, 3);
INSERT INTO songs_genres (song_id, genre_id) VALUES (3, 1);
INSERT INTO songs_genres (song_id, genre_id) VALUES (4, 1);
INSERT INTO songs_genres (song_id, genre_id) VALUES (5, 1);
INSERT INTO songs_genres (song_id, genre_id) VALUES (5, 4);
INSERT INTO songs_genres (song_id, genre_id) VALUES (6, 3);
INSERT INTO songs_genres (song_id, genre_id) VALUES (7, 1);
INSERT INTO songs_genres (song_id, genre_id) VALUES (8, 1);
INSERT INTO songs_genres (song_id, genre_id) VALUES (9, 1);
INSERT INTO songs_genres (song_id, genre_id) VALUES (10, 1);
INSERT INTO songs_genres (song_id, genre_id) VALUES (10, 3);
