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