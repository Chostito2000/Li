// See https://aka.ms/new-console-template for more information
using lin;

Linqueries queries = new Linqueries();

//Imprimir toda la lista de libros
ImprimeValores(queries.TodaLaColeccion());


void ImprimeValores(IEnumerable<Book> listaDeLibros)
{
    Console.WriteLine("{0, -70} {1, 15} {2, 15}", "Titulo", "N. Paginas", "Fecha Publicacion");
    foreach (var item in listaDeLibros)
    {
        Console.WriteLine(
            "{0, -70} {1, 15} {2, 15}",
            item.Title,
            item.PageCount,
            item.PublishedDate
            );
    }
}

CREATE FUNCTION ObtenerNombrePersona
(
    @PersonaID INT -- Agregar un parámetro para especificar la persona
)
RETURNS NVARCHAR(255)
AS
BEGIN
    DECLARE @Resultado NVARCHAR(255);

    -- Obtener el nombre y apellido de la tabla Persona basado en @PersonaID
    SELECT @Resultado = CONCAT(Nombre, ' ', Apellido)
    FROM Personas
    WHERE PersonaID = @PersonaID;

    -- Verificar si se encontraron datos
    IF @Resultado IS NULL
    BEGIN
        -- No se encontraron datos para el @PersonaID proporcionado
        SET @Resultado = 'No se encontraron datos para la persona con ID ' + CAST(@PersonaID AS NVARCHAR(10));
    END

    RETURN @Resultado;
END;
