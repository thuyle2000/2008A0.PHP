using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d02_statements
{
    class DemoLoop
    {
        internal void testFOR()
        {
            Console.Write("nhap 1 so nguyen N >=0: ");
            int n = int.Parse(Console.ReadLine().Trim());

            long fac = 1;
            for(int i=1; i<=n; i++)
            {
                fac *= i;
            }

            Console.WriteLine(">> {0}! = {1}", n, fac);
        }


        internal void testWHILE()
        {
            int n;

            while (true)
            {
                Console.Write("nhap 1 so nguyen N [0-30] : ");
                n = int.Parse(Console.ReadLine().Trim());
                if (n >= 0 && n <= 30) break; // ket thuc vong lap
            }


            long fac = 1;
            for (int i = 1; i <= n; i++)
            {
                fac *= i;
            }

            Console.WriteLine(">> {0}! = {1}", n, fac);
        }


        internal void testFOREACH()
        {
            string[] ds = {"Nhan", "Thang", "Thinh", "Dung","Thien","Hau", "Toan" };
            Console.WriteLine("Danh sach sinh vien");

            foreach (var item in ds)
            {
                Console.WriteLine(item);
            }
        }
    }
}
