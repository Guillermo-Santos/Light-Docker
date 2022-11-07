CREATE TABLE Folders(
Id VARCHAR(15),
Descripcion VARCHAR(45),
ShortDesc VARCHAR(15),
Parent VARCHAR(15)
);


INSERT INTO Folders (Id,Descripcion,ShortDesc,Parent)
 VALUES('MASTER_FOLDER','Folder Maestro','Maestro', '')
 ,('UTILITIES','Folder de utilieria','Utileria', 'TOOLS')
 ,('TOOLS','Folder de herramientas','Herramientas', 'MASTER_FOLDER')
 ,('TASKS','Folder de tareas','Tareas', 'MASTER_FOLDER');