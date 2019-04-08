CREATE TABLE "User" (
    user_id    INTEGER NOT NULL,
    username   VARCHAR(100),
    password   VARCHAR(100),
    email      VARCHAR(100)
);

ALTER TABLE "User" ADD CONSTRAINT user_pk PRIMARY KEY ( user_id );
CREATE TABLE playlist (
    playlist_name   VARCHAR(100),
    playlist_id     INTEGER NOT NULL,
    user_id    INTEGER NOT NULL
);

ALTER TABLE playlist ADD CONSTRAINT playlist_pk PRIMARY KEY ( playlist_id );

ALTER TABLE playlist
    ADD CONSTRAINT playlist_user_fk FOREIGN KEY ( user_id )
        REFERENCES "User" ( user_id );
CREATE TABLE song (
    song_id   INTEGER NOT NULL,
    title     VARCHAR(100),
    genre     VARCHAR(100)
);

ALTER TABLE song ADD CONSTRAINT song_pk PRIMARY KEY ( song_id );

CREATE TABLE plays (
    user_id   INTEGER NOT NULL,
    song_id   INTEGER NOT NULL
);

ALTER TABLE plays
    ADD CONSTRAINT plays_song_fk FOREIGN KEY ( song_id )
        REFERENCES song ( song_id );

ALTER TABLE plays
    ADD CONSTRAINT plays_user_fk FOREIGN KEY ( user_id )
        REFERENCES "User" ( user_id );
        
CREATE TABLE has (
    playlist_id   INTEGER NOT NULL,
    song_id           INTEGER NOT NULL
);

ALTER TABLE has
    ADD CONSTRAINT has_playlist_fk FOREIGN KEY ( playlist_id )
        REFERENCES playlist ( playlist_id );

ALTER TABLE has
    ADD CONSTRAINT has_song_fk FOREIGN KEY ( song_id )
        REFERENCES song ( song_id );