using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace d02_array
{
    class Program
    {
        static void Main(string[] args)
        {
            DemoArray da = new DemoArray();

            string op;

            //menu
            while (true)
            {
                Console.Clear(); // xoa man hinh
                Console.WriteLine("*** MENU *** ");
                Console.WriteLine("1. Mang 1 chieu (sap xep mang)");
                Console.WriteLine("2. Mang 2 chieu (Cong 2 ma tran)");
                Console.WriteLine("3. Ket thuc");
                Console.Write("Nhap ma so chuc nang [1-3]: ");
                op = Console.ReadLine().Trim();

                switch (op)
                {
                    case "1": da.testIntArray(); break;
                    case "2": da.testArray2D(); break;
                    case "3": return;
                    default:
                        Console.WriteLine("Nhap sai ma so chuc nang !");
                        break;
                }

                Console.ReadKey();
            }
       }
    }



    class DemoArray
    {
        internal void testIntArray()
        {
            int n;
            while (true)
            {
                Console.Write("nhap so phan tu cua mang integer [5-20]: ");
                n = int.Parse(Console.ReadLine().Trim());
                if(n<5 || n > 20)
                {
                    Console.WriteLine("Gia tri nhap ko hop le. Vui long nhap lai !");
                    continue;
                }
                break;
            }

            int[] a = new int[n];  //khai bao mang [a] co n so nguyen

            Random r = new Random(); // khoi tao bo tao so ngau nhien
            for (int i = 0; i < a.Length; i++)
            {
                a[i] = r.Next(0, 100); //tao so nn tu 0-100 va gan cho a[i]
            }

            //in ra day so a[]
            Console.WriteLine("Day so {0}-phan tu: ", n);
            for (int i = 0; i < n; i++)
            {
                Console.Write("{0,5}", a[i]);
            }
            Console.WriteLine();


            //sap xep lai mang a[]
            Array.Sort(a);

            //in ra day so a[] sau khi sap xep
            Console.WriteLine("Day so sau khi sap xep thu tu: ", n);
            for (int i = 0; i < n; i++)
            {
                Console.Write("{0,5}", a[i]);
            }
            Console.WriteLine();


        }


        internal void testArray2D()
        {
            //tao ma tran hinh chu nhat n-dong, m-cot
            int n, m;
            while (true)
            {
                Console.Write("nhap so dong cua ma tran [3-10]: ");
                n = int.Parse(Console.ReadLine().Trim());
                if (n < 3 || n > 10)
                {
                    Console.WriteLine("Gia tri nhap ko hop le. Vui long nhap lai !");
                    continue;
                }
                break;
            }

            while (true)
            {
                Console.Write("nhap so cot cua ma tran [3-10]: ");
                m = int.Parse(Console.ReadLine().Trim());
                if (m < 3 || m > 10)
                {
                    Console.WriteLine("Gia tri nhap ko hop le. Vui long nhap lai !");
                    continue;
                }
                break;
            }

            int[,] a = new int[n, m]; // khai bao ma tran a co n-dong va m-cot
            Random r = new Random();  // khoi tao bo tao so ngau nhien
            for (int i = 0; i < n; i++)
            {
                for (int j = 0; j < m; j++)
                {
                    a[i, j] = r.Next(0, 100); //tao so nn tu 0-100 va gan cho a[i]
                }
            }

            int[,] b = new int[n, m]; // khai bao ma tran b co n-dong va m-cot
           
            for (int i = 0; i < n; i++)
            {
                for (int j = 0; j < m; j++)
                {
                    b[i, j] = r.Next(0, 100); //tao so nn tu 0-100 va gan cho a[i]
                }
            }


            //in ma tran A: n x m 
            Console.WriteLine("\n Ma tran A");
            for (int i = 0; i < n; i++)
            {
                for (int j = 0; j < m; j++)
                {
                    Console.Write(" {0,4}", a[i, j]);
                }
                Console.WriteLine();
            }


            //in ma tran n x m 
            Console.WriteLine("\n Ma tran B ");
            for (int i = 0; i < n; i++)
            {
                for (int j = 0; j < m; j++)
                {
                    Console.Write(" {0,4}", b[i, j]);
                }
                Console.WriteLine();
            }

            //in ma tran tong A+B n x m 
            Console.WriteLine("\n Ma tran Tong");
            for (int i = 0; i < n; i++)
            {
                for (int j = 0; j < m; j++)
                {
                    Console.Write(" {0,4}", a[i, j] + b[i,j]);
                }
                Console.WriteLine();
            }

        }
    }
}
