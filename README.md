# blogs
 
CREATE TABLE Bloggers (
    blogger_id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    file_path VARCHAR(150),
    bio VARCHAR(500),
    num_of_blogs INT(3) NOT NULL
);

CREATE TABLE BlogPosts (
    post_id INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    content VARCHAR(1000) NOT NULL,
    author INT(3) NOT NULL
);