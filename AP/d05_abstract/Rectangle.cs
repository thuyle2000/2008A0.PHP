using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d05_abstract
{
    public class Rectangle : Shape
    {
        public int width, length;

        public override void input()
        {
            while (true)
            {
                try
                {
                    Console.Write(" Nhap chieu rong HCN: ");
                    width = int.Parse(Console.ReadLine().Trim());
                    if (width > 0) break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi: " + e.Message);
                }
            }

            while (true)
            {
                try
                {
                    Console.Write(" Nhap chieu dai HCN: ");
                    length = int.Parse(Console.ReadLine().Trim());
                    if (length > 0) break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi: " + e.Message);
                }
            }


        }

        public override float area()
        {
            return width * length;
        }

        public override void output()
        {
            Console.WriteLine(" * Hinh chu nhat * ");
            Console.WriteLine($" Dai: {length}, Rong: {width}");
            Console.WriteLine($" Dien tich: {area()}");
            Console.WriteLine($" Chu vi: {periperal()}");
        }

        public override float periperal()
        {
            return (width + length) * 2;
        }
    }
}
