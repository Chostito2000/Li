using System;
using System.Collections.Generic;
using System.Linq;

class Program
{
    public static void Main(string[] args)
    {
        List<Animal> animales = new List<Animal>();
        animales.Add(new Animal() { Nombre = "Hormiga", Color = "Rojo" });
        animales.Add(new Animal() { Nombre = "Lobo", Color = "gris" });
        animales.Add(new Animal() { Nombre = "Elefante", Color = "gris" });
        animales.Add(new Animal() { Nombre = "Pantera", Color = "negro" });
        animales.Add(new Animal() { Nombre = "Gato", Color = "negro" });
        animales.Add(new Animal() { Nombre = "Iguana", Color = "verde" });
        animales.Add(new Animal() { Nombre = "Sapo", Color = "verde" });
        animales.Add(new Animal() { Nombre = "Camaleon", Color = "verde" });
        animales.Add(new Animal() { Nombre = "Gallina", Color = "blanco" });

        var animalesOrdenadosAlfabeticamente = animales.OrderBy(animal => animal.Nombre).ToList();

        Console.WriteLine("Animales ordenados alfabéticamente por Nombre:");
        foreach (var animal in animalesOrdenadosAlfabeticamente)
        {
            Console.WriteLine($"Nombre: {animal.Nombre}, Color: {animal.Color}");
        }
        Console.WriteLine("-------------------------------");
        Console.WriteLine("att. Flores Gonzales Brayan Wilson");
    }
    public class Animal
    {
        public string Nombre { get; set; }
        public string Color { get; set; }
    }
}
