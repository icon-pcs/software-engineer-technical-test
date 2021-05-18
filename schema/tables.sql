CREATE TABLE IF NOT EXISTS songs (
    id INTEGER PRIMARY KEY,
    title VARCHAR,
    artist_id INTEGER
);

CREATE TABLE IF NOT EXISTS artists (
    id INTEGER PRIMARY KEY,
    name VARCHAR
);

CREATE TABLE IF NOT EXISTS genres (
    id INTEGER PRIMARY KEY,
    name VARCHAR
);

CREATE TABLE IF NOT EXISTS songs_genres (
    song_id INTEGER,
    genre_id INTEGER
);
