using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d06_delegate_event
{
    //dinh nghia 1 delegate ten DMath, co 2 tham so kieu nguyen, va kieu return cung la so nguyen
    public delegate int DMath(int a, int b);

    public class DemoDelegate
    {
        public int add(int a, int b)
        {
            Console.WriteLine($"{a} + {b} = {a+b}");
            return a + b;

        }

        public int sub(int a, int b)
        {
            Console.WriteLine($"{a} - {b} = {a - b}");
            return a - b;
        }
        public static int addSquare(int a, int b)
        {
            Console.WriteLine($"{a}*{a} + {b}*{b} = {a*a + b*b}");
            return a * a + b * b;
        }

        public void test()
        {
            Console.Write("nhap so nguyen thu 1: ");
            int n1 = int.Parse(Console.ReadLine().Trim());

            Console.Write("nhap so nguyen thu 2: ");
            int n2 = int.Parse(Console.ReadLine().Trim());

            //tao 1 doi tuong DMath, chua dia chi ham add()
            DMath ma = add;
            Console.WriteLine("\n Test case 1: ");
            ma(n1 , n2);
        

            //bo sung them dc ham sub() va addSquare() cho delegate ma
            ma += sub;
            ma += addSquare;
            Console.WriteLine("\n Test case 2:");
            ma(n1, n2);

        }
    }
}
