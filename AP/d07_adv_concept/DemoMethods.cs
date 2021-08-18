using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d07_adv_concept
{
    //dinh nghia 1 delegate co 1 doi so int va tra ve 1 so long int
    public delegate long DCasio(int n);
    public class DemoMethods
    {
        internal void demo_anonymous_method()
        {
            DCasio m = delegate (int n)
            {
                long r = 1;

                for (int i = 1; i <=n; i++)
                {
                    r *= i;
                }
                return r;
            };


            Console.Write(" nhap 1 so nguyen duong bat ky : ");
            int x = int.Parse(Console.ReadLine().Trim());

            //tinh va in ra giai thua cua x
            Console.WriteLine($" {x}! = {m(x)}. ");
        }
    }

    public static class DemoExtension
    {
        public static string FirstUpperCase(this string s)
        {
            string kq = "";
            if (s.Length > 0)
            {
                char[] a = s.ToCharArray();
                a[0] = char.ToUpper(a[0]);

                kq = new string(a);
            }
            return kq;
        }
    }
}
