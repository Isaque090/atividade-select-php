
CREATE DATABASE escolas ;
USe escolas;


CREATE TABLE alunos (
cd_aluno INT PRIMARY KEY AUTO_INCREMENT,
nm_aluno VARCHAR(100) NOT NULL,
ds_matricula VARCHAR(20),
ds_email VARCHAR(100)

);

CREATE TABLE professores (
cd_professor INT PRIMARY KEY AUTO_INCREMENT,
nm_professor VARCHAR(100) NOT NULL,
ds_email VARCHAR(100)

);

CREATE TABLE materias (
cd_materia INT PRIMARY KEY AUTO_INCREMENT,
sg_materia VARCHAR(5) NOT NULL,
nm_materia VARCHAR(100) NOT NULL
);



INSERT INTO alunos (nm_aluno, ds_matricula, ds_email) VALUES
('Arthur', '25213', 'arthur.paixao01@aluno.cps.sp.gov.br'),
('Bruna', '25100', 'bpaschotto@gmail.com'),
('Brenno', '25099', 'brenno@gmail.com'),
('Bruno', '25212', 'bruno.conceicao01@aluno.cps.sp.gov.br'),
('Dandara', '25072', 'dandaranavarro2@gmail.com'),
('Davi', '25139', 'davi.araujo12@aluno.cps.sp.gov.br'),
('Giovanna', '25208', 'borgesdesouzasantosgi@gmail.com'),
('Guilherme Café', '25062', 'guizitolevi@gmail.com'),
('Guilherme Guima', '25172', 'guilherme.oliveira142@aluno.cps.sp.gov.br'),
('Gustavo', '25027', 'gustavinhoale15@gmail.com'),
('Isaque', '25242', 'isaquesevero8305@gmail.com'),
('João Lucas', '67607', 'aura@gmail.com'),
('João Victor', '25182', 'joegao121@gmail.com'),
('Kaio', '25056', 'kaionovais27@gmail.com'),
('Karoliny', '26233', 'karoliny.menezess@gmail.com'),
('Levi', '25094', 'levi.antoniassi@gmail.com'),
('Lucas Alonso', '25283', 'lcintra2010@gmail.com'),
('Lucas de Lorena', '25199', 'lucaslorenalima892@gmail.com'),
('Lucas LK', '25093', 'lucas.costa41@aluno.cps.sp.gov.br'),
('Luccas Santos', '25191', 'Luccas.barbosa@aluno.cps.sp.gov.br'),
('Luan', '26213', 'luan.costa4@aluno.cps.sp.gov.br'),
('Marco', '25105', 'marco.pinho@aluno.cps.sp.gov.br'),
('Matheus Higa', '25137', 'matheusrossihigaaa@gmail.com'),
('Matheus Santos', '25048', 'matheus.lima45@aluno.cps.sp.gov.br'),
('Matheus Rocha', '25090', 'matheus.rocha.silva.2010@gmail.com'),
('Matheus Vittoretti Amoroso da Costa', '25185', 'matheus.costa35@aluno.cps.sp.gov.br'),
('Murilo', '26230', 'murilodeoliveirachaga@gmail.com'),
('Nicollas', '25130', 'nicollas.mello01@aluno.cps.sp.gov.br'),
('Pedro', '25200', 'pedro.ribeiro34@aluno.cps.sp.gov.br'),
('Ricard', '25163', 'ricardhenriqu@gmail.com'),
('Talita', '25079', 'talita.oliveira9157@gmail.com'),
('Thiago', '25064', 'thiagodscamilo@gmail.com');

INSERT INTO professores (nm_professor, ds_email) VALUES 
('Claudio', 'Claudio@gmail.com'),
('Augusto', 'Augusto@gmail.com'),
('Celso', 'celso@gmail.com'),
('Dimorie', 'Dimorie@gmail.com'),
('Ivan', 'Ivan@gmail.com'),
('José Adriano', 'JoséAdriano@gmail.com'),
('Júlio César', 'JúlioCesar@gmail.com'),
('Matheus Calixto', 'MatheusCalixto@gmail.com'),
('Meire', 'Meire@gmail.com'),
('Oswaldo', 'Oswald@gmail.com'),
('Patrícia', 'Patríci@gmail.com'),
('Rodrigo', 'Rodrigo@gmail.com'),
('Willians', 'Willians@gmail.com');


INSERT INTO materias (sg_materia, nm_materia) VALUES
('BIO', 'Biologia'),
('ECO', 'Ética e Cidadania Organizacional'),
('EF', 'Educação Física'),
('FIS', 'Física'),
('GEO', 'Geografia'),
('HIS', 'História'),
('ING', 'Inglês'),
('LPL', 'Língua Portuguesa'),
('MAT', 'Matemática'),
('QUI', 'Química'),
('BD 2', 'Banco de Dados 2'),
('DS', 'Desenvolvimento de Sistemas'),
('PAM', 'Programação de Aplicativos Mobile'),
('PW 2', 'Programação Web 2');





SELECT * FROM alunos;
SELECT * FROM professores;
SELECT * FROM materias;
SELECT * FROM professores_materias;
SELECT * FROM alunos_materias;


