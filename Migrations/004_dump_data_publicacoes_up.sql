SET GLOBAL local_infile = 1;

LOAD DATA LOCAL INFILE '/home/morais/Documents/Github/food-blog-tentativa/Anexos/arquivos_CSV/publicacao.csv'
INTO TABLE publicacoes
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;