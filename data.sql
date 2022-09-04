CREATE TABLE post (

    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(80) NOT NULL,
    descriptionPost varchar(40) NOT NULL,
    imagenLink varchar(256),
    content varchar(25000) NOT NULL,
    videoLink varchar(256),
    PRIMARY KEY (id)
);