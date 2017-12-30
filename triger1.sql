CREATE TRIGGER stock AFTER INSERT ON detalleEntradas
    FOR EACH ROW
    	 
        UPDATE Productos SET Existencia = Existencia + new.Cantidad where     								           		codProducto=new.codProducto;

  
