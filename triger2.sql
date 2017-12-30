CREATE TRIGGER diferencia AFTER INSERT ON detalleSalida
    FOR EACH ROW
    	 
    UPDATE Productos SET Existencia = Existencia - new.cantidaSalida where codProducto=new.codProducto;

  
