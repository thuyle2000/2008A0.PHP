using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d03_method
{
    class Program
    {
        static void Main(string[] args)
        {
            int a, b, c , kq;
            double x1=-1, x2=-1;
            DemoMethod d = new DemoMethod();
            string op = "";
            while (true)
            {
                Console.WriteLine("\n >>  Demo Method  <<");
                Console.WriteLine("1. optional para");
                Console.WriteLine("2. pass-by-value para ");
                Console.WriteLine("3. pass-by-ref (ref) para ");
                Console.WriteLine("4. overloading ");
                Console.WriteLine("5. exit");
                Console.Write(" Plz input function code [1-5]: ");
                op = Console.ReadLine().Trim();

                switch (op)
                {
                    case "1":
                        d.demoOptionPara();
                        d.demoOptionPara("Ms. Dung");
                        break;

                    case "2":
                        Input(out a, out b, out c);

                        kq = d.demoE2(a, b, c, x1, x2);
                        if (kq < 0)
                        {
                            Console.WriteLine(" PT vo nghiem !");
                        }
                        else if (kq == 0)
                        {
                            Console.WriteLine($" PT co nghiem kep, x1=x2 ={x1} !");
                        }
                        else
                        {
                            Console.WriteLine($" PT co nghiem x1={x1}, x2 ={x2} !");
                        }

                        break;


                    case "3":
                        Input(out a, out b, out c);

                        kq = d.demoE2a(a, b, c, ref x1, ref x2);
                        if (kq < 0)
                        {
                            Console.WriteLine(" PT vo nghiem !");
                        }
                        else if (kq == 0)
                        {
                            Console.WriteLine($" PT co nghiem kep, x1=x2={x1} !");
                        }
                        else
                        {
                            Console.WriteLine($" PT co nghiem x1={x1}, x2 ={x2} !");
                        }

                        break;

                    case "4":
                        a = 4; b = 5;
                        string s1 = "Minh", s2 = "Thu"; 

                        Console.WriteLine($" add({a}, {b}) = { d.add(a,b) }" );
                        Console.WriteLine($" add({s1}, {s2}) = { d.add(s1, s2) }");

                        break;

                    case "5":
                        return;
                    default:
                        break;
                }

            }


        }


        static void Input(out int a, out int b, out int c)
        {
            while (true)
            {
                try
                {
                    Console.Write("input a: ");
                    a = int.Parse(Console.ReadLine().Trim());
                    break;
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
                    Console.Write("input b: ");
                    b = int.Parse(Console.ReadLine().Trim());
                    break;
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
                    Console.Write("input c: ");
                    c = int.Parse(Console.ReadLine().Trim());
                    break;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Loi: " + e.Message);
                }
            }

        }
    }

    class DemoMethod
    {
        //bo tu default: private 
        internal void demoOptionPara(string msg="Mr Hau.")
        {
            //Console.WriteLine("Hello {0} !", msg);
            Console.WriteLine($"Hello {msg} !");
        }

        /* Giai PT Bac 2 : ax2+bx+c = 0, ket qua (delta =b*b -4ac)
         *  - PT vo nghiem,     delta <0
         *  - PT co nghiem kep, delta =0 => x1=x2 = -b/2a
         *  - PT co 2 nghiem,   delta >0 => x1=-b-can(delta)/2a va x2=-b+can(delta)/2a
         */

        /* Case 1: truyen tham so theo pp truyen gia tri (default)
         */
        internal int demoE2(int a, int b, int c, double x1, double x2)
        {
            int r = 1;
            double delta = b * b - 4 * a * c;
            if (delta < 0)
            {
                r = -1;
            }
            else if (delta==0)
            {
                x1 = x2 = -b / (2.0 * a);
                r = 0;
            }
            else
            {
                delta = Math.Sqrt(delta);
                x1 = (-b - delta) / (2 * a);
                x2 = (-b + delta) / (2 * a);
            }
            return r;
        }

        /* Case 2: truyen tham so theo pp truyen dia chi tham chieu ref 
         */
        internal int demoE2a(int a, int b, int c, ref double x1, ref double x2)
        {
            int r = 1;
            double delta = b * b - 4 * a * c;
            if (delta < 0)
            {
                r = -1;
            }
            else if (delta == 0)
            {
                x1 = x2 = -b / (2.0 * a);
                r = 0;
            }
            else
            {
                delta = Math.Sqrt(delta);
                x1 = (-b - delta) / (2 * a);
                x2 = (-b + delta) / (2 * a);
            }
            return r;
        }


        /* method overloading add(int, int )*/
        internal int add(int a, int b)
        {
            return a * a + b * b;
        }

        /* method overloading add(string, string)*/
        internal string add(string a, string b)
        {
            return "Hello, " + a +" "+ b;
        }
    }
}
