using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d05_abstract
{
    public class CIrcle:Shape
    {
        const float PI = 3.1415f;
        public int r;

        public override float area()
        {
            return PI * r * r;
        }

        public override void input()
        {
            while (true)
            {
                try
                {
                    Console.Write(" Nhap ban kinh Hinh tron: ");
                    r = int.Parse(Console.ReadLine().Trim());
                    if (r > 0) break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi: " + e.Message);
                }
            }



        }

        public override void output()
        {
            Console.WriteLine(" * Hinh tron * ");
            Console.WriteLine($" Ban kinh: {r}");
            Console.WriteLine($" Dien tich: {area()}");
            Console.WriteLine($" Chu vi: {periperal()}");
        }

        public override float periperal()
        {
            return 2 * PI * r;
        }
    }
}
