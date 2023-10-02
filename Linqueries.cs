using System;
using System.Text.Json;

namespace lin;

public class Linqueries
{
    private List<Book> librosCollection = new List<Book>();

    public Linqueries()
    {
        using (StreamReader reader = new StreamReader("books.json"));
        {
            string json = reader.ReadToEnd();
            this.librosCollection = System.Text.Json.JsonSerializer.Deserialize<List<Book>>(
                json,
                new JsonSerializerOptions()
                {
                    PropertyNameCaseInsensitive = true
                }
                );
        }

    }

    public IEnumerable<Book> TodaLaColeccion()
    {
        return librosCollection;
    }
}