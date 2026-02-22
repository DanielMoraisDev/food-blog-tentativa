SET GLOBAL local_infile = 1;

LOAD DATA LOCAL INFILE '/home/morais/Documents/Github/food-blog-tentativa/Anexos/arquivos_CSV/empresa.csv'
INTO TABLE empresas
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;