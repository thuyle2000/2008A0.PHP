using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d05_interface
{
    public class Product : IDiscount
    {
        public string id, name;
        public int price;

        public float getDiscount()
        {
            return price * 0.1f;
        }

        public void Input()
        {
            Console.WriteLine(" nhap id: ");
            id = Console.ReadLine().Trim();

            Console.WriteLine(" nhap ten san pham: ");
            name = Console.ReadLine().Trim();

            while (true)
            {
                try
                {
                    Console.Write(" nhap don gia: ");
                    price = int.Parse(Console.ReadLine().Trim());
                    if (price >= 0) break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi: " + e.Message);
                }
            }

        }

        public override string ToString()
        {
            return $"id = {id}, ten sp: {name}, don gia: {price}, chiet khau: {getDiscount()}, gia thuc te: {price-getDiscount()}";
        }
    }
}
